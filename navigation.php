<?php

    return [
        'Überblick'    => [
            'url'      => 'docs/getting-started',
            'children' => [
                'Seitenaufbau'   => 'docs/1.7/general-ui',
                'Prozesse' => 'docs/1.7/general-processes',
                'Objektstrukturen' => 'docs/1.7/general-objects',
            ],
        ],
        'Installation' => [
            'url'      => 'docs/1.7/installation-main',
            'children' => [
                'LAPP'   => 'docs/1.7/installation-lapp',
                'Docker' => 'docs/1.7/installation-docker',
            ]
        ],
        'System'       => [
            'url'      => 'docs/1.7/system-main',
            'children' => [
                'Die Konsole'      => 'docs/1.7/system-console',
                'testware Skripte' => 'docs/1.7/system-scripts',
            ]
        ],
        'Verwaltung'   => [
            'url'      => 'docs/1.7/backend-main',
            'children' => [
                'Standorte'      => 'backend-locations',
                'Organisationen' => 'backend-organisation',
                'Vorschriften'   => 'backend-requirements',
            ]
        ],
        'Objekte'      => [
            'url'      => 'docs/1.7/objects-main',
            'children' => [
                'Produkte'  => 'objects-products',
                'Geräte'    => 'objects-equipment',
                'Prüfungen' => 'objects-control',
            ]
        ],
        'API'          => [
            'url'      => 'docs/1.7/api-main',
            'children' => [
                'Standorte'      => 'api-locations',
                'Produkte'       => 'api-productsn',
                'Organisationen' => 'api-organisatio',
                'Vorschriften'   => 'api-requirements',
                'Geräte'         => 'api-equipment',
                'Prüfungen'      => 'api-control',
            ]
        ],
        'Github'       => 'https://github.com/daniel-koertvelyessy/testware',
    ];
