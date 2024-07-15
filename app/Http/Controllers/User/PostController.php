<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return 'User Page with posts';
    }

    public function create()
    {
        return 'User Page to create a new post';
    }

    public function store()
    {
        return 'User Page to store a new post';
    }

    public function show($post)
    {
        return "User Page with a single post: {$post}";
    }

    public function edit()
    {
        return 'User Page to edit a post';
    }

    public function update()
    {
        return 'User Page to update a post';
    }

    public function delete()
    {
        return 'User Page to delete a post';
    }

    public function like()
    {
        return 'User Page to like a post';
    }
}
