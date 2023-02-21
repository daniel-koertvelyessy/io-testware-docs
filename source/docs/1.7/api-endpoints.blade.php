---
title: testWare API Endpunkte
description: Von der Installation bis zum Regelbetrieb sind einige Prozesse implementiert. Dieser Abschnitt zeigt auf, welche Eigenschaften sie haben und wie sie miteinander verknüpft sind.
reading-time: ~ 3min
---
@extends('_layouts/documentation')
@section('content')

    <h1>Endpunkte</h1>
    <section id="definitions">
        <article>
            <p>Auf den folgenden Seiten finden Sie alle Endpunkte der testware API. Zur leichteren Verwendung finden hier eine Auflistung der verwendeten Nomenklatur nebst einer kurzen Erklärung</p>
            <dl class="flex space-x-4">
                <dt><x-code>Endpunkt</x-code></dt>
                <dd>
                    Adresse des Endpunktes ohne Domainnamen. Damit der Zurgiff stattfinden kann muss der komplette mit Domainnamen als Adresse verwendet werden. Beispiel: der Endpunkt
                    <x-code type="dark">/api/v1/status</x-code> würde mit dem Domainnamen
                    <x-code type="dark">https://testware.io</x-code> müsste als komplette Adressse
                    <x-code type="dark">https://testware.io/api/vi/status</x-code> lauten.
                </dd>
            </dl>
            <dl class="flex space-x-4">
                <dt class="col-sm-2"><x-code>Variable(n)</x-code></dt>
                <dd class="col-sm-10">
                    <p>Wenn zur Identifizierung eines Objektes eine Variable benötigt wird wird dies in
                        <x-code>{ }</x-code> angegeben.</p>
                    <p>Beispiel:</p>
                    <p>Für den Endpunkt <x-code type="dark">api/v1/location/{id}</x-code> ist
                        <x-code>id</x-code> die Variable. Ein Objekt mit der id 1 wird dann als
                        <x-code type="dark">api/v1/location/1</x-code> abgerufen.</p>
                    <p>Möchte man die Anzahl der Datensätze pro Abruf begrenzen so kann man hinter dem Endpunkt ein
                        <span class="badge badge-dark">?per_page=x</span>
                       anfügen. <x-code>x</x-code> steuert hierbei die Anzahl der Datensätze pro Seite.
                    </p>
                    <p>Beispiel des Endpunktes für Lagerfächer <x-code type="dark">api/v1/compartment?per_page=10</x-code></p>
                    <pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "created": "2021-01-06 22:23:44",
            "updated": "2021-01-06 22:23:44",
            "label": "SP.7-ru0rxn",
            "uid": "c9903a08-728a-3067-bf79-ec24ab757713",
            "name": "quos-repudiandae-et-quia-quas-ad-voluptatem-ratione",
            "description": null,
            "type_id": 2,
            "room_id": 9
        },
        },
        {...}
    ],
    "links": {
        "first": "https://testware.io/api/v1/compartment?page=1",
        "last": "https://testware.io/api/v1/compartment?page=5",
        "prev": null,
        "next": "https://testware.io/api/v1/compartment?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 5,
        "path": "https://testware.io/api/v1/compartment",
        "per_page": "10",
        "to": 10,
        "total": 48
    }
}</code></pre>
                    <p>Das Antwort-Schema der API wird in diesem Fall über drei weitere Elemente <x-code>data</x-code>
                        <x-code>links</x-code> und <x-code>meta</x-code> erweitert.</p>
                    <p><x-code class="mr-2">data</x-code> enthält die Datensätze der aktuellen Seite</p>
                    <p><x-code class="mr-2">links</x-code> enthält Navigation-Links</p>
                    <p><x-code class="mr-2">meta</x-code> enthält Daten, wie die aktelle Seite
                        <span class="badge badge-dark">current_page</span>
                                                      oder die Gesamtzahl an Datensätzen
                        <span class="badge badge-dark">total</span>
                    </p>
                </dd>
            </dl>
            <dl class="flex space-x-4">
                <dt class="col-sm-2"><x-code>Aufgabe</x-code></dt>
                <dd class="col-sm-10">
                    Kurze Beschreibung der Aufgabe des Endpunktes.
                </dd>
            </dl>
            <dl class="flex space-x-4">
                <dt class="col-sm-2"><x-code>Methode</x-code></dt>
                <dd class="col-sm-10">
                    Verwendetes Übertragungsprotokoll <x-code type="get">GET</x-code>, <x-code type="post">POST</x-code>, <x-code type="put">PUT</x-code> oder <x-code type="delete">DELETE</x-code>
                </dd>
            </dl>
            <dl class="flex space-x-4">
                <dt class="col-sm-2"><x-code>JSON</x-code></dt>
                <dd class="col-sm-10">
                    <p>JSON Schema für die Antwort der API oder das notwendige Schema zum Senden von Daten zur API.
                        <br>Beispiel für die Antwort des Endpunktes <x-code>/api/v1/status</x-code> mit der
                        <x-code>GET</x-code> Methode:</p>
                    <pre><code class="language-json">
{
    "status": "OK"
}
                        </code></pre>

                    <x-note class=" mb-5">
                        <h4 class="h5">Hinweis</h4>
                        In dem Schema repräsentiert <x-code>{...}</x-code> das weitere Datensätze möglich sein können.
                    </x-note>
                    <x-note class=" mb-5">
                        <h4 class="h5">Hinweis</h4>
                        In dem Schema zum Senden von Daten werden alle Felder aufgelistet. Diese können auch optionale Felder enthalten, welche für eine erfolgreiche Transaktion nicht erforderlich sind.
                    </x-note>
                </dd>
            </dl>
            <dl class="flex space-x-4">
                <dt class="col-sm-2"><x-code>Feldtyp</x-code></dt>
                <dd class="col-sm-10">
                    <p>Felder werden für die Übertragung vom Clienten zur API verwendet. Diese können verschiedene Typen repräsentieren:</p>
                    <table class="table-fixed">
                        <tr>
                            <th class="text-left w-1/4">Typ</th>
                            <th class="text-left w-1/4">Name</th>
                            <th class="text-left">Beispiel</th>
                        </tr>
                        <tr>
                            <td>Text</td>
                            <td>
                                <x-code>STRING</x-code>
                            </td>
                            <td><x-code>Hallo Welt!</x-code></td>
                        </tr>
                        <tr>
                            <td>Ganze Zahl</td>
                            <td>
                                <x-code>INTEGER</x-code>
                            </td>
                            <td><x-code>10</x-code></td>
                        </tr>
                        <tr>
                            <td>Dezinmalzahl</td>
                            <td>
                                <x-code>FLOAT</x-code>
                            </td>
                            <td><x-code>1.3</x-code></td>
                        </tr>
                        <tr>
                            <td>Boolscher Wert (Wahr/Falsch)</td>
                            <td>
                                <x-code>BOOLEAN</x-code>
                            </td>
                            <td><x-code>true</x-code> oder <x-code>false</x-code></td>
                        </tr>
                        <tr style="vertical-align: top;">
                            <td>Objekt</td>
                            <td>
                                <x-code>OBJECT</x-code>
                            </td>
                            <td>
                                Sammlung von weiteren Feldern mit <x-code>{ }</x-code> umschlossen.
                                <pre><code class="language-json">
{
    "Objekt" :{
        "feldname" : "wert",
        "feldname 2" : "wert 2"
    }
}
                                        </code></pre>
                            </td>
                        </tr>
                    </table>
                    <x-note class=" mb-5">
                        <h4 class="h5">Hinweis</h4>
                        Manche Felder haben einen voreingestellten Wert. Dieser wird mit
                        <x-code>DEFAULT</x-code>
                        gekennzeichnet. Wenn ein Feld explizit leer gelassen werden soll ist der Wert
                        <x-code>null</x-code> einzutragen.
                    </x-note>


                </dd>
            </dl>
            <dl class="flex space-x-4">
                <dt class="col-sm-2"><x-code>Felder</x-code></dt>
                <dd class="col-sm-10">
                    Listet alle <x-code>Felder</x-code> mit dem entsprechendem
                        <x-code>Typ</x-code>
                        . Sollten Felder zwingend notwendig sein, werden diese gesondert als
                        <x-code>Erforderliche Daten</x-code> ausgewiesen.
                    <p><x-code>Felder</x-code> die innerhalb eines
                        <x-code>OBJECT</x-code>
                                           Typs werden mit dem Namen des Objektfeldes mit einem
                        <x-code>.</x-code> als Präfix versehen.
                    </p>
                    <p>Beispiel für folgendes Objekt: </p>
                    <pre><code class="language-json">
{
    "location" : {
        "name" : "Werk 1"
    }
}
                                        </code></pre>
                    <p>Das Feld für <x-code>name</x-code> wird mit <x-code>location.name</x-code> referenziert.</p>
                    <x-note class=" my-5">
                        <h4 class="h5">Wichtig für das Anlegen von Datensätzen</h4>
                        <p class="mb-0">Ist ein Feld vom Typ
                            <x-code>OBJECT</x-code>
                                        angegeben, sind zwei verschiedene Möglichkeiten verfügbar:
                        </p>
                        <h5 class="h6 mt-2">Angabe als Objekt</h5>
                        <p>Verwendet man das Feld als Objekt muss die entsprechende Struktur angegeben werden. Das System prüft, ob ein Datensatz mit der entsprechenden Referenz existiert und legt gegebenefalls einen neuen Datensatz an.</p>

                        <h5 class="h6 mt-2">Angabe mit Referenz-ID</h5>
                        <p>Ist die Referenz-ID bekannt, so kann diese direkt angegeben werden. Hierzu muss dem Feldnamen ein
                            <x-code>_id</x-code> angehängt werden.</p>
                        <p>Aus dem obigen Beispiel würde:</p>
                        <pre><code class="language-json">
{
    "location_id" : 1
}
                                        </code></pre>

                    </x-note>
                    <x-note class=" mb-5">
                        <h4 class="h5">Hinweis</h4>
                        <p class="mb-0">Sind keine Felder zur Übertragung zur API notwendig bleibt die Spalte leer.</p>
                    </x-note>
                </dd>
            </dl>
        </article>
    </section>
    </div>
    </div>
    </div>

@endsection