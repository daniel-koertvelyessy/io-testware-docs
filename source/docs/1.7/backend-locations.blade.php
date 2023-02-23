---
title: API - Allgemeines
description: Diese Seite zeigt die grundlegeneden Funktionen einer API. Anhand von Beispielen wird der Zugriff auf die testWare vorgeführt.
reading-time: ~ 10min
---
@php
    $navigation = [
                [
                    'link' => 'locations',
                    'header' => 'Betriebe'
                ],
                [
                    'link' => 'buildings',
                    'header' => 'Gebäude'
                ],
                [
                    'link' => 'rooms',
                    'header' => 'Räume'
                ],
                [
                    'link' => 'compartments',
                    'header' => 'Stellplätze'
                ],
        ];

@endphp
@extends('_layouts/documentation')
@section('content')
<x-nav-docs :items="$navigation" />
<h1>Standorte</h1>
<p>Die API der testWare bietet für Objekte der Kategorie Standorte folgende </p>
<section class="grid grid-cols-1 lg:grid-cols-2 gap-4">
    <x-overview-item header="Betrieb" link="#locations">
        Das Sammelobjekt, welches mit einer Adresse und Leitung angelegt wird.
    </x-overview-item>
    <x-overview-item header="Gebäude" link="#buildings">
        In jedem Betrieb können mehrere Gebäude angelegt werden.
    </x-overview-item>
    <x-overview-item header="Raum" link="#rooms">
        In den Gebäuden können wiederum Räume angelegt werden.
    </x-overview-item>
    <x-overview-item header="Stellplatz" link="#compartments">
        Als kleinste Einheit ist der Stellplatz vorgesehen. Das kann ein Lagerfach, Tisch oder Schulbade sein.
    </x-overview-item>
</section>
<hr>


@endsection