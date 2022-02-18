<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased">
    <div x-data="{ open: false }" @keydown.window.escape="open = false">

        <div x-show="open" class="fixed inset-0 z-40 flex md:hidden" x-ref="dialog" aria-modal="true" style="display: none;">

            <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"  class="fixed inset-0 bg-gray-600 bg-opacity-75" @click="open = false" aria-hidden="true" style="display: none;">
            </div>

            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="relative max-w-xs w-full bg-white pt-5 pb-4 flex-1 flex flex-col" style="display: none;">

                <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"  class="absolute top-0 right-0 -mr-12 pt-2" style="display: none;">
                    <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" @click="open = false">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <div class="flex-shrink-0 px-4 flex items-center">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg" alt="Workflow">
                </div>
                <div class="mt-5 flex-1 h-0 overflow-y-auto">
                    <nav class="px-2 space-y-1">

                        <a href="#" class="bg-gray-100 text-gray-900 group rounded-md py-2 px-2 flex items-center text-base font-medium" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <svg class="text-gray-500 mr-4 flex-shrink-0 h-6 w-6" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;text-gray-500&quot;, Default: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Dashboard
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-base font-medium" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            Team
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-base font-medium" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                            </svg>
                            Projects
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-base font-medium" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/calendar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Calendar
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-base font-medium" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/inbox" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                            </svg>
                            Documents
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-base font-medium" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/chart-bar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            Reports
                        </a>

                    </nav>
                </div>
            </div>

            <div class="flex-shrink-0 w-14">
                <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
        </div>


        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="border-r border-gray-200 pt-5 flex flex-col flex-grow bg-white overflow-y-auto">
                <div class="flex-shrink-0 px-4 flex items-center">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg" alt="Workflow">
                </div>
                <div class="flex-grow mt-5 flex flex-col">
                    <nav class="flex-1 px-2 pb-4 space-y-1">

                        <a href="#" class="bg-gray-100 text-gray-900 group rounded-md py-2 px-2 flex items-center text-sm font-medium" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <svg class="text-gray-500 mr-3 flex-shrink-0 h-6 w-6" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;text-gray-500&quot;, Default: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Dashboard
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-sm font-medium" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            Team
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-sm font-medium" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                            </svg>
                            Projects
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-sm font-medium" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/calendar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Calendar
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-sm font-medium" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/inbox" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                            </svg>
                            Documents
                        </a>

                        <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-sm font-medium" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" x-state-description="undefined: &quot;text-gray-500&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-500&quot;" x-description="Heroicon name: outline/chart-bar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            Reports
                        </a>

                    </nav>
                </div>
            </div>
        </div>

        <div class="md:pl-64">
            <div class="max-w-4xl mx-auto flex flex-col md:px-8 xl:px-0">
                <div class="sticky top-0 z-10 flex-shrink-0 h-16 bg-white border-b border-gray-200 flex">
                    <button type="button" class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden" @click="open = true">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="h-6 w-6" x-description="Heroicon name: outline/menu-alt-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                        </svg>
                    </button>
                    <div class="flex-1 flex justify-between px-4 md:px-0">
                        @if(env('DOCSEARCH_API_KEY'))
                        <div class="flex-1 flex">
                            <form class="w-full flex md:ml-0" action="#" method="GET">
                                <label for="search-field" class="sr-only">Search</label>
                                <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center">
                                        <svg class="h-5 w-5" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input id="search-field" class="block h-full w-full border-transparent py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search" type="search" name="search">
                                </div>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>

                <main class="flex-1">
                    <div class="py-6">
                        <div class="px-4 sm:px-6 md:px-0">
                            <h1 class="text-2xl font-semibold text-gray-900">@yield('maintitle')</h1>
                        </div>
                        <div class="px-4 sm:px-6 md:px-0">
                            @yield('content')
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    </body>
</html>
