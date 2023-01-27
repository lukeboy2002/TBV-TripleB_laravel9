<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()
                ->where('published', 1)
                ->filter(request(['search', 'category', 'author']))
                ->paginate(9)
                ->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        $post->increment('views');

        $post->load('author', 'comments.author');

        $posts = Post::OrderBy('views', 'desc')->limit(5)->get();

        return view('posts.show', [
            'post' => $post,
            'posts' => $posts,
        ]);
    }
}
