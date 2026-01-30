<?php

return [
    'menu_features' => [
        [
            'label' => 'Features',
            'route' => null,
            'icon' => null,
            'submenu' => [
                ['label' => 'Headers', 'route' => 'unify.templates.main.features.headers.index'],
                ['label' => 'Promo Block', 'route' => 'unify.templates.main.features.promo.index'],
                [
                    'label' => 'SLIDERS',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Revolution', 'route' => 'unify.templates.revolutionslider.index'],
                        ['label' => 'Master', 'route' => 'unify.templates.masterslider.index'],
                    ],
                ],
                [
                    'label' => 'POP-UPS',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'LightBox', 'route' => 'unify.templates.main.features.popups.lightbox'],
                        ['label' => 'Modal', 'route' => 'unify.templates.main.features.popups.modals'],
                        ['label' => 'Galery', 'route' => 'unify.templates.main.features.popups.gallery'],
                    ],
                ],
                [
                    'label' => 'MAPS',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Google Maps', 'route' => 'unify.templates.main.features.maps.googlemaps'],
                        ['label' => 'Map With Pins', 'route' => 'unify.templates.main.features.maps.mapswithpins'],
                        ['label' => 'Vector Maps', 'route' => 'unify.templates.main.features.maps.vectormaps'],
                    ],
                ],
                [
                    'label' => 'Footers',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Classic Footer', 'route' => 'unify.templates.main.features.footers.classic'],
                        ['label' => 'Contact Forms', 'route' => 'unify.templates.main.features.footers.contactforms'],
                        ['label' => 'Footers Maps', 'route' => 'unify.templates.main.features.footers.maps'],
                        ['label' => 'Modern Footers', 'route' => 'unify.templates.main.features.footers.modern'],
                    ],
                ],
            ],
        ],
    ],
];
