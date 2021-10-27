<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Meta -->
    <meta name="description" content="{{ env('APP_DESCRIPTION') }}">
    <meta name="keywords" content="{{ env('APP_KEYWORDS') }}">
    <meta name="author" content="{{ env('APP_AUTHOR') }}">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 days">
    <meta name="language" content="{{ env('APP_LANGUAGE') }}">
    <meta name="generator" content="{{ env('APP_GENERATOR') }}">
    <meta name="copyright" content="{{ env('APP_COPYRIGHT') }}">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href={{ asset('css/app.css') }}>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/animation.js') }}"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    @livewireStyles
</head>

<body class="relative w-full antialiased bg-blue-50">
    @livewire('home-nav')
    <section id="home"
        class="relative grid w-full h-screen grid-cols-1 gap-10 bg-right bg-no-repeat bg-cover md:grid-cols-2 md:bg-center animate__animated"
        style="background-image: url('{{ asset('img/Image.png') }}')">
        <div class="flex flex-col items-start justify-center w-full h-full px-5 space-y-5 md:px-10">
            <h1 class="text-6xl font-extrabold text-blue-800 font-popins typewriter">
                High Speed Internet
            </h1>
            <p class="text-lg text-blue-700 text-opacity-50 text-semibold typewriter">
                If everything seems under control, you're not going fast enough.
            </p>

            <a href="" class="px-4 py-3 text-white bg-blue-500 rounded-lg">
                Get Started
            </a>

            <div class="flex items-center justify-between w-full ">

                <div
                    class="flex flex-col items-start justify-start p-2 space-y-1 text-xs rounded-md shadow-sm animate__animated animate__fadeInLeftBig">
                    <div class="w-10 h-10 bg-center bg-contain"
                        style="background-image: url({{ asset('img/location-and-map.svg') }})"></div>
                    <span>102.367.458 IPs</span>
                    <span>
                        Around the Globe
                    </span>
                </div>

                <div
                    class="flex flex-col items-start justify-start p-2 space-y-1 text-xs rounded-md shadow-sm animate__animated animate__fadeInLeftBig">
                    <div class="w-10 h-10 bg-center bg-contain"
                        style="background-image: url({{ asset('img/location-and-map.svg') }})"></div>
                    <span>102.367.458 IPs</span>
                    <span>
                        Around the Globe
                    </span>
                </div>

                <div
                    class="flex flex-col items-start justify-start p-2 space-y-1 text-xs rounded-md shadow-sm animate__animated animate__fadeInLeftBig">
                    <div class="w-10 h-10 bg-center bg-contain"
                        style="background-image: url({{ asset('img/location-and-map.svg') }})"></div>
                    <span>102.367.458 IPs</span>
                    <span>
                        Around the Globe
                    </span>
                </div>

            </div>
        </div>
        <div class="flex items-center justify-center">
        </div>
    </section>
    <section id="about" class="relative w-full h-screen bg-blue-700 animate__animated">
        <div class="grid w-full h-full grid-cols-1 px-5 bg-white bg-opacity-20 md:grid-cols-2">
            <div class="hidden md:block">
                Img
            </div>
            <div class="flex flex-col items-start justify-center space-y-10 text-white">
                <h2 class="text-5xl font-bold typewriter">About Us</h2>
                <div class="flex flex-col space-y-5 text-base leading-5 tracking-widest opacity-80">
                    <p class="font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quisquam, quidem Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur amet et
                        animi
                        obcaecati, suscipit maxime error non odit quaerat sint hic tempore ullam consequatur tempora sit
                        ratione ipsum sapiente distinctio.
                    </p>
                    <p class="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quisquam, quidem Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur amet et
                        animi
                        obcaecati, suscipit maxime error non odit quaerat sint hic tempore ullam consequatur tempora sit
                        ratione ipsum sapiente distinctio.
                    </p>
                </div>
                <a href="" class="px-4 py-3 text-base font-medium text-blue-600 bg-white rounded hover:bg-opacity-50">
                    Read More
                </a>
            </div>
        </div>
    </section>
    <section id="pricing"
        class="flex flex-col items-center justify-center w-full max-h-full px-5 py-10 space-y-4 text-blue-800 bg-center bg-no-repeat bg-cover sm:px-20 animate__animated"
        style="background-image: url('{{ asset('img/Image1.png') }}')">
        <h2 class="text-3xl font-bold">
            Popular Pricing Plan
        </h2>
        <p class="text-sm text-center">
            A reliable data solution with the best price for your business
        </p>
        @livewire('price-tab')
    </section>
    @livewire('order-form')
    <section id="use-case" class="flex flex-col justify-center w-full py-10 md:my-20">
        <div class="grid grid-cols-1 gap-10 px-5 md:grid-cols-3 md:px-20">
            <div class="py-5 place-self-start">
                <h2 class="text-2xl font-bold text-blue-900">Why Choose Us</h2>
                <p class="mt-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quidem.
                </p>
                <hr class="w-1/2 mt-16 border-4 border-blue-500 rounded-lg">
            </div>
            <div class="grid gap-16 px-10 py-5 cols-span-full md:col-span-2 grid-col-1 md:grid-cols-2">
                @livewire('reason-item')
                @livewire('reason-item')
                @livewire('reason-item')
                @livewire('reason-item')
            </div>

        </div>
    </section>
    <section id="coverage" class="w-full text-white bg-blue-700">
        <div class="flex w-full h-full px-5 py-10 space-x-10 sm:px-20">
            <div class="items-start max-w-sm py-5">
                <h2 class="text-2xl font-bold">Coverage</h2>
                <p class="mt-5">
                    Our coverage is around the globe.
                </p>
                <hr class="w-1/2 mt-10 border-4 border-white rounded-lg">
            </div>
            <div class="flex items-start justify-start w-full space-x-8 overflow-hidden">
                <x-coverage-item :number="'1'" :cname="'Wuse 2'" :address="'Abuja, Nigeria'" />
            </div>
        </div>
    </section>
    <section id="testimonial"
        class="flex items-center justify-center w-full overflow-hidden bg-center bg-no-repeat bg-cover "
        style="background-image: url('{{ asset('img/Image1.png') }}')">

        <div class="flex flex-col w-full h-full px-5 py-10 space-y-8 sm:px-20">
            <div class="max-w-sm py-5 place-self-start">
                <h2 class="text-2xl font-bold">Why Choose Us</h2>
                <p class="mt-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quidem.
                </p>
                <hr class="w-1/2 mt-10 border-4 border-blue-500 rounded-lg">
            </div>
            <div class="flex space-x-8 overflow-hidden">
                @livewire('testimonial')
                @livewire('testimonial')
                @livewire('testimonial')
                @livewire('testimonial')
            </div>
        </div>
    </section>
    <footer class="w-full px-5 py-20 sm:px-20 bg-gradient-to-tr from-blue-900 to-blue-500">
        <div class="flex flex-col items-start justify-start space-x-10 text-white md:flex-row">
            <div class="">
                <h1 class="mt-0 mb-5">
                    <a href="{{ route('home') }}"
                        class="text-2xl font-bold text-transparent transition duration-500 bg-gradient-to-r from-gray-200 to-blue-100 bg-clip-text hover:from-blue-500 ">
                        {{ config('app.name') }}
                    </a>
                </h1>
                <p class="text-sm leading-6 tracking-wide">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quidem.
                </p>
                <img src="{{ asset('img/ITXlogo.png') }}" alt="" class="mt-5">
            </div>
            <div class="grid w-full grid-cols-2 gap-10">
                <div class="w-full">
                    <h2 class="mb-5 text-2xl font-bold">
                        Contact Us
                    </h2>
                    <form action="" class="flex flex-col items-start w-full space-y-5">
                        <div class="flex flex-col w-full space-y-1 text-gray-800">
                            <label for="name" class="block text-sm font-medium leading-5 text-gray-200">
                                Name
                            </label>
                            <input id="name"
                                class="block w-full px-3 py-2 mt-1 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5"
                                type="text" placeholder="Jane Doe">
                        </div>
                        <div class="flex flex-col w-full space-y-1">
                            <label for="email" class="block text-sm font-medium leading-5 text-gray-200">
                                Email
                            </label>
                            <input id="email"
                                class="block w-full px-3 py-2 mt-1 text-gray-800 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5"
                                type="email" placeholder="jane.doe@gmail.com">
                        </div>
                        <div class="flex flex-col w-full space-y-1">
                            <label for="message" class="block text-sm font-medium leading-5 text-gray-200">
                                Message
                            </label>
                            <textarea id="message"
                                class="block w-full px-3 py-2 mt-1 text-gray-800 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-textarea focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5"
                                rows="4" placeholder="Hi there!"></textarea>
                        </div>
                        <div class="flex justify-end w-full">
                            <button
                                class="w-full px-4 py-2 text-sm font-medium text-blue-800 transition duration-150 ease-in-out bg-white border-0 rounded-md hover:bg-opacity-70 focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
                <div class="flex flex-col space-y-5">
                    <h2 class="text-2xl font-bold">
                        Address
                    </h2>
                    <p class="mt-5">
                        No 34, Burundi street, Wuse Zone 5, Abuja, Nigeria
                    </p>
                    <span>
                        Phone: +234 814-295-0096
                    </span>
                    <span>
                        Geolocation: 6.4 miles
                    </span>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-between w-full space-y-5 text-white">
            <div class="">
                <h6 class="mb-5 text-sm">Connect with us</h6>
                <div class="flex items-center justify-start space-x-2">
                    <a href="">
                        <img src="{{ asset('img/facebook.png') }}" class="w-10 h-10 p-1 bg-white border rounded-full"
                            alt="">
                    </a>
                    <a href="">
                        <img src="{{ asset('img/twitter.png') }}" class="w-8 h-8" alt="">
                    </a>
                    <a href="">
                        <img src="{{ asset('img/instagram.png') }}" class="w-10 h-10 p-1" alt="">
                    </a>
                    <a href="">
                        <img src="{{ asset('img/whatsapp.png') }}" class="w-8 h-8" alt="">
                    </a>
                </div>
            </div>
            <span class="self-end text-sm">
                &copy; {{ now()->year }} Copyrights {{ config('app.name') }} | all rights reserved
            </span>
        </div>
    </footer>


    @livewireScripts
</body>

</html>
