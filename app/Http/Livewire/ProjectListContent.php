<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class ProjectListContent extends Component
{
    public $projects;
    public $filterRegions = [];
    public $filterCategories = [];
    public $testing = "";

    protected $listeners = ['updateFilters'];

    public function mount()
    {
//        $this->projects = Project::all();
        $this->updateProjects();
    }

    public function updateFilters()
    {
//        $this->filterCategories = $filterCategories;
//        $this->filterRegions = $filterRegions;

        $this->testing = "HELLO";
        $this->updateProjects();
    }

    public function updateProjects()
    {
        $projects = Project::where('isFilled', '=', '0')->where('is_approved','=','1');

        if (count($this->filterRegions) > 0) {
            $projects->whereIn('region_id', $this->filterRegions);
        }

        if (count($this->filterCategories) > 0) {
            $projects->whereHas('categories', function(Builder $q) {
                $q->whereIn('category_project.category_id', $this->filterCategories);
            });
        }

        $this->projects = $projects->get();
    }

    public function render()
    {
        return view('livewire.project-list-content')->layout('components.app');
    }
}
