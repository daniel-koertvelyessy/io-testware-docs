<div class="w-full">
    <div class="px-5 pt-4 shadow-lg text-gray-100 text-sm font-mono bg-gray-800  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
        <div class="top mb-2 flex">
            <div class="h-3 w-3 bg-red-500 rounded-full"></div>
            <div class="ml-2 h-3 w-3 bg-orange-300 rounded-full"></div>
            <div class="ml-2 h-3 w-3 bg-green-500 rounded-full"></div>
        </div>
        <div class="mt-4 flex flex-col items-start">
            {{ $slot }}
        </div>
    </div>
</div>