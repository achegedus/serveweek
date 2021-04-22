<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Project;
use App\Models\Region;
use Livewire\Component;

class ProjectList extends Component
{
    public $filterRegions = [];
    public $filterCategories = [];


    public function toggleRegion($inRegion)
    {
        $key = array_search($inRegion, $this->filterRegions);
        if ($key)
            unset($this->filterRegions[$key]);
        else
            $this->filterRegions[] = $inRegion;
    }

    public function toggleCategory($inCategory)
    {
        $key = array_search($inCategory, $this->filterCategories);
        if ($key)
            unset($this->filterCategories[$key]);
        else
            $this->filterCategories[] = $inCategory;
    }

    public function render()
    {
        return view('livewire.project-list', [
            'categories' => Category::all(),
            'regions' => Region::all(),
            'projects' => Project::where('isFilled', '=', '0')->get()
        ])->layout('components.app');
    }
}
