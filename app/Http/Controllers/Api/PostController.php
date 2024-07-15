<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return 'API Page with posts';
    }

    public function show($post)
    {
        return "API Page with a single post: {$post}";
    }

    public function like()
    {
        return 'API Page to like a post';
    }
}
