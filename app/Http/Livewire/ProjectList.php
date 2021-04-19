<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Project;
use App\Models\Region;
use Livewire\Component;

class ProjectList extends Component
{
    public function render()
    {
        return view('livewire.project-list', [
            'categories' => Category::all(),
            'regions' => Region::all(),
            'projects' => Project::where('isFilled', '=', '0')->get()
        ])->layout('components.app');
    }
}
