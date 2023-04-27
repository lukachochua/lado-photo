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
    Route::get('/admin/posts/create', [AdminPostController::class, 'create'])->name('post.create');
    Route::post('/admin/posts/create', [AdminPostController::class, 'store'])->name('posts.store');
    Route::delete('/posts/{post}', [AdminPostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/posts/{post}/edit', [AdminPostController::class, 'edit'])->name('posts.edit');
    Route::patch('/posts/{post}', [AdminPostController::class, 'update'])->name('posts.update');
    Route::get('/admin/gallery', [AdminPostController::class, 'show'])->name('gallery');
});


Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
