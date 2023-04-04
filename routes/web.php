<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


Route::get('/admin', [PostController::class, 'index']);
Route::get('/admin/posts/create', [PostController::class, 'create'])->middleware('auth');
Route::post('/admin/posts/create', [PostController::class, 'store'])->name('posts.store')->middleware('auth');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::get('/admin/gallery', [PostController::class, 'show']);


Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
