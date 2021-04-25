<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Region;
use Livewire\Component;

class ProjectList extends Component
{
    public $filterRegions = [];
    public $filterCategories = [];

    public $category_list;
    public $region_list;

    public function mount()
    {
        $this->region_list = Region::all();
        $this->category_list = Category::all();
    }

    public function toggleRegion($inRegion)
    {
        $key = array_search($inRegion, $this->filterRegions);
        if (false !== $key)
            unset($this->filterRegions[$key]);
        else
            $this->filterRegions[] = $inRegion;

        $this->emit('updateFilters');
    }

    public function toggleCategory($inCategory)
    {
        $key = array_search($inCategory, $this->filterCategories);
        if (false !== $key) {
            unset($this->filterCategories[$key]);
        }
        else
            $this->filterCategories[] = $inCategory;

        $this->emit('updateFilters', $this->filterRegions, $this->filterCategories);
    }

    public function render()
    {
        return view('livewire.project-list')->layout('components.app');
    }
}
