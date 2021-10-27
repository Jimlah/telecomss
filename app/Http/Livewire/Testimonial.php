<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Testimonial extends Component
{
    public $percent = 0;

    public function translate()
    {
        $this->percent -= .1;
    }

    public function render()
    {
        return view('livewire.testimonial');
    }
}
