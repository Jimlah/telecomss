<div
    class="w-full border top-0 h-screen bg-gray-100 bg-opacity-50 fixed flex items-center justify-center {{ $hidden ? 'hidden' : '' }}">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="relative border w-full max-w-sm px-5 py-5 rounded-md overflow-hidden bg-white mx-5">
        <button class="absolute focus:outline-none border top-0 right-0" wire:click="close">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div class="flex flex-col space-y-2">
            <h2 class=" font-bold text-2xl">Contact Form</h2>
            <form action="" method="POST" class="flex flex-col justify-start w-full space-y-4" wire:submit.prevent="orderData">
                <div class="flex flex-col justify-start">
                    <label for="firstname" class="font-bold text-base"> First Name</label>
                    <input type="text" name="firstname" wire:model="firstname"
                        class="focus:outline-none rounded-md focus:border-none focus:ring-blue-500">
                </div>
                <div class="flex flex-col justify-start">
                    <label for="lastname" class="font-bold text-base"> Last Name</label>
                    <input type="text" name="lastname" wire:model="lastname"
                        class="focus:outline-none rounded-md focus:border-none focus:ring-blue-500">
                </div>
                <div class="flex flex-col justify-start">
                    <label for="email" class="font-bold text-base">Email</label>
                    <input type="text" name="email" wire:model="email"
                        class="focus:outline-none rounded-md focus:border-none focus:ring-blue-500">
                </div>
                <div>
                    <button
                        class="flex items-center justify-center w-full bg-blue-500 hover:bg-blue-700 rounded-md py-2.5 font-bold text-base text-white">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
