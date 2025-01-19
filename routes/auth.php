<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Middleware\AuthenticatedParentMiddleware;
use App\Http\Middleware\CheckPhoneMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Redirection de '/' vers '/login'
Route::redirect('/', '/login');
// Route pour afficher la page de connexion
Route::view('/login', 'ui.auth.login')->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'login'])->middleware([CheckPhoneMiddleware::class]);
Route::get('/change-password', [AuthController::class, 'changePassword'])->name('change-password');
Route::post('/change-password/save', [AuthController::class, 'savePassword'])->name('change-password.save');
