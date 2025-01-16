<?php

use App\Http\Controllers\ParentsController;
use Illuminate\Support\Facades\Route;

Route::middleware([AuthenticatedParentMiddleware::class])->group(function () {
    Route::get('/dashboard', [ParentsController::class, 'dashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';
