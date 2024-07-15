<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return 'Admin Page with posts';
    }

    public function create()
    {
        return 'Admin Page to create a new post';
    }

    public function store()
    {
        return 'Admin Page to store a new post';
    }

    public function show($post)
    {
        return "Admin Page with a single post: {$post}";
    }

    public function edit()
    {
        return 'Admin Page to edit a post';
    }

    public function update()
    {
        return 'Admin Page to update a post';
    }

    public function delete()
    {
        return 'Admin Page to delete a post';
    }

    public function like()
    {
        return 'Admin Page to like a post';
    }
}
