<?php

use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// PasswordController
Route::controller(PasswordController::class)->middleware('auth')->group(function () {
    Route::get('/newPassword', 'newPassword')->name('newPassword');
    Route::post('/newPassword/save', 'newPasswordStore')->name('newPasswordStore');
});
