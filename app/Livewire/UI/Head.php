<?php

namespace App\Livewire\UI;

use Livewire\Component;

class Head extends Component
{

    public $favicon;
    public $settings;

    public function mount(
        // Cache settings for better performance
        $this->settings = Cache::remember('site-settings', 3600, function () {
            return SiteSetting::first();
        });

        // Initialize social links and favicon
        $this->favicon = $this->settings->favicon;
    )

    public function refreshSettings()
    {
        Cache::forget('site-settings');
        $this->settings = SiteSetting::first();
        $this->favicon = $this->settings->favicon;
    }

    public function render()
    {
        return view('livewire.u-i.head');
    }
}
