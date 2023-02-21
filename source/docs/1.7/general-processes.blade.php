---
title: Prozesse in der testWare
description: Von der Installation bis zum Regelbetrieb sind einige Prozesse implementiert. Dieser Abschnitt zeigt auf, welche Eigenschaften sie haben und wie sie miteinander verknüpft sind.
reading-time: ~ 3min
---
@extends('_layouts/documentation')
@section('nav-docs')
    <nav class="fixed bottom-0 top-0 w-52 right-0 bg-white border-l-2 rounded py-1 z-10 border border-main-100" x-show="shrinkNav">
        <x-nav-doc-item link="general-processes-main-header">Prozesse</x-nav-doc-item>
        <x-nav-doc-item link="general-processes-main-symbols">Symbole</x-nav-doc-item>
    </nav>
@endsection


@section('content')

    <h1 id="general-processes-main-header">Prozesse</h1>

    <p>Von der Installation bis zum Regelbetrieb sind einige Prozesse implementiert. Dieser Abschnitt zeigt auf, welche Eigenschaften sie haben und wie sie miteinander verknüpft sind.</p>

    <h2 id="general-processes-main-symbols">Symbole</h2>
    <p>Die Abbildung der Prozesse erfolgt über sogenannte Flussdiagramme. Dabei werden folgende Symbole verwendet:</p>

    <section class="grid grid-cols-3 gap-3">
        <figure class="col-span-1">
            <x-processes.task>Aufgabe</x-processes.task>
        </figure>
        <article class="col-span-2">
            <h3>Aufgabe</h3>
            <p>Sie enthalten einen Arbeitsschritt oder eine Tätigkeit. Von einer Aufgabe können viele Abzweigungen ausgehen und auch eingehen.</p>
        </article>

    </section>

    <section class="grid grid-cols-3 gap-3">
        <figure class="col-span-1">
            <x-processes.gate>?</x-processes.gate>
        </figure>
        <article class="col-span-2">
            <h3>Entscheidung</h3>
            <p>Hier werden Entscheidungen getroffen, sprich: Ist eine Voraussetzung erfüllt? Wenn ja, soll folgende Aufgabe ausgeführt werden. Wenn nein, dann eine andere.</p>
        </article>
    </section>



    <h2 id="general-processes-initial-flow">Globaler Ablauf</h2>
    <p>Wie so viele Datenbankapplikationen muss auch die testWare installiert, eingerichtet und mit Daten gefüllt werden, damit die eigentliche Aufgabe wahrgenommen werden kann.</p>
    <p>Der Ablauf ist eigentlich sehr linear:</p>
    <x-processes.task>
        <a href="#general-processes-main-install">Installation</a>
    </x-processes.task>
    <x-processes.arrow-down/>
    <x-processes.task>
        <a href="#general-processes-main-setup">Einrichtung</a>
    </x-processes.task>
    <x-processes.arrow-down/>
    <x-processes.task>
        <a href="#general-processes-main-prepare">Verwaltung</a>
    </x-processes.task>
    <x-processes.arrow-down/>

    <x-processes.task>
        <a href="#general-processes-main-equipment">Geräte</a>
    </x-processes.task>
    <x-processes.arrow-down/>

    <x-processes.task>
        <a href="#general-processes-main-controlling">Prüfungen</a>
    </x-processes.task>
    <hr>
    <h3 id="general-processes-main-install">Installation</h3>
    <p>Als Erstes muss natürlich die testWare auf ihrem System/Server installiert werden. Dies kann über Containeranwendungen wie Docker, Podman etc. oder traditionell mit Web- und Datenbankserver realisiert werden.</p>
    <p>Details zu den verschiedenen Wegen, die testWare zu installieren, sind im Abschnitt
        <a href="/docs/1.7/installation-main">Installation</a>
       zu finden.
    </p>
    <hr>
    <h3 id="general-processes-main-setup">Einrichtung</h3>
    <p>Ist die Installation erfolgt, werden Benutzer und Ihre Rollen angelegt. Dazu besteht auch die Möglichkeit, den E-Mail Versand einzurichten.</p>
    <p>Möchten man die testWare vor Ort zunächst testen, kann mit dem Konsolenbefehl <x-code type="dark">php artisan testware:demoseeder</x-code> Demodaten generieren lassen. Weitere Konsolenbefehle sind im Abschnitt <a href="/docs/1.7/system-scripts">testware Skripte</a> zu finden.</p>
    <hr>

    <section class="grid grid-cols-6 gap-3">

        <figure class="col-span-3 md:col-span-2">

            <x-processes.task>
                Standort
            </x-processes.task>
            <x-processes.arrow-down/>

            <x-processes.task>
                Organisation
            </x-processes.task>
            <x-processes.arrow-down/>
            <x-processes.task>
                Vorschriften
            </x-processes.task>
            <x-processes.arrow-down/>

            <x-processes.task>
               Produkte
            </x-processes.task>

        </figure>
        <article class="col-span-3 md:col-span-4">
            <h3 id="general-processes-main-prepare">Verwaltung</h3>
            <p>Nach der Einrichtung der testWare beginnt die Abbildung des Betriebes. Der Prozess startet beim Standort als übergeordnetes Objekt. Dies kann ein Betrieb, eine Gesellschaft oder auch ein Kunde sein. Dem Standort können Gebäude, Räume und Stellplätze zugeordnet werden.</p>
            <p>Sind die räumlichen Objekte definiert, sollte die Organisation unterteilt in Mitarbeiter und beteiligte Firmen eingerichtet werden.</p>
            <p>Es folgt dann die Bestimmung der betrieblichen und gesetzlichen Vorschriften, welche die Prüfung der Geräte regeln. Die Vorschrift ist hierbei das übergeordnete Objekt wie die VDE 702 Geräteprüfung. In der Vorschrift können beliebige Anforderungen spezifiziert werden. Dem Beispiel folgend wäre es die Prüfung nach Schutzklasse I. Die Anforderungen enthalten alle Prüfschritte, die zur Bestimmung einer bestandenen Prüfung notwendig sind.</p>
        </article>

    </section>



@endsection