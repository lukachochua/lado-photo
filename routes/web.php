<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index']);
Route::get('/photos', [PostController::class, 'photos'])->name('photos');
Route::get('/categories/{category:slug}', [PostController::class, 'show'])->name('categories.show');
Route::get('/videos', [PostController::class, 'video'])->name('videos');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/admin', [AdminPostController::class, 'index']);

Route::middleware('admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('index');
});


Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
