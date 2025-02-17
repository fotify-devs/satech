<?php

namespace App\Livewire\UI;

use Livewire\Component;

class NavigationMenu extends Component
{
    public $isSideMenuOpen = false;
    public $darkMode = false;

    public function mount()
    {
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

    public function render()
    {
        return view('livewire.u-i.navigation-menu');
    }
}
