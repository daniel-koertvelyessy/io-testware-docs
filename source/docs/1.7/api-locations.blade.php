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

    $locationlist = [
        [
            'link' => 'endpoint-get-api-v1-location',
            'request' => 'get',
            'endpoint' => '/api/v1/locations',
        ],
        [
            'link' => 'endpoint-get-location_list_complete',
            'request' => 'get',
            'endpoint' => '/api/v1/location_list_complete',
        ],
        [
            'link' => 'endpoint-get-location_id',
            'request' => 'get',
            'endpoint' => '/api/v1/locations/{id}',
        ],
        [
            'link' => 'endpoint-post-location',
            'request' => 'post',
            'endpoint' => '/api/v1/locations',
        ],
        [
            'link' => 'endpoint-put-location_id',
            'request' => 'put',
            'endpoint' => '/api/v1/locations/{id}',
        ],
        [
            'link' => 'endpoint-delete-location_id',
            'request' => 'delete',
            'endpoint' => '/api/v1/locations/{id}',
        ],
];
@endphp
@extends('_layouts/documentation')
@section('content')
    <x-nav-docs :items="$navigation" />
    <h1>Verwaltung</h1>
    <section id="locations">
        <h2>Betriebe</h2>
        <p>Folgende Endpunkte sind verfügbar:</p>
        <x-endpoint-list :items="$locationlist" />
        <article id="endpoint-get-api-v1-location" class="mt-3">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code>/api/v1/locations</x-code>
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
                        <x-slot:response><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">[</span>
    <span class="token punctuation">{</span>
        <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
        <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2020-12-29 11:30:16"</span><span class="token punctuation">,</span>
        <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-03 19:10:04"</span><span class="token punctuation">,</span>
        <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"784f64bc-735a-3d2f-8a06-fcf3d47621f3"</span><span class="token punctuation">,</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"HQbln153"</span><span class="token punctuation">,</span>
        <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"bln153"</span><span class="token punctuation">,</span>
        <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Hauptsitz der Firma Testfirma GmbH"</span><span class="token punctuation">,</span>
        <span class="token property">"address_id"</span><span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
        <span class="token property">"employee_id"</span><span class="token operator">:</span> <span class="token number">4</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">{</span>...<span class="token punctuation">}</span>
<span class="token punctuation">]</span>
                                </code></pre></x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-get-location_list_complete" class="mt-3">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code>/api/v1/location_list_complete</x-code>
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
                            <pre class=" language-json"><code class=" language-json">
<span class="token punctuation">[</span>
    <span class="token punctuation">{</span>
        <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
        <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2020-12-29 11:30:16"</span><span class="token punctuation">,</span>
        <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-03 19:10:04"</span><span class="token punctuation">,</span>
        <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"784f64bc-735a-3d2f-8a06-fcf3d47621f3"</span><span class="token punctuation">,</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"HQbln153"</span><span class="token punctuation">,</span>
        <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"bln153"</span><span class="token punctuation">,</span>
        <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Hauptsitz der Firma Testfirma GmbH"</span><span class="token punctuation">,</span>
        <span class="token property">"address"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
            <span class="token property">"type"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
                <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Heimadress"</span><span class="token punctuation">,</span>
                <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Standard Adresse"</span>
            <span class="token punctuation">}</span><span class="token punctuation">,</span>
            <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"Gmb5423212"</span><span class="token punctuation">,</span>
            <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Deckerweg 5/8 15868 Neukirchen-Vluyn"</span><span class="token punctuation">,</span>
            <span class="token property">"company"</span><span class="token operator">:</span> <span class="token string">"Testfirma GmbH"</span><span class="token punctuation">,</span>
            <span class="token property">"company_2"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
            <span class="token property">"company_co"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
            <span class="token property">"company_unloading_point"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
            <span class="token property">"company_goods_income"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
            <span class="token property">"company_division"</span><span class="token operator">:</span> <span class="token string">"UWTZIZ79"</span><span class="token punctuation">,</span>
            <span class="token property">"street"</span><span class="token operator">:</span> <span class="token string">"Christiane-Brandt-Platz"</span><span class="token punctuation">,</span>
            <span class="token property">"no"</span><span class="token operator">:</span> <span class="token string">"67"</span><span class="token punctuation">,</span>
            <span class="token property">"zip"</span><span class="token operator">:</span> <span class="token string">"63550"</span><span class="token punctuation">,</span>
            <span class="token property">"city"</span><span class="token operator">:</span> <span class="token string">"Bruchsal"</span><span class="token punctuation">,</span>
            <span class="token property">"floor"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
            <span class="token property">"enterance"</span><span class="token operator">:</span> <span class="token null keyword">null</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token property">"manager"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
            <span class="token property">"first_name"</span><span class="token operator">:</span> <span class="token string">"Lenard"</span><span class="token punctuation">,</span>
            <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Hammer"</span><span class="token punctuation">,</span>
            <span class="token property">"name_2"</span><span class="token operator">:</span> <span class="token string">"Herr Lenard H"</span><span class="token punctuation">,</span>
            <span class="token property">"employee_number"</span><span class="token operator">:</span> <span class="token string">"1187"</span><span class="token punctuation">,</span>
            <span class="token property">"date_birth"</span><span class="token operator">:</span> <span class="token string">"1972-09-03"</span><span class="token punctuation">,</span>
            <span class="token property">"date_entry"</span><span class="token operator">:</span> <span class="token string">"2007-10-12"</span><span class="token punctuation">,</span>
            <span class="token property">"date_leave"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
            <span class="token property">"phone"</span><span class="token operator">:</span> <span class="token string">"0808862546"</span><span class="token punctuation">,</span>
            <span class="token property">"mobile"</span><span class="token operator">:</span> <span class="token string">"+5211706111601"</span><span class="token punctuation">,</span>
            <span class="token property">"fax"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
            <span class="token property">"com_1"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
            <span class="token property">"com_2"</span><span class="token operator">:</span> <span class="token null keyword">null</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token property">"location_objects"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
            <span class="token property">"buildings"</span><span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
            <span class="token property">"rooms"</span><span class="token operator">:</span> <span class="token number">5</span><span class="token punctuation">,</span>
            <span class="token property">"compartments"</span><span class="token operator">:</span> <span class="token number">18</span><span class="token punctuation">,</span>
            <span class="token property">"equipment"</span><span class="token operator">:</span> <span class="token number">738</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">{</span>...<span class="token punctuation">}</span>
<span class="token punctuation">]</span>
                            </code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-get-location_id" class="mt-3">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code>/api/v1/locations/{id}</x-code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Variable</dt>
                <dd class="api-dd">
                    <x-code>id</x-code>
                    <x-code type="dark">INTEGER</x-code>
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
                            <pre class=" language-json"><code class=" language-json">
