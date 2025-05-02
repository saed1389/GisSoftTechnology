<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;

class BlogPage extends Component
{
    public function render()
    {
        $categories = Category::all();
        $blogs = Blog::where('status', 1)->orderBy('created_at', 'desc')->get();
        $related_blogs = Blog::where('status', 1)->inRandomOrder()->limit(3)->get();
        return view('livewire.blog-page', [
            'categories' => $categories,
            'blogs' => $blogs,
            'related_blogs' => $related_blogs
        ]);
    }
}
