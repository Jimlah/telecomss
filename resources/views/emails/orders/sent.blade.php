@component('mail::message')
# New Order Placed

Hello {{ $order->customer->name }},
Thank you for placing an order on ITX Telecoms Limited. We're glad to inform you that we've received your order and will
process it very soon.

Your order details are as follows: <br>
Data Plan: {{ $order->quantity }} <br>
Amount: {{ $order->price }} <br>
Order ID: {{ $order->id }} <br>
Date: {{ $order->created_at }} <br>

Thank you again for choosing ITX TELECOMS for your purchase. <br>

Thanks, <br>
Team {{ config('app.name') }}
@endcomponent
