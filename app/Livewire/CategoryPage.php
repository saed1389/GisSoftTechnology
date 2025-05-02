<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;

class CategoryPage extends Component
{
    public $slug;
    public $blogs;
    public $category;

    public function mount($slug):void
    {
        $this->slug = $slug;
        $this->loadPlace();
    }

    protected function loadPlace():void
    {
        $this->category = Category::where('slug', $this->slug)->first();
        $this->blogs = Blog::where('slug', $this->category->id)->where('status', 1)->get();
    }

    public function render()
    {
        $categories = Category::all();
        $related_blogs = Blog::where('status', 1)->inRandomOrder()->limit(3)->get();

        return view('livewire.category-page', [
            'categories' => $categories,
            'blogs' => $this->blogs,
            'related_blogs' => $related_blogs,
            'category' => $this->category,
        ]);
    }
}