<span class="token punctuation">{</span>
    <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2020-12-29 11:30:16"</span><span class="token punctuation">,</span>
    <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-03 19:10:04"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"784f64bc-735a-3d2f-8a06-fcf3d47621f3"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"HQbln153"</span><span class="token punctuation">,</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"bln153"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Hauptsitz der Firma Testfirma GmbH"</span><span class="token punctuation">,</span>
    <span class="token property">"address_id"</span><span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
    <span class="token property">"employee_id"</span><span class="token operator">:</span> <span class="token number">4</span>
<span class="token punctuation">}</span>
                            </code></pre>
                        </x-slot:response>
                    </x-api-tabs>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-post-location" class="mt-3">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <x-code>/api/v1/locations</x-code>
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

                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>label</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                    </ul>

                    <x-api-optionals></x-api-optionals>

                    <a class="btn btn-sm btn-outline-dark-soft btn-pill"
                       data-toggle="collapse"
                       href="#locations_optionals"
                       role="button"
                       aria-expanded="false"
                       aria-controls="locations_optionals"
                    >Optionale Felder
                    </a>
                    <div class="collapse"
                         id="locations_optionals"
                    >
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>name</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>description</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>uid</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>address</code>
                                <span class="badge badge-dark-soft">OBJECT</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>employee</code>
                                <span class="badge badge-dark-soft">OBJECT</span>
                            </li>
                        </ul>
                    </div>
                    <p class="mt-3">Wird das Objekt <code>address</code> verwendet, sind folgende Felder erforderlich
                    </p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>address.label</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>address.street</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>address.no</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>address.zip</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>address.city</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark-soft btn-pill"
                       data-toggle="collapse"
                       href="#address_optionals"
                       role="button"
                       aria-expanded="false"
                       aria-controls="address_optionals"
                    >Optionale Felder
                    </a>
                    <div class="collapse"
                         id="address_optionals"
                    >
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>address.address_type</code>
                                <span class="badge badge-dark-soft">OBJECT</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>address.name</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>address.company</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>address.company_2</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>address.company_co</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>address.company_unloading_point</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>address.company_goods_income</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>address.company_division</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                        </ul>
                    </div>

                    <p class="mt-3">Wird das Objekt <code>employee</code> verwendet, sind folgende Felder erforderlich
                    </p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>employee.name</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark-soft btn-pill"
                       data-toggle="collapse"
                       href="#employees_optionals"
                       role="button"
                       aria-expanded="false"
                       aria-controls="employees_optionals"
                    >Optionale Felder
                    </a>
                    <div class="collapse"
                         id="employees_optionals"
                    >
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>employee.first_name</code>
                                <span>
                                            </span>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>employee.name_2</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>employee.date_birth</code>
                                <span>
                                                <span class="badge badge-dark-soft">Datum</span> <code>2023-02-22</code>
                                            </span>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>employee.employee_number</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>employee.date_entry</code>
                                <span>
                                                <span class="badge badge-dark-soft">Datum</span> <code>2023-02-22</code>
                                            </span>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>employee.date_leave</code>
                                <span>
                                                <span class="badge badge-dark-soft">Datum</span> <code>2023-02-22</code>
                                            </span>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>employee.phone</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>employee.mobile</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>employee.fax</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>employee.com_1</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>employee.com_2</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                        </ul>
                    </div>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <ul class="nav nav-bordered"
                        id="api_post_location-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_post_location-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_post_location-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_post_location-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_post_location-docs-tab-response"
                               data-toggle="tab"
                               href="#api_post_location-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_post_location-docs-tab-tab2-content"
                               aria-selected="false"
                            >Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_post_location-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_post_location-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_post_location-docs-tab-scheme"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">{</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Loc-bln153"</span><span class="token punctuation">,</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"bln153"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Nihil aut qui nostrum ..."</span><span class="token punctuation">,</span>
    <span class="token property">"address"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
        <span class="token property">"street"</span><span class="token operator">:</span> <span class="token string">"Christiane-Brandt-Platz"</span><span class="token punctuation">,</span>
        <span class="token property">"no"</span><span class="token operator">:</span> <span class="token string">"67"</span><span class="token punctuation">,</span>
        <span class="token property">"zip"</span><span class="token operator">:</span> <span class="token string">"63550"</span><span class="token punctuation">,</span>
        <span class="token property">"city"</span><span class="token operator">:</span> <span class="token string">"Bruchsal"</span><span class="token punctuation">,</span>
        <span class="token property">"address_type"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
            <span class="token property">"name"</span> <span class="token operator">:</span> <span class="token string">"Hausadresse"</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"Gmb5423212"</span><span class="token punctuation">,</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Hausadresse Barth GmbH"</span><span class="token punctuation">,</span>
        <span class="token property">"company"</span><span class="token operator">:</span> <span class="token string">"Barth GmbH"</span><span class="token punctuation">,</span>
        <span class="token property">"company_2"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
        <span class="token property">"company_co"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
        <span class="token property">"company_unloading_point"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
        <span class="token property">"company_goods_income"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
        <span class="token property">"company_division"</span><span class="token operator">:</span> <span class="token string">"UWTZIZ79"</span><span class="token punctuation">,</span>
        <span class="token property">"floor"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
        <span class="token property">"enterance"</span><span class="token operator">:</span> <span class="token null keyword">null</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token property">"employee"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
        <span class="token property">"first_name"</span><span class="token operator">:</span> <span class="token string">"Anja"</span><span class="token punctuation">,</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Janssen"</span><span class="token punctuation">,</span>
        <span class="token property">"name_2"</span><span class="token operator">:</span> <span class="token string">"Fleischer"</span><span class="token punctuation">,</span>
        <span class="token property">"date_birth"</span><span class="token operator">:</span> <span class="token string">"2001-10-04"</span><span class="token punctuation">,</span>
        <span class="token property">"employee_number"</span><span class="token operator">:</span> <span class="token string">"1526"</span><span class="token punctuation">,</span>
        <span class="token property">"date_entry"</span><span class="token operator">:</span> <span class="token string">"2013-06-05"</span><span class="token punctuation">,</span>
        <span class="token property">"date_leave"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
        <span class="token property">"phone"</span><span class="token operator">:</span> <span class="token string">"+496180690281"</span><span class="token punctuation">,</span>
        <span class="token property">"mobile"</span><span class="token operator">:</span> <span class="token string">"+496180690281"</span><span class="token punctuation">,</span>
        <span class="token property">"fax"</span><span class="token operator">:</span> <span class="token string">"+496180690281"</span><span class="token punctuation">,</span>
        <span class="token property">"com_1"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
        <span class="token property">"com_2"</span><span class="token operator">:</span> <span class="token null keyword">null</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
                                </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane bg-light fade p-3"
                             id="api_post_location-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_post_location-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">{</span>
    <span class="token property">"status"</span><span class="token operator">:</span> <span class="token boolean">true</span><span class="token punctuation">,</span>
    <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">3</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"74fc7d7c-04ad-4f12-a5be-07111cd73679"</span><span class="token punctuation">,</span>
    <span class="token property">"address"</span><span class="token operator">:</span> <span class="token number">34</span><span class="token punctuation">,</span>
    <span class="token property">"employee"</span><span class="token operator">:</span> <span class="token number">6</span>
<span class="token punctuation">}</span>
                                </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-put-location_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/location/{id}</code>
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
                    <code>PUT</code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    <p>Erforderliche Felder</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>label</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark-soft btn-pill"
                       data-toggle="collapse"
                       href="#locations_optionals"
                       role="button"
                       aria-expanded="false"
                       aria-controls="locations_optionals"
                    >Optionale Felder
                    </a>
                    <div class="collapse"
                         id="locations_optionals"
                    >
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>name</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>description</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>uid</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>address_id</code>
                                <span class="badge badge-dark-soft">INTEGER</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>employee_id</code>
                                <span class="badge badge-dark-soft">INTEGER</span>
                            </li>
                        </ul>
                    </div>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <ul class="nav nav-bordered"
                        id="api_put_location_id-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_put_location_id-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_put_location_id-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_put_location_id-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_put_location_id-docs-tab-response"
                               data-toggle="tab"
                               href="#api_put_location_id-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_put_location_id-docs-tab-tab2-content"
                               aria-selected="false"
                            >Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_put_location_id-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_put_location_id-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_put_location_id-docs-tab-scheme"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">{</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"bln251"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"9f1cf9d5-370b-3413-a51c-c97c2308fe2b"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"quam-officiis-eligendi-veritatis"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Minima maxime omnis cupiditate quas..."</span><span class="token punctuation">,</span>
    <span class="token property">"address_id"</span><span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
    <span class="token property">"employee_id"</span><span class="token operator">:</span> <span class="token number">4</span>
<span class="token punctuation">}</span>
                                </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane bg-light fade p-3"
                             id="api_put_location_id-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_put_location_id-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">{</span>
    <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
    <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 12:26:19"</span><span class="token punctuation">,</span>
    <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 18:41:57"</span><span class="token punctuation">,</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"bln251"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"9f1cf9d5-370b-3413-a51c-c97c2308fe2b"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"quam-officiis-eligendi-veritatis"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Minima maxime omnis cupiditate quas..."</span><span class="token punctuation">,</span>
    <span class="token property">"address_id"</span><span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
    <span class="token property">"employee_id"</span><span class="token operator">:</span> <span class="token number">4</span>
<span class="token punctuation">}</span>
                                </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-delete-location_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/location/{id}</code>
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
                    Löscht den Betrieb.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <code>DELETE</code>
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
                    <ul class="nav nav-bordered"
                        id="api_delete_location_id-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_delete_location_id-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_delete_location_id-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_delete_location_id-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_delete_location_id-docs-tab-response"
                               data-toggle="tab"
                               href="#api_delete_location_id-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_delete_location_id-docs-tab-tab2-content"
                               aria-selected="false"
                            >Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_delete_location_id-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3"
                             id="api_delete_location_id-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_delete_location_id-docs-tab-scheme"
                        >
                            -
                        </div>
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_delete_location_id-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_delete_location_id-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json"><span class="token punctuation">{</span>
    <span class="token property">"status"</span> <span class="token operator">:</span> <span class="token string">"location deleted"</span>
<span class="token punctuation">}</span></code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
    </section>
    <section id="buildings">
        <h2>Gebäude</h2>
        <p>Folgende Endpunkte sind verfügbar:</p>
        <div class="list-group mb-6">
            <a href="#endpoint-get-api-v1-building"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">GET</span>
                <span>/api/v1/building</span>
            </a>
            <a href="#endpoint-get-api-v1-building_list_complete"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">GET</span>
                <span>/api/v1/building_list_complete</span>
            </a>
            <a href="#endpoint-get-building_id"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">GET</span>
                <span>/api/v1/building/{id}</span>
            </a>
            <a href="#endpoint-post-building"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">POST</span>
                <span>/api/v1/building</span>
            </a>
            <a href="#endpoint-put-building_id"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">PUT</span>
                <span>/api/v1/building/{id}</span>
            </a>
            <a href="#endpoint-delete-building_id"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">DELETE</span>
                <span>/api/v1/building/{id}</span>
            </a>
        </div>
        <article id="endpoint-get-api-v1-building">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/building</code>
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
                    <code>GET</code>
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
                    <ul class="nav nav-bordered"
                        id="api_get_buildings-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_get_buildings-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_get_buildings-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_get_buildings-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_get_buildings-docs-tab-response"
                               data-toggle="tab"
                               href="#api_get_buildings-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_get_buildings-docs-tab-tab2-content"
                               aria-selected="false"
                            >Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_get_buildings-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3"
                             id="api_get_buildings-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_get_buildings-docs-tab-scheme"
                        >
                            -
                        </div>
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_get_buildings-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_get_buildings-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json"><span class="token punctuation">[</span>
    <span class="token punctuation">{</span>
        <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
        <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-05 10:44:20"</span><span class="token punctuation">,</span>
        <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-05 10:44:20"</span><span class="token punctuation">,</span>
        <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"geb-8200"</span><span class="token punctuation">,</span>
        <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"2a54b8f9-6ec3-3add-8e96-54f1868e1331"</span><span class="token punctuation">,</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Halle T61"</span><span class="token punctuation">,</span>
        <span class="token property">"place"</span><span class="token operator">:</span> <span class="token string">"Tor Süd T61"</span><span class="token punctuation">,</span>
        <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Molestias cupiditate et architecto provident ut libero laborum....."</span><span class="token punctuation">,</span>
        <span class="token property">"goods_income_has"</span><span class="token operator">:</span> <span class="token boolean">true</span><span class="token punctuation">,</span>
        <span class="token property">"goods_income_name"</span><span class="token operator">:</span> <span class="token string">"WE-GT61"</span><span class="token punctuation">,</span>
        <span class="token property">"building_type_id"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
        <span class="token property">"location_id"</span><span class="token operator">:</span> <span class="token number">1</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">{</span>...<span class="token punctuation">}</span>
<span class="token punctuation">]</span></code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-get-api-v1-building_list_complete">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/building_list_complete</code>
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
                    <code>GET</code>
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
                    <ul class="nav nav-bordered"
                        id="api_get_building_list_complete-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_get_building_list_complete-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_get_building_list_complete-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_get_building_list_complete-docs-tab-tab1-content"
                               aria-selected="true"
                            >
                                Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_get_building_list_complete-docs-tab-response"
                               data-toggle="tab"
                               href="#api_get_building_list_complete-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_get_building_list_complete-docs-tab-tab2-content"
                               aria-selected="false"
                            >
                                Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_get_building_list_complete-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3"
                             id="api_get_building_list_complete-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_get_building_list_complete-docs-tab-scheme"
                        >
                            -
                        </div>
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_get_building_list_complete-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_get_building_list_complete-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">[</span>
    <span class="token punctuation">{</span>
        <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
        <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-05 10:44:20"</span><span class="token punctuation">,</span>
        <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-05 10:44:20"</span><span class="token punctuation">,</span>
        <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"geb-8200"</span><span class="token punctuation">,</span>
        <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"2a54b8f9-6ec3-3add-8e96-54f1868e1331"</span><span class="token punctuation">,</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Halle T61"</span><span class="token punctuation">,</span>
        <span class="token property">"place"</span><span class="token operator">:</span> <span class="token string">"Tor Süd T61"</span><span class="token punctuation">,</span>
        <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Molestias cupiditate et architecto provident ut libero laborum....."</span><span class="token punctuation">,</span>
        <span class="token property">"goods_income_has"</span><span class="token operator">:</span> <span class="token boolean">true</span><span class="token punctuation">,</span>
        <span class="token property">"goods_income_name"</span><span class="token operator">:</span> <span class="token string">"WE-GT61"</span><span class="token punctuation">,</span>
        <span class="token property">"type"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
            <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Lager"</span><span class="token punctuation">,</span>
            <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Gebäude zur Lagerung von Baugeräten"</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token property">"location"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
            <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Werk 12"</span><span class="token punctuation">,</span>
            <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"bln153"</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token property">"building_objects"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
            <span class="token property">"rooms"</span><span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
            <span class="token property">"compartments"</span><span class="token operator">:</span> <span class="token number">4</span><span class="token punctuation">,</span>
            <span class="token property">"equipment"</span><span class="token operator">:</span> <span class="token number">226</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">{</span>...<span class="token punctuation">}</span>
<span class="token punctuation">]</span>
                                </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-get-building_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/building/{id}</code>
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
                    Ruft die Daten zu einem Gebäude mit der <code>id</code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <code>GET</code>
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
                    <ul class="nav nav-bordered"
                        id="api_get_building_id-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_get_building_id-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_get_building_id-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_get_building_id-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_get_building_id-docs-tab-response"
                               data-toggle="tab"
                               href="#api_get_building_id-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_get_building_id-docs-tab-tab2-content"
                               aria-selected="false"
                            >Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_get_building_id-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3"
                             id="api_get_building_id-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_get_building_id-docs-tab-scheme"
                        >
                            -
                        </div>
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_get_building_id-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_get_building_id-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">{</span>
    <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-05 10:44:20"</span><span class="token punctuation">,</span>
    <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-05 10:44:20"</span><span class="token punctuation">,</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"geb-8200"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"2a54b8f9-6ec3-3add-8e96-54f1868e1331"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Halle T61"</span><span class="token punctuation">,</span>
    <span class="token property">"place"</span><span class="token operator">:</span> <span class="token string">"Tor Süd T61"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Molestias cupiditate et architecto provident ut libero laborum....."</span><span class="token punctuation">,</span>
    <span class="token property">"goods_income_has"</span><span class="token operator">:</span> <span class="token boolean">true</span><span class="token punctuation">,</span>
    <span class="token property">"goods_income_name"</span><span class="token operator">:</span> <span class="token string">"WE-GT61"</span><span class="token punctuation">,</span>
    <span class="token property">"type"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Lager"</span><span class="token punctuation">,</span>
        <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Gebäude zur Lagerung von Maschienen"</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token property">"location"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Werk 12"</span><span class="token punctuation">,</span>
        <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"bln153"</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
                            </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-post-building">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/building</code>
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
                    <code>POST</code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    <p>Erforderliche Felder</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>label</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>goods_income_has</code>
                            <span class="badge badge-dark-soft">BOOLEAN</span>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark-soft btn-pill"
                       data-toggle="collapse"
                       href="#buildings_optionals"
                       role="button"
                       aria-expanded="false"
                       aria-controls="buildings_optionals"
                    >Optionale Felder
                    </a>
                    <div class="collapse"
                         id="buildings_optionals"
                    >
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>description</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>uid</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>name</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>place</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>type</code>
                                <span class="badge badge-dark-soft">OBJECT</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>location_id</code>
                                <span class="badge badge-dark-soft">INTEGER</span>
                            </li>
                        </ul>
                    </div>
                    <p class="mt-3">Wird das Objekt &lt;code&gt;type&lt;/code&gt; verwendet, sind folgende Felder erforderlich</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>type.name</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark-soft btn-pill"
                       data-toggle="collapse"
                       href="#buildings_put_optional_type"
                       role="button"
                       aria-expanded="false"
                       aria-controls="buildings_put_optional_type"
                    >Optionale Felder
                    </a>
                    <div class="collapse"
                         id="buildings_put_optional_type"
                    >
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>type.description</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                        </ul>
                    </div>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <ul class="nav nav-bordered"
                        id="api_post_building-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_post_building-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_post_building-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_post_building-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_post_building-docs-tab-response"
                               data-toggle="tab"
                               href="#api_post_building-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_post_building-docs-tab-tab2-content"
                               aria-selected="false"
                            >Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_post_building-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_post_building-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_post_building-docs-tab-scheme"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">{</span>
    <span class="token property">"label"</span> <span class="token operator">:</span> <span class="token string">"b12345"</span><span class="token punctuation">,</span>
    <span class="token property">"goods_income_has"</span> <span class="token operator">:</span> <span class="token boolean">false</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span> <span class="token operator">:</span> <span class="token string">"430eb8b6-619c-4ebf-8c54-b139b99e7a33"</span><span class="token punctuation">,</span>
    <span class="token property">"type"</span> <span class="token operator">:</span> <span class="token punctuation">{</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Büro"</span><span class="token punctuation">,</span>
        <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Gebäude mit reiner Büronutzung"</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span> <span class="token operator">:</span> <span class="token string">"Gebäude 12345"</span><span class="token punctuation">,</span>
    <span class="token property">"place"</span> <span class="token operator">:</span> <span class="token string">"Tor Nord"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span> <span class="token operator">:</span> <span class="token string">"Bürogebäude Zentraleinkauf"</span><span class="token punctuation">,</span>
    <span class="token property">"goods_income_name"</span> <span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
    <span class="token property">"location_id"</span> <span class="token operator">:</span> <span class="token number">1</span>
<span class="token punctuation">}</span>
                                </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane bg-light fade p-3"
                             id="api_post_building-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_post_building-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">{</span>
    <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">7</span><span class="token punctuation">,</span>
    <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 19:15:06"</span><span class="token punctuation">,</span>
    <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 19:15:06"</span><span class="token punctuation">,</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"b123435"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"430eb8b6-619c-4ebf-8c54-b139b99e7a32"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Bürogebäude Zentraleinkauf"</span><span class="token punctuation">,</span>
    <span class="token property">"place"</span><span class="token operator">:</span> <span class="token string">"Tor Nord"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
    <span class="token property">"goods_income_has"</span><span class="token operator">:</span> <span class="token boolean">true</span><span class="token punctuation">,</span>
    <span class="token property">"goods_income_name"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
    <span class="token property">"building_type_id"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
    <span class="token property">"location_id"</span><span class="token operator">:</span> <span class="token number">1</span>
<span class="token punctuation">}</span>
                                </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-put-building_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/building/{id}</code>
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
                    <code>PUT</code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    <p>Erforderliche Felder</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>label</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>goods_income_has</code>
                            <span class="badge badge-dark-soft">BOLEAN</span>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark-soft btn-pill"
                       data-toggle="collapse"
                       href="#buildings_put_optionals"
                       role="button"
                       aria-expanded="false"
                       aria-controls="buildings_put_optionals"
                    >Optionale Felder
                    </a>
                    <div class="collapse"
                         id="buildings_put_optionals"
                    >
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>uid</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>description</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>goods_income_name</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>place</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>type_id</code>
                                <span class="badge badge-dark-soft">INTEGER</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>location_id</code>
                                <span class="badge badge-dark-soft">INTEGER</span>
                            </li>
                        </ul>
                    </div>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <ul class="nav nav-bordered"
                        id="api_put_building_id-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_put_building_id-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_put_building_id-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_put_building_id-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_put_building_id-docs-tab-response"
                               data-toggle="tab"
                               href="#api_put_building_id-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_put_building_id-docs-tab-tab2-content"
                               aria-selected="false"
                            >Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_put_building_id-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_put_building_id-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_put_building_id-docs-tab-scheme"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">{</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"geb-1498"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"3e982f3e-4fd2-3dae-b748-f5c19efd1cae"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"necessitatibus-ullam-eum"</span><span class="token punctuation">,</span>
    <span class="token property">"place"</span><span class="token operator">:</span> <span class="token string">"5c"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Voluptas libero voluptatum vel maxime. Fugiat quod quis vitae saepe quis harum libero eaque. Qui quam et ab voluptatem cum. Ea commodi harum consequatur neque."</span><span class="token punctuation">,</span>
    <span class="token property">"goods_income_has"</span><span class="token operator">:</span> <span class="token boolean">true</span><span class="token punctuation">,</span>
    <span class="token property">"goods_income_name"</span><span class="token operator">:</span> <span class="token string">"3"</span><span class="token punctuation">,</span>
    <span class="token property">"type_id"</span> <span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
    <span class="token property">"location_id"</span> <span class="token operator">:</span> <span class="token number">1</span>
<span class="token punctuation">}</span>
                                </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane bg-light fade p-3"
                             id="api_put_building_id-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_put_building_id-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">{</span>
    <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 12:26:19"</span><span class="token punctuation">,</span>
    <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 20:05:22"</span><span class="token punctuation">,</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"geb-1498"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"3e982f3e-4fd2-3dae-b748-f5c19efd1cae"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"necessitatibus-ullam-eum"</span><span class="token punctuation">,</span>
    <span class="token property">"place"</span><span class="token operator">:</span> <span class="token string">"5c"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Voluptas libero voluptatum vel maxime. Fugiat quod quis vitae saepe quis harum libero eaque. Qui quam et ab voluptatem cum. Ea commodi harum consequatur neque."</span><span class="token punctuation">,</span>
    <span class="token property">"goods_income_has"</span><span class="token operator">:</span> <span class="token boolean">true</span><span class="token punctuation">,</span>
    <span class="token property">"goods_income_name"</span><span class="token operator">:</span> <span class="token string">"3"</span><span class="token punctuation">,</span>
    <span class="token property">"type"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Werkstatt"</span><span class="token punctuation">,</span>
        <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Gebäude mit reiner Werkstattnutzung"</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token property">"location"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"quam-officiis-eligendi-veritatis"</span><span class="token punctuation">,</span>
        <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"bln251"</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
                                </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-delete-building_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/building/{id}</code>
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
                    Löscht den Betrieb.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <code>DELETE</code>
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
                    <div class="code-toolbar"><pre class=" language-json"><code class=" language-json"><span class="token punctuation">{</span>
        <span class="token property">"status"</span> <span class="token operator">:</span> <span class="token string">"building deleted"</span>
    <span class="token punctuation">}</span></code></pre>
                        <div class="toolbar">
                            <div class="toolbar-item">
                                <button type="button">Copy</button>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
    </section>
    <section id="rooms">
        <h2>Räume</h2>
        <p>Folgende Endpunkte sind verfügbar:</p>
        <div class="list-group mb-6">
            <a href="#endpoint-get-api-v1-room"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">GET</span>
                <span>/api/v1/room</span>
            </a>
            <a href="#endpoint-get-api-v1-room_list_complete"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">GET</span>
                <span>/api/v1/room_list_complete</span>
            </a>
            <a href="#endpoint-get-room_id"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">GET</span>
                <span>/api/v1/room/{id}</span>
            </a>
            <a href="#endpoint-post-room"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">POST</span>
                <span>/api/v1/room</span>
            </a>
            <a href="#endpoint-put-room_id"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">PUT</span>
                <span>/api/v1/room/{id}</span>
            </a>
            <a href="#endpoint-delete-room_id"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">DELETE</span>
                <span>/api/v1/room/{id}</span>
            </a>
        </div>
        <article id="endpoint-get-api-v1-room">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/room</code>
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
                    <code>GET</code>
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
                    <ul class="nav nav-bordered"
                        id="api_get_room-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_get_room-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_get_room-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_get_room-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_get_room-docs-tab-response"
                               data-toggle="tab"
                               href="#api_get_room-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_get_room-docs-tab-tab2-content"
                               aria-selected="false"
                            >Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_get_room-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3"
                             id="api_get_room-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_get_room-docs-tab-scheme"
                        >
                            -
                        </div>
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_get_room-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_get_room-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json"><span class="token punctuation">[</span>
    <span class="token punctuation">{</span>
        <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
        <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 12:26:19"</span><span class="token punctuation">,</span>
        <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 12:26:19"</span><span class="token punctuation">,</span>
        <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"rm-142"</span><span class="token punctuation">,</span>
        <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"3e0b5fb1-423f-383e-b040-9f93d0c47c9d"</span><span class="token punctuation">,</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"ipsum"</span><span class="token punctuation">,</span>
        <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Optio et mollitia tempore consequatur. Magnam debitis doloremque voluptatem pariatur omnis. Alias ut beatae enim aperiam laborum pariatur. Quod voluptate et quis omnis voluptatem et dolorum. Cumque est eum ducimus nemo dolores eos. Nesciunt ut fuga quia et sed assumenda."</span><span class="token punctuation">,</span>
        <span class="token property">"building_id"</span><span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
        <span class="token property">"room_type_id"</span><span class="token operator">:</span> <span class="token number">3</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">{</span>...<span class="token punctuation">}</span>
<span class="token punctuation">]</span></code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-get-api-v1-room_list_complete">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/room_list_complete</code>
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
                    <code>room_objects</code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <code>GET</code>
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
                    <ul class="nav nav-bordered"
                        id="api_get_room_list_complete-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_get_room_list_complete-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_get_room_list_complete-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_get_room_list_complete-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_get_room_list_complete-docs-tab-response"
                               data-toggle="tab"
                               href="#api_get_room_list_complete-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_get_room_list_complete-docs-tab-tab2-content"
                               aria-selected="false"
                            >
                                Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_get_room_list_complete-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3"
                             id="api_get_room_list_complete-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_get_room_list_complete-docs-tab-scheme"
                        >
                            -
                        </div>
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_get_room_list_complete-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_get_room_list_complete-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">[</span>
    <span class="token punctuation">{</span>
        <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
        <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-05 10:44:20"</span><span class="token punctuation">,</span>
        <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-05 10:44:20"</span><span class="token punctuation">,</span>
        <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"rm-117"</span><span class="token punctuation">,</span>
        <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"1e0cfa36-e485-36c7-8f22-21c83884a442"</span><span class="token punctuation">,</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"quis"</span><span class="token punctuation">,</span>
        <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Amet minus dolorum at reprehenderit velit iste..."</span><span class="token punctuation">,</span>
        <span class="token property">"type"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
            <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"Material"</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token property">"building"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
            <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"geb-7715"</span><span class="token punctuation">,</span>
            <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"11a26323-672d-3ebf-92c0-349d1c397f6a"</span><span class="token punctuation">,</span>
            <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"fugit-qui"</span><span class="token punctuation">,</span>
            <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Et magnam atque quidem ratione qui voluptates..."</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token property">"room_objects"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
            <span class="token property">"compartments"</span><span class="token operator">:</span> <span class="token number">7</span><span class="token punctuation">,</span>
            <span class="token property">"equipment"</span><span class="token operator">:</span> <span class="token number">240</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">{</span>...<span class="token punctuation">}</span>
<span class="token punctuation">]</span>
                                </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-get-room_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/room/{id}</code>
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
                    Ruft die Daten zum einem Räume mit der <code>id</code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <code>GET</code>
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
                    <ul class="nav nav-bordered"
                        id="api_get_room_id-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_get_room_id-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_get_room_id-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_get_room_id-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_get_room_id-docs-tab-response"
                               data-toggle="tab"
                               href="#api_get_room_id-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_get_room_id-docs-tab-tab2-content"
                               aria-selected="false"
                            >Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_get_room_id-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3"
                             id="api_get_room_id-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_get_room_id-docs-tab-scheme"
                        >
                            -
                        </div>
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_get_room_id-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_get_room_id-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">{</span>
    <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
    <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-05 10:44:20"</span><span class="token punctuation">,</span>
    <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-05 10:44:20"</span><span class="token punctuation">,</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"rm-117"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"1e0cfa36-e485-36c7-8f22-21c83884a442"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"quis"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Amet minus dolorum at reprehenderit velit iste laudantium..."</span><span class="token punctuation">,</span>
    <span class="token property">"building_id"</span><span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
    <span class="token property">"room_type_id"</span><span class="token operator">:</span> <span class="token number">3</span>
<span class="token punctuation">}</span>
                            </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-post-room">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/room</code>
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
                    <code>POST</code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    <p>Erforderliche Felder</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>label</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark-soft btn-pill"
                       data-toggle="collapse"
                       href="#rooms_optionals"
                       role="button"
                       aria-expanded="false"
                       aria-controls="rooms_optionals"
                    >Optionale Felder
                    </a>
                    <div class="collapse"
                         id="rooms_optionals"
                    >
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>uid</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>name</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>description</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>building_id</code>
                                <span class="badge badge-dark-soft">INTEGER</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <p><code>room_type_id</code>
                                    <span class="badge badge-dark-soft">INTEGER</span>
                                </p>
                                <p>oder</p>
                                <p><code>type</code>
                                    <span class="badge badge-dark-soft">OBJECT</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <p class="mt-3">Wird das Objekt &lt;code&gt;type&lt;/code&gt; verwendet, sind folgende Felder erforderlich</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>type.label</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark-soft btn-pill"
                       data-toggle="collapse"
                       href="#rooms_post_optional_type"
                       role="button"
                       aria-expanded="false"
                       aria-controls="rooms_post_optional_type"
                    >Optionale Felder
                    </a>
                    <div class="collapse"
                         id="rooms_post_optional_type"
                    >
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>type.name</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>type.description</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                        </ul>
                    </div>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <ul class="nav nav-bordered"
                        id="api_post_room-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_post_room-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_post_room-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_post_room-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_post_room-docs-tab-response"
                               data-toggle="tab"
                               href="#api_post_room-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_post_room-docs-tab-tab2-content"
                               aria-selected="false"
                            >Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_post_room-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_post_room-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_post_room-docs-tab-scheme"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">{</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"rm-118"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"1e0cfa36-e485-36c7-8f26-21c83884a442"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"quis"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Amet minus dolorum at reprehenderit velit iste laudantium..."</span><span class="token punctuation">,</span>
    <span class="token property">"type"</span> <span class="token operator">:</span> <span class="token punctuation">{</span>
        <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"Büro"</span><span class="token punctuation">,</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Räume mit reiner Büronutzung"</span><span class="token punctuation">,</span>
        <span class="token property">"description"</span><span class="token operator">:</span> <span class="token null keyword">null</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token property">"building_id"</span><span class="token operator">:</span> <span class="token number">5</span>
<span class="token punctuation">}</span>
                                </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane bg-light fade p-3"
                             id="api_post_room-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_post_room-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">{</span>
    <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">15</span><span class="token punctuation">,</span>
    <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 20:42:10"</span><span class="token punctuation">,</span>
    <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 20:42:10"</span><span class="token punctuation">,</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"rm-118"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"1e0cfa36-e485-36c7-8f26-21c83884a442"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"quis"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Amet minus dolorum at reprehenderit velit iste laudantium..."</span><span class="token punctuation">,</span>
    <span class="token property">"building_id"</span><span class="token operator">:</span> <span class="token number">5</span><span class="token punctuation">,</span>
    <span class="token property">"room_type_id"</span><span class="token operator">:</span> <span class="token number">1</span>
<span class="token punctuation">}</span>
                                </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-put-room_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/room/{id}</code>
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
                    Aktualisiert die Daten eines Raums mit der Referenz <code>{id}</code>.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <code>PUT</code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    <p>Erforderliche Felder</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>label</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark-soft btn-pill"
                       data-toggle="collapse"
                       href="#rooms_put_optionals"
                       role="button"
                       aria-expanded="false"
                       aria-controls="rooms_put_optionals"
                    >Optionale Felder
                    </a>
                    <div class="collapse"
                         id="rooms_put_optionals"
                    >
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>uid</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>name</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>description</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>building_id</code>
                                <span class="badge badge-dark-soft">INTEGER</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <p><code>room_type_id</code>
                                    <span class="badge badge-dark-soft">INTEGER</span>
                                </p>
                                <p>oder</p>
                                <p><code>type</code>
                                    <span class="badge badge-dark-soft">OBJECT</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <p class="mt-3">Wird das Objekt &lt;code&gt;type&lt;/code&gt; verwendet, sind folgende Felder erforderlich</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>type.label</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark-soft btn-pill"
                       data-toggle="collapse"
                       href="#rooms_put_optional_type"
                       role="button"
                       aria-expanded="false"
                       aria-controls="rooms_put_optional_type"
                    >Optionale Felder
                    </a>
                    <div class="collapse"
                         id="rooms_put_optional_type"
                    >
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>type.name</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>type.description</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                        </ul>
                    </div>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <ul class="nav nav-bordered"
                        id="api_put_room_id-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_put_room_id-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_put_room_id-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_put_room_id-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_put_room_id-docs-tab-response"
                               data-toggle="tab"
                               href="#api_put_room_id-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_put_room_id-docs-tab-tab2-content"
                               aria-selected="false"
                            >Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_put_room_id-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3"
                             id="api_put_room_id-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_put_room_id-docs-tab-scheme"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">{</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"rm-118"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"1e0cfa36-e485-36c7-8f26-21c83884a442"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"quis"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Amet minus dolorum at reprehenderit velit iste laudantium..."</span><span class="token punctuation">,</span>
    <span class="token property">"room_type_id"</span> <span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
    <span class="token property">"building_id"</span><span class="token operator">:</span> <span class="token number">5</span>
<span class="token punctuation">}</span>
                                </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_put_room_id-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_put_room_id-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
<span class="token punctuation">{</span>
    <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
    <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 22:23:44"</span><span class="token punctuation">,</span>
    <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 23:07:33"</span><span class="token punctuation">,</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"rm-118"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"1e0cfa36-e485-36c7-8f26-21c83884a442"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"quis"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Amet minus dolorum at reprehenderit velit iste laudantium..."</span><span class="token punctuation">,</span>
    <span class="token property">"room_type_id"</span> <span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
    <span class="token property">"building_id"</span><span class="token operator">:</span> <span class="token number">5</span>
<span class="token punctuation">}</span>
                                </code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-delete-room_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/room/{id}</code>
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
                    Löscht den Raum mit der Referenz <code>{id}</code>.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <code>DELETE</code>
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
                    <div class="code-toolbar"><pre class=" language-json"><code class=" language-json">
    <span class="token punctuation">{</span>
        <span class="token property">"status"</span> <span class="token operator">:</span> <span class="token string">"room deleted"</span>
    <span class="token punctuation">}</span>
                                </code></pre>
                        <div class="toolbar">
                            <div class="toolbar-item">
                                <button type="button">Copy</button>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
    </section>
    <section id="compartments">
        <h2>Stellplätze</h2>
        <p>Folgende Endpunkte sind verfügbar:</p>
        <div class="list-group mb-6">
            <a href="#endpoint-get-api-v1-compartment"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">GET</span>
                <span>/api/v1/compartment</span>
            </a>
            <a href="#endpoint-get-api-v1-compartment_list_complete"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">GET</span>
                <span>/api/v1/compartment_list_complete</span>
            </a>
            <a href="#endpoint-get-compartment_id"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">GET</span>
                <span>/api/v1/compartment/{id}</span>
            </a>
            <a href="#endpoint-post-compartment"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">POST</span>
                <span>/api/v1/compartment</span>
            </a>
            <a href="#endpoint-put-compartment_id"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">PUT</span>
                <span>/api/v1/compartment/{id}</span>
            </a>
            <a href="#endpoint-delete-compartment_id"
               class="list-group-item list-group-item-action js-anchor-link"
            >
                <span class="mr-5 badge badge-dark-soft">DELETE</span>
                <span>/api/v1/compartment/{id}</span>
            </a>
        </div>
        <article id="endpoint-get-api-v1-compartment">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/compartment</code>
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
                    <code>GET</code>
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
                    <ul class="nav nav-bordered"
                        id="api_get_compartment-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_get_compartment-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_get_compartment-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_get_compartment-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_get_compartment-docs-tab-response"
                               data-toggle="tab"
                               href="#api_get_compartment-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_get_compartment-docs-tab-tab2-content"
                               aria-selected="false"
                            >Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_get_compartment-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3"
                             id="api_get_compartment-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_get_compartment-docs-tab-scheme"
                        >
                            -
                        </div>
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_get_compartment-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_get_compartment-docs-tab-response"
                        >

                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json"><span class="token punctuation">[</span>
    <span class="token punctuation">{</span>
        <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
        <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 12:26:19"</span><span class="token punctuation">,</span>
        <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 12:26:19"</span><span class="token punctuation">,</span>
        <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"rm-142"</span><span class="token punctuation">,</span>
        <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"3e0b5fb1-423f-383e-b040-9f93d0c47c9d"</span><span class="token punctuation">,</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"ipsum"</span><span class="token punctuation">,</span>
        <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Optio et mollitia tempore consequatur. Magnam debitis doloremque voluptatem pariatur omnis. Alias ut beatae enim aperiam laborum pariatur. Quod voluptate et quis omnis voluptatem et dolorum. Cumque est eum ducimus nemo dolores eos. Nesciunt ut fuga quia et sed assumenda."</span><span class="token punctuation">,</span>
        <span class="token property">"building_id"</span><span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
        <span class="token property">"compartment_type_id"</span><span class="token operator">:</span> <span class="token number">3</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">{</span>...<span class="token punctuation">}</span>
<span class="token punctuation">]</span></code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-get-api-v1-compartment_list_complete">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/compartment_list_complete</code>
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
                    <code>objects</code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <code>GET</code>
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
                    <ul class="nav nav-bordered"
                        id="api_get_compartment_list_complete-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_get_compartment_list_complete-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_get_compartment_list_complete-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_get_compartment_list_complete-docs-tab-tab1-content"
                               aria-selected="true"
                            >
                                Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_get_compartment_list_complete-docs-tab-response"
                               data-toggle="tab"
                               href="#api_get_compartment_list_complete-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_get_compartment_list_complete-docs-tab-tab2-content"
                               aria-selected="false"
                            >
                                Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_get_compartment_list_complete-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3"
                             id="api_get_compartment_list_complete-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_get_compartment_list_complete-docs-tab-scheme"
                        >
                            -
                        </div>
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_get_compartment_list_complete-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_get_compartment_list_complete-docs-tab-response"
                        >

                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json"><span class="token punctuation">[</span>
    <span class="token punctuation">{</span>
        <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
        <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 22:23:44"</span><span class="token punctuation">,</span>
        <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 22:23:44"</span><span class="token punctuation">,</span>
        <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"SP.7-ru0rxn"</span><span class="token punctuation">,</span>
        <span class="token property">"type"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
            <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"Schubfach"</span><span class="token punctuation">,</span>
            <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">2</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"quos-repudiandae-et-quia-quas-ad-voluptatem-ratione"</span><span class="token punctuation">,</span>
        <span class="token property">"description"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
        <span class="token property">"room"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
            <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"rm-114"</span><span class="token punctuation">,</span>
            <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"e205dab4-5472-30ba-a774-8b032482d2df"</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token property">"objects"</span><span class="token operator">:</span> <span class="token punctuation">{</span>
            <span class="token property">"equipment"</span><span class="token operator">:</span> <span class="token number">23</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token punctuation">{</span>...<span class="token punctuation">}</span>
<span class="token punctuation">]</span></code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-get-compartment_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/compartment/{id}</code>
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
                    Ruft die Daten zum einem Stellplatz mit der <code>id</code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <code>GET</code>
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
                    <ul class="nav nav-bordered"
                        id="api_get_compartment_id-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_get_compartment_id-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_get_compartment_id-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_get_compartment_id-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_get_compartment_id-docs-tab-response"
                               data-toggle="tab"
                               href="#api_get_compartment_id-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_get_compartment_id-docs-tab-tab2-content"
                               aria-selected="false"
                            >Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_get_compartment_id-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3"
                             id="api_get_compartment_id-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_get_compartment_id-docs-tab-scheme"
                        >
                            -
                        </div>
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_get_compartment_id-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_get_compartment_id-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json"><span class="token punctuation">{</span>
    <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
    <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 22:23:44"</span><span class="token punctuation">,</span>
    <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-06 22:23:44"</span><span class="token punctuation">,</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"SP.7-ru0rxn"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"c9903a08-728a-3067-bf79-ec24ab757713"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"quos-repudiandae-et-quia-quas-ad-voluptatem-ratione"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token null keyword">null</span><span class="token punctuation">,</span>
    <span class="token property">"compartment_type_id"</span><span class="token operator">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
    <span class="token property">"room_id"</span><span class="token operator">:</span> <span class="token number">9</span>
<span class="token punctuation">}</span></code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-post-compartment">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/compartment</code>
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
                    <code>POST</code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    <p>Erforderliche Felder</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>label</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark-soft btn-pill"
                       data-toggle="collapse"
                       href="#compartments_optionals"
                       role="button"
                       aria-expanded="false"
                       aria-controls="compartments_optionals"
                    >Optionale Felder
                    </a>
                    <div class="collapse"
                         id="compartments_optionals"
                    >
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>uid</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>name</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>description</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>room_id</code>
                                <span class="badge badge-dark-soft">INTEGER</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <p><code>compartment_type_id</code>
                                    <span class="badge badge-dark-soft">INTEGER</span>
                                </p>
                                <p>oder</p>
                                <p><code>type</code>
                                    <span class="badge badge-dark-soft">OBJECT</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <p class="mt-3">Wird das Objekt &lt;code&gt;type&lt;/code&gt; verwendet, sind folgende Felder erforderlich</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>type.label</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark-soft btn-pill"
                       data-toggle="collapse"
                       href="#compartments_post_optional_type"
                       role="button"
                       aria-expanded="false"
                       aria-controls="compartments_post_optional_type"
                    >Optionale Felder
                    </a>
                    <div class="collapse"
                         id="compartments_post_optional_type"
                    >
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>type.name</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>type.description</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                        </ul>
                    </div>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <ul class="nav nav-bordered"
                        id="api_post_compartment-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_post_compartment-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_post_compartment-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_post_compartment-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_post_compartment-docs-tab-response"
                               data-toggle="tab"
                               href="#api_post_compartment-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_post_compartment-docs-tab-tab2-content"
                               aria-selected="false"
                            >Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_post_compartment-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_post_compartment-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_post_compartment-docs-tab-scheme"
                        >

                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json"><span class="token punctuation">{</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"sp.2118"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"1e0cfa36-e485-36c7-8f26-21c83884a442"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"W.1.2.3.a.12"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Amet minus dolorum at reprehenderit velit iste laudantium..."</span><span class="token punctuation">,</span>
    <span class="token property">"type"</span> <span class="token operator">:</span> <span class="token punctuation">{</span>
        <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"Fach-DIN-3"</span><span class="token punctuation">,</span>
        <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"Lagerfach für Kästen DIN-3"</span><span class="token punctuation">,</span>
        <span class="token property">"description"</span><span class="token operator">:</span> <span class="token null keyword">null</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    <span class="token property">"room_id"</span><span class="token operator">:</span> <span class="token number">5</span>
<span class="token punctuation">}</span></code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane bg-light fade p-3"
                             id="api_post_compartment-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_post_compartment-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json"><span class="token punctuation">{</span>
    <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">49</span><span class="token punctuation">,</span>
    <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-07 18:09:37"</span><span class="token punctuation">,</span>
    <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-07 18:09:37"</span><span class="token punctuation">,</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"sp.2118"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"1e0cfa36-e485-36c7-8f26-21c83884a442"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"W.1.2.3.a.12"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Amet minus dolorum at reprehenderit velit iste laudantium..."</span><span class="token punctuation">,</span>
    <span class="token property">"compartment_type_id"</span><span class="token operator">:</span> <span class="token number">4</span><span class="token punctuation">,</span>
    <span class="token property">"room_id"</span><span class="token operator">:</span> <span class="token number">5</span>
<span class="token punctuation">}</span></code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-put-compartment_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/compartment/{id}</code>
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
                    Aktualisiert die Daten eines Stellplatzes mit der Referenz <code>{id}</code>.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <code>PUT</code>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Felder</dt>
                <dd class="api-dd">
                    <p>Erforderliche Felder</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>label</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark-soft btn-pill"
                       data-toggle="collapse"
                       href="#compartments_put_optionals"
                       role="button"
                       aria-expanded="false"
                       aria-controls="compartments_put_optionals"
                    >Optionale Felder
                    </a>
                    <div class="collapse"
                         id="compartments_put_optionals"
                    >
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>uid</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>name</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>description</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>room_id</code>
                                <span class="badge badge-dark-soft">INTEGER</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <p><code>compartment_type_id</code>
                                    <span class="badge badge-dark-soft">INTEGER</span>
                                </p>
                                <p>oder</p>
                                <p><code>type</code>
                                    <span class="badge badge-dark-soft">OBJECT</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <p class="mt-3">Wird das Objekt &lt;code&gt;type&lt;/code&gt; verwendet, sind folgende Felder erforderlich</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <code>type.label</code>
                            <span class="badge badge-dark-soft">STRING</span>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-dark-soft btn-pill"
                       data-toggle="collapse"
                       href="#compartments_put_optional_type"
                       role="button"
                       aria-expanded="false"
                       aria-controls="compartments_put_optional_type"
                    >Optionale Felder
                    </a>
                    <div class="collapse"
                         id="compartments_put_optional_type"
                    >
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>type.name</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                <code>type.description</code>
                                <span class="badge badge-dark-soft">STRING</span>
                            </li>
                        </ul>
                    </div>
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">JSON</dt>
                <dd class="api-dd">
                    <ul class="nav nav-bordered"
                        id="api_put_compartment_id-docs-tab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="api_put_compartment_id-docs-tab-scheme"
                               data-toggle="tab"
                               href="#api_put_compartment_id-docs-tab-scheme-content"
                               role="tab"
                               aria-controls="api_put_compartment_id-docs-tab-tab1-content"
                               aria-selected="true"
                            >Senden
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="api_put_compartment_id-docs-tab-response"
                               data-toggle="tab"
                               href="#api_put_compartment_id-docs-tab-response-content"
                               role="tab"
                               aria-controls="api_put_compartment_id-docs-tab-tab2-content"
                               aria-selected="false"
                            >Antwort
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content"
                         id="api_put_compartment_id-docs-tabContent"
                    >
                        <div class="tab-pane bg-light fade p-3 show active"
                             id="api_put_compartment_id-docs-tab-scheme-content"
                             role="tabpanel"
                             aria-labelledby="api_put_compartment_id-docs-tab-scheme"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json"><span class="token punctuation">{</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"rm-118"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"1e0cfa36-e485-36c7-8f26-21c83884a442"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"quis"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Amet minus dolorum at reprehenderit velit iste laudantium..."</span><span class="token punctuation">,</span>
    <span class="token property">"compartment_type_id"</span> <span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
    <span class="token property">"building_id"</span><span class="token operator">:</span> <span class="token number">5</span>
