<div
    class="flex flex-col items-center justify-start hover:bg-blue-900 group w-60 py-5 px-5 bg-white rounded-lg space-y-6 transform hover:-translate-y-1 hover:scale-110 transition duration-500 ease-in-out">
    {{-- Be like water. --}}
    <span class="flex items-start text-5xl font-bold group-hover:text-white transition duration-500 ease-in-out">
        {{ $quantity }} <span class="text-sm">Mbps</span>
    </span>
    <img src={{ asset('img/server.png') }} alt="server icon" class="h-24 w-24">
    <div class="flex flex-col items-center justify-center text-gray-400">
        <span class="font-bold text-4xl tracking-tight flex items-start">
            <span>N</span>{{ $price }}<span class="text-xs">.00</span>
        </span>
        <span class="text-xs te">by Month</span>
    </div>
    <ul
        class="text-sm font-medium flex flex-col items-center justify-start space-y-2 group-hover:text-white transition duration-500 ease-in-out">
        <li>
            Unlimited Downloads
        </li>
        <li>
            Seamless Connectivity
        </li>
        <li>
            24/7 Support
        </li>
        <li>
            Instant Access
        </li>
        <li>
            Affordable Pricing
        </li>
    </ul>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-sm" wire:click="sendData">
        Order Now
    </button>
</div>
