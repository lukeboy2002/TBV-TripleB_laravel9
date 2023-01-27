<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function store(Post $post)
    {
        // validation
        request()->validate([
            'body' => 'required|min:5',
        ]);

        $post->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body'),
        ]);

        session()->flash('flash.banner', 'Your Comment has been added succesfully');
        return back();
    }
}
