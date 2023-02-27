---
title: Allgemeines zur testWare
description: Dieser Abschntt beschäftigt sich mit der grafischen Oberfläche, Prozess- und Objektstrukturen
reading-time: ~ 3min
---
@extends('_layouts/documentation')
@section('content')

    <h1 id="general-ui-header">Systemverwaltung</h1>

    <p>Unser Ziel ist es, die Handhabung der testWare so intuitiv wie möglich zu machen. Dennoch wäre jede Dokumentation unvollständig, wenn die generellen Prozess oder die Benutzeroberfläche nicht erklärt werden. Dieser Abschnitt umfasst daher drei generelle Bereiche:</p>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <x-overview-item header="Seitenaufbau" link="/docs/1.7/general-main">
            Wie ist die testWare Benutzeroberfläche gestaltet, und was man wo findet und welche Informationsbereiche existieren?
        </x-overview-item>
        <x-overview-item header="Prozesse" link="/docs/1.7/general-processes">
            Der Einstieg in die testWare setzt das Verständnis der dahinter konzipierten Prozesse voraus.
        </x-overview-item>
        <x-overview-item header="Objekte" link="/docs/1.7/general-objects">
            Was sind Objekte und wie stehen sie miteinander in Verbindung? Im Bereich Objekte zeigen wir diese auf.
        </x-overview-item>



    </section>


@endsection