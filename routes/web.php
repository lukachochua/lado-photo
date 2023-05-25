<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/portfolio', [PostController::class, 'portfolio'])->name('portfolio');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/admin', [AdminPostController::class, 'index'])->name('admin');

Route::middleware('admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('index');
});

Route::get('admin/slider', [SliderController::class, 'show'])->name('admin.slider')->middleware('admin');
Route::get('admin/slider/gallery', [SliderController::class, 'slidergallery'])->name('admin.slidergallery')->middleware('admin');
Route::post('admin/slider/store', [SliderController::class, 'store'])->name('slider.store')->middleware('admin');
Route::delete('admin/slider/{slider}', [SliderController::class, 'destroy'])->name('slider.destroy')->middleware('admin');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
