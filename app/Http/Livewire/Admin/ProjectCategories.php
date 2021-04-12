<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;

class ProjectCategories extends Component
{
    public Project $project;
    public Category $category;
    public $checked = false;

    public function mount(Project $project, Category $category, $checked)
    {
        $this->project = $project;
        $this->category = $category;

        $this->checked = $checked;
    }

    public function categoryChange()
    {
        $this->project->categories()->toggle($this->category);
    }

    public function render()
    {
        return view('livewire.admin.project-categories');
    }
}
