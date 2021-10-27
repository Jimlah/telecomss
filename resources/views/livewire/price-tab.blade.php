<div class="flex flex-col items-center justify-center space-y-16">
    {{-- The Master doesn't talk, he acts. --}}
    <div class="bg-white overflow-hidden rounded">
        @foreach ($tabs as $tab)
            <button
                class="px-6 py-3 focus:outline-none hover:bg-blue-400 hover:text-white {{ $selectedTab == $tab ? 'bg-blue-500 text-white' : '' }}"
                wire:click=changeTab('{{ $tab }}')>
                {{ $tab }}
            </button>
        @endforeach
    </div>
    <div class="flex items-center flex-col justify-start space-y-5 md:flex-row md:space-y-0 md:space-x-10 ">
        @livewire('price-item', ['price' => "20,000" , "quantity" => "1"])
        @livewire('price-item', ['price' => "35,000" , "quantity" => "2"])
        @livewire('price-item', ['price' => "35,000" , "quantity" => "2"])
    </div>
</div>
