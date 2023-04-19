{{--<button class="flex justify-center items-center  h-10 mr-4 px-5 lg:hidden focus:outline-none"
    onclick="navMenu.toggle()"
>
    <x-toggle class="h-10 text-main-500 hover:text-main-200" />
</button>

@push('scripts')
<script>
    const navMenu = {
        toggle() {
            const menu = document.getElementById('js-nav-menu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('lg:block');
            document.getElementById('js-nav-menu-hide').classList.toggle('hidden');
            document.getElementById('js-nav-menu-show').classList.toggle('hidden');
        },
    }
</script>
@endpush
--}}


<button class="flex justify-center items-center h-10 lg:hidden focus:outline-none mr-4 px-5"
        role="button"
        aria-label="Toggle mobile navigation"
        x-on:click="showResonsiveMenu = !showResonsiveMenu"
>
    <x-toggle class="h-10 text-main-500 hover:text-main-200"/>
</button>
