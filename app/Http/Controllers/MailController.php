<?php

namespace App\Http\Controllers;

use App\Mail\SignUp;
// use App\Models\Mail;
use App\Models\CUsers;
use Illuminate\Http\Request;
use App\Mail\ContentChanging;
use App\Mail\DocumentChanged;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail($email, $mailContent)
    {
        Mail::to($email)->send(new DocumentChanged($mailContent));
    }
}
