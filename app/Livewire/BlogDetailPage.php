<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;

class BlogDetailPage extends Component
{
    public $slug;
    public $blog;

    public function mount($slug): void
    {
        $this->slug = $slug;
        $this->loadPlace();
    }

    protected function loadPlace(): void
    {
        $this->blog = Blog::where('slug', $this->slug)->first();
    }

    public function render()
    {
        $categories = Category::all();
        $related_blogs = Blog::where('status', 1)->inRandomOrder()->limit(3)->get();

        return view('livewire.blog-detail-page',[
            'categories' => $categories,
            'blog' => $this->blog,
            'related_blogs' => $related_blogs
        ]);
    }
}
