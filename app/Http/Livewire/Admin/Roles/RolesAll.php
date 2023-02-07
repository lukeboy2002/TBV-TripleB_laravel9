<?php

namespace App\Http\Livewire\Admin\Roles;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class RolesAll extends Component
{
    use WithPagination;

    public $showModal = false;
    public $search;
    public $sortField;
    public $sortAsc = true;
    protected $queryString = ['search', 'sortAsc', 'sortField'];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin.roles.roles-all', [
            'roles' => Role::orderby('created_at')
                ->where(function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%');
                })
                ->when($this->sortField, function ($query) {
                    $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
                })
                ->with('permissions')
                ->paginate(10)
        ]);
    }

    public function deleteId($id)
    {
        $this->showModal = true;
        $this->deleteId = $id;
    }

    public function delete()
    {
        Role::find($this->deleteId)->delete();

        $this->showModal = false;

        session()->flash('success', 'Role deleted successfully!');
    }

    public function close()
    {
        $this->showModal = false;
    }
}
