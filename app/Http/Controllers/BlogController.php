<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id'        => 123,
            'title'     => 'One post in the blog',
            'content'   => 'Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit. Consequatur, quae!'
        ];

        $posts = array_fill(0, 10, $post);

        // with = вместе
        //return view('blog.index')->with('posts', $posts)->with('baz', [1, 2, 3, 4]);
        // вывести шаблон в массиве можно через @json($posts)

        /*return view('blog.index', [
            'posts' => $posts,
        ]);*/

        //return view('blog.index', compact('posts', 'foo'));

        return view ('blog.index', compact('posts'));
    }

    public function show($post)
    {
        $post = (object) [
            'id'        => 123,
            'title'     => 'One post in the blog',
            'content'   => 'Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit. Consequatur, quae!'
        ];
        //return "One post in the blog: {$post}";
        return view('blog.show', compact('post'));
    }

    public function like($post)
    {
        return "Like a post: {$post}";
    }
}
