<?php

namespace App\Http\Livewire;

use App\Models\Project;
use App\Models\Volunteer;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class ProjectVolunteer extends Component
{
    public Project $project;
    public $previous;
    public $showThankYou = false;

    public Volunteer $newvol;

    public function rules() {
        return [
            'newvol.name' => 'required',
            'newvol.email' => 'required|email',
            'newvol.phone' => 'required',
            'newvol.church' => 'sometimes',
            'newvol.numberOfVolunteers' => 'integer|required',
        ];
    }

    public function mount(Project $project)
    {
        $this->project = $project;
        $this->previous = URL::previous();
        $this->newvol = Volunteer::make();
    }

    public function goBack()
    {
        return redirect('/volunteer#search');
    }

    public function saveVolunteer()
    {
        $this->validate();
        $this->project->volunteers()->save($this->newvol);
        $this->project->updateVolunteerCount();
        $this->showThankYou = true;
    }

    public function render()
    {
        return view('livewire.project-volunteer')->layout('components.volunteer_layout');
    }
}
