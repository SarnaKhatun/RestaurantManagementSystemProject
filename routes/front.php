<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\BookTableController;

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/menu-details/{id}', [HomeController::class, 'details'])->name('menu.details');
Route::get('/special-details/{id}', [HomeController::class, 'specialDetails'])->name('special.details');
Route::post('/book-add', [BookTableController::class, 'add'])->name('book.add');

Route::get('/show-menu', [HomeController::class, 'showMenu'])->name('show-menu');
Route::get('/show-special', [HomeController::class, 'showSpecial'])->name('show-special');
Route::get('/show-chef', [HomeController::class, 'showChef'])->name('show-chef');
Route::get('/show-event', [HomeController::class, 'showEvent'])->name('show-event');
Route::get('/show-gallery', [HomeController::class, 'showGallery'])->name('show-gallery');


