<?php

namespace App\Livewire\Shield\Department;

use Livewire\Component;
use App\Models\Department;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class DepartmentList extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'title';
    public $sortDirection = 'asc';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    #[On('department-created')]
    #[On('department-updated')]
    public function refreshList()
    {
        $this->resetPage();
    }

    public function deleteDepartment(Department $department)
    {
        $department->delete();
        session()->flash('success', 'Department deleted successfully.');
    }

    public function render()
    {
        $departments = Department::where('title', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.shield.department.department-list', [
            'departments' => $departments
        ]);
    }
}