---
title: Komplette Dokumentation der testWare v1.7x
description: Die testWare ist eine flexible, zentrale Geräteverwaltung. Hier ist die komplette Dokumentation einsehbar. Von der Installation bis zum eigentlichen Gebrauch.
readingtime: < 1 min
---
@extends('_layouts.main')

@section('body')
    <section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">

        <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">

            <div class="mt-8">
                <h1 id="intro-docs-haupseite">{{ $page->siteName }}</h1>
                <h2 id="intro-subheader"
                    class="font-light mt-4"
                >{{ $page->siteDescription }}</h2>

                <p class="text-lg">Für erste Schritte bis komplexe API Operationen.
                    <br class="hidden sm:block">Hier finden Sie den kompletten Überblick.</p>

                <a href="/docs/getting-started"
                   title="{{ $page->siteName }} getting started"
                   class="button-main my-10"
                >Zur Übersicht
                </a>
            </div>

            <x-logo class="mx-auto mb-6 lg:mb-0 w-52 text-main-500"/>

        </div>

        <hr class="block my-8 border lg:hidden">

        <div class="md:flex -mx-2 -mx-4">
            <div class="mb-8 mx-3 px-2 md:w-1/3">

                <h3 id="intro-installation"
                    class="text-2xl text-main-900 mb-0"
                >Installation</h3>

                <p>Die Installation besteht aus zwei Schritten. Als erstes muss die Infrastruktur aus Web- und Datenbankserver aufgestellt werden. Die Instanz kann dann über ...</p>
                <a href="/docs/installation-main/"
                   class="button-main"
                >mehr
                </a>
            </div>

            <div class="mb-8 mx-3 px-2 md:w-1/3">

                <h3 id="intro-operation"
                    class="text-2xl text-main-900 mb-0"
                >Verwaltung</h3>

                <p>Ist die Installation abgeschlossen, gilt es die Umgebung der testWare zu gestalten. Das bedeutet, der / die Standorte, Gebäude. Produkte etc. müssen definiert ...</p>
                <a href="/docs/verwaltung-main/"
                   class="button-main"
                >mehr
                </a>
            </div>

            <div class="mx-3 px-2 md:w-1/3">
                <h3 id="intro-mix"
                    class="text-2xl text-main-900 mb-0"
                >REST API</h3>

                <p>Von Hause aus ist die testWare mit einer mächtigen REST-full API ausgestatt, über deren Endpunkte viele Operationen automatisiert erfolgen ...</p>
                <a href="/docs/api-main/"
                   class="button-main"
                >mehr
                </a>
            </div>
        </div>
    </section>
@endsection
