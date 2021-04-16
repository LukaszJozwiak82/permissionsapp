<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersDatatable extends Component
{
    public function render()
    {
        return view('livewire.users-datatable', [
            'users' => User::all(),
        ]);
    }
}
