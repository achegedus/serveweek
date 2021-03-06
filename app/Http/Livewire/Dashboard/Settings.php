<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Setting;

class Settings extends Component
{
    public Setting $volunteerSetting;
    public Setting $submitSetting;

    public $showVolunteer = false;
    public $showSubmit = false;


    public function mount()
    {
        $this->volunteerSetting = Setting::where('name', '=', 'showVolunteerSignup')->first();
        $this->submitSetting = Setting::where('name', '=', 'showSubmitProject')->first();

        $this->showSubmit = $this->submitSetting->getBoolean();
        $this->showVolunteer = $this->volunteerSetting->getBoolean();
    }

    public function updateVolunteerSetting()
    {
        $this->volunteerSetting->setBoolean($this->showVolunteer);
        $this->volunteerSetting->save();
    }

    public function updateSubmitSetting()
    {
        $this->submitSetting->setBoolean($this->showSubmit);
        $this->submitSetting->save();
    }

    public function render()
    {
        return view('livewire.dashboard.settings');
    }
}
