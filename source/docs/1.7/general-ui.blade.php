---
title: Getting Started
description: Getting started with Jigsaw's docs starter template is as easy as 1, 2, 3.
reading-time: ~ 5min
---
@extends('_layouts/documentation')
@section('content')

    <h1 id="general-ui-header">Die Oberfläche</h1>

    <p>Die grafische Oberfläche der testWare lässt sich in 4 Bereiche einteilen:</p>

    <img class="block m-auto"
         src="/assets/img/screenshots/Screen_Overview_Sections.png"
         alt="Aufteilung der grafischen Oberfläche der testWare in 4 Bereiche"/>

    <hr class="my-10">
    <ol class="list-inside">
        <li>
            <a href="#ui-feature-topnavigation">Kopfnavigation</a>
        </li>
        <li>
            <a href="#ui-feature-sidenavigation">Seitennavigation</a>
        </li>
        <li>
            <a href="#ui-feature-mainview">Hauptteil</a>
        </li>
        <li>
            <a href="#">Fußzeile</a>
        </li>
    </ol>


    <h2 id="ui-feature-topnavigation">1. Kopfnavigation</h2>
    <img src="/assets/img/screenshots/screen_top-nav-sections.png"
         alt="">
    <p>Die Kopfnavigation umfasst neben dem Kachel-Symbol für die Seitenleiste drei Bereiche:</p>

    <ol class="list-inside">
        <li><a href="#ui-feature-modulnav">Modulmenü</a></li>
        <li><a href="#ui-feature-searchnav">Suchfeld</a></li>
        <li><a href="#ui-feature-usernav">Benutzermenü</a></li>
    </ol>

    <h3 id="ui-feature-modulnav">Modulmenü</h3>
    <img src="/assets/img/screenshots/screen_top-nav-section_module.png"
         class="h-14"
         alt="Detailansicht der Modulvavigation">
    <p>Das Modulmenü passt sich entsprechend des gewählten Moduls dynamisch an. Sie besteht aus einzelnen Menüpunkten und sogenannten Dropdown-Menüs. Das sind Menüfelder, die auf ein Objekt ausgerichtet sind. Als Beispiel ist in dem Bild oben die Kopfnavigation für die Geräteverwaltung zu sehen.</p>

    <h3 id="ui-feature-searchnav">Suchfeld</h3>
    <x-doc-figure>
        <img src="/assets/img/animations/screen_top-nav-section_search_autocomplete.webp"
             alt="Autovervollständigung der Suche"
             class="w-96"
        >
        <figcaption class="mt-0 pt-0">Das Suchfeld kann neben der erwarteten Suchfunktion auch Vorschläge für den bereits eingegebenen Begriff auflisten.</figcaption>
    </x-doc-figure>


    <h3 id="ui-feature-usernav">Benutzermenü</h3>
    <x-doc-figure>
        <figcaption class="mt-0 pt-0">Das Benutzermenü ist ein Dropdownmenü, welches folgende Punkte hat. </figcaption>
        <img src="/assets/img/screenshots/screen_top-nav-section-user-menu.png"
             class="w-96"
             alt="Benutzermenü">
    </x-doc-figure>

    <hr class="my-10">

    <h2 id="ui-feature-sidenavigation">2. Seitennavigation</h2>
    <p>Das Seitenmenü enthält die Navigation zu allen Ansichten/Modulen der testWare. Sie ist in zwei Bereiche aufgeteilt. Der obige ist für Module gedacht, mit denen man öfter arbeiten wird. Wohin der untere Bereich für die Einrichtung der testWare zuständig ist..</p>
    <section class="flex items-center my-2">
        <x-toggle class="w-16 mr-4 text-main-500"/>
        <p>Es lässt sich mit einem Klick auf das Kachel-Symbol ein- und ausklappen. Menüpunkte mit einem
            <x-icons.dotsv class="h-5 text-blue-500 inline mx-2.5"/>
            enthalten Unterpunkte und lassen sich ausklappen.
        </p>
    </section>


    <p>Über den Schalter
        <kbd>Menü fixieren</kbd> wird ein Merker in dem Browser gesetzt, der das Seitenmenü offen hält, oder beim Laden einer Ansicht automatisch ausblendet.
    </p>

    <hr class="my-10">

    <h2 id="ui-feature-mainview">3. Hauptteil</h2>

    <p>Im Hauptteil werden die einzelnen Ansichten der Module geladen und bildet den eigentlichen Arbeitsbereich. Als Ansicht gilt eine Seite, zum Beispiel zum Anlegen eines Produktes.</p>
    <p>Durch das Einklappen des seitlichen Menüs wird die Fläche vergrößert.</p>

    <hr class="my-10">

    <h2 id="ui-feature-mainview">4. Fußzeile</h2>
    <p>Im Idealfall ist hier nichts zu sehen. Es können aber fehlerhafte Datensätze oder fehlende Voraussetzungen existieren. Dadurch kann der fehlerfreie Betrieb der testWare eingeschränkt sein. In diesem Fall werden hier Meldungen sichtbar.</p>
@endsection