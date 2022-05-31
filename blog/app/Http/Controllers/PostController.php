<?php

namespace App\Http\Controllers;

use iluminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    


    public function index()
    {
        $posts = post::latest();

        if(request('search')) {
            $posts = $posts->where('title', 'like', '%' . request('search') . '%');
        }


        return view('posts', [
            "title" => "All Posts",
            // "posts" => Post::all()
            "posts" => $posts->paginate(7)
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}