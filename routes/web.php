<?php

use App\Http\Controllers\ElevesController;
use App\Http\Controllers\ParentsController;
use App\Http\Middleware\AuthenticatedParentMiddleware;
use App\Http\Middleware\VerifyParentOwner;
use Illuminate\Support\Facades\Route;

Route::controller(ParentsController::class)->middleware([AuthenticatedParentMiddleware::class])->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});

Route::controller(ElevesController::class)->middleware([AuthenticatedParentMiddleware::class, VerifyParentOwner::class])->group(function () {
    Route::get('/details-eleve/{id}', 'detailsEleve')->name('details.eleve');
    Route::post('/details-eleve/info-eleve/{id}', 'infoEleve')->name('info.eleve');
    Route::post('/details-eleve/absence/{id}/{matricule}', 'absenceEleve')->name('details.eleve.absence');
    Route::post('/details-eleve/note/{id}', 'noteEleve')->name('details.eleve.note');
});
require __DIR__.'/auth.php';
