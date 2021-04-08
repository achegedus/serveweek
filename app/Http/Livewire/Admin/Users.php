<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $showEditModal = false;

    public User $editing;

    public function rules() {
        return [
            'editing.name' => 'required',
            'editing.email' => 'required|email'
        ];
    }

    public function mount()
    {
        $this->editing = User::make();
    }

    public function create()
    {
        $this->editing = User::make();
        $this->showEditModal = true;
    }

    public function edit(User $user)
    {
        if ($this->editing->isNot($user)) $this->editing = $user;
        $this->showEditModal = true;
    }

    public function save()
    {
        $this->validate();

        if (!isset($this->editing->id)){
            $this->editing->password = '$2y$12$JJjoOCzG4kNtLmdFM1xgQuicDBo1VqzYHkK5S2DAG.JlzL.MquOqi';
        }

        $this->editing->save();
        $this->showEditModal = false;
    }

    public function render()
    {
        return view('livewire.admin.users', [
            'users' => User::all(),
        ]);
    }
}
