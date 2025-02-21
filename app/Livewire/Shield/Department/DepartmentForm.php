<?php

namespace App\Livewire\Shield\Department;

use Livewire\Component;
use App\Models\Department;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class DepartmentForm extends Component
{
    use WithFileUploads;

    public $department;
    public $title;
    public $subtitle;
    public $description;
    public $icon;
    public $embedded_link;
    public $resources = [];
    public $images = [];
    public $editMode = false;

    protected $rules = [
        'title' => 'required|min:3',
        'subtitle' => 'nullable|min:3',
        'description' => 'required',
        'icon' => 'nullable|image|max:1024',
        'embedded_link' => 'nullable|url',
        'resources.*' => 'nullable|file|max:10240',
        'images.*' => 'nullable|image|max:2048'
    ];

    public function mount(?Department $department = null)
    {
        if ($department->exists) {
            $this->department = $department;
            $this->title = $department->title;
            $this->subtitle = $department->subtitle;
            $this->description = $department->description;
            $this->embedded_link = $department->embedded_link;
            $this->editMode = true;
        }
    }

    public function save()
    {
        $this->validate();

        if ($this->editMode) {
            $this->department->update([
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'description' => $this->description,
                'embedded_link' => $this->embedded_link,
            ]);

            if ($this->icon) {
                $iconPath = $this->icon->store('departments/icons', 'public');
                $this->department->update(['icon' => $iconPath]);
            }
        } else {
            $department = Department::create([
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'description' => $this->description,
                'embedded_link' => $this->embedded_link,
            ]);

            if ($this->icon) {
                $iconPath = $this->icon->store('departments/icons', 'public');
                $department->update(['icon' => $iconPath]);
            }
        }

        // Handle resource uploads
        if ($this->resources) {
            foreach ($this->resources as $resource) {
                $path = $resource->store('departments/resources', 'public');
                $this->department->resources()->create([
                    'file_path' => $path,
                    'file_type' => $resource->getClientOriginalExtension(),
                    'original_name' => $resource->getClientOriginalName()
                ]);
            }
        }

        // Handle image uploads
        if ($this->images) {
            foreach ($this->images as $image) {
                $path = $image->store('departments/images', 'public');
                $this->department->images()->create([
                    'image_path' => $path,
                    'image_type' => $image->getClientOriginalExtension(),
                    'original_name' => $image->getClientOriginalName()
                ]);
            }
        }

        $this->dispatch('department-' . ($this->editMode ? 'updated' : 'created'));
        session()->flash('success', 'Department ' . ($this->editMode ? 'updated' : 'created') . ' successfully.');

        return redirect()->route('admin.departments.index');
    }

    public function render()
    {
        return view('livewire.shield.department.department-form');
    }
}