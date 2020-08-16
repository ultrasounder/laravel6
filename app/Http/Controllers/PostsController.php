<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($slug)
    {


        $post = \DB::table('posts')->where('slug', $slug)->first();
        dd($post);
        // $posts = [
        //     'my-first-post' => 'Hello, this is my first blog post',
        //     'my-second-post' => 'I am getting a hang of this blog thing'
        // ];



        return view('post', [
            'post' => $post
        ]);
    }
}
