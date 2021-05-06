<?php

namespace App\Http\Livewire\Admin;

use App\Models\Volunteer;
use Livewire\Component;

class Volunteers extends Component
{
    public function render()
    {
        return view('livewire.admin.volunteers', [
            'volunteers' => Volunteer::orderBy('project_id')->get(),
        ]);
    }
}
