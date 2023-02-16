<?php

namespace App\Http\Livewire\Admin\Roles;

use App\Models\Role;
use Livewire\Component;

class RolesShow extends Component
{
    public function mount(Role $role)
    {
        $this->role = $role;
    }

    public function render()
    {
        $role = Role::with('permissions');

        return view('livewire.admin.roles.roles-show',
        [
            'role' => $role
        ]);
    }
}
