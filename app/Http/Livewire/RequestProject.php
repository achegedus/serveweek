<?php

namespace App\Http\Livewire;

use App\Mail\ProjectRegistered;
use App\Models\Project;
use App\Models\ProjectDate;
use App\Models\Region;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class RequestProject extends Component
{
    public $projectSubmittedModal = false;

    public Project $proj;

//    public $requester_organization = "";
//    public $requester_name = "";
//    public $requester_email = "";
//    public $requester_church = "";
//    public $event_poc = "";
//    public $event_phone = "";
//    public $location_address = "";
//    public $location_address2 = "";
//    public $location_city = "";
//    public $location_state = "";
//    public $location_zipcode = "";
//    public $location_phone = "";
//    public $region_id = null;
//    public $project_description = "";
//    public $project_direction = "";
//    public $project_parking = "";
//    public $project_date = "";
//    public $project_time = "";
//    public $volunteers_needed = "";
//    public $children_allowed = false;
//    public $volunteer_use = "";
//    public $skills_requested = "";
//    public $materials_provided = "";
//    public $materials_not_provided = "";
//    public $coordinator_id = null;
//    public $is_approved = false;
//    public $evaluator_id = null;
//    public $is_evaluated = false;
//    public $notes = "";
//    public $is_confirmed = "";

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
        'proj.materials_not_provided' => 'required'
    ];

    public function mount(Project $project)
    {
        $this->proj = $project;
    }

    public function saveProject()
    {
        $this->validate();
        $this->proj->save();
        $this->projectSubmittedModal = true;

        $users = User::all();
        foreach ($users as $user) {
            Mail::to($user)->send(new ProjectRegistered($this->proj));
        }

        $this->proj = new Project();
    }

    public function render()
    {
        return view('livewire.request-project', [
            'project_dates' => ProjectDate::orderBy('project_date', 'asc')->get(),
            'regions' => Region::all()
        ])->layout('components.app');
    }
}
