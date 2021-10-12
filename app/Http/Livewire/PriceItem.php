<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PriceItem extends Component
{

    public $price;
    public $quantity;

    public $data;


    public function sendData()
    {
        $this->data =  [
            'price' => $this->price,
            'quantity' => $this->quantity,
        ];

        $this->emit('createOrder', $this->data);
    }

    public function render()
    {
        return view('livewire.price-item');
    }
}
