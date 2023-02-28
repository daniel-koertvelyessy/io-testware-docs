---
title: Einrichtung der testWare über WebUI
description: Ist die Instanz der testWare eingerichtet, wird die Umgebung wie die Firmierung, weitere Benutzer, Mitarbeiter und Standorte über einen Web-Installer erstellt.
reading-time: ~ 3min
---
@extends('_layouts/documentation')
@section('nav-docs')
    @php

        $navigation = [
            [
                'link' => 'installation-webui-requirements',
                'header' => 'Voraussetzungen'
            ],
            [
                'link' => 'installation-webui-server',
                'header' => 'Serverdaten'
            ],
            [
                'link' => 'installation-webui-user',
                'header' => 'Benutzer einrichten'
            ],
            [
                'link' => 'installation-webui-company',
                'header' => 'Firmierung einrichten'
            ],
            [
                'link' => 'installation-webui-location',
                'header' => 'Standort einrichten'
            ],
    ];

    @endphp
    <x-nav-docs :items="$navigation"/>
@endsection
@section('content')

    <h1 id="installation-webui-header">Einrichtung der testWare</h1>

    <x-note id="installation-webui-requirements">
        <p class="text-xl">Voraussetzungen</p>
        <p>Damit der Webinstaller lauffähig ist müssen diese zwei Voraussetzungen erfüllt sein:</p>
        <ol class="list-inside">
            <li>Eine laufende testWare Instanz auf <a href="/docs/1.7/installation-webserver">einem Webserver</a> oder
                <a href="/docs/1.7/installation-container">in einem Container</a></li>
            <li>Die testWare Datenbank ist mit der Instanz verbunden <a href="/docs/1.7/installation-console">Instanz verbunden</a>
            </li>
            <li>Einem Beenutzerkonto mit Systemadministrator Rechten. Dieser wird mit <x-code>testware:install</x-code> Skript eingerichtet</li>
        </ol>
    </x-note>

    <h2 id="installation-webui-server">Serverdaten</h2>
    <p>Der Webinstaller ist auf dem Endpunkt <x-code type="dark">/installer</x-code> erreichbar. Ist man als Systemadministrator angemeldet wird man auf die Startseite geleitet. Diese ist in zwei Beeiche unterteilt.</p>

    <figure>
        <img src="/assets/img/screenshots/Screenshot_Webinstaller_Server.webp"
             alt="testWare Webinstaller Startseite zur Einrichtung der Serveradresse und optionaler E-Mail Server Connector"
        >
        <figcaption class="figcap">Startseite des Installers</figcaption>
    </figure>

    <x-note>
        <p>Hier werden die Werte aus den Konfigurationsdatei <x-code>app.env</x-code> wiedergegeben. Daher kann in den meisten Fällen diese Seite übersprungen werden.</p>
    </x-note>

    <p>Im Bereich <span class="font-bold">Server URL konfigurieren</span>  wird die Adresse und Port der Instant gespeichert. Diese Daten werden zur Erzeugung von Links erstellt, welche in Gerätelabel und Benachrichtigungen Verwendung finden.</p>

    <p>Der Bereich <span class="font-bold">SMTP Server konfigurieren</span> dient für den Connector zu einem SMTP Server. Die testWare kann Benachrichtigungen auch per E-Mail verschicken und benötigt dafür einen SMTP fähigen Server.</p>

    <h2 id="installation-webui-user">Benutzer einrichten</h2>
    <p>Auf der folgenden Seite, erreichbar unter dem Endpunkt <x-code type="dark">/installer/user</x-code> können Benutzer und dazu verknüpfte Mitarbeiter angelegt werden.</p>

    <figure>
        <img src="/assets/img/screenshots/Screenshot_Webinstaller_Benutzer.webp"
             alt="testWare Webinstaller Benutzer und Mitarbeiterverwaltung"
        >
        <figcaption class="figcap">Benutzereinrichtung mit dem Webinstaller</figcaption>
    </figure>

    <p>In der rechten Spalte werden alle vorhandenen Benutzer aufgelistet. Diese können bearbeitet oder gelöscht werden. Die Spalte <span class="font-bold">MA</span> zeigt, ob für den Benutzer ein Mitarbeiter verknüpft ist. Die Spalte <span class="font-bold">SU</span> steht für <span class="font-bold">Super User</span> und zeigt an, ob der Benutzer Systemadministratorrechte besitzt.</p>

    <x-note>Bitte beachten Sie, dass die <span class="font-bold">Benutzer einladen</span> Funktion nur mit einem konfigurieretem SMTP Server sinnvoll ist.</x-note>

    <p>Benutzer können später auch unter dem Endpunkt <x-code type="dark">/user</x-code> verwaltet werden. Mitarbeiter entspechend unter dem Endpunkt <x-code type="dark">/profile</x-code>.</p>
    <p>Wurden versehentlich alle Benutzer mit Systemadministratorrechten gelöscht, können Benutzer auch über die
        <a href="/docs/1.7/system-scripts">Konsole</a> angelegt werden.</p>

    <h2 id="installation-webui-company">Firmierung einrichten</h2>

    <figure>
        <img src="/assets/img/screenshots/Screenshot_Webinstaller_Firmierung.webp"
             alt="testWare Webinstaller Benutzer und Mitarbeiterverwaltung"
        >
        <figcaption class="figcap">Firmierung und Adresse mit dem Webinstaller anlegen</figcaption>
    </figure>


    <h2 id="installation-webui-location">Standort einrichten</h2>
    <p>Als letzten Punkt wird der erste Standort eingerichtet. Hierzu wird ein Mitarbeiter benötigt, welche als Leitung für den Standort bestimmt wird. Dazu muss noch eine Adresse angegeben werden, an der sich der Standort befindet. Als drittes erforderliches Feld ist ein Kürzel für den Standort zu vergeben.</p>
    <figure>
        <img src="/assets/img/screenshots/Screenshot_Webinstaller_Standort.webp"
             alt="testWare Webinstaller Benutzer und Mitarbeiterverwaltung"
        >
        <figcaption class="figcap">Firmierung und Adresse mit dem Webinstaller anlegen</figcaption>
    </figure>

    <x-note>Ist bereits ein Standort verfügbar, wird dieses hier geladen.</x-note>


    <p>Mit dem Anlegen des Standortes ist der Webinstaller abgeschlossen. Weitere Einstellungen können in der Systemverwaltung auf dem Endpunkt <x-code type="dark">/admin/systems</x-code> vorgenommen werden.</p>

@endsection