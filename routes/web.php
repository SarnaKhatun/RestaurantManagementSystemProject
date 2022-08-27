<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\HomeController;

use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Admin\SliderController;

use App\Http\Controllers\Admin\MenuCategoryController;

use App\Http\Controllers\Admin\MenuController;

use App\Http\Controllers\Admin\SpecialCategoryController;

use App\Http\Controllers\Admin\SpecialController;

use App\Http\Controllers\Admin\EventController;

use App\Http\Controllers\Admin\BookTableController;





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::middleware('is_admin')->group(function () {
        Route::resource('users', UserController::class);

        Route::get('/users-change-status/{id}', [AdminController::class, 'userChangeStatus'])->name('users.change-status');
        Route::get('/sliders-change-status/{id}', [AdminController::class, 'sliderChangeStatus'])->name('sliders.change-status');
        Route::get('/menuCategory-category-change-status/{id}', [AdminController::class, 'menuCategoryChangeStatus'])->name('menuCategories.change-status');
        Route::get('/menu-change-status/{id}', [AdminController::class, 'menuChangeStatus'])->name('menus.change-status');
        Route::get('/specialCategory-change-status/{id}', [AdminController::class, 'specialCategoryChangeStatus'])->name('specialCategories.changeStatus');
        Route::get('/special-change-status/{id}', [AdminController::class, 'specialChangeStatus'])->name('specials.change-status');
        Route::get('/event-status/{id}', [AdminController::class, 'statusEvent'])->name('status.event');
        Route::get('/booking-status/{id}', [AdminController::class, 'bookingStatus'])->name('booking.status');


        Route::resource('sliders', SliderController::class);

        Route::resource('menuCategories', MenuCategoryController::class);

        Route::resource('menus', MenuController::class);

        Route::resource('specialCategories', SpecialCategoryController::class);

        Route::resource('specials', SpecialController::class);

        Route::get('/event-add', [EventController::class, 'add'])->name('event.add');
        Route::post('/event-new', [EventController::class, 'newEvent'])->name('new-event');
        Route::get('/event-manage', [EventController::class, 'manage'])->name('event.manage');
        Route::get('/event-edit/{id}', [EventController::class, 'editEvent'])->name('edit.event');
        Route::post('/event-update/{id}', [EventController::class, 'updateEvent'])->name('update-event');
        Route::get('/event-delete/{id}', [EventController::class, 'deleteEvent'])->name('delete.event');



        Route::get('/book-manage', [BookTableController::class, 'manage'])->name('book.manage');
        Route::get('/book-delete/{id}', [BookTableController::class, 'delete'])->name('delete.book');
    });

    Route::middleware('is_all')->group(function () {
        Route::get('/edit-profile', [DashboardController::class, 'editProfile'])->name('edit.profile');
        Route::post('/update-profile', [DashboardController::class, 'updateProfile'])->name('update.profile');
    });



});
