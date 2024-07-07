<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Page with posts';
    }

    public function create()
    {
        return 'Page to create a new post';
    }

    public function store()
    {
        return 'Page to store a new post';
    }

    public function show($post)
    {
        return "Page with a single post: {$post}";
    }

    public function edit()
    {
        return 'Page to edit a post';
    }

    public function update()
    {
        return 'Page to update a post';
    }

    public function delete()
    {
        return 'Page to delete a post';
    }

    public function like()
    {
        return 'Page to like a post';
    }
}
