<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BrochureController;

Route::get('/missions', function () {
    return redirect('/#missions');
})->name('missions');

Route::get('/contact', function () {
    return redirect('/#contact');
})->name('contact');

Route::get('/solutions', function () {
    return redirect('/#solutions');
})->name('solutions');

Route::get('/actions', function () {
    return redirect('/#actions');
})->name('actions');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/download/brochure', [BrochureController::class, 'download'])->name('download.brochure');
