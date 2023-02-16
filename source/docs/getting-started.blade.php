---
title: Überblick der Dokumentation
description: Die Dokumentation der testWare umfasst 6 Hauptbereiche. Allgemeines, Installation, System, Verwaltung, Objekte und die REST-API
readingtime: ~ 2 min
---
@extends('_layouts/documentation')
@section('content')

    <h1>Überblick</h1>

    <p>Diese Dokumentation gliedert sich in 6 Bereiche:</p>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <x-overview-item header="Allgemeines" link="/docs/1.7/general-main">
            Hier geht es um allgemeine Informationen wie die grafische Oberfläche oder grundlegende Prozesse zur Verwendung der testWare.
        </x-overview-item>

        <x-overview-item header="Installation" link="/docs/1.7/installation-main">
            In diesem Bereich werden die aktuellen Verfahren beschrieben, wie die testWare auf Ihrem Server installiert wird.
        </x-overview-item>

        <x-overview-item header="System" link="/docs/1.7/system-main">
            Manche Funktionen der testWare sind über die Konsole zu steuern. Dazu sind zahlreiche Befehle/Skripte verfügbar, die direkt vom Server aus ausgeführt werden müssen.
        </x-overview-item>

        <x-overview-item header="Verwaltung" link="/docs/1.7/backend-main">
            Den Rahmen für die tesWare bilden die Module Standort, Organisation und Vorschriften. Damit lässt sich Ihr Betrieb, Unternehmen oder Firma exact abbilden.
        </x-overview-item>

        <x-overview-item header="Objekte" link="/docs/1.7/objects-main">
            Ist der Rahmen gesetzt, können Produkte, Geräte und deren Prüfungen erstellt werden. Ist diese Aufgabe abgeschlossen ist die testWare bereit.
        </x-overview-item>

        <x-overview-item header="REST-API" link="/docs/1.7/api-main">
            Viele Aufgaben der Einrichtung der testWare erfordern einige Zeit. Daher ist sie mit einer API ausgestattet, welche es ermöglicht, aus der existierenden ERP die Objekte automatisch anzulegen, aktualisieren oder zu löschen.
        </x-overview-item>

    </section>
@endsection
