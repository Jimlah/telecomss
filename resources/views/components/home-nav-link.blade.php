<a {{ $attributes->merge(['class' => 'relative group flex flex-col items-center align-bottom']) }}>
    <span class="invisible border-2 border-blue-900 rounded-full group-hover:visible"></span>
    <span class="group-hover:text-gray-900">{{ $slot }}</span>
</a>
