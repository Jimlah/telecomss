<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PriceTab extends Component
{

    public $tabs = [
        "Home",
        "Business"
    ];

    public $selectedTab = "Home";

    public function changeTab($tab)
    {
        $this->selectedTab = $tab;
    }

    public function render()
    {
        return view('livewire.price-tab');
    }
}
