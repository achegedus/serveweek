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

    public $region;
    public $category;

    protected $queryString = [
        'region',
        'category'
    ];

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

        if ($this->region) {
            $projects->where('region_id', $this->region);
        }

        if ($this->category) {
            $projects->whereHas('categories', function(Builder $q) {
                $q->where('category_project.category_id', $this->category);
            });
        }

        $this->projects = $projects->get();
    }

    public function render()
    {
        return view('livewire.project-list-content')->layout('components.app');
    }
}
