<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Posts\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

//Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')->whereNumber('post');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'delete'])->name('posts.delete');

//Route::resource('/posts', PostController::class);

// Только
//Route::resource('/posts', PostController::class)->only(['index', 'create', 'store']);
// Исключить
//Route::resource('/posts', PostController::class)->except(['index', 'create', 'store']);

Route::put('/posts/{post}/like', [PostController::class, 'like'])->name('posts.like');

Route::resource('/posts/{post}/comments', CommentController::class);

Route::fallback(function () {
    return 'Page not found (fallback)';
});
