<div class="flex items-center justify-between px-5 md:px-10 fixed w-full bg-white z-50">
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <div class="bg-center bg-no-repeat bg-contain h-16 w-16"
        style="background-image: url({{ asset('img/ITXlogo.png') }})">
    </div>
    <div
        class="absolute left-0 top-16 w-full mx-auto shadow-sm rounded-xl p-5 flex flex-col font-semibold text-gray-700 text-lg border md:static md:flex md:border-none md:shadow-none md:min-w-min md:flex-row md:justify-center md:space-x-5 md:text-sm {{ $isHidden ? '' : 'hidden' }}">
        <a href="" class="hover:text-gray-900">About</a>
        <a href="" class="hover:text-gray-900">Pricing</a>
        <a href="" class="hover:text-gray-900">Use Cases</a>
        <a href="" class="hover:text-gray-900">Product</a>
        <a href="" class="hover:text-gray-900">Resources</a>
    </div>
    <div class="flex items-center justify-end space-x-2">
        <a href="" class="px-3 py-2 text-xs bg-blue-500 rounded-md text-white">Login</a>
        <button class="focus:outline-none md:hidden" wire:click="toggle">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>
</div>
