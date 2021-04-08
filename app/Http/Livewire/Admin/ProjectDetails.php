<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectDate;
use App\Models\Region;
use App\Models\User;
use Livewire\Component;

class ProjectDetails extends Component
{
    public Project $proj;
    public $selected_categories = [];

    protected $rules = [
        'proj.requester_name' => 'required',
        'proj.requester_email' => 'required|email',
        'proj.requester_organization' => 'sometimes',
        'proj.requester_church' => 'sometimes',
        'proj.event_poc' => 'required',
        'proj.event_phone' => 'required',
        'proj.location_address' => 'required',
        'proj.location_address2' => 'sometimes',
        'proj.location_city' => 'required',
        'proj.location_state' => 'required',
        'proj.location_zipcode' => 'required',
        'proj.location_phone' => 'required',
        'proj.project_description' => 'required',
        'proj.project_direction' => 'required',
        'proj.project_parking' => 'required',
        'proj.region_id' => 'required',
        'proj.project_date_id' => 'required',
        'proj.project_time' => 'required',
        'proj.children_allowed' => 'sometimes',
        'proj.volunteers_needed' => 'required|integer',
        'proj.volunteer_use' => 'required',
        'proj.skills_requested' => 'required',
        'proj.materials_provided' => 'required',
        'proj.materials_not_provided' => 'required',
        'proj.is_evaluated' => 'sometimes',
        'proj.is_approved' => 'sometimes',
        'proj.is_confirmed' => 'sometimes',
        'proj.notes' => 'sometimes',
        'proj.coordinator_id' => 'sometimes',
        'proj.evaluator_id' => 'sometimes',
        'selected_categories' => 'sometimes',
        'proj.categories' => 'sometimes',
    ];

    public function mount(Project $project)
    {
        $this->proj = $project;
//        $this->selected_categories = $this
    }

    public function saveProject()
    {
        $this->validate();
//        $this->proj->categories = implode(',', $this->selected_categories);
        $this->proj->save();
        // save categories
    }

    public function render()
    {
        return view('livewire.admin.project-details', [
//            'project' => $this->proj,
            'project_dates' => ProjectDate::orderBy('project_date', 'asc')->get(),
            'regions' => Region::all(),
            'users' => User::all(),
            'categories' => Category::all(),
        ]);
    }
}
