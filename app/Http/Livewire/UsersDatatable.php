<?php
declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersDatatable extends Component
{
    public $modelId = null;
    public $modalConfirmDeleteVisible = false;
    public $modalConfirmEditVisible = false;

    public function render()
    {
        return view('livewire.users-datatable', [
            'users' => User::with('roles')->get(),
        ]);
    }

    public function confirmUserDeletion($id): void {
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
    }

    public function confirmUserEdition($id): void {
        $this->modelId = $id;
        $this->modalConfirmEditVisible = true;
    }

    public function deleteUser(): void {
        User::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
    }
}
