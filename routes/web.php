<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DecryptController;

Route::get('/', function () {
    return view('welcome');
});

/*
TEST ROUTE
*/
Route::post('/tes', function () {
    dd("POST WORKS");
});


Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/upload', [DocumentController::class, 'index'])
        ->name('upload.form');

    Route::post('/upload', [DocumentController::class, 'store'])
        ->name('upload.store');

    Route::get('/download/{id}',
        [DocumentController::class, 'downloadEncrypted'])
        ->name('document.download');

    Route::get('/stego/{id}',
        [DocumentController::class, 'viewStegoImage'])
        ->name('document.stego');

    Route::get('/download-stego/{id}',
        [DocumentController::class, 'downloadStegoImage'])
        ->name('document.download.stego');

    Route::delete('/document/{id}',
        [DocumentController::class, 'deleteDocument'])
        ->name('document.delete');

    Route::get('/decrypt',
        [DecryptController::class, 'index'])
        ->name('decrypt.form');

    Route::post('/decrypt',
        [DecryptController::class, 'decrypt'])
        ->name('decrypt.process');

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';
