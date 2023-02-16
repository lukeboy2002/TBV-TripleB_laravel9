<?php

namespace App\Http\Livewire\Admin\Permissions;

use App\Models\Permission;
use Illuminate\Validation\Rule;
use Livewire\Component;

class PermissionsForm extends Component
{

    public Permission $permission;

    public function mount(Permission $permission)
    {
        $this->permission = $permission;
    }

    public function render()
    {
        return view('livewire.admin.permissions.permissions-form');
    }

    public function submit()
    {
        $this->validate();

        $this->permission->save();

        return redirect()->route('admin.permissions.index');
    }

    protected function rules(): array
    {
        return [
            'permission.name' => [
                'string',
                Rule::unique('permissions', 'name')->ignore($this->permission),
                'required',
            ],
        ];
    }
}
