@extends('_layouts.main')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
    <!-- responsive menu -->
    <nav x-show="showResonsiveMenu"
         class="lg:hidden bg-slate-100 -mt-8"
         x-transition:enter="transition duration-600"
         x-transition:enter-start="transform translate-x-full"
         x-transition:enter-end="transform translate-x-0"
         x-transition:leave="transition duration-300"
         x-transition:leave-start="transform"
         x-transition:leave-end="transform -translate-x-full"
         x-cloak
    >
        <header class="py-3 px-2 flex items-center justify-between bg-main-700 mb-6"><span class="text-lg text-slate-50">Dokumentation</span><code class="text-xxs sm:text-xs text-main-100 bg-slate-700 rounded-full px-2 py-1">Version: 1.7x</code></header>
        <aside class=" px-1 py-2">
            @include('_nav.menu', ['items' => $page->navigation])
        </aside>

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
