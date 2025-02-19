<?php

namespace App\Livewire\UI;

use Livewire\Component;
use App\Models\SiteSetting;

class Footer extends Component
{
    public $settings;

    public function mount()
    {
        $this->settings = SiteSetting::first();
    }

    public function render()
    {
        return view('livewire.u-i.footer');
    }
}
