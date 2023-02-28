---
title: API - Allgemeines
description: Diese Seite zeigt die grundlegeneden Funktionen einer API. Anhand von Beispielen wird der Zugriff auf die testWare vorgeführt.
reading-time: ~ 10min
---
@extends('_layouts/documentation')
@section('content')
<h1>Verwaltung</h1>
<p>Ist die Installation abgeschlossen, beginnt die Abbildung des Betriebes, der Firma, des Unternehmen in der testWare. Dazu gehöhren folgende Bereiche</p>
<section class="grid grid-cols-1 lg:grid-cols-3 gap-4">
    <x-overview-item header="Betriebe" link="/docs/1.7/backend-locations">
        Das Sammelobjekt, welches mit einer Adresse und Leitung angelegt wird.
    </x-overview-item>
    <x-overview-item header="Orgranisation" link="/docs/1.7/backend-organisation">
        In jedem Betrieb können mehrere Gebäude angelegt werden.
    </x-overview-item>
    <x-overview-item header="Vorschriften" link="/docs/1.7/backend-requirements">
        In den Gebäuden können wiederum Räume angelegt werden.
    </x-overview-item>
</section>
<hr>


@endsection