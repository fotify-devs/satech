<?php

namespace App\Livewire\UI;

use Livewire\Component;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Cache;

class NavigationMenu extends Component
{
    public $isSideMenuOpen = false;
    public $darkMode = false;
    public $settings;
    public $socialLinks;
    public $favicon;

    public function mount()
    {
        // Cache settings for better performance
        $this->settings = Cache::remember('site-settings', 3600, function () {
            return SiteSetting::first();
        });

        // Initialize social links and favicon
        $this->socialLinks = $this->settings->social_links;
        $this->favicon = $this->settings->favicon;

        // Initialize dark mode from session
        $this->darkMode = session('darkMode', false);
    }

    public function toggleDarkMode()
    {
        $this->darkMode = !$this->darkMode;
        session(['darkMode' => $this->darkMode]);
        $this->dispatch('dark-mode-toggled', $this->darkMode);
    }

    public function toggleSideMenu()
    {
        $this->isSideMenuOpen = !$this->isSideMenuOpen;
    }

    public function refreshSettings()
    {
        Cache::forget('site-settings');
        $this->settings = SiteSetting::first();
        $this->socialLinks = $this->settings->social_links;
        $this->favicon = $this->settings->favicon;
    }

    public function render()
    {
        return view('livewire.u-i.navigation-menu');
    }
}