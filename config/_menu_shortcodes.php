<?php

return [
    'menu_shortcodes' => [
        [
            'label' => 'Shortcodes',
            'route' => 'unify.templates.main.shortcodes.index',
            'icon' => 'ti-layout-grid2',
            'submenu' => [
                [
                    'label' => 'Base',
                    'route' => null,
                    'type' => 'dual-column',
                    'submenu' => [
                        ['label' => 'Accordions', 'route' => 'unify.templates.main.shortcodes.base.accordions'],
                        ['label' => 'Alerts', 'route' => 'unify.templates.main.shortcodes.base.alerts'],
                        ['label' => 'Badges', 'route' => 'unify.templates.main.shortcodes.base.badges'],
                        ['label' => 'Blockquotes', 'route' => 'unify.templates.main.shortcodes.base.blockquotes'],
                        ['label' => 'Box Shadows', 'route' => 'unify.templates.main.shortcodes.base.boxshadows'],
                        ['label' => 'Breadcrumbs', 'route' => 'unify.templates.main.shortcodes.base.breadcrumbs'],
                        ['label' => 'Buttons', 'route' => 'unify.templates.main.shortcodes.base.buttons'],
                        ['label' => 'Dividers', 'route' => 'unify.templates.main.shortcodes.base.dividers'],
                        ['label' => 'Gallery Grid', 'route' => 'unify.templates.main.shortcodes.base.gallerygrid'],
                        ['label' => 'Gradient Backgrounds', 'route' => 'unify.templates.main.shortcodes.base.gradientbackgrounds'],
                        ['label' => 'Labels', 'route' => 'unify.templates.main.shortcodes.base.labels'],
                        ['label' => 'Lists Group', 'route' => 'unify.templates.main.shortcodes.base.listsgroup'],

                        [
                            'label' => 'Media',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Media Audios', 'route' => 'unify.templates.main.shortcodes.base.media.audios'],
                                ['label' => 'Media Images', 'route' => 'unify.templates.main.shortcodes.base.media.images'],
                                ['label' => 'Media Videos', 'route' => 'unify.templates.main.shortcodes.base.media.videos'],
                            ]
                        ],

                        ['label' => 'On Scroll Animations', 'route' => 'unify.templates.main.shortcodes.base.onscrollanimations'],
                        ['label' => 'Paginations', 'route' => 'unify.templates.main.shortcodes.base.paginations'],
                        ['label' => 'Panels', 'route' => 'unify.templates.main.shortcodes.base.panels'],
                        ['label' => 'Progress Bars', 'route' => 'unify.templates.main.shortcodes.base.progressbars'],

                        [
                            'label' => 'Process Blocks',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Dynamic Process Blocks', 'route' => 'unify.templates.main.shortcodes.base.processblocks.dynamic'],
                                ['label' => 'Static Process Blocks', 'route' => 'unify.templates.main.shortcodes.base.processblocks.static'],
                            ]
                        ],

                        ['label' => 'Tables', 'route' => 'unify.templates.main.shortcodes.base.tables'],
                        ['label' => 'Taglines', 'route' => 'unify.templates.main.shortcodes.base.taglines'],
                        ['label' => 'Tags', 'route' => 'unify.templates.main.shortcodes.base.tags'],
                        ['label' => 'Headings', 'route' => 'unify.templates.main.shortcodes.base.headings'],
                        ['label' => 'Typography', 'route' => 'unify.templates.main.shortcodes.base.typography'],
                        ['label' => 'Dropcaps', 'route' => 'unify.templates.main.shortcodes.base.dropcaps'],
                        ['label' => 'Form Layouts', 'route' => 'unify.templates.main.shortcodes.base.formlayouts'],
                    ],
                ],

                [
                    'label' => 'forms',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Bootstrap', 'route' => 'unify.templates.main.shortcodes.base.forms.bootstrap'],
                        ['label' => 'Unify', 'route' => 'unify.templates.main.shortcodes.base.forms.unify'],
                        ['label' => 'Horizonal', 'route' => 'unify.templates.main.shortcodes.base.forms.horizontal'],
                        ['label' => 'Disabled', 'route' => 'unify.templates.main.shortcodes.base.forms.disabledstates'],
                        ['label' => 'Success', 'route' => 'unify.templates.main.shortcodes.base.forms.successstates'],
                        ['label' => 'Error', 'route' => 'unify.templates.main.shortcodes.base.forms.errorstates'],
                    ],
                ],

                [
                    'label' => 'icons',
                    'route' => null,
                    'type' => 'dual-column',
                    'submenu' => [
                        ['label' => 'Icons', 'route' => 'unify.templates.main.shortcodes.base.icons.icons'],
                        ['label' => 'Hovers', 'route' => 'unify.templates.main.shortcodes.base.icons.hovers'],
                        ['label' => 'Sizes', 'route' => 'unify.templates.main.shortcodes.base.icons.sizes'],
                        ['label' => 'Social', 'route' => 'unify.templates.main.shortcodes.base.icons.social'],
                        ['label' => 'Fontawesome', 'route' => 'unify.templates.main.shortcodes.base.icons.fontawesome'],
                        ['label' => 'Material', 'route' => 'unify.templates.main.shortcodes.base.icons.material'],
                        ['label' => 'Line Pro 1', 'route' => 'unify.templates.main.shortcodes.base.icons.linepro1'],
                        ['label' => 'Line Pro 2', 'route' => 'unify.templates.main.shortcodes.base.icons.linepro2'],
                        ['label' => 'Simple Line', 'route' => 'unify.templates.main.shortcodes.base.icons.simpleline'],
                        ['label' => 'Et Line', 'route' => 'unify.templates.main.shortcodes.base.icons.etline'],
                    ],
                    ['label' => 'Tabs', 'route' => 'unify.templates.main.shortcodes.base.tabs.index'],
                ],


                [
                    'label' => 'Blocks',
                    'route' => null,
                    'type' => 'dual-column',
                    'submenu' => [
                        ['label' => 'Banners', 'route' => 'unify.templates.main.shortcodes.blocks.banners'],
                        ['label' => 'Clients', 'route' => 'unify.templates.main.shortcodes.blocks.clients'],
                        ['label' => 'Comments', 'route' => 'unify.templates.main.shortcodes.blocks.comments'],

                        ['label' => 'Portfolios', 'route' => 'unify.templates.main.shortcodes.blocks.portfolio.index'],
                        [
                            'label' => 'CTA',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Boxed', 'route' => 'unify.templates.main.shortcodes.blocks.cta.boxed'],
                                ['label' => 'Full Width', 'route' => 'unify.templates.main.shortcodes.blocks.cta.fullwidth'],
                            ],
                        ],
                        [
                            'label' => 'Hero',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Blocks', 'route' => 'unify.templates.main.shortcodes.blocks.hero.blocks'],
                                ['label' => 'Content', 'route' => 'unify.templates.main.shortcodes.blocks.hero.content'],
                                ['label' => 'Info', 'route' => 'unify.templates.main.shortcodes.blocks.hero.info'],
                            ],
                        ],
                        [
                            'label' => 'Icon',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Icons', 'route' => 'unify.templates.main.shortcodes.blocks.icons.icons'],
                                ['label' => 'App', 'route' => 'unify.templates.main.shortcodes.blocks.icons.app'],
                                ['label' => 'Interactive', 'route' => 'unify.templates.main.shortcodes.blocks.icons.interactive'],
                            ],
                        ],
                        ['label' => 'Info Blocks', 'route' => 'unify.templates.main.shortcodes.blocks.infoblocks'],
                        [
                            'label' => 'News',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Image', 'route' => 'unify.templates.main.shortcodes.blocks.news.image'],
                                ['label' => 'News', 'route' => 'unify.templates.main.shortcodes.blocks.news.news'],
                                ['label' => 'No Images', 'route' => 'unify.templates.main.shortcodes.blocks.news.noimages'],
                                ['label' => 'Small', 'route' => 'unify.templates.main.shortcodes.blocks.news.small'],
                            ],
                        ],
                        [
                            'label' => 'Pricing',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Plans', 'route' => 'unify.templates.main.shortcodes.blocks.pricing.plans'],
                                ['label' => 'Sections', 'route' => 'unify.templates.main.shortcodes.blocks.pricing.sections'],
                                ['label' => 'Table', 'route' => 'unify.templates.main.shortcodes.blocks.pricing.table'],
                            ],
                        ],
                        [
                            'label' => 'Products',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Products', 'route' => 'unify.templates.main.shortcodes.blocks.products.products'],
                                ['label' => 'Advanced', 'route' => 'unify.templates.main.shortcodes.blocks.products.advanced'],
                                ['label' => 'List', 'route' => 'unify.templates.main.shortcodes.blocks.products.list'],
                                ['label' => 'Overlay', 'route' => 'unify.templates.main.shortcodes.blocks.products.overlay'],
                            ],
                        ],
                        ['label' => 'Tables', 'route' => 'unify.templates.main.shortcodes.blocks.tables'],
                        [
                            'label' => 'Team',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Team', 'route' => 'unify.templates.main.shortcodes.blocks.team.team'],
                                ['label' => 'Advanced', 'route' => 'unify.templates.main.shortcodes.blocks.team.advanced'],
                            ],
                        ],
                        [
                            'label' => 'Testimonials',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Testimonials', 'route' => 'unify.templates.main.shortcodes.blocks.testimonials.testimonials'],
                                ['label' => 'Advanced', 'route' => 'unify.templates.main.shortcodes.blocks.testimonials.advanced'],
                            ],
                        ],
                        [
                            'label' => 'Timers',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Timelines', 'route' => 'unify.templates.main.shortcodes.blocks.timer.timelines'],
                                ['label' => 'Countdowns', 'route' => 'unify.templates.main.shortcodes.blocks.timer.countdowns'],
                                ['label' => 'Counters', 'route' => 'unify.templates.main.shortcodes.blocks.timer.counters'],
                            ],
                        ],

                        ['label' => 'Users', 'route' => 'unify.templates.main.shortcodes.blocks.users'],
                    ],
                ],

            ]
        ]
    ]
];
