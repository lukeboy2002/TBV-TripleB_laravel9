<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class PostsFooter extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $posts = Post::limit(2)->get();

        return view('components.posts-footer', [
            'posts' => $posts,
        ]);
    }
}
