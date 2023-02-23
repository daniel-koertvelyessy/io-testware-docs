<div class="overflow-hidden mt-3 lg:mt-6"
     x-data="{showoptionals: false}"
>
    <button class="text-lg font-medium leading-6 text-main-500 bg-main-50 underline pl-2 decoration-dashed z-10"
            x-on:click="showoptionals = !showoptionals"
    >Optionale Felder
    </button>
    <div class=" px-4 py-5 sm:p-0 bg-white shadow z-0 mt-3"
         x-show="showoptionals"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="transform -translate-y-1/2"
         x-transition:enter-end="transform translate-y-0"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start=" transform translate-y-0"
         x-transition:leave-end="-translate-y-1/2"
         x-cloak
    >
        {{ $slot }}
    </div>
</div>