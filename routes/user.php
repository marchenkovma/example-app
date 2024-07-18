<?php

use App\Http\Controllers\User\PostController;
use Illuminate\Support\Facades\Route;

//Route::prefix('/user')->as('user.')->group(function () {
//Route::prefix('/user')->name('user.')->group(function ()

Route::prefix('/user')->middleware('auth')->group(function () {
    Route::redirect('/', '/user/posts')->name('user');
    Route::get('/posts', [PostController::class, 'index'])->name('user.posts');
    Route::get('/posts/create', [PostController::class, 'create'])->name('user.posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('user.posts.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('user.posts.show');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('user.posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('user.posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'delete'])->name('user.posts.delete');
    Route::put('/posts/{post}/like', [PostController::class, 'like'])->name('user.posts.like');

    //Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')->whereNumber('post');

    //Route::resource('/posts', PostController::class);

    // Только
    //Route::resource('/posts', PostController::class)->only(['index', 'create', 'store']);

    // Исключить
    //Route::resource('/posts', PostController::class)->except(['index', 'create', 'store']);

    //Route::resource('/posts/{post}/comments', CommentController::class);
});
