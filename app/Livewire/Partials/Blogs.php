<?php

namespace App\Livewire\Partials;

use App\Models\Blog;
use Livewire\Component;

class Blogs extends Component
{
    public function render()
    {
        $blogs = Blog::where('status', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        return view('livewire.partials.blogs', [
            'blogs' => $blogs,
        ]);
    }
}
