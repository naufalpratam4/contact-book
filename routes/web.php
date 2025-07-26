<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.loginPage');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware(['auth'])->group(function(){
    Route::get('/', [ContactController::class, 'dashboardContact']);
});