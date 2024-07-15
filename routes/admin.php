<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('admin.posts');
    Route::get('/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'delete'])->name('admin.posts.delete');
    Route::put('/posts/{post}/like', [PostController::class, 'like'])->name('admin.posts.like');
    //Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')->whereNumber('post');
    //Route::resource('/posts', PostController::class);
    // Только
    //Route::resource('/posts', PostController::class)->only(['index', 'create', 'store']);
    // Исключить
    //Route::resource('/posts', PostController::class)->except(['index', 'create', 'store']);
    //Route::resource('/posts/{post}/comments', CommentController::class);
});
