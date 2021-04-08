<?php

namespace App\Http\Livewire\Admin;

use App\Models\Project;
use Livewire\Component;

class Projects extends Component
{
    public bool $showDeleteModal = false;
    public $delete_id = '';

    public function delete_id($id)
    {
        $this->showDeleteModal = true;
        $this->delete_id = $id;
    }

    public function delete()
    {
        Project::find($this->delete_id)->delete();
        $this->showDeleteModal = false;
        $this->delete_id = '';
    }

    public function render()
    {
        return view('livewire.admin.projects', [
            'projects' => Project::all(),
        ]);
    }
}
