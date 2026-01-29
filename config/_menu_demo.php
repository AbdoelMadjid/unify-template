<?php

return [
    'menu_demo' => [
        [
            'label' => 'Demos',
            'route' => null,
            'icon' => null,
            'submenu' => [
                [
                    'label' => 'One Pages',
                    'route' => null,
                    'target' => '_blank',
                    'type' => 'col-3',
                    'submenu' => [
                        ['label' => 'Accounting', 'route' => 'unify.demos.onepages.accounting', 'target' => '_blank'],
                        ['label' => 'Agency', 'route' => 'unify.demos.onepages.agency', 'target' => '_blank'],
                        ['label' => 'App', 'route' => 'unify.demos.onepages.app', 'target' => '_blank'],
                        ['label' => 'Architecture', 'route' => 'unify.demos.onepages.architecture', 'target' => '_blank'],
                        ['label' => 'Business', 'route' => 'unify.demos.onepages.business', 'target' => '_blank'],
                        ['label' => 'Charity', 'route' => 'unify.demos.onepages.charity', 'target' => '_blank'],
                        ['label' => 'Consulting', 'route' => 'unify.demos.onepages.consulting', 'target' => '_blank'],
                        ['label' => 'Construction', 'route' => 'unify.demos.onepages.construction', 'target' => '_blank'],
                        ['label' => 'Courses', 'route' => 'unify.demos.onepages.courses', 'target' => '_blank'],
                        ['label' => 'Corporate', 'route' => 'unify.demos.onepages.corporate', 'target' => '_blank'],
                        ['label' => 'Event', 'route' => 'unify.demos.onepages.event', 'target' => '_blank'],
                        ['label' => 'GYM', 'route' => 'unify.demos.onepages.gym', 'target' => '_blank'],
                        ['label' => 'Lawyer', 'route' => 'unify.demos.onepages.lawyer', 'target' => '_blank'],
                        ['label' => 'Music', 'route' => 'unify.demos.onepages.music', 'target' => '_blank'],
                        ['label' => 'Photography', 'route' => 'unify.demos.onepages.photography', 'target' => '_blank'],
                        ['label' => 'Real Estate', 'route' => 'unify.demos.onepages.realestate', 'target' => '_blank'],
                        ['label' => 'Restaurant', 'route' => 'unify.demos.onepages.restaurant', 'target' => '_blank'],
                        ['label' => 'Shipping', 'route' => 'unify.demos.onepages.shipping', 'target' => '_blank'],
                        ['label' => 'Spa', 'route' => 'unify.demos.onepages.spa', 'target' => '_blank'],
                        ['label' => 'Travel', 'route' => 'unify.demos.onepages.travel', 'target' => '_blank'],
                        ['label' => 'Wedding', 'route' => 'unify.demos.onepages.wedding', 'target' => '_blank'],
                    ],
                ],
                ['label' => 'E-Commerce', 'route' => 'unify.demos.ecommerce', 'target' => '_blank', 'notes' => '(22 page)'],
                [
                    'label' => 'Multi Pages',
                    'route' => null,
                    'target' => '_blank',
                    'submenu' => [
                        ['label' => 'University', 'route' => 'unify.demos.multipages.university', 'target' => '_blank', 'badge' => 'new'],
                        ['label' => 'Real Estate', 'route' => 'unify.demos.multipages.realestate', 'target' => '_blank', 'badge' => 'new'],
                        ['label' => 'Marketing', 'route' => 'unify.demos.multipages.marketing', 'target' => '_blank', 'badge' => 'new'],
                    ],
                ],
                [
                    'label' => 'Blogs & Magazines',
                    'route' => null,
                    'target' => '_blank',
                    'submenu' => [
                        ['label' => 'Home 1', 'route' => 'unify.demos.blogmag.home1', 'target' => '_blank'],
                        ['label' => 'Home 2', 'route' => 'unify.demos.blogmag.home2', 'target' => '_blank'],
                        ['label' => 'Home 3', 'route' => 'unify.demos.blogmag.home3', 'target' => '_blank'],
                        ['label' => 'Home 4', 'route' => 'unify.demos.blogmag.home4', 'target' => '_blank'],
                        ['label' => 'Home 5', 'route' => 'unify.demos.blogmag.home5', 'target' => '_blank'],
                        ['label' => 'Single', 'route' => 'unify.demos.blogmag.single', 'target' => '_blank'],
                    ],
                ],
            ],
        ],
    ],
];
