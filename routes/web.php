<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\Posts\TestController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\MyLogMiddleware;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'welcome')->name('home');

Route::redirect('/home', '/')->name('home.redirect');

// Контроллер может быть без метода, тогда используйте магический метод __invoke
Route::get('/test', TestController::class)->name('test')->middleware('guest');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'store'])->name('login.store');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');

//Route::get('/login/{user}/confirmation', [loginController::class, 'confirmation'])->name('login.confirmation');
//Route::post('/login/{user}/confirm', [loginController::class, 'confirm'])->name('login.confirm');

Route::resource('/posts/{post}/comments', CommentController::class)->only(['index', 'show']);

//Route::fallback(function () {
//    return 'Page not found (fallback)';
//});
