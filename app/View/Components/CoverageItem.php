<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CoverageItem extends Component
{

    public $number;
    public $cname;
    public $address;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $number,
        $cname,
        $address
    ) {
        $this->number = $number;
        $this->cname = $cname;
        $this->address = $address;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.coverage-item');
    }
}
