<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    @livewireStyles
</head>

<body class="antialiased relative w-full bg-blue-50">
    @livewire('home-nav')
    <div class="h-screen w-full grid grid-cols-1 md:grid-cols-2 bg-cover bg-right md:bg-center bg-blue-50">
        <div class="flex w-full flex-col px-5 md:px-10 items-start justify-center h-full space-y-5">
            <h1 class="text-4xl font-bold">
                High Speed Internet
            </h1>
            <p class="text-semibold text-lg">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, quidem.
            </p>

            <a href="" class="bg-blue-500 px-4 py-3 rounded-lg text-white">
                Get Started
            </a>

            <div class=" flex items-center justify-between w-full">

                <div class=" flex items-start  flex-col justify-start shadow-sm text-xs space-y-1 p-2 rounded-md">
                    <div class="bg-center bg-contain h-10 w-10"
                        style="background-image: url({{ asset('img/location-and-map.svg') }})"></div>
                    <span>102.367.458 IPs</span>
                    <span>
                        Around the Globe
                    </span>
                </div>

                <div class=" flex items-start  flex-col justify-start shadow-sm text-xs space-y-1 p-2 rounded-md">
                    <div class="bg-center bg-contain h-10 w-10"
                        style="background-image: url({{ asset('img/location-and-map.svg') }})"></div>
                    <span>102.367.458 IPs</span>
                    <span>
                        Around the Globe
                    </span>
                </div>

                <div class=" flex items-start  flex-col justify-start shadow-sm text-xs space-y-1 p-2 rounded-md">
                    <div class="bg-center bg-contain h-10 w-10"
                        style="background-image: url({{ asset('img/location-and-map.svg') }})"></div>
                    <span>102.367.458 IPs</span>
                    <span>
                        Around the Globe
                    </span>
                </div>

            </div>
        </div>
    </div>
    <div class="h-screen bg-blue-700 w-full relative">
        <div
            class="absolute -top-16 left-5 md:left-24 right-5 md:right-24 rounded-lg flex justify-between py-10 bg-white px-5 flex-wrap">
            <div>
                TECHNOLOGY
            </div>
            <div>
                TECHNOLOGY
            </div>
            <div>
                TECHNOLOGY
            </div>
            <div>
                TECHNOLOGY
            </div>
        </div>
        <div class="bg-white bg-opacity-20 w-full h-full px-5 grid grid-cols-1 md:grid-cols-2">
            <div class="hidden md:block">
                Img
            </div>
            <div class="flex flex-col items-start justify-center text-white space-y-5">
                <h2 class="text-3xl font-bold">About Us</h2>
                <div class="text-sm flex flex-col space-y-3 tracking-wider leading-6">
                    <p class="font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quisquam, quidem Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur amet et
                        animi
                        obcaecati, suscipit maxime error non odit quaerat sint hic tempore ullam consequatur tempora sit
                        ratione ipsum sapiente distinctio.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quisquam, quidem Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur amet et
                        animi
                        obcaecati, suscipit maxime error non odit quaerat sint hic tempore ullam consequatur tempora sit
                        ratione ipsum sapiente distinctio.
                    </p>
                </div>
                <a href="" class="text-blue-600 px-4 py-3 bg-white rounded text-sm">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <div class="w-full flex flex-col items-center justify-center py-10 px-5 sm:px-20 text-blue-800 space-y-4">
        <h2 class="text-3xl font-bold">
            Popular Pricing Plan
        </h2>
        <p class="text-center text-sm">
            A reliable data solution with the best price for your business
        </p>
        @livewire('price-tab')
    </div>
    @livewire('order-form')
    <div class="grid grid-cols-1 md:grid-cols-3 px-5 md:px-20 py-10 gap-10">
        <div class="border-b-4 border-blue-500 py-5 place-self-start">
            <h2 class="font-bold text-2xl">Why Choose Us</h2>
            <p class="mt-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, quidem.
            </p>
        </div>
        <div class="cols-span-full md:col-span-2 grid grid-col-1 md:grid-cols-2 py-5 gap-10 px-10">
            <div class="flex flex-col space-y-3">
                <img src="" alt="ICon" class="border h-10 w-10">
                <h2 class="font-bold text-sm">The Right focus</h2>
                <p class="font-light">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quidem.
                </p>
            </div>
            <div class="flex flex-col space-y-3">
                <img src="" alt="ICon" class="border h-10 w-10">
                <h2 class="font-bold text-sm">The Right focus</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quidem.
                </p>
            </div>
            <div class="flex flex-col space-y-3">
                <img src="" alt="ICon" class="border h-10 w-10">
                <h2 class="font-bold text-sm">The Right focus</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quidem.
                </p>
            </div>
            <div class="flex flex-col space-y-3">
                <img src="" alt="ICon" class="border h-10 w-10">
                <h2 class="font-bold text-sm">The Right focus</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quidem.
                </p>
            </div>
        </div>

    </div>
    <div class="h-screen w-full bg-blue-700">

    </div>

    @livewireScripts
</body>

</html>
