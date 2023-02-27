<?php

return [
    'Überblick'    => ['url' => 'docs/getting-started'],
    'Allgemeines'  => [
        'url'      => 'docs/1.7/general-main',
        'children' => [
            'Seitenaufbau'     => 'docs/1.7/general-ui',
            'Prozesse'         => 'docs/1.7/general-processes',
            'Objektstrukturen' => 'docs/1.7/general-objects',
        ],
    ],
    'Installation' => [
        'url'      => 'docs/1.7/installation-main',
        'children' => [
            'Webserver' => 'docs/1.7/installation-webserver',
            'Conatiner' => 'docs/1.7/installation-container',
            'Konsole'   => 'docs/1.7/installation-console',
            'Browser'   => 'docs/1.7/installation-webui',
        ]
    ],
    'System'       => [
        'url'      => 'docs/1.7/system-main',
        'children' => [
            'Einstellungen'    => 'docs/1.7/system-admin',
            'Benutzer'         => 'docs/1.7/system-users',
            'testware Skripte' => 'docs/1.7/system-scripts',
            'Lokalisierung'    => 'docs/1.7/system-locales',
        ]
    ],
    'Verwaltung'   => [
        'url'      => 'docs/1.7/backend-main',
        'children' => [
            'Standorte'      => 'docs/1.7/backend-locations',
            'Organisationen' => 'docs/1.7/backend-organisation',
            'Vorschriften'   => 'docs/1.7/backend-requirements',
        ]
    ],
    'Objekte'      => [
        'url'      => 'docs/1.7/objects-main',
        'children' => [
            'Produkte'  => 'docs/1.7/objects-products',
            'Geräte'    => 'docs/1.7/objects-equipment',
            'Prüfungen' => 'docs/1.7/objects-control',
        ]
    ],
    'API'          => [
        'url'      => 'docs/1.7/api-main',
        'children' => [
            'Endpunkte'      => 'docs/1.7/api-endpoints',
            'Standorte'      => 'docs/1.7/api-locations',
            'Produkte'       => 'docs/1.7/api-productsn',
            'Organisationen' => 'docs/1.7/api-organisatio',
            'Vorschriften'   => 'docs/1.7/api-requirements',
            'Geräte'         => 'docs/1.7/api-equipment',
            'Prüfungen'      => 'docs/1.7/api-control',
        ]
    ],
    'Github'       => 'https://github.com/daniel-koertvelyessy/testware',
];
