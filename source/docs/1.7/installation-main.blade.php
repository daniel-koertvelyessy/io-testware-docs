---
title: Allgemeines zur testWare
description: Dieser Abschntt beschäftigt sich mit der grafischen Oberfläche, Prozess- und Objektstrukturen
reading-time: ~ 3min
---
@extends('_layouts/documentation')
@section('content')

    <h1 id="general-ui-header">testWare installieren</h1>

    <p>testWare basiert auf dem php Framework laravel. Daher ist ein System notwendig welches php Befehle / Dateien lesen und ausführen kann. Gegenwärtig sind zwei Arten verfügbar, mit der die testWare installiert werden kann:</p>

    <section class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <x-overview-item header="LEMP" link="/docs/1.7/installation-lemp">
            Aus der Zeit vor Containeranwendungen wie Docker oder Podman kann jedes Apache / Nginx Serversystem die testWare ausführen.
        </x-overview-item>
        <x-overview-item header="Docker" link="/docs/1.7/installation-docker">
            Die Idee, mehrere Server auf einer Hardware laufen zu lassen wurde mit Docker sehr einfach. Daher ist die Installation der testWare über Docker / Podman die einfachste Art.
        </x-overview-item>
    </section>


@endsection