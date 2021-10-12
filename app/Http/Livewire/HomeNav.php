<?php

namespace App\Http\Livewire;

use Livewire\Component;



class HomeNav extends Component
{

    public $isHidden = false;

    public function toggle()
    {
        $this->isHidden = !$this->isHidden;
    }

    public function render()
    {
        return view('livewire.home-nav');
    }
}
