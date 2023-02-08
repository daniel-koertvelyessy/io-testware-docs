@extends('_layouts.main')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
    <!-- responsive menu -->
    <nav x-show="showResonsiveMenu"
         class="lg:hidden bg-slate-100 -mt-8 px-1 pt-2"
         x-transition:enter="transition duration-600"
         x-transition:enter-start="transform translate-x-full"
         x-transition:enter-end="transform translate-x-0"
         x-transition:leave="transition duration-300"
         x-transition:leave-start="transform"
         x-transition:leave-end="transform -translate-x-full"
         x-cloak
    >
        @include('_nav.menu', ['items' => $page->navigation])
    </nav>
    <section class="container max-w-8xl mx-auto px-6 md:px-8 pb-4">
        <div class="flex flex-col lg:flex-row">
            <nav id="js-nav-menu"
                 class="nav-menu hidden lg:block"
            >
                @include('_nav.menu', ['items' => $page->navigation])
            </nav>
            <div class="DocSearch-content w-full lg:w-3/5 break-words pb-16 lg:pl-4"
                 v-pre
            >
                @yield('content')
            </div>
        </div>
    </section>
@endsection
