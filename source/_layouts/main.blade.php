<!DOCTYPE html>
<html lang="de"
      style="scroll-behavior: smooth;"
>
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

    <meta property="og:locale"
          content="de_DE"
    />

    <meta property="og:locale:alternate"
          content="en_US"
    />

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
          content="{{ $page->pageImage??'https://docs.testware.io/assets/img/docs_logo_1.7.webp' }}"
    />
    <meta property="og:type"
          content="website"
    />

    <meta property="twitter:image"
          content="{{ $page->pageImage??'https://docs.testware.io/assets/img/docs_logo_1.7.webp' }}"
    />

    <meta name="twitter:image:alt"
          content="{{ $page->siteName }}"
    />

    <meta name="twitter:site"
          content="@ThermoControlKo"
    />

    <meta name="twitter:label1"
          content="Geschätzte Lesezeit"
    />

    <meta name="twitter:data1"
          content="{{ $page->readingtime??'2 Minuten' }}"
    />

    <meta name="twitter:card"
          content="summary_large_image"
    />

    @if ($page->docsearchApiKey && $page->docsearchIndexName)
        <meta name="generator"
              content="tighten_jigsaw_doc"
        />
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

    <style>

    </style>
</head>

<body id="top">
<div id="app"
     class="flex flex-col justify-between min-h-screen bg-main-50 text-slate-800 leading-normal font-sans"
     x-data="{ showResonsiveMenu: false, showsubmen: false, shrinkNav: false }"
     x-on:scroll.window="shrinkNav = window.scrollY > 105"
>
    <header class="flex items-center shadow bg-white border-b h-24 mb-8 py-4"
            role="banner"
    >

        <div class="container flex items-center justify-between max-w-8xl mx-auto px-4 lg:px-8">
            <div class="flex items-center">
                <a href="/"
                   title="{{ $page->siteName }} home"
                   class="inline-flex items-center no-underline text-main-700"
                >
                    <span class="text-3xl font-bold text-main-700">testWare</span>
                </a>

            </div>
            <header class="hidden lg:block my-0">
                <span class="text-xl font-sans font-semibold">Dokumentation</span><br>
                <code class="text-xxs sm:text-xs text-main-100 bg-slate-700 rounded-full px-2 py-1">Version: 1.7x</code>
            </header>
        </div>

        <nav class="fixed bottom-0 right-0 sm:bottom-6 sm:right-4 bg-main-700 rounded px-2 py-1 z-10 border border-main-100"
             x-show="shrinkNav"
        >
            <a href="#top"
               class="no-underline text-slate-50 hover:text-slate-50 hover:underline"
               onclick="document.getElementById('docsnavselect').value = 'top'"
            >top</a>
        </nav>

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

                <section class="p-4 bg-main-800">
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
                    <a href="https://testware.io" target="_blank" class="text-5xl font-bold text-main-500 no-underline">testWare</a>
                </section>

                <section id="vue-callback">
                    <h4 class="font-medium text-lg text-white">Rückruf anfordern</h4>
                    <Callbackform/>
                </section>

            </div>

        </section>

        <section class="bg-slate-200 m-0 p-4 text-xs font-sans ">

            <div class="grid grid-cols-1 grid-rows-2 sm:grid-cols-2 sm:grid-rows-1 items-center max-w-4xl lg:max-w-5xl xl:max-w-6xl mx-auto">

                <div class="flex flex-col space-y-3 sm:space-y-0 sm:flex-row text-center justify-between sm:justify-start py-4 sm:py-1 text-sm sm:text-xs">
                    <a href="/datenschutz"
                       class="sm:mr-2 text-main-800 {{ $page->isActive('/datenschutz') ? 'text-main-500 no-underline' : '' }}"
                       title="Unsere Datenschutzerklärung"
                    >Datenschutz
                    </a>
                    <a href="/impressum"
                       class="sm:mr-2 text-main-800 {{ $page->isActive('/impressum') ? 'text-main-500 no-underline' : '' }}"
                       title="Impressum"
                    >Impressum
                    </a>
                    <a href="https://ec.europa.eu/consumers/odr/"
                       title="ODR-Platform"
                       target="_blank"
                       class="text-main-800"
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
