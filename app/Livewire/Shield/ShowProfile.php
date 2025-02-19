<?php

namespace App\Livewire\Shield;

use Livewire\Component;
use App\Models\Profile;

class ShowProfile extends Component
{

    public $profile;

    public function mount($slug)
    {
        $this->profile = InstructorProfile::bySlug($slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.shield.show-profile');
    }
}
