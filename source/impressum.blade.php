---
title: Komplette Dokumentation der testWare v1.7x
description: Die testWare ist eine flexible, zentrale Geräteverwaltung. Hier ist die komplette Dokumentation einsehbar. Von der Installation bis zum eigentlichen Gebrauch.
readingtime: < 1 min
---
@extends('_layouts.main')

@section('body')

    <h1 class="sm:text-4xl text-5xl">Impressum</h1>

    <section class="grid grid-cols-1 sm:grid-cols-4 gap-4">
        <article class="sm:col-span-3">
            <p class="text-3xl">thermo-control Körtvélyessy GmbH</p>
            <p>Grünspechtweg 19<br> 13469 Berlin<br> Deutschland</p>
            <p>Telefon: +49.30.40586940</p>
            <p>Fax: +49.30.40586941</p>
            <p>E-Mail: info@thermo-control.com</p>
            <p>Geschäftsführer:<br> Daniel Körtvélyessy</p>
            <p>Handelsregister: Amtsgericht Berlin, HRB 108604 B</p>
            <p>Umsatzsteuer-Identifikationsnummer: DE 120051020</p>
        </article>
        <figure class="sm:col-span-1 hidden sm:flex">
            <img src="assets/img/logo_thermo-control.svg"
                 class="h-52"
                 alt="Logo thermo-control Körtvélyessy GmbH"
            >
        </figure>
    </section>
    <section class="p-6 border border-slate-100 rounded-xl">
        <p>Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit, die Sie hier finden
            <a href="http://ec.europa.eu/consumers/odr/"
               target="_blank"
               rel="noopener"
               data-cke-saved-href="http://ec.europa.eu/consumers/odr/"
            >http://ec.europa.eu/consumers/odr/
            </a>
           .<br> Wir sind bereit, an einem außergerichtlichen Schlichtungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.<br> Zuständig ist die Allgemeine Verbraucherschlichtungsstelle des Zentrums für Schlichtung e.V., Straßburger Straße 8, 77694 Kehl am Rhein,
            <a href="http://www.verbraucher-schlichter.de"
               target="_blank"
               rel="noopener"
               data-cke-saved-href="http://www.verbraucher-schlichter.de"
            >www.verbraucher-schlichter.de
            </a>
           .
        </p>
    </section>

@endsection
