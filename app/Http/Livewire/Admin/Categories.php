<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public bool $showEditModal = false;

    public Category $editing;

    public function rules() {
        return [
            'editing.name' => 'required',
            'editing.description' => 'required',
        ];
    }

    public function mount()
    {
        $this->editing = Category::make();
    }

    public function create()
    {
        $this->editing = Category::make();
        $this->showEditModal = true;
    }

    public function edit(Category $category)
    {
        if ($this->editing->isNot($category)) $this->editing = $category;
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
        return view('livewire.admin.categories', [
            'categories' => Category::all(),
        ]);
    }
}
