<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class Header extends Component
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

    public function render()
    {
        return view('livewire.header');
    }
}
