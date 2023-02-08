<?php

    return [
        'Überblick'    => [
            'url'      => 'docs/getting-started',
            'children' => [
                'Seitenaufbau'   => 'docs/general-ui',
                'Prozesse' => 'docs/general-processes',
                'Objektstrukturen' => 'docs/general-objects',
            ],
        ],
        'Installation' => [
            'url'      => 'docs/installation-main',
            'children' => [
                'LAPP'   => 'docs/installation-lapp',
                'Docker' => 'docs/installation-docker',
            ]
        ],
        'System'       => [
            'url'      => 'docs/system-main',
            'children' => [
                'Die Konsole'      => 'docs/console-main',
                'testware Skripte' => 'docs/testware-scripts',
            ]
        ],
        'Verwaltung'   => [
            'url'      => 'docs/api-main',
            'children' => [
                'Standorte'      => '#',
                'Organisationen' => '#',
                'Vorschriften'   => '#',
            ]
        ],
        'Objekte'      => [
            'url'      => 'docs/api-main',
            'children' => [
                'Produkte'  => '#',
                'Geräte'    => '#',
                'Prüfungen' => '#',
            ]
        ],
        'API'          => [
            'url'      => 'docs/api-main',
            'children' => [
                'Standorte'      => '#',
                'Produkte'       => '#',
                'Organisationen' => '#',
                'Vorschriften'   => '#',
                'Geräte'         => '#',
                'Prüfungen'      => '#',
            ]
        ],
        'Github'       => 'https://github.com/daniel-koertvelyessy/testware',
    ];
