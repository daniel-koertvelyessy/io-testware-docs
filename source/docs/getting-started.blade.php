---
title: Getting Started
description: Getting started with Jigsaw's docs starter template is as easy as 1, 2, 3.
reading-time: ~ 5min
---
@extends('_layouts/documentation')
@section('content')
    <p>Hier finden Sie die Dokumentation zu den verfügbaren Applikationen.</p>
    <p>Die Objekte in der testware werden in zwei Bereichen gepflegt:</p>
    <ul>
        <li>Verwaltung</li>
        <li>Anwendung</li>
    </ul>
    <p>Die Verwaltung ist über das
        <a href="/">Portal</a>
       in dem Register <code>Verwaltung</code> zu finden.
    </p>

    <img src="https://demo.testware.io/img/media/textware_docs_Verwaltung_oeffnen.gif"
         alt="Im Portal kann man mit einem Klick auf die Schaltfläche [Verwaltung] die Module der Verwaltung sehen und auswählen."
         class="img-fluid img-thumbnail"
    >
    <div class="duik-callout duik-callout-info mb-5">
        <h4 class="h5">Hinweis</h4>
        <p class="mb-0">Die Abbildungen in dieser Dokumentation können sich in Form und Farbe von der Darstellung in Ihrem Profil unterscheiden.</p> https://www.json.org/json-de.html
    </div>

    <pre><code class="language-bash">php artisan testware:install</code></pre>


    <p>In der Verwaltung werden folgende Module gepflegt:</p>
    <ul>
        <li>Standorte</li>
        <li>Gebäude</li>
        <li>Räume</li>
        <li>Stellplätze</li>
        <li>Produkte</li>
        <li>Verordnungen</li>
        <li>Anforderungen</li>
    </ul>

<pre><code class="language-docker line-numbers text-xs">
DB_CONNECTION = pgsql
DB_HOST = [IP-adress-of-your-databse-server]
DB_PORT=5432
DB_DATABASE=[laravel]
DB_USERNAME=[root]
DB_PASSWORD=[password]
</code></pre>


    <pre><code class="language-json">
[
    {
        "id": 1,
        "created": "2020-12-29 11:30:16",
        "updated": "2021-01-03 19:10:04",
        "uid": "784f64bc-735a-3d2f-8a06-fcf3d47621f3",
        "name": "HQbln153",
        "label": "bln153",
        "description": "Hauptsitz der Firma Testfirma GmbH",
        "address_id": 2,
        "employee_id": 4
    },
    {...}
]
        </code></pre>

@endsection
