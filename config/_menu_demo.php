<?php

return [
    'menu_demo' => [
        [
            'label' => 'Demos',
            'route' => null,
            'icon' => null,
            'submenu' => [
                ['label' => 'E-Commerce', 'route' => 'unify.templates.ecommerce.home.homepage1', 'target' => '_blank', 'notes' => '(44 page)'],
                ['label' => 'Blogs & Magazines', 'route' => 'unify.templates.blogmagazine.classic.page1', 'target' => '_blank', 'notes' => '(6 page)'],
                [
                    'label' => 'One Pages',
                    'route' => null,
                    'target' => '_blank',
                    'type' => 'col-3',
                    'submenu' => [
                        ['label' => 'Accounting', 'route' => 'unify.templates.onepages.accounting.index', 'target' => '_blank'],
                        ['label' => 'Agency', 'route' => 'unify.templates.onepages.agency.index', 'target' => '_blank'],
                        ['label' => 'App', 'route' => 'unify.templates.onepages.app.index', 'target' => '_blank'],
                        ['label' => 'Architecture', 'route' => 'unify.templates.onepages.architecture.index', 'target' => '_blank'],
                        ['label' => 'Business', 'route' => 'unify.templates.onepages.business.index', 'target' => '_blank'],
                        ['label' => 'Charity', 'route' => 'unify.templates.onepages.charity.index', 'target' => '_blank'],
                        ['label' => 'Consulting', 'route' => 'unify.templates.onepages.consulting.index', 'target' => '_blank'],
                        ['label' => 'Construction', 'route' => 'unify.templates.onepages.construction.index', 'target' => '_blank'],
                        ['label' => 'Courses', 'route' => 'unify.templates.onepages.courses.index', 'target' => '_blank'],
                        ['label' => 'Corporate', 'route' => 'unify.templates.onepages.corporate.index', 'target' => '_blank'],
                        ['label' => 'Event', 'route' => 'unify.templates.onepages.event.index', 'target' => '_blank'],
                        ['label' => 'GYM', 'route' => 'unify.templates.onepages.gym.index', 'target' => '_blank'],
                        ['label' => 'Lawyer', 'route' => 'unify.templates.onepages.lawyer.index', 'target' => '_blank'],
                        ['label' => 'Music', 'route' => 'unify.templates.onepages.music.index', 'target' => '_blank'],
                        ['label' => 'Photography', 'route' => 'unify.templates.onepages.photography.index', 'target' => '_blank'],
                        ['label' => 'Real Estate', 'route' => 'unify.templates.onepages.realestate.index', 'target' => '_blank'],
                        ['label' => 'Restaurant', 'route' => 'unify.templates.onepages.restaurant.index', 'target' => '_blank'],
                        ['label' => 'Shipping', 'route' => 'unify.templates.onepages.shipping.index', 'target' => '_blank'],
                        ['label' => 'Spa', 'route' => 'unify.templates.onepages.spa.index', 'target' => '_blank'],
                        ['label' => 'Travel', 'route' => 'unify.templates.onepages.travel.index', 'target' => '_blank'],
                        ['label' => 'Wedding', 'route' => 'unify.templates.onepages.wedding.index', 'target' => '_blank'],
                    ],
                ],
                [
                    'label' => 'Multi Pages',
                    'route' => null,
                    'target' => '_blank',
                    'submenu' => [
                        ['label' => 'University', 'route' => 'unify.templates.multipage.education.homepage1', 'target' => '_blank', 'badge' => 'new'],
                        ['label' => 'Real Estate', 'route' => 'unify.templates.multipage.realestate.homepage1', 'target' => '_blank', 'badge' => 'new'],
                        ['label' => 'Marketing', 'route' => 'unify.templates.multipage.marketing.homepage1', 'target' => '_blank', 'badge' => 'new'],
                    ],
                ],
            ],
        ],
    ],
];
