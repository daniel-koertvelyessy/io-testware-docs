---
title: Allgemeines zur testWare
description: Dieser Abschntt beschäftigt sich mit der grafischen Oberfläche, Prozess- und Objektstrukturen
reading-time: ~ 3min
---
@extends('_layouts/documentation')
@section('content')

    <h1 id="system-ui-header">Systemeinstellungen</h1>

    <p>Unser Ziel ist es, die Handhabung der testWare so intuitiv wie möglich zu machen. Dennoch wäre jede Dokumentation unvollständig, wenn die generellen Prozess oder die Benutzeroberfläche nicht erklärt werden. Dieser Abschnitt umfasst daher drei generelle Bereiche:</p>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <x-overview-item header="Einstellungen" link="/docs/1.7/system-admin">
            Von Objekttypen bis Layout der Gerätelabel. In den Einstellungen können diese verwaltet werden.
        </x-overview-item>
        <x-overview-item header="Benutzer" link="/docs/1.7/system-users">
            Die Verwaltung von testWare Benutzer wird auf dieser Seite dokumentiert.
        </x-overview-item>
        <x-overview-item header="Die Konsole" link="/docs/1.7/system-console">
            Wenn alles nicht hilft, bietet die testWare einige Befehle mit denen auf der Konsole
        </x-overview-item>
        <x-overview-item header="Befehle" link="/docs/1.7/system-scripts">
            Was sind Objekte und wie stehen sie miteinander in Verbindung? Im Bereich Objekte zeigen wir diese auf.
        </x-overview-item>
        <x-overview-item header="Lokalisierung" link="/docs/1.7/system-languages">
            Was sind Objekte und wie stehen sie miteinander in Verbindung? Im Bereich Objekte zeigen wir diese auf.
        </x-overview-item>


    </section>


@endsection