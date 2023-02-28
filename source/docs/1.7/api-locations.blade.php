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
                    'link' => 'endpoint-get-locations',
                    'header' => 'get::/locations',
                    'level' => 3,
                ],
                [
                    'link' => 'endpoint-get-locations_list_full',
                    'header' => 'get::/location_list_full',
                    'level' => 3,
                ],
                [
                    'link' => 'endpoint-get-locations_id',
                    'header' => 'get::/locations/{id}',
                    'level' => 3,
                ],
                [
                    'link' => 'endpoint-post-locations',
                    'header' => 'post::/locations',
                    'level' => 3,
                ],
                [
                    'link' => 'endpoint-put-locations_id',
                    'header' => 'put::/locations/{id}',
                    'level' => 3,
                ],
                [
                    'link' => 'endpoint-delete-locations_id',
                    'header' => 'delete::/locations/{id}',
                    'level' => 3,
                ],
                [
                    'link' => 'buildings',
                    'header' => 'Gebäude'
                ],
                 [
                    'link' => 'endpoint-get-buildings',
                    'level' => 3,
                    'header' => 'get::/buildings',
                ],
                [
                    'link' => 'endpoint-get-buildings_list_full',
                    'level' => 3,
                    'header' => 'get::/buildings_list_full',
                ],
                [
                    'link' => 'endpoint-get-buildings_id',
                    'level' => 3,
                    'header' => 'get::/buildings/{id}',
                ],
                [
                    'link' => 'endpoint-post-buildings',
                    'level' => 3,
                    'header' => 'post::/buildings',
                ],
                [
                    'link' => 'endpoint-put-buildings_id',
                    'level' => 3,
                    'header' => 'put::/buildings/{id}',
                ],
                [
                    'link' => 'endpoint-delete-buildings_id',
                    'level' => 3,
                    'header' => 'delete::/buildings/{id}',
                ],
                [
                    'link' => 'rooms',
                    'header' => 'Räume'
                ],
                [
                    'link' => 'endpoint-get-rooms',
                    'level' => 3,
                    'header' => 'get::/rooms',
                ],
                [
                    'link' => 'endpoint-get-rooms_list_full',
                    'level' => 3,
                    'header' => 'get::/rooms_list_full',
                ],
                [
                    'link' => 'endpoint-get-rooms_id',
                    'level' => 3,
                    'header' => 'get::/rooms/{id}',
                ],
                [
                    'link' => 'endpoint-post-rooms',
                    'level' => 3,
                    'header' => 'post::/rooms',
                ],
                [
                    'link' => 'endpoint-put-rooms_id',
                    'level' => 3,
                    'header' => 'put::/rooms/{id}',
                ],
                [
                    'link' => 'endpoint-delete-rooms_id',
                    'level' => 3,
                    'header' => 'delete::/rooms/{id}',
                ],
                [
                    'link' => 'compartments',
                    'header' => 'Stellplätze'
                ],
                [
                    'link' => 'endpoint-get-compartments',
                    'level' => 3,
                    'header' => 'get::/compartments',
                ],
                [
                    'link' => 'endpoint-get-compartments_list_full',
                    'level' => 3,
                    'header' => 'get::/compartments_list_full',
                ],
                [
                    'link' => 'endpoint-get-compartments_id',
                    'level' => 3,
                    'header' => 'get::/compartments/{id}',
                ],
                [
                    'link' => 'endpoint-post-compartments',
                    'level' => 3,
                    'header' => 'post::/compartments',
                ],
                [
                    'link' => 'endpoint-put-compartments_id',
                    'level' => 3,
                    'header' => 'put::/compartments/{id}',
                ],
                [
                    'link' => 'endpoint-delete-compartments_id',
                    'level' => 3,
                    'header' => 'delete::/compartments/{id}',
                ],
        ];

    $locationlist = [
        [
            'link' => 'endpoint-get-locations',
            'request' => 'get',
            'endpoint' => '/locations',
        ],
        [
            'link' => 'endpoint-get-locations_list_full',
            'request' => 'get',
            'endpoint' => '/location_list_complete',
        ],
        [
            'link' => 'endpoint-get-locations_id',
            'request' => 'get',
            'endpoint' => '/locations/{id}',
        ],
        [
            'link' => 'endpoint-post-locations',
            'request' => 'post',
            'endpoint' => '/locations',
        ],
        [
            'link' => 'endpoint-put-locations_id',
            'request' => 'put',
            'endpoint' => '/locations/{id}',
        ],
        [
            'link' => 'endpoint-delete-locations_id',
            'request' => 'delete',
            'endpoint' => '/locations/{id}',
        ],
];

    $buildingslist = [
        [
            'link' => 'endpoint-get-buildings',
            'request' => 'get',
            'endpoint' => '/buildings',
        ],
        [
            'link' => 'endpoint-get-buildings_list_full',
            'request' => 'get',
            'endpoint' => '/buildings_list_full',
        ],
        [
            'link' => 'endpoint-get-buildings_id',
            'request' => 'get',
            'endpoint' => '/buildings/{id}',
        ],
        [
            'link' => 'endpoint-post-buildings',
            'request' => 'post',
            'endpoint' => '/buildings',
        ],
        [
            'link' => 'endpoint-put-buildings_id',
            'request' => 'put',
            'endpoint' => '/buildings/{id}',
        ],
        [
            'link' => 'endpoint-delete-buildings_id',
            'request' => 'delete',
            'endpoint' => '/buildings/{id}',
        ],
];

    $roomslist = [
        [
            'link' => 'endpoint-get-rooms',
            'request' => 'get',
            'endpoint' => '/rooms',
        ],
        [
            'link' => 'endpoint-get-rooms_list_full',
            'request' => 'get',
            'endpoint' => '/rooms_list_full',
        ],
        [
            'link' => 'endpoint-get-rooms_id',
            'request' => 'get',
            'endpoint' => '/rooms/{id}',
        ],
        [
            'link' => 'endpoint-post-rooms',
            'request' => 'post',
            'endpoint' => '/rooms',
        ],
        [
            'link' => 'endpoint-put-rooms_id',
            'request' => 'put',
            'endpoint' => '/rooms/{id}',
        ],
        [
            'link' => 'endpoint-delete-rooms_id',
            'request' => 'delete',
            'endpoint' => '/rooms/{id}',
        ],
];

    $compartmentslist=[
         [
            'link' => 'endpoint-get-compartments',
            'request' => 'get',
            'endpoint' => '/compartments',
        ],
        [
            'link' => 'endpoint-get-compartments_list_full',
            'request' => 'get',
            'endpoint' => '/rooms_list_full',
        ],
        [
            'link' => 'endpoint-get-compartments_id',
            'request' => 'get',
            'endpoint' => '/compartments/{id}',
        ],
        [
            'link' => 'endpoint-post-compartments',
            'request' => 'post',
            'endpoint' => '/compartments',
        ],
        [
            'link' => 'endpoint-put-compartments_id',
            'request' => 'put',
            'endpoint' => '/compartments/{id}',
        ],
        [
            'link' => 'endpoint-delete-compartments_id',
            'request' => 'delete',
            'endpoint' => '/compartments/{id}',
        ],
];

@endphp
@extends('_layouts/documentation')
@section('content')
    <x-nav-docs :items="$navigation" />
    <h1 id="api-location-header">Standorte</h1>
    <p></p>
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
    <section id="locations">
        <h2>Betrieb</h2>
        <p>Folgende Endpunkte sind verfügbar:</p>
        <x-endpoint-list :items="$locationlist" />
        <hr>
        <article id="endpoint-get-locations" class="mt-3">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/locations</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Abrufen aller Betriebe in der testWare
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="get">GET</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>-</x-slot:request>
                        <x-slot:response><pre class="language-json"><code class=" language-json">[
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
                                </code></pre></x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-get-locations_list_full" class="mt-3">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/location_list_full</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Abrufen aller Betriebe in der testWare inklusive:
                    <ul class="list-inside">
                        <li>der kompletten Adresse</li>
                        <li>leitenden Person</li>
                        <li>Objekte in dem Betrieb</li>
                    </ul>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="get">GET</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>-</x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">[
    {
        "id": 1,
        "created": "2020-12-29 11:30:16",
        "updated": "2021-01-03 19:10:04",
        "uid": "784f64bc-735a-3d2f-8a06-fcf3d47621f3",
        "name": "HQbln153",
        "label": "bln153",
        "description": "Hauptsitz der Firma Testfirma GmbH",
        "address": {
            "type": {
                "name": "Heimadress",
                "description": "Standard Adresse"
            },
            "label": "Gmb5423212",
            "name": "Deckerweg 5/8 15868 Neukirchen-Vluyn",
            "company": "Testfirma GmbH",
            "company_2": null,
            "company_co": null,
            "company_unloading_point": null,
            "company_goods_income": null,
            "company_division": "UWTZIZ79",
            "street": "Christiane-Brandt-Platz",
            "no": "67",
            "zip": "63550",
            "city": "Bruchsal",
            "floor": null,
            "enterance": null
        },
        "manager": {
            "first_name": "Lenard",
            "name": "Hammer",
            "name_2": "Herr Lenard H",
            "employee_number": "1187",
            "date_birth": "1972-09-03",
            "date_entry": "2007-10-12",
            "date_leave": null,
            "phone": "0808862546",
            "mobile": "+5211706111601",
            "fax": null,
            "com_1": null,
            "com_2": null
        },
        "location_objects": {
            "buildings": 2,
            "rooms": 5,
            "compartments": 18,
            "equipment": 738
        }
    },
    {...}
]
                            </code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-get-locations_id" class="mt-3">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/locations/{id}</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    <x-api-key key="id" type="Integer" noborder="true" />
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Ruft die Daten zu einem Betrieb mit der <x-code>id</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="get">GET</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>-</x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">{
    "created": "2020-12-29 11:30:16",
    "updated": "2021-01-03 19:10:04",
    "uid": "784f64bc-735a-3d2f-8a06-fcf3d47621f3",
    "name": "HQbln153",
    "label": "bln153",
    "description": "Hauptsitz der Firma Testfirma GmbH",
    "address_id": 2,
    "employee_id": 4
}
                            </code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-post-locations" class="mt-3">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/locations</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Erstellt einen Betrieb. Optional mit dazugehöriger Adresse und Leitung.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="post">POST</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    <p>Erforderliche Felder</p>
                    <x-api-key key="label" type="string" />

                    <x-api-optionals>
                        <x-api-key key="name" type="STRING" />
                        <x-api-key key="description" type="STRING" />
                        <x-api-key key="uid" type="STRING" />
                        <x-api-key key="address" type="OBJECT" />
                        <x-api-key key="employee" type="OBJECT" />

                        <p class="pl-2">Wird das Objekt <x-code type="key">address</x-code> verwendet, sind folgende Felder erforderlich</p>
                        <x-api-key key="address.label" type="STRING" />
                        <x-api-key key="address.street" type="STRING" />
                        <x-api-key key="address.no" type="STRING" />
                        <x-api-key key="address.zip" type="STRING" />
                        <x-api-key key="address.city" type="STRING" />

                        <p class="pl-2">Optionale Felder für das Objekt <x-code type="key">address</x-code></p>
                        <x-api-key key="address.address_type" type="OBJECT" />
                        <x-api-key key="address.name" type="STRING" />
                        <x-api-key key="address.company" type="STRING" />
                        <x-api-key key="address.company_2" type="STRING" />
                        <x-api-key key="address.company_co" type="STRING" />
                        <x-api-key key="address.company_unloading_point" type="STRING" />
                        <x-api-key key="address.company_goods_income" type="STRING" />
                        <x-api-key key="address.company_division" type="STRING" />

                        <p class="pl-2">Wird das Objekt <x-code type="key">employee</x-code> verwendet, sind folgende Felder erforderlich</p>
                        <x-api-key key="employee.name" type="STRING" />

                        <p class="pl-2">Optionale Felder für das Objekt <x-code type="key">employee</x-code></p>
                        <x-api-key key="employee.first_name" type="STRING" />
                        <x-api-key key="employee.name_2" type="STRING" />
                        <x-api-key key="employee.date_birth" type="Datum"/>
                        <x-api-key key="employee.employee_number" type="string" />
                        <x-api-key key="employee.date_entry" type="Datum" />
                        <x-api-key key="employee.date_leave" type="Datum" />
                        <x-api-key key="employee.phone" type="STRING" />
                        <x-api-key key="employee.mobile" type="STRING" />

                    </x-api-optionals>




                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="request">
                        <x-slot:request>
                            <pre class=" language-json"><code class=" language-json">{
    "name": "Loc-bln153",
    "label": "bln153",
    "description": "Nihil aut qui nostrum ...",
    "address": {
        "street": "Christiane-Brandt-Platz",
        "no": "67",
        "zip": "63550",
        "city": "Bruchsal",
        "address_type": {
            "name" : "Hausadresse"
        },
        "label": "Gmb5423212",
        "name": "Hausadresse Barth GmbH",
        "company": "Barth GmbH",
        "company_2": null,
        "company_co": null,
        "company_unloading_point": null,
        "company_goods_income": null,
        "company_division": "UWTZIZ79",
        "floor": null,
        "enterance": null
    },
    "employee": {
        "first_name": "Anja",
        "name": "Janssen",
        "name_2": "Fleischer",
        "date_birth": "2001-10-04",
        "employee_number": "1526",
        "date_entry": "2013-06-05",
        "date_leave": null,
        "phone": "+496180690281",
        "mobile": "+496180690281",
        "fax": "+496180690281",
        "com_1": null,
        "com_2": null
    }
}

                                </code></pre>
                        </x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">{
    "status": true,
    "id": 3,
    "uid": "74fc7d7c-04ad-4f12-a5be-07111cd73679",
    "address": 34,
    "employee": 6
}
                                </code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-put-locations_id" class="mt-3">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/location/{id}</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    <x-api-key key="id" type="Integer" noborder/>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Aktualisiert die Daten eines Betriebes.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="put">PUT</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    <p>Erforderliche Felder</p>

                    <x-api-key key="id" type="Integer" />
                    <x-api-optionals>
                        <x-api-key key="label" type="STRING" />
                        <x-api-key key="name" type="STRING" />
                        <x-api-key key="description" type="STRING" />
                        <x-api-key key="uid" type="STRING" />
                        <x-api-key key="address_id" type="Integer" />
                        <x-api-key key="employee_id" type="Integer" />

                    </x-api-optionals>

                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="request">
                        <x-slot:request><pre class=" language-json"><code class=" language-json">{
    "label": "bln251",
    "uid": "9f1cf9d5-370b-3413-a51c-c97c2308fe2b",
    "name": "quam-officiis-eligendi-veritatis",
    "description": "Minima maxime omnis cupiditate quas...",
    "address_id": 2,
    "employee_id": 4
} </code></pre>
                        </x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">{
    "id": 1,
    "created": "2021-01-06 12:26:19",
    "updated": "2021-01-06 18:41:57",
    "label": "bln251",
    "uid": "9f1cf9d5-370b-3413-a51c-c97c2308fe2b",
    "name": "quam-officiis-eligendi-veritatis",
    "description": "Minima maxime omnis cupiditate quas...",
    "address_id": 2,
    "employee_id": 4
}
                                </code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-delete-locations_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/location/{id}</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    <x-api-key key="id" type="Integer" />
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Löscht den Betrieb.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="delete">DELETE</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>-</x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">{
    "status": "location deleted"
} </code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
    </section>
    <hr>
    <section id="buildings">
        <h2>Gebäude</h2>
        <p>Folgende Endpunkte sind verfügbar:</p>
        <x-endpoint-list :items="$buildingslist" />
        <hr>
        <article class="mt-3" id="endpoint-get-buildings">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/building</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Abrufen aller Gebäude der testWare
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="get">GET</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>-</x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">[
    {
        "id": 1,
        "created": "2021-01-05 10:44:20",
        "updated": "2021-01-05 10:44:20",
        "label": "geb-8200",
        "uid": "2a54b8f9-6ec3-3add-8e96-54f1868e1331",
        "name": "Halle T61",
        "place": "Tor Süd T61",
        "description": "Lagerhalle T61 mit Wareneingang",
        "goods_income_has": true,
        "goods_income_name": "WE-GT61",
        "building_type_id": 1,
        "location_id": 1
    },
    {...}
]</code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article class="mt-3" id="endpoint-get-buildings_list_full">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/building_list_full</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Abrufen aller Gebäude der testWare inklusive Gebäudetyp und Betrieb
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="get">GET</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>-</x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">[
    {
        "id": 1,
        "created": "2021-01-05 10:44:20",
        "updated": "2021-01-05 10:44:20",
        "label": "geb-8200",
        "uid": "2a54b8f9-6ec3-3add-8e96-54f1868e1331",
        "name": "Halle T61",
        "place": "Tor Süd T61",
        "description": "Lagerhalle T61 ",
        "goods_income_has": true,
        "goods_income_name": "WE-GT61",
        "type": {
            "name": "Lager",
            "description": "Gebäude zur Lagerung von Baugeräten"
        },
        "location": {
            "name": "Werk 12",
            "label": "bln153"
        },
        "building_objects": {
            "rooms": 2,
            "compartments": 4,
            "equipment": 226
        }
    },
    {...}
]
                                </code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article class="mt-3" id="endpoint-get-buildings_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/building/{id}</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    <x-api-key key="id" type="Integer" noborder/>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Ruft die Daten zu einem Gebäude mit der <x-code>id</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="get">GET</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>-</x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">{
    "created": "2021-01-05 10:44:20",
    "updated": "2021-01-05 10:44:20",
    "label": "geb-8200",
    "uid": "2a54b8f9-6ec3-3add-8e96-54f1868e1331",
    "name": "Halle T61",
    "place": "Tor Süd T61",
    "description": "Molestias cupiditate .....",
    "goods_income_has": true,
    "goods_income_name": "WE-GT61",
    "type": {
        "name": "Lager",
        "description": "Gebäude zur Lagerung von Maschienen"
    },
    "location": {
        "name": "Werk 12",
        "label": "bln153"
    }
}
                            </code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article class="mt-3" id="endpoint-post-buildings">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/building</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Erstellt ein Gebäude.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="post">POST</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    <p>Erforderliche Felder</p>

                    <x-api-key key="label" type="Integer" />
                    <x-api-key key="goods_income_has" type="BOOLEAN" />

                    <x-api-optionals>
                        <x-api-key key="description" type="String" />
                        <x-api-key key="uid" type="String" />
                        <x-api-key key="name" type="String" />
                        <x-api-key key="place" type="String" />
                        <x-api-key key="type" type="Object" />
                        <x-api-key key="location_id" type="Integer" />


                        <p class="mt-3 pl-2">Wird das Objekt <x-code type="key">type</x-code> verwendet, sind folgende Felder erforderlich</p>
                        <x-api-key key="type.name" type="String" />
                        <p class="mt-3 pl-2">Optional dazu</p>
                        <x-api-key key="type.description" type="String" />

                    </x-api-optionals>


                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="request">
                        <x-slot:request>
                            <pre class=" language-json"><code class=" language-json">{
    "label" : "b12345",
    "goods_income_has" : false,
    "uid" : "430eb8b6-619c-4ebf-8c54-b139b99e7a33",
    "type" : {
        "name": "Büro",
        "description": "Gebäude mit reiner Büronutzung"
    },
    "name" : "Gebäude 12345",
    "place" : "Tor Nord",
    "description" : "Bürogebäude Zentraleinkauf",
    "goods_income_name" : null,
    "location_id" : 1
}
                            </code></pre>
                        </x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">{
    "id": 7,
    "created": "2021-01-06 19:15:06",
    "updated": "2021-01-06 19:15:06",
    "label": "b123435",
    "uid": "430eb8b6-619c-4ebf-8c54-b139b99e7a32",
    "name": "Bürogebäude Zentraleinkauf",
    "place": "Tor Nord",
    "description": null,
    "goods_income_has": true,
    "goods_income_name": null,
    "building_type_id": 1,
    "location_id": 1
}
                                 </code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article class="mt-3" id="endpoint-put-buildings_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/building/{id}</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    <code>id</code>
                    <span class="ml-5 badge badge-dark-soft">INTEGER</span>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Aktualisiert die Daten eines Betriebes.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="put">PUT</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    <p>Erforderliche Felder</p>
                    <x-api-key key="label" type="Integer" />
                    <x-api-key key="goods_income_has" type="Boolean" />
                    <x-api-optionals>
                        <x-api-key key="uid" type="String" />
                        <x-api-key key="description" type="String" />
                        <x-api-key key="goods_income_name" type="String" />
                        <x-api-key key="place" type="String" />
                        <x-api-key key="type_id" type="Integer" />
                        <x-api-key key="location_id" type="Integer" />
                    </x-api-optionals>

                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="request">
                        <x-slot:request>
                            <pre class=" language-json"><code class=" language-json">{
    "label" : "b12345",
    "goods_income_has" : false,
    "uid" : "430eb8b6-619c-4ebf-8c54-b139b99e7a33",
    "type" : {
        "name": "Büro",
        "description": "Gebäude mit reiner Büronutzung"
    },
    "name" : "Gebäude 12345",
    "place" : "Tor Nord",
    "description" : "Bürogebäude Zentraleinkauf",
    "goods_income_name" : null,
    "location_id" : 1
}

                            </code></pre>
                        </x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">{
    "label": "geb-1498",
    "uid": "3e982f3e-4fd2-3dae-b748-f5c19efd1cae",
    "name": "necessitatibus-ullam-eum",
    "place": "5c",
    "description": "Voluptas libero voluptatum vel maxime...",
    "goods_income_has": true,
    "goods_income_name": "3",
    "type_id" : 2,
    "location_id" : 1
}
</code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article class="mt-3" id="endpoint-delete-buildings_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/building/{id}</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    <x-api-key key="id" type="Integer" noborder />
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Löscht den Betrieb.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="delete">DELETE</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Antwort</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>
                            <pre class=" language-json"><code class=" language-json">-</code></pre>
                        </x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">{
    "status" : "building deleted"
}
</code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
    </section>
    <hr>
    <section id="rooms">
        <h2>Räume</h2>
        <p>Folgende Endpunkte sind verfügbar:</p>
        <x-endpoint-list :items="$roomslist" />
        <hr>
        <article id="endpoint-get-rooms">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/rooms</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Abrufen aller Räume der testWare
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="get">GET</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>-</x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">[
    {
        "id": 1,
        "created": "2021-01-06 12:26:19",
        "updated": "2021-01-06 12:26:19",
        "label": "rm-142",
        "uid": "3e0b5fb1-423f-383e-b040-9f93d0c47c9d",
        "name": "ipsum",
        "description": "Optio et mollitia tempore consequatur...",
        "building_id": 2,
        "room_type_id": 3
    },
    {...}
]</code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-get-rooms_list_full">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/rooms_list_full</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Abrufen aller Räume der testWare inklusive Räumetyp, Details des Gebäude und Anzahl der Objekte des Raums im Zusatzfeld
                    <x-code>room_objects</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="get">GET</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>-</x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">[
    {
        "id": 1,
        "created": "2021-01-05 10:44:20",
        "updated": "2021-01-05 10:44:20",
        "label": "rm-117",
        "uid": "1e0cfa36-e485-36c7-8f22-21c83884a442",
        "name": "quis",
        "description": "Amet minus dolorum at reprehenderit velit iste...",
        "type": {
            "label": "Material"
        },
        "building": {
            "label": "geb-7715",
            "uid": "11a26323-672d-3ebf-92c0-349d1c397f6a",
            "name": "fugit-qui",
            "description": "Et magnam atque quidem ratione qui voluptates..."
        },
        "room_objects": {
            "compartments": 7,
            "equipment": 240
        }
    },
    {...}
]</code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-get-rooms_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/rooms/{id}</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    <x-api-key key="id" type="Integer" />
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Ruft die Daten zum einem Räume mit der <code>id</code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="get">GET</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>-</x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">[
    {
        "id": 1,
        "created": "2021-01-05 10:44:20",
        "updated": "2021-01-05 10:44:20",
        "label": "rm-117",
        "uid": "1e0cfa36-e485-36c7-8f22-21c83884a442",
        "name": "quis",
        "description": "Amet minus dolorum at reprehenderit velit iste...",
        "type": {
            "label": "Material"
        },
        "building": {
            "label": "geb-7715",
            "uid": "11a26323-672d-3ebf-92c0-349d1c397f6a",
            "name": "fugit-qui",
            "description": "Et magnam atque quidem ratione qui voluptates..."
        },
        "room_objects": {
            "compartments": 7,
            "equipment": 240
        }
    },
    {...}
]</code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-post-rooms">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/rooms</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Erstellt ein Räume.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="post">POST</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    <p>Erforderliche Felder</p>
                    <x-api-key key="label" type="String" noborder/>

                    <x-api-optionals>
                        <x-api-key key="uid" type="String"/>
                        <x-api-key key="name" type="String"/>
                        <x-api-key key="description" type="String"/>
                        <x-api-key key="building_id" type="String"/>
                        <x-api-key key="room_type_id" type="String"/>

                        <p class="mt-3 pl-2">oder</p>
                        <x-api-key key="type" type="Object"/>

                        <p class="mt-3 pl-2">Wird das Objekt  <x-code>type</x-code> verwendet, sind folgende Felder erforderlich</p>
                        <x-api-key key="type.label" type="String"/>

                        <p class="mt-3 pl-2">Optionale Felder</p>
                        <x-api-key key="type.name" type="String"/>
                        <x-api-key key="type.description" type="String"/>
                    </x-api-optionals>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>
                            <pre class=" language-json"><code class=" language-json">{
    "label": "rm-118",
    "uid": "1e0cfa36-e485-36c7-8f26-21c83884a442",
    "name": "quis",
    "description": "Amet minus dolorum at reprehenderit velit iste laudantium...",
    "type" : {
        "label": "Büro",
        "name": "Räume mit reiner Büronutzung",
        "description": null
    },
    "building_id": 5
}
                                </code>
                            </pre>
                        </x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">{
    "id": 15,
    "created": "2021-01-06 20:42:10",
    "updated": "2021-01-06 20:42:10",
    "label": "rm-118",
    "uid": "1e0cfa36-e485-36c7-8f26-21c83884a442",
    "name": "quis",
    "description": "Amet minus dolorum at reprehenderit velit iste laudantium...",
    "building_id": 5,
    "room_type_id": 1
}</code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-put-rooms_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/rooms/{id}</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                   <x-api-key key="id" type="Integer" noborder/>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Aktualisiert die Daten eines Raums mit der Referenz <code>{id}</code>.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="put">PUT</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    <p>Erforderliche Felder</p>
                    <x-api-key key="label" type="String"/>
                    <x-api-optionals>
                        <x-api-key key="uid" type="String"/>
                        <x-api-key key="name" type="String"/>
                        <x-api-key key="description" type="String"/>
                        <x-api-key key="building_id" type="String"/>
                        <x-api-key key="room_type_id" type="String"/>

                        <p class="mt-3 pl-2">oder</p>
                        <x-api-key key="type" type="Object"/>

                        <p class="mt-3 pl-2">Wird das Objekt  <x-code>type</x-code> verwendet, sind folgende Felder erforderlich</p>
                        <x-api-key key="type.label" type="String"/>

                        <p class="mt-3 pl-2">Optionale Felder</p>
                        <x-api-key key="type.name" type="String"/>
                        <x-api-key key="type.description" type="String"/>
                    </x-api-optionals>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="request">
                        <x-slot:request>
                            <pre class=" language-json"><code class=" language-json">{
    "label": "rm-118",
    "uid": "1e0cfa36-e485-36c7-8f26-21c83884a442",
    "name": "quis",
    "description": "Amet minus dolorum at reprehenderit ...",
    "room_type_id" : 2,
    "building_id": 5
}</code>
                            </pre>
                        </x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">{
    "id": 1,
    "created": "2021-01-06 22:23:44",
    "updated": "2021-01-06 23:07:33",
    "label": "rm-118",
    "uid": "1e0cfa36-e485-36c7-8f26-21c83884a442",
    "name": "quis",
    "description": "Amet minus dolorum at reprehenderit ...",
    "room_type_id" : 2,
    "building_id": 5
}</code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-delete-rooms_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/rooms/{id}</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    <x-api-key key="id" type="Integer" noborder />
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Löscht den Raum mit der Referenz <x-code>{id}</x-code>.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="delete">DELETE</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>-</x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">{
    "status": "room deleted"
}</code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
    </section>
    <hr>
    <section id="compartments">
        <h2>Stellplätze</h2>
        <p>Folgende Endpunkte sind verfügbar:</p>
        <x-endpoint-list :items="$compartmentslist" />
        <hr>
        <article id="endpoint-get-compartments">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/compartment</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Abrufen aller Stellplätze der testWare
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="get">GET</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>-</x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">[
    {
        "id": 1,
        "created": "2021-01-06 12:26:19",
        "updated": "2021-01-06 12:26:19",
        "label": "rm-142",
        "uid": "3e0b5fb1-423f-383e-b040-9f93d0c47c9d",
        "name": "ipsum",
        "description": "Optio et mollitia tempore consequatur...",
        "building_id": 2,
        "compartment_type_id": 3
    },
    {...}
]</code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-get-compartments_list_full">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/compartment_list_complete</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Abrufen aller Stellplätze der testWare inklusive Stellplatztyp, Details des Raums und Anzahl der Objekte des Stellplatz im Zusatzfeld
                    <x-code>objects</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="get">GET</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>-</x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">[
    {
        "id": 1,
        "created": "2021-01-06 22:23:44",
        "updated": "2021-01-06 22:23:44",
        "label": "SP.7-ru0rxn",
        "type": {
            "label": "Schubfach",
            "id": 2
        },
        "name": "quos-repudiandae-et-quia-quas-ad-voluptatem-ratione",
        "description": null,
        "room": {
            "label": "rm-114",
            "uid": "e205dab4-5472-30ba-a774-8b032482d2df"
        },
        "objects": {
            "equipment": 23
        }
    },
    {...}
]</code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-get-compartments_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/compartment/{id}</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    <x-api-key key="id" type="Integer" noborder />
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Ruft die Daten zum einem Stellplatz mit der <x-code>id</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="get">GET</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>-</x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">{
    "id": 1,
    "created": "2021-01-06 22:23:44",
    "updated": "2021-01-06 22:23:44",
    "label": "SP.7-ru0rxn",
    "uid": "c9903a08-728a-3067-bf79-ec24ab757713",
    "name": "quos-repudiandae-et-quia-quas-ad-voluptatem-ratione",
    "description": null,
    "compartment_type_id": 2,
    "room_id": 9
}</code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-post-compartments">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/compartment</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Erstellt einen Stellplatz.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="post">POST</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                   <p class="mt-3 pl-2">Erforderliche Felder</p>
                    <x-api-key key="label" type="String"  />
                    <x-api-optionals>
                        <x-api-key key="uid" type="STRING"  />
                        <x-api-key key="name" type="STRING"  />
                        <x-api-key key="description" type="STRING"  />
                        <x-api-key key="room_id" type="INTEGER"  />
                        <x-api-key key="compartment_type_id" type="INTEGER"  />
                        <p class="mt-3 pl-2">oder</p>
                        <x-api-key key="type" type="OBJECT"  />
                        <p class="mt-3 pl-2">Wird das Objekt <x-code>type</x-code> verwendet, sind folgende Felder erforderlich</p>
                        <x-api-key key="label" type="String"  />
                        <p class="mt-3 pl-2">Optionale Felder</p>
                        <x-api-key key="type.name" type="String"  />
                        <x-api-key key="type.description" type="String"  />
                    </x-api-optionals>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>
                            <pre class=" language-json"><code class=" language-json">{
    "label": "sp.2118",
    "uid": "1e0cfa36-e485-36c7-8f26-21c83884a442",
    "name": "W.1.2.3.a.12",
    "description": "Amet minus dolorum at reprehenderit velit iste laudantium...",
    "type" : {
        "label": "Fach-DIN-3",
        "name": "Lagerfach für Kästen DIN-3",
        "description": null
    },
    "room_id": 5
}</code></pre>
                        </x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">{
    "id": 49,
    "created": "2021-01-07 18:09:37",
    "updated": "2021-01-07 18:09:37",
    "label": "sp.2118",
    "uid": "1e0cfa36-e485-36c7-8f26-21c83884a442",
    "name": "W.1.2.3.a.12",
    "description": "Amet minus dolorum at reprehenderit velit iste laudantium...",
    "compartment_type_id": 4,
    "room_id": 5
}</code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-put-compartments_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/compartment/{id}</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    <x-api-key key="id" type="Integer" noborder />
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Aktualisiert die Daten eines Stellplatzes mit der Referenz <x-code>{id}</x-code>.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="put">PUT</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    <p class="mt-3 pl-2">Erforderliche Felder</p>
                    <x-api-key key="label" type="String"  />
                  <x-api-optionals>
                      <x-api-key key="uid" type="STRING"  />
                      <x-api-key key="name" type="STRING"  />
                      <x-api-key key="description" type="STRING"  />
                      <x-api-key key="room_id" type="INTEGER"  />
                      <x-api-key key="compartment_type_id" type="INTEGER"  />
                      <p class="mt-3 pl-2">oder</p>
                      <x-api-key key="type" type="OBJECT"  />
                      <p class="mt-3 pl-2">Wird das Objekt <x-code>type</x-code> verwendet, sind folgende Felder erforderlich</p>
                      <x-api-key key="label" type="String"  />
                      <p class="mt-3 pl-2">Optionale Felder</p>
                      <x-api-key key="type.name" type="String"  />
                      <x-api-key key="type.description" type="String"  />
                  </x-api-optionals>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>
                            <pre class=" language-json"><code class=" language-json">{
    "label": "rm-118",
    "uid": "1e0cfa36-e485-36c7-8f26-21c83884a442",
    "name": "quis",
    "description": "Amet minus dolorum at reprehenderit velit iste laudantium...",
    "compartment_type_id" : 1,
    "building_id": 5
}</code></pre>
                        </x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">{
    "id": 50,
    "created": "2021-01-07 21:33:02",
    "updated": "2021-01-07 22:18:11",
    "label": "sp.2112",
    "uid": "1e0cfa36-e485-36c7-8f26-21c838842442",
    "name": "W.1.2.3.a.12",
    "description": "Amet minuszf dolorum at reprehenderit velit iste laudantium...",
    "compartment_type_id": 1,
    "room_id": 5
}</code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-delete-compartments_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code type="key">/compartment/{id}</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    <x-api-key key="id" type="Integer" noborder />
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Aufgabe</dt>
                <dd class="api-dd">
                    Löscht den Stellplatz mit der Referenz <x-code>{id}</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <x-code type="delete">DELETE</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    -
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Antwort</dt>
                <dd class="api-dd">
                    <x-api-tabs open="response">
                        <x-slot:request>
                            <pre class=" language-json"><code class=" language-json"></code></pre>
                        </x-slot:request>
                        <x-slot:response>
                            <pre class=" language-json"><code class=" language-json">{
    "status" : "compartment deleted"
}</code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
    </section>

@endsection