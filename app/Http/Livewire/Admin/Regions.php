<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Region;
use Livewire\Component;

class Regions extends Component
{
    public $showEditModal = false;

    public Region $editing;

    public function rules() {
        return [
            'editing.name' => 'required',
            'editing.description' => 'required',
        ];
    }

    public function mount()
    {
        $this->editing = Region::make();
    }

    public function create()
    {
        $this->editing = Region::make();
        $this->showEditModal = true;
    }

    public function edit(Region $region)
    {
        if ($this->editing->isNot($region)) $this->editing = $region;
        $this->showEditModal = true;
    }

    public function save()
    {
        $this->validate();
        $this->editing->save();
        $this->showEditModal = false;
    }

    public function render()
    {
        return view('livewire.admin.regions', [
            'regions' => Region::all()
        ]);
    }
}
