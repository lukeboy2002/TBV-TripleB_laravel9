<?php

namespace App\Http\Livewire\Admin\Members;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class MembersAll extends Component
{
    use WithPagination;

    public $showModal = false;
    public $active = false;
    public $search;
    public $sortField;
    public $sortAsc = true;
    protected $queryString = ['search', 'active', 'sortAsc', 'sortField'];

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
        return view('livewire.admin.members.members-all', [
            'users' => User::role('member')
                ->where(function ($query) {
                    $query->where('username', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%');
                })
                ->where('active', $this->active)
                ->when($this->sortField, function ($query) {
                    $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
                })
                ->with('roles')
                ->withTrashed()
                ->paginate(10),
        ]);
    }

    public function deleteId($id)
    {
        $this->showModal = true;
        $this->deleteId = $id;
    }

    public function delete()
    {
        User::find($this->deleteId)->delete();

        $this->showModal = false;

        session()->flash('success', 'User deleted successfully!');
    }

    public function close()
    {
        $this->showModal = false;
    }
}
