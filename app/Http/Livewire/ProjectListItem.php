<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectListItem extends Component
{
    public Project $project;



    public function mount(Project $project)
    {
        $this->project = $project;
    }

    public function render()
    {
        return view('livewire.project-list-item');
    }
}
