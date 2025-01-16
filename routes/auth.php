<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Middleware\CheckPhoneMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Redirection de '/' vers '/login'
Route::redirect('/', '/login');
// Route pour afficher la page de connexion
Route::view('/login', 'ui.auth.login')->name('login');

Route::post('/login', [AuthController::class, 'login'])->middleware([CheckPhoneMiddleware::class]);
Route::get('/change-password', function (Request $request) {
    $phone = $request->query('phone');
    return view('ui.auth.change-password', compact('phone'));
})->name('change-password');

Route::post('/change-password', [AuthController::class, 'changePassword']);
