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

        if ($this->submitSetting->value === '1') {
            $this->showSubmit = true;
        }

        if ($this->volunteerSetting->value === '1') {
            $this->showVolunteer = true;
        }
    }

    public function updateVolunteerSetting()
    {
        if ($this->showVolunteer) {
            $this->volunteerSetting->value = '0';
        } else {
            $this->volunteerSetting->value = '1';
        }
        $this->volunteerSetting->save();
    }

    public function updateSubmitSetting() 
    {
        if ($this->showSubmit) {
            $this->submitSetting->value = '0';
        } else {
            $this->submitSetting->value = '1';
        }
        $this->submitSetting->save();
    }

    public function render()
    {
        return view('livewire.dashboard.settings');
    }
}
