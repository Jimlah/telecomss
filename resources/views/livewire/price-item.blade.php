<div
    class="relative max-w-sm bg-white bg-opacity-80 w-full py-10 rounded-lg items-center justify-center px-10 md:px-16 flex flex-col shadow-md space-y-10 transition delay-150 duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 group hover:bg-blue-500 hover:bg-opacity-80">
    <div
        class="absolute top-0 right-0 p-2 bg-blue-500 text-sm font-bold tracking-wider rounded-tr-xl rounded-bl-lg text-white group-hover:bg-white group-hover:text-blue-500 transition delay-150 duration-300 ease-in-out">
        - 10% off
    </div>
    <h2
        class="font-bold text-blue-900 capitalize text-xl text-opacity-90 group-hover:text-white transition delay-150 duration-300 ease-in-out">
        Standard Plans</h2>
    <div style="background-image: url('https://cdn-icons.flaticon.com/png/512/2704/premium/2704286.png?token=exp=1634742301~hmac=8f0214b58cea61f9ce7d5d3d64ec2a96')"
        class="w-40 h-40 bg-center bg-cover bg-no-repeat"></div>
    <div>
        <h2
            class="text-4xl text-opacity-90 font-bold tracking-tight text-blue-900 flex items-end group-hover:text-white transition delay-150 duration-300 ease-in-out">
            <span>&#8358;{{ $price }}</span><span class="text-sm">.00</span>
        </h2>
    </div>
    <ul
        class="text-sm font-medium text-blue-700 tracking-wide flex flex-col space-y-2 justify-center items-center group-hover:text-white text-center transition delay-150 duration-300 ease-in-out">
        <li>99.9% uptime</li>
        <li>Low response time</li>
        <li>Unlimited <span class="font-normal">bandwidth and domains</span> </li>
        <li>99.9% uptime</li>
    </ul>
    <button
        class="w-full text-center bg-blue-500 font-medium tracking-wider text-sm text-white py-5 rounded bg-opacity-90 hover:bg-opacity-100 group-hover:text-blue-500 group-hover:bg-white transition delay-150 duration-300 ease-in-out"
        wire:click="sendData">
        Get
        Started</button>
</div>
