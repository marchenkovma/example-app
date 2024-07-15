<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{
    public function index()
    {
        return 'Posts in the blog';
    }

    public function show($post)
    {
        //return "One post in the blog: {$post}";
        return Route::is('blog');
    }

    public function like($post)
    {
        return "Like a post: {$post}";
    }
}
