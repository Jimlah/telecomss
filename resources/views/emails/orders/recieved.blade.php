<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
</head>

<body style="background-color: grey; height:100%;">
    <div class=" max-w-lg mx-auto" style="background-color: white; border-radius: 5px; height: 100%; padding: 15px">
        <div style="float: left">
            <br>
            INVOICE <br>
            NUMBER: {{ $order->id }} <br>
            DATE: {{ $order->created_at }} <br>
        </div>
        <img src="{{ asset('img/ITXlogo.png') }}" alt="ITX logo" style="float:right; top-0">
        <div style="clear: both">
            Thank you for placing an order on ITX Telecoms Limited. We're glad to inform you that we've received your
            order
            and
            will
            process it very soon.<br>
            Your order details are as follows: <br>
            Data Plan: {{ $order->quantity }} <br>
            Amount: {{ $order->price }} <br>
            Order ID: {{ $order->id }} <br>
            Date: {{ $order->created_at }} <br>
        </div>
        <br>
        <br>
        <table style="border: 1px; border-collapse: collapse; width: 100%;">
            <thead>
                <tr style="background-color: gray; width: 100%; color:white; text-align: left">
                    <th>
                        Description
                    </th>
                    <th>
                        Quantity
                    </th>
                    <th>
                        Price
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="border border-collapse">
                    <td>
                        {{ $order->id }}
                    </td>
                    <td>
                        {{ $order->quantity }}
                    </td>
                    <td>
                        {{ $order->price }}
                    </td>
                </tr>
            </tbody>
        </table>

        Thanks,
        Team {{ config('app.name') }}
    </div>
</body>

</html>
