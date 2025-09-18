<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'landing'])->name('landing');
Route::get('/catalog', [PageController::class, 'catalog'])->name('catalog');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');



