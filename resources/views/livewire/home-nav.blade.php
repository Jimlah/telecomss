<nav class="fixed z-50 flex items-center justify-between w-full px-5 md:px-10">
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <h1>
        <a href="{{ route('home') }}"
            class="text-2xl font-bold text-transparent transition duration-500 bg-gradient-to-r from-blue-900 to-blue-500 bg-clip-text hover:from-blue-500 ">
            {{ config('app.name') }}
        </a>
    </h1>
    <div
        class="absolute left-0 top-16 w-full mx-auto shadow-sm rounded-xl p-5 flex flex-col font-semibold text-gray-500 text-lg border md:static md:flex md:border-none md:shadow-none md:min-w-min md:flex-row md:justify-center md:space-x-5 md:text-sm {{ $isHidden ? '' : 'hidden' }}">
        <x-home-nav-link href="#home">
            Home
        </x-home-nav-link>
        <x-home-nav-link href="#about">
            About
        </x-home-nav-link>
        <x-home-nav-link href="#pricing">
            Pricing
        </x-home-nav-link>
        <x-home-nav-link href="#use-case">
            Why Chose us
        </x-home-nav-link>
        <x-home-nav-link href="#use-case">
            Coverage
        </x-home-nav-link>
        <x-home-nav-link href="#testimonial">
            Testimonials
        </x-home-nav-link>
        <x-home-nav-link href="#resource">
            Contact us
        </x-home-nav-link>
    </div>
    <div class="flex items-center justify-end space-x-4">
        <a href="" class="px-6 py-2 text-lg font-medium text-white bg-blue-500 rounded-md md:text-sm">Login</a>
        <button class="focus:outline-none md:hidden" wire:click="toggle">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>
</nav>