<span class="token punctuation">}</span></code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane bg-light fade p-3"
                             id="api_put_compartment_id-docs-tab-response-content"
                             role="tabpanel"
                             aria-labelledby="api_put_compartment_id-docs-tab-response"
                        >
                            <div class="code-toolbar"><pre class=" language-json"><code class=" language-json"><span class="token punctuation">{</span>
    <span class="token property">"id"</span><span class="token operator">:</span> <span class="token number">50</span><span class="token punctuation">,</span>
    <span class="token property">"created"</span><span class="token operator">:</span> <span class="token string">"2021-01-07 21:33:02"</span><span class="token punctuation">,</span>
    <span class="token property">"updated"</span><span class="token operator">:</span> <span class="token string">"2021-01-07 22:18:11"</span><span class="token punctuation">,</span>
    <span class="token property">"label"</span><span class="token operator">:</span> <span class="token string">"sp.2112"</span><span class="token punctuation">,</span>
    <span class="token property">"uid"</span><span class="token operator">:</span> <span class="token string">"1e0cfa36-e485-36c7-8f26-21c838842442"</span><span class="token punctuation">,</span>
    <span class="token property">"name"</span><span class="token operator">:</span> <span class="token string">"W.1.2.3.a.12"</span><span class="token punctuation">,</span>
    <span class="token property">"description"</span><span class="token operator">:</span> <span class="token string">"Amet minuszf dolorum at reprehenderit velit iste laudantium..."</span><span class="token punctuation">,</span>
    <span class="token property">"compartment_type_id"</span><span class="token operator">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
    <span class="token property">"room_id"</span><span class="token operator">:</span> <span class="token number">5</span>
<span class="token punctuation">}</span></code></pre>
                                <div class="toolbar">
                                    <div class="toolbar-item">
                                        <button type="button">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
        <hr>
        <article id="endpoint-delete-compartment_id">
            <dl class="api-dl">
                <dt class="api-dt">Endpunkt</dt>
                <dd class="api-dd">
                    <code>/api/v1/compartment/{id}</code>
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
                    Löscht den Stellplatz mit der Referenz <code>{id}</code>.
                </dd>
            </dl>
            <dl class="api-dl">
                <dt class="api-dt">Methode</dt>
                <dd class="api-dd">
                    <code>DELETE</code>
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
                    <div class="code-toolbar"><pre class=" language-json"><code class=" language-json"><span class="token punctuation">{</span>
    <span class="token property">"status"</span> <span class="token operator">:</span> <span class="token string">"compartment deleted"</span>
<span class="token punctuation">}</span></code></pre>
                        <div class="toolbar">
                            <div class="toolbar-item">
                                <button type="button">Copy</button>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </article>
    </section>

@endsection