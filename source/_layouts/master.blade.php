<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
    >
    <meta http-equiv="x-ua-compatible"
          content="ie=edge"
    >
    <meta name="description"
          content="{{ $page->description ?? $page->siteDescription }}"
    >

    <meta property="og:site_name"
          content="{{ $page->siteName }}"
    />
    <meta property="og:title"
          content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"
    />
    <meta property="og:description"
          content="{{ $page->description ?? $page->siteDescription }}"
    />
    <meta property="og:url"
          content="{{ $page->getUrl() }}"
    />
    <meta property="og:image"
          content="/assets/img/logo.png"
    />
    <meta property="og:type"
          content="website"
    />

    <meta name="twitter:image:alt"
          content="{{ $page->siteName }}"
    >
    <meta name="twitter:card"
          content="summary_large_image"
    >

    @if ($page->docsearchApiKey && $page->docsearchIndexName)
        <meta name="generator"
              content="tighten_jigsaw_doc"
        >
    @endif

    <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

    <link rel="home"
          href="{{ $page->baseUrl }}"
    >
    <link rel="icon"
          href="/favicon.ico"
    >

    @stack('meta')

    @if ($page->production)
        <!-- Insert analytics code here -->
    @endif

    <link rel="stylesheet"
          href="{{ mix('css/main.css', 'assets/build') }}"
    >

    @if ($page->docsearchApiKey && $page->docsearchIndexName)
        <link rel="stylesheet"
              href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css"
        />
    @endif
</head>

<body class="flex flex-col justify-between min-h-screen bg-main-50 text-slate-800 leading-normal font-sans">
<div id="app">
    <header class="flex items-center shadow bg-white border-b h-24 mb-8 py-4"
            role="banner"
    >
        <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
            <div class="flex items-center">
                <a href="/"
                   title="{{ $page->siteName }} home"
                   class="inline-flex items-center no-underline"
                >
                    <h1 class="text-lg md:text-2xl text-main-500 font-bold hover:text-main-600 my-0 pr-4">{{ $page->siteName }}</h1>
                </a>
            </div>

            <div class="flex flex-1 justify-end items-center text-right md:pl-10">
                @if ($page->docsearchApiKey && $page->docsearchIndexName)
                    @include('_nav.search-input')
                @endif
            </div>
        </div>

        @yield('nav-toggle')
    </header>

    <main role="main"
          class="w-full flex-auto"
    >
        @yield('body')
    </main>





    <footer class=""
            role="contentinfo"
    >
        <section class="bg-slate-700 mt-12 p-4 text-slate-50">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-4xl lg:max-w-5xl xl:max-w-6xl mx-auto">
                <section class="p-4 bg-main-700">
                    <h4 class="font-medium text-lg text-white">Kontakt</h4>
                    <ul class="list-none text-sm">
                        <li>thermo-control Körtvélyessy GmbH</li>
                        <li>Grünspechtweg 19</li>
                        <li>13469 Berlin, Deutschland</li>
                        <li class="mt-2">T: +49 (0)30 40 586 940</li>
                        <li>F: +49 (0)30 40 586 941</li>
                        <li>E: info@testware.io</li>
                    </ul>
                </section>
                <section class="flex justify-center items-center">
                    <p class="text-5xl text-main-500">testWare</p>
                </section>

                <section id="vue-callback">
                    <h4 class="font-medium text-lg text-white">Rückruf anfordern</h4>
                    <Callbackform/>
                </section>
            </div>
        </section>
        <section class="bg-slate-200 m-0 p-4 text-xs font-sans ">
            <div class="grid grid-cols-1 grid-rows-2 sm:grid-cols-2 sm:grid-rows-1 items-center max-w-4xl lg:max-w-5xl xl:max-w-6xl mx-auto">
                <div class="flex flex-row justify-between sm:justify-start py-4 sm:py-1 text-sm sm:text-xs">
                    <a href="/datenschutz"
                       class="sm:mr-2 text-main-700 {{ $page->isActive('/datenschutz') ? 'active text-main-600 underline' : '' }}"
                       title="Unsere Datenschutzerklärung"
                    >Datenschutz
                    </a>
                    <a href="/datenschutz#cookieless"
                       class="sm:mr-2 text-main-700 {{ $page->isActive('/datenschutz') ? 'active text-main-600 underline' : '' }}"
                       title="Wir möchten Sie nicht tracken!"
                    >Ohne Cookies
                    </a>
                    <a href="/impressum"
                       class="sm:mr-2 text-main-700 {{ $page->isActive('/impressum') ? 'active text-main-600 underline' : '' }}"
                       title="Impressum"
                    >Impressum
                    </a>
                    <a href="http://ec.europa.eu/consumers/odr/"
                       title="ODR-Platform"
                       target="_blank"
                       class="text-main-700"
                    >ODR-Platform
                    </a>
                </div>
                <div class="flex sm:mr-2 justify-center sm:justify-end">
                    <span> &copy; thermo-control Körtvélyessy GmbH </span>
                </div>
            </div>
        </section>
    </footer>
</div>
<script src="{{ mix('js/main.js', 'assets/build') }}"></script>
@stack('scripts')
</body>
</html>
