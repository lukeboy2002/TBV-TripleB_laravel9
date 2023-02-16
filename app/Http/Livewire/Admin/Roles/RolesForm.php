<?php

namespace App\Http\Livewire\Admin\Roles;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;
use Livewire\Component;

class RolesForm extends Component
{
    public Role $role;

    public bool $editing = false;

    public array $permissions = [];

    public array $listsForFields = [];

    public function mount(Role $role): void
    {
        $this->role = $role;

        $this->initListsForFields();

        if ($this->role->exists) {
            $this->editing = true;

            $this->permissions = $this->role->permissions()->pluck('id')->toArray();
        }
    }
    public function render(): View
    {
        return view('livewire.admin.roles.roles-form');
    }

    public function submit()
    {
        $this->validate();

        $this->role->save();

        $this->role->permissions()->sync($this->permissions);

        return redirect()->route('admin.roles.index');
    }

    protected function rules(): array
    {
        return [
            'role.name' => [
                'string',
                Rule::unique('roles', 'name')->ignore($this->role),
                'required',
                'permissions' => ['required', 'array']
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['permissions'] = Permission::pluck('name', 'id')->toArray();
    }
}
