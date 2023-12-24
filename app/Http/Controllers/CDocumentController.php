<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\CUsers;
use App\Models\CDocuments;
use Illuminate\Http\Request;


use App\Models\CUsersDocuments;
use App\Models\CUpdatedDocuments;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class CDocumentController extends Controller
{
    public function edit($id) 
    {

        $document = CDocuments:: where('id',$id)->first();

            return Inertia::render('CUsers/Edit',
            [ 
                'document' =>  $document 
            ]
        );
    }
    public function update(Request $request)
    {

        $document = CDocuments::where('id', $request->id)->first();

        $data = [
            'name' => $request->name,
            'content' => $request->content
        ];

        $oldData = [
            'document_id' => $document->id ,
            'name' => $document->name,
            'content' => $document->content,
        ];

        $document->update($data);

        CUpdatedDocuments::create($oldData);

        $requiredCUsers = CUsersDocuments::where('document_id', $document->id)->get();

        $userMail = null;

        foreach($requiredCUsers as $user){

            $user = $this->getUser($user['user_id']);
            $userMail = $user->email;
            $userName = $user->fullname;

            $mailContent = [
                'fullname' => $userName,
                'link' => url('/updated-document/'.$request->id),
                'name' => $oldData['name'],
                'action' => 'изменен'
            ];

            (new MailController)->sendMail($userMail, $mailContent);
        }

        return redirect('/c-users');
    }

    public function delDocument(Request $request)
    {

        $document = CDocuments::where('id', $request->id)->first();

        $oldData = [
            'document_id' => $document->id ,
            'name' => $document->name,
            'content' => $document->content,
        ];
        
        CUpdatedDocuments::create($oldData);
        
        $requiredCUsers = CUsersDocuments::where('document_id', $document->id)->get();
        
        $userMail = null;
        
        foreach($requiredCUsers as $user){
            
            $user = $this->getUser($user['user_id']);
            $userMail = $user->email;
            $userName = $user->fullname;
            
            $mailContent = [
                'fullname' => $userName,
                'link' => url('/updated-document/'.$request->id),
                'name' => $oldData['name'],
                'action' => 'удален'
            ];
            
            (new MailController)->sendMail($userMail, $mailContent);
        }
        $document->delete();

        return redirect('updated-document/'.$request->id);
    }

    function getUser($userId)
    {
        $user= cUsers::findOrFail($userId);
        return $user;
    }
    
    public function cUserDocuments($CUserId)
    {
        $cUser = CUsers::findOrFail($CUserId);
        $documentsId = CUsersDocuments::where('user_id', $CUserId)
        ->select(['document_id'])->get();

        $docIds = [];
        foreach($documentsId as $id){
            $docIds[] = $id['document_id'];
        }
        $documents = CDocuments:: whereIn('id', $docIds)->get();

        return 
        [
            'documents' => $documents, 
            'fullname' => $cUser->fullname,
            'cusersDocumentsId' => $docIds
        ]; 
    }

    public function cUsers()
    {
        $cUsers = CUsers::all();
        return Inertia::render('CUsers/AllCUserDocuments', [ 'cUsers' => $cUsers ]); 
    }

    public function updatedDocument($id)
    {
        $document = CUpdatedDocuments::where('document_id', $id)->latest()->first();
        return Inertia::render('CUsers/UpdatedDocument', ['document' => $document]); 

    }
}
