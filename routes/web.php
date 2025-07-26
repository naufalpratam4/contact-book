<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.loginPage');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware(['auth'])->group(function () {
    Route::get('/', [ContactController::class, 'dashboardContact']);
    Route::get('/detail-contact/{id}', [ContactController::class, 'detailContact'])->name('detail.contact');
    Route::get('/detail-contact/about/{id}', [ContactController::class, 'aboutContact'])->name('about.contact');
    Route::get('/create-contact', [ContactController::class, 'viewCreateContact']);
    Route::post('/create-contact', [ContactController::class, 'createContact'])->name('create.contact');

    Route::get('/update-contact/{id}', [ContactController::class, 'viewUpdateContact'])->name('view.update.contact');
    Route::post('/update-contact/{id}', [ContactController::class, 'updateContact'])->name('update.contact');

    Route::delete('/delete-contact/{id}', [ContactController::class, 'deleteContact'])->name('delete.contact');
});
