<div class="flex flex-col items-start flex-none w-full max-w-xs overflow-hidden duration-1000 ease-in-out transform bg-white rounded-lg shadow-lg sm:max-w-sm justify-betweenrounded-md"
    style="transform: translateX({{ $percent }}%)">
    <div class="flex flex-col items-start justify-start p-8">
        <span class="bg-gradient-to-tr from-green-400 to-blue-700 bg-clip-text">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                class="w-8 h-8 text-green-500 transform rotate-180 fill-current">
                <path
                    d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3 0 1.656 1.306 3 2.916 3 2.915 0 .972 5.799-2.916 5.799v1.4c6.939.001 9.658-13.199 2.916-13.199zm8.4 0c-1.609 0-2.915 1.343-2.915 3 0 1.656 1.306 3 2.915 3 2.916 0 .973 5.799-2.915 5.799v1.4c6.938.001 9.657-13.199 2.915-13.199z" />
            </svg>
        </span>
        <p
            class="text-xl font-semibold text-center text-transparent bg-gradient-to-tr from-green-400 to-blue-700 bg-clip-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quisquam, quidem.
        </p>
    </div>
    <div class="flex items-center justify-start w-full px-8 py-4 space-x-4 bg-gradient-to-tr from-green-400 to-blue-700">
        <div class="w-12 h-12 bg-center bg-no-repeat bg-cover border-4 border-white rounded-full"
            style="background-image: url('{{ asset('img/user.svg') }}')">

        </div>
        <div class="flex flex-col items-start justify-between">
            <h2 class="font-bold tracking-tight text-white">Abdullahi Jimoh</h2>
            <h4 class="font-medium text-gray-200">Software Developer</h4>
        </div>
    </div>
</div>
