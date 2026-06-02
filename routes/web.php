<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\{DomSluziebUserController};
use App\Http\Controllers\Admin\{AuthController, DomSluziebController};

//heslo:DomSluziebJeSuper1_3_2026


Route::get('/', [DomSluziebUserController::class, 'index'])->name('home');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/privacy', function () {
    return view('info.privacy');
});

Route::get('/terms', function () {
    return view('info.terms');
});

Route::post('/contact', [DomSluziebUserController::class, 'contact_send'])->name('contact.send');

Route::get('/floor/{building}/{floor}', [DomSluziebUserController::class, 'showFloor']);

Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login')->middleware('guest');

Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');

Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');




Route::middleware('auth')->group(function(){
    Route::get('/admin/dashboard',[DomSluziebController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/building/{building}/floors', [DomSluziebController::class, 'show_floors'])
    ->name('admin.building.floors');

    Route::post('/admin/floor/store', [DomSluziebController::class, 'store_floor'])
    ->name('admin.floor.store');

    Route::post('/admin/apartment/store', [DomSluziebController::class, 'storeApartment'])
    ->name('admin.apartment.store');

    Route::put('/admin/apartment/{apartment}', [DomSluziebController::class, 'updateApartment'])
    ->name('admin.apartment.update');
});
