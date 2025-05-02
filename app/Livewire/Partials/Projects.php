<?php

namespace App\Livewire\Partials;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;

class Projects extends Component
{
    public function render()
    {
        $categories = Category::all();
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('livewire.partials.projects', [
            'projects' => $projects,
            'categories' => $categories
        ]);
    }
}
