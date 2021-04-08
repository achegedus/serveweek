<?php

namespace App\Http\Livewire\Admin;

use App\Models\Project;
use App\Models\ProjectDate;
use Livewire\Component;

class ProjectDates extends Component
{
    public bool $showEditModal = false;
    public bool $showDeleteModal = false;
    public $delete_id = '';

    public ProjectDate $editing;

    public function rules() {
        return [
            'editing.project_date' => 'required|date_format:Y-m-d'
        ];
    }

    public function mount()
    {
        $this->editing = ProjectDate::make();
    }

    public function create()
    {
        $this->editing = ProjectDate::make();
        $this->showEditModal = true;
    }

    public function edit(ProjectDate $projectDate)
    {
        if ($this->editing->isNot($projectDate)) $this->editing = $projectDate;
        $this->showEditModal = true;
    }

    public function delete_id($id)
    {
        $this->showDeleteModal = true;
        $this->delete_id = $id;
    }

    public function delete()
    {
        ProjectDate::find($this->delete_id)->delete();
        $this->showDeleteModal = false;
        $this->delete_id = '';
    }

    public function save()
    {
        $this->validate();
        $this->editing->save();
        $this->showEditModal = false;
    }

    public function render()
    {
        return view('livewire.admin.project-dates', [
            'project_dates' => ProjectDate::orderBy('project_date','asc')->get()
        ]);
    }
}
