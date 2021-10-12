<?php

namespace App\Http\Livewire;

use App\Mail\OrderSent;
use App\Models\Order;
use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Facades\Mail;

class OrderForm extends Component
{
    public $hidden = true;

    public $firstname;
    public $lastname;
    public $email;
    public $newOrder;

    protected $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
    ];


    protected $listeners = [
        'createOrder' => 'toggle',
    ];

    public function orderData()
    {
        $validated = $this->validate();

        $customer = Customer::firstOrCreate(
            [
                'email' => $validated['email'],
            ],
            [
                'name' => $validated['firstname']  . " " . $validated['lastname'],
            ]
        );

        $order = $customer->orders()->create([
            'quantity' => $this->newOrder['quantity'],
            'price' => $this->newOrder['price']
        ]);


        $this->close();
        Mail::to($customer->email)->send(new OrderSent($order));
    }

    public function toggle($data)
    {
        $this->newOrder = $data;
        $this->hidden = false;
    }

    public function close()
    {
        $this->hidden = true;
        $this->newOrder = null;
    }

    public function render()
    {
        return view('livewire.order-form');
    }
}
