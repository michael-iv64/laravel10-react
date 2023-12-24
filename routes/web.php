<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CDocumentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/edit/{id}', [CDocumentController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [CDocumentController::class, 'update'])->name('update');
    Route::get('/c-user-documents/{cUserId}', [CDocumentController::class, 'cUserDocuments'])->name('c-user-documents');
    Route::get('/c-users', [CDocumentController::class, 'cUsers'])->name('c-users');
    Route::get('/updated-document/{id}', [CDocumentController::class, 'updatedDocument'])->name('updated-document');
    Route::delete('/delete-document/{id}', [CDocumentController::class, 'delDocument'])->name('delete-document');

});


require __DIR__.'/auth.php';
