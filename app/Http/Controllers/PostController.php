<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Post::all();
        $posts = Post::orderBy('id', 'DESC')->paginate(9);
        return view('guest.posts.index', compact('posts', 'articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $categories = Category::all();
        return view('guest.posts.show', compact('post'));
    }
}
