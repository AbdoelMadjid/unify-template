<?php

return [
    'menu_shortcodes' => [
        [
            'label' => 'Shortcodes',
            'route' => 'unify.shortcodes.shortcodes',
            'icon' => 'ti-layout-grid2',
            'submenu' => [
                [
                    'label' => 'Base',
                    'route' => null,
                    'type' => 'dual-column',
                    'submenu' => [
                        ['label' => 'Accordions', 'route' => 'unify.shortcodes.base.accordions'],
                        ['label' => 'Alerts', 'route' => 'unify.shortcodes.base.alerts'],
                        ['label' => 'Badges', 'route' => 'unify.shortcodes.base.badges'],
                        ['label' => 'Blockquotes', 'route' => 'unify.shortcodes.base.blockquotes'],
                        ['label' => 'Box Shadows', 'route' => 'unify.shortcodes.base.boxshadows'],
                        ['label' => 'Breadcrumbs', 'route' => 'unify.shortcodes.base.breadcrumbs'],
                        ['label' => 'Buttons', 'route' => 'unify.shortcodes.base.buttons'],
                        ['label' => 'Dividers', 'route' => 'unify.shortcodes.base.dividers'],
                        ['label' => 'Lightbox', 'route' => 'unify.shortcodes.base.lightbox'],
                        ['label' => 'Modals', 'route' => 'unify.shortcodes.base.modals'],
                        ['label' => 'Gallery Grid', 'route' => 'unify.shortcodes.base.gallerygrid'],
                        ['label' => 'Gradient Backgrounds', 'route' => 'unify.shortcodes.base.gradientbackgrounds'],
                        ['label' => 'Labels', 'route' => 'unify.shortcodes.base.labels'],
                        ['label' => 'Lists Group', 'route' => 'unify.shortcodes.base.listsgroup'],

                        [
                            'label' => 'Media',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Media Audios', 'route' => 'unify.shortcodes.base.media.audios'],
                                ['label' => 'Media Images', 'route' => 'unify.shortcodes.base.media.images'],
                                ['label' => 'Media Videos', 'route' => 'unify.shortcodes.base.media.videos'],
                            ]
                        ],

                        ['label' => 'On Scroll Animations', 'route' => 'unify.shortcodes.base.onscrollanimations'],
                        ['label' => 'Paginations', 'route' => 'unify.shortcodes.base.paginations'],
                        ['label' => 'Panels', 'route' => 'unify.shortcodes.base.panels'],
                        ['label' => 'Progress Bars', 'route' => 'unify.shortcodes.base.progressbars'],

                        [
                            'label' => 'Process Blocks',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Dynamic Process Blocks', 'route' => 'unify.shortcodes.base.processblocks.dynamic'],
                                ['label' => 'Static Process Blocks', 'route' => 'unify.shortcodes.base.processblocks.static'],
                            ]
                        ],

                        ['label' => 'Tables', 'route' => 'unify.shortcodes.base.tables'],
                        ['label' => 'Taglines', 'route' => 'unify.shortcodes.base.taglines'],
                        ['label' => 'Tags', 'route' => 'unify.shortcodes.base.tags'],
                        ['label' => 'Headings', 'route' => 'unify.shortcodes.base.headings'],
                        ['label' => 'Typography', 'route' => 'unify.shortcodes.base.typography'],
                        ['label' => 'Dropcaps', 'route' => 'unify.shortcodes.base.dropcaps'],
                        ['label' => 'Form Layouts', 'route' => 'unify.shortcodes.base.formlayouts'],

                        [
                            'label' => 'Maps',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Google Maps', 'route' => 'unify.shortcodes.base.maps.google'],
                                ['label' => 'Maps with Pins', 'route' => 'unify.shortcodes.base.maps.withpins'],
                                ['label' => 'Vector Maps', 'route' => 'unify.shortcodes.base.maps.vector'],
                            ]
                        ],
                    ],
                ],

                [
                    'label' => 'forms',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Bootstrap', 'route' => 'unify.shortcodes.forms.bootstrap'],
                        ['label' => 'Unify', 'route' => 'unify.shortcodes.forms.unify'],
                        ['label' => 'Horizonal', 'route' => 'unify.shortcodes.forms.horizontal'],
                        ['label' => 'Disabled', 'route' => 'unify.shortcodes.forms.disabledstates'],
                        ['label' => 'Success', 'route' => 'unify.shortcodes.forms.successstates'],
                        ['label' => 'Error', 'route' => 'unify.shortcodes.forms.errorstates'],
                    ],
                ],

                [
                    'label' => 'icons',
                    'route' => null,
                    'type' => 'dual-column',
                    'submenu' => [
                        ['label' => 'Icons', 'route' => 'unify.shortcodes.icons.icons'],
                        ['label' => 'Hovers', 'route' => 'unify.shortcodes.icons.hovers'],
                        ['label' => 'Sizes', 'route' => 'unify.shortcodes.icons.sizes'],
                        ['label' => 'Social', 'route' => 'unify.shortcodes.icons.social'],
                        ['label' => 'Fontawesome', 'route' => 'unify.shortcodes.icons.fontawesome'],
                        ['label' => 'Material', 'route' => 'unify.shortcodes.icons.material'],
                        ['label' => 'Line Pro 1', 'route' => 'unify.shortcodes.icons.linepro1'],
                        ['label' => 'Line Pro 2', 'route' => 'unify.shortcodes.icons.linepro2'],
                        ['label' => 'Simple Line', 'route' => 'unify.shortcodes.icons.simpleline'],
                        ['label' => 'Et Line', 'route' => 'unify.shortcodes.icons.etline'],
                    ],
                ],

                [
                    'label' => 'Tabs',
                    'route' => null,
                    'type' => 'dual-column',
                    'submenu' => [
                        ['label' => 'Tab 1-1', 'route' => 'unify.shortcodes.tabs.tab11'],
                        ['label' => 'Tab 1-2', 'route' => 'unify.shortcodes.tabs.tab12'],
                        ['label' => 'Tab 2-1', 'route' => 'unify.shortcodes.tabs.tab21'],
                        ['label' => 'Tab 2-2', 'route' => 'unify.shortcodes.tabs.tab22'],
                        ['label' => 'Tab 3-1', 'route' => 'unify.shortcodes.tabs.tab31'],
                        ['label' => 'Tab 4-1', 'route' => 'unify.shortcodes.tabs.tab41'],
                        ['label' => 'Tab 5-1', 'route' => 'unify.shortcodes.tabs.tab51'],
                        ['label' => 'Tab 5-2', 'route' => 'unify.shortcodes.tabs.tab52'],
                        ['label' => 'Tab 5-3', 'route' => 'unify.shortcodes.tabs.tab53'],
                        ['label' => 'Tab 6-1', 'route' => 'unify.shortcodes.tabs.tab61'],
                        ['label' => 'Tab 7-1', 'route' => 'unify.shortcodes.tabs.tab71'],
                        ['label' => 'Tab 8-1', 'route' => 'unify.shortcodes.tabs.tab81'],
                        ['label' => 'Tab 8-2', 'route' => 'unify.shortcodes.tabs.tab82'],
                    ],
                    'type' => 'dual-column',
                ],

                [
                    'label' => 'Portfolios',
                    'route' => null,
                    'submenu' => [
                        [
                            'label' => 'Grid 2 Columns',
                            'route' => null,
                            'type' => 'dual-column',
                            'submenu' => [
                                ['label' => 'Default', 'route' => 'unify.shortcodes.portfolios.grid2.default'],
                                ['label' => 'Fullwidth', 'route' => 'unify.shortcodes.portfolios.grid2.fullwidth'],
                                ['label' => 'Fullwidth (no space)', 'route' => 'unify.shortcodes.portfolios.grid2.fullwidthnospace'],
                                ['label' => 'Fullwidth (no space & text)', 'route' => 'unify.shortcodes.portfolios.grid2.fullwidthnospaceandtext'],
                                ['label' => 'Fullwidth (no text)', 'route' => 'unify.shortcodes.portfolios.grid2.fullwidthnotext'],
                                ['label' => 'No Space', 'route' => 'unify.shortcodes.portfolios.grid2.nospace'],
                                ['label' => 'No Space & Text', 'route' => 'unify.shortcodes.portfolios.grid2.nospaceandtext'],
                                ['label' => 'No Text', 'route' => 'unify.shortcodes.portfolios.grid2.notext'],
                            ]
                        ],
                        [
                            'label' => 'Grid 3 Columns',
                            'route' => null,
                            'type' => 'dual-column',
                            'submenu' => [
                                ['label' => 'Default', 'route' => 'unify.shortcodes.portfolios.grid3.default'],
                                ['label' => 'Fullwidth', 'route' => 'unify.shortcodes.portfolios.grid3.fullwidth'],
                                ['label' => 'Fullwidth (no space)', 'route' => 'unify.shortcodes.portfolios.grid3.fullwidthnospace'],
                                ['label' => 'Fullwidth (no space & text)', 'route' => 'unify.shortcodes.portfolios.grid3.fullwidthnospaceandtext'],
                                ['label' => 'Fullwidth (no text)', 'route' => 'unify.shortcodes.portfolios.grid3.fullwidthnotext'],
                                ['label' => 'No Space', 'route' => 'unify.shortcodes.portfolios.grid3.nospace'],
                                ['label' => 'No Space & Text', 'route' => 'unify.shortcodes.portfolios.grid3.nospaceandtext'],
                                ['label' => 'No Text', 'route' => 'unify.shortcodes.portfolios.grid3.notext'],
                            ]
                        ],
                        [
                            'label' => 'Grid 4 Columns',
                            'route' => null,
                            'type' => 'dual-column',
                            'submenu' => [
                                ['label' => 'Default', 'route' => 'unify.shortcodes.portfolios.grid4.default'],
                                ['label' => 'Fullwidth', 'route' => 'unify.shortcodes.portfolios.grid4.fullwidth'],
                                ['label' => 'Fullwidth (no space)', 'route' => 'unify.shortcodes.portfolios.grid4.fullwidthnospace'],
                                ['label' => 'Fullwidth (no space & text)', 'route' => 'unify.shortcodes.portfolios.grid4.fullwidthnospaceandtext'],
                                ['label' => 'Fullwidth (no text)', 'route' => 'unify.shortcodes.portfolios.grid4.fullwidthnotext'],
                                ['label' => 'No Space', 'route' => 'unify.shortcodes.portfolios.grid4.nospace'],
                                ['label' => 'No Space & Text', 'route' => 'unify.shortcodes.portfolios.grid4.nospaceandtext'],
                                ['label' => 'No Text', 'route' => 'unify.shortcodes.portfolios.grid4.notext'],
                            ]
                        ],
                        [
                            'label' => 'Grid 5 Columns',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Fullwidth', 'route' => 'unify.shortcodes.portfolios.grid5.fullwidth'],
                                ['label' => 'Fullwidth (no space)', 'route' => 'unify.shortcodes.portfolios.grid5.fullwidthnospace'],
                                ['label' => 'Fullwidth (no space & text)', 'route' => 'unify.shortcodes.portfolios.grid5.fullwidthnospaceandtext'],
                                ['label' => 'Fullwidth (no text)', 'route' => 'unify.shortcodes.portfolios.grid5.fullwidthnotext'],
                            ]
                        ],
                        [
                            'label' => 'Grid 6 Columns',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Fullwidth', 'route' => 'unify.shortcodes.portfolios.grid6.fullwidth'],
                                ['label' => 'Fullwidth (no space)', 'route' => 'unify.shortcodes.portfolios.grid6.fullwidthnospace'],
                                ['label' => 'Fullwidth (no space & text)', 'route' => 'unify.shortcodes.portfolios.grid6.fullwidthnospaceandtext'],
                                ['label' => 'Fullwidth (no text)', 'route' => 'unify.shortcodes.portfolios.grid6.fullwidthnotext'],
                            ]
                        ],
                        [
                            'label' => 'Modern Grid',
                            'route' => null,
                            'type' => 'dual-column',
                            'submenu' => [
                                ['label' => '2 columns', 'route' => 'unify.shortcodes.portfolios.modern.2columns'],
                                ['label' => '2 columns (fullwidth)', 'route' => 'unify.shortcodes.portfolios.modern.2columnsfullwidth'],
                                ['label' => '3 columns', 'route' => 'unify.shortcodes.portfolios.modern.3columns'],
                                ['label' => '3 columns (fullwidth)', 'route' => 'unify.shortcodes.portfolios.modern.3columnsfullwidth'],
                                ['label' => '4 columns', 'route' => 'unify.shortcodes.portfolios.modern.4columns'],
                                ['label' => '4 columns (fullwidth)', 'route' => 'unify.shortcodes.portfolios.modern.4columnsfullwidth'],
                                ['label' => '5 columns (fullwidth)', 'route' => 'unify.shortcodes.portfolios.modern.5columnsfullwidth'],
                                ['label' => '6 columns (fullwidth)', 'route' => 'unify.shortcodes.portfolios.modern.6columnsfullwidth'],
                            ]
                        ],
                        [
                            'label' => 'Grid Load',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Grid Button', 'route' => 'unify.shortcodes.portfolios.gridload.button'],
                                ['label' => 'Grid Infinite', 'route' => 'unify.shortcodes.portfolios.gridload.infinite'],
                            ]
                        ],
                    ],
                ],


                [
                    'label' => 'Headers',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Main Header', 'route' => 'unify.shortcodes.headers.index'],
                        [
                            'label' => 'Classic',
                            'route' => null,
                            'submenu' => [
                                [
                                    'label' => 'Alignments',
                                    'route' => null,
                                    'submenu' => [
                                        ['label' => 'Left', 'route' => 'unify.shortcodes.headers.classic.alignments.left'],
                                        ['label' => 'Center', 'route' => 'unify.shortcodes.headers.classic.alignments.center'],
                                        ['label' => 'Right', 'route' => 'unify.shortcodes.headers.classic.alignments.right'],
                                    ],
                                ],
                                [
                                    'label' => 'Behaviors',
                                    'route' => null,
                                    'submenu' => [
                                        ['label' => 'Default', 'route' => 'unify.shortcodes.headers.classic.behavior.default'],
                                        ['label' => 'Toggle Header', 'route' => 'unify.shortcodes.headers.classic.behavior.toggleheader'],
                                        ['label' => 'Top Bar', 'route' => 'unify.shortcodes.headers.classic.behavior.topbar'],
                                    ],
                                ],
                                [
                                    'label' => 'Components',
                                    'route' => null,
                                    'submenu' => [
                                        ['label' => 'Basket', 'route' => 'unify.shortcodes.headers.classic.components.basket'],
                                        ['label' => 'Langs', 'route' => 'unify.shortcodes.headers.classic.components.langs'],
                                        ['label' => 'Search', 'route' => 'unify.shortcodes.headers.classic.components.search'],
                                    ],
                                ],
                                [
                                    'label' => 'Designs',
                                    'route' => null,
                                    'submenu' => [
                                        ['label' => 'Bordered', 'route' => 'unify.shortcodes.headers.classic.design.bordered'],
                                        [
                                            'label' => 'Bg Image',
                                            'route' => null,
                                            'type' => 'dual-column',
                                            'submenu' => [
                                                ['label' => 'Dark', 'route' => 'unify.shortcodes.headers.classic.design.bg.dark'],
                                                ['label' => 'Gradient', 'route' => 'unify.shortcodes.headers.classic.design.bg.gradient'],
                                                ['label' => 'Primary', 'route' => 'unify.shortcodes.headers.classic.design.bg.primary'],
                                                ['label' => 'Semi Transparent Dark', 'route' => 'unify.shortcodes.headers.classic.design.bg.semitransparentdark'],
                                                ['label' => 'Semi Transparent White', 'route' => 'unify.shortcodes.headers.classic.design.bg.semitransparentwhite'],
                                                ['label' => 'Transparent', 'route' => 'unify.shortcodes.headers.classic.design.bg.transparent'],
                                                ['label' => 'White', 'route' => 'unify.shortcodes.headers.classic.design.bg.white'],
                                            ],
                                        ],
                                        [
                                            'label' => 'Layouts',
                                            'route' => null,
                                            'submenu' => [
                                                ['label' => 'Layout 2', 'route' => 'unify.shortcodes.headers.classic.design.layout.layout2'],
                                                ['label' => 'Layout 3', 'route' => 'unify.shortcodes.headers.classic.design.layout.layout3'],
                                                ['label' => 'Layout 4', 'route' => 'unify.shortcodes.headers.classic.design.layout.layout4'],
                                                ['label' => 'Layout 5', 'route' => 'unify.shortcodes.headers.classic.design.layout.layout5'],
                                                ['label' => 'Layout 6', 'route' => 'unify.shortcodes.headers.classic.design.layout.layout6'],
                                            ],
                                        ],
                                    ],
                                ],
                                [
                                    'label' => 'Floating',
                                    'route' => null,
                                    'submenu' => [
                                        ['label' => 'Dark', 'route' => 'unify.shortcodes.headers.classic.floating.dark'],
                                        ['label' => 'Gradient', 'route' => 'unify.shortcodes.headers.classic.floating.gradient'],
                                        ['label' => 'Primary', 'route' => 'unify.shortcodes.headers.classic.floating.primary'],
                                        ['label' => 'White', 'route' => 'unify.shortcodes.headers.classic.floating.white'],
                                    ],
                                ],
                                [
                                    'label' => 'Mega Menu',
                                    'route' => null,
                                    'type' => 'dual-column',
                                    'submenu' => [
                                        ['label' => '2 Column', 'route' => 'unify.shortcodes.headers.classic.megamenu.2column'],
                                        ['label' => '3 Column', 'route' => 'unify.shortcodes.headers.classic.megamenu.3column'],
                                        ['label' => '4 Column', 'route' => 'unify.shortcodes.headers.classic.megamenu.4column'],
                                        ['label' => '5 Column', 'route' => 'unify.shortcodes.headers.classic.megamenu.5column'],
                                        ['label' => 'Contact Form 1', 'route' => 'unify.shortcodes.headers.classic.megamenu.contactform'],
                                        ['label' => 'Contact Form 2', 'route' => 'unify.shortcodes.headers.classic.megamenu.contactform2'],
                                        ['label' => 'Login Form', 'route' => 'unify.shortcodes.headers.classic.megamenu.loginform'],
                                        ['label' => 'Map', 'route' => 'unify.shortcodes.headers.classic.megamenu.map'],
                                        ['label' => 'Map Form', 'route' => 'unify.shortcodes.headers.classic.megamenu.mapform'],
                                        ['label' => 'News', 'route' => 'unify.shortcodes.headers.classic.megamenu.news'],
                                        ['label' => 'Products', 'route' => 'unify.shortcodes.headers.classic.megamenu.products'],
                                        ['label' => 'Tabs Horizontal', 'route' => 'unify.shortcodes.headers.classic.megamenu.tabshorizontal'],
                                        ['label' => 'Tabs Vertical', 'route' => 'unify.shortcodes.headers.classic.megamenu.tabsvertical'],
                                    ],
                                ],
                                [
                                    'label' => 'Mobile',
                                    'route' => null,
                                    'submenu' => [
                                        ['label' => 'Top', 'route' => 'unify.shortcodes.headers.classic.mobile.top'],
                                        ['label' => 'Sidebar Overlay', 'route' => 'unify.shortcodes.headers.classic.mobile.sidebaroverlay'],
                                        ['label' => 'Sidebar Push', 'route' => 'unify.shortcodes.headers.classic.mobile.sidebarpush'],
                                    ],
                                ],
                                [
                                    'label' => 'Navigation',
                                    'route' => null,
                                    'type' => 'dual-column',
                                    'submenu' => [
                                        ['label' => 'Nav 1', 'route' => 'unify.shortcodes.headers.classic.nav.nav1'],
                                        ['label' => 'Nav 2', 'route' => 'unify.shortcodes.headers.classic.nav.nav2'],
                                        ['label' => 'Nav 3', 'route' => 'unify.shortcodes.headers.classic.nav.nav3'],
                                        ['label' => 'Nav 4', 'route' => 'unify.shortcodes.headers.classic.nav.nav4'],
                                        ['label' => 'Nav 5', 'route' => 'unify.shortcodes.headers.classic.nav.nav5'],
                                        ['label' => 'Nav 6', 'route' => 'unify.shortcodes.headers.classic.nav.nav6'],
                                        ['label' => 'Nav 7', 'route' => 'unify.shortcodes.headers.classic.nav.nav7'],
                                        ['label' => 'Nav 8', 'route' => 'unify.shortcodes.headers.classic.nav.nav8'],
                                    ],
                                ],
                                [
                                    'label' => 'Positions',
                                    'route' => null,
                                    'submenu' => [
                                        ['label' => 'Absolute 2 Screen', 'route' => 'unify.shortcodes.headers.classic.position.absolute2screen'],
                                        ['label' => 'Absolute Bottom', 'route' => 'unify.shortcodes.headers.classic.position.absolutebottom'],
                                        ['label' => 'Absolute Top', 'route' => 'unify.shortcodes.headers.classic.position.absolutetop'],
                                        ['label' => 'Static', 'route' => 'unify.shortcodes.headers.classic.position.static'],
                                        ['label' => 'Sticky Bottom', 'route' => 'unify.shortcodes.headers.classic.position.stickybottom'],
                                        ['label' => 'Sticky Top', 'route' => 'unify.shortcodes.headers.classic.position.stickytop'],
                                    ],
                                ],
                                [
                                    'label' => 'Splitted',
                                    'route' => null,
                                    'submenu' => [
                                        ['label' => 'Dark', 'route' => 'unify.shortcodes.headers.classic.splitted.dark'],
                                        ['label' => 'Gradient', 'route' => 'unify.shortcodes.headers.classic.splitted.gradient'],
                                        ['label' => 'Primary', 'route' => 'unify.shortcodes.headers.classic.splitted.primary'],
                                        ['label' => 'White', 'route' => 'unify.shortcodes.headers.classic.splitted.white'],
                                    ],
                                ],
                                [
                                    'label' => 'Sub Menu',
                                    'route' => null,
                                    'submenu' => [
                                        ['label' => 'Bootstrap', 'route' => 'unify.shortcodes.headers.classic.submenu.bootstrap'],
                                        ['label' => 'Inline', 'route' => 'unify.shortcodes.headers.classic.submenu.inline'],
                                        ['label' => 'On Click', 'route' => 'unify.shortcodes.headers.classic.submenu.onclick'],
                                        ['label' => 'On Hover', 'route' => 'unify.shortcodes.headers.classic.submenu.onhover'],
                                    ],
                                ],
                                [
                                    'label' => 'Top Bar',
                                    'route' => null,
                                    'type' => 'dual-column',
                                    'submenu' => [
                                        ['label' => 'Top Bar 1', 'route' => 'unify.shortcodes.headers.classic.topbar.topbar1'],
                                        ['label' => 'Top Bar 2', 'route' => 'unify.shortcodes.headers.classic.topbar.topbar2'],
                                        ['label' => 'Top Bar 3', 'route' => 'unify.shortcodes.headers.classic.topbar.topbar3'],
                                        ['label' => 'Top Bar 4', 'route' => 'unify.shortcodes.headers.classic.topbar.topbar4'],
                                        ['label' => 'Top Bar 5', 'route' => 'unify.shortcodes.headers.classic.topbar.topbar5'],
                                        ['label' => 'Top Bar 6', 'route' => 'unify.shortcodes.headers.classic.topbar.topbar6'],
                                        ['label' => 'Top Bar 7', 'route' => 'unify.shortcodes.headers.classic.topbar.topbar7'],
                                        ['label' => 'Top Bar 8', 'route' => 'unify.shortcodes.headers.classic.topbar.topbar8'],
                                    ],
                                ],
                                ['label' => 'Full Width', 'route' => 'unify.shortcodes.headers.classic.fullwidth'],
                                ['label' => 'One Page Scrolling', 'route' => 'unify.shortcodes.headers.classic.onepagescrolling'],
                            ],
                        ],
                        [
                            'label' => 'Fullscreen',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Bottom Left', 'route' => 'unify.shortcodes.headers.fullscreen.bottomleft'],
                                ['label' => 'Bottom Right', 'route' => 'unify.shortcodes.headers.fullscreen.bottomright'],
                                ['label' => 'Top Right', 'route' => 'unify.shortcodes.headers.fullscreen.topright'],
                            ],
                        ],
                        [
                            'label' => 'Sidebar',
                            'route' => null,
                            'type' => 'dual-column',
                            'submenu' => [
                                ['label' => 'Overlay Left Light', 'route' => 'unify.shortcodes.headers.sidebar.overlayleftlight'],
                                ['label' => 'Overlay Right Light', 'route' => 'unify.shortcodes.headers.sidebar.overlayrightlight'],
                                ['label' => 'Push Left Light', 'route' => 'unify.shortcodes.headers.sidebar.pushleftlight'],
                                ['label' => 'Push Right Light', 'route' => 'unify.shortcodes.headers.sidebar.pushrightlight'],
                                ['label' => 'Static Left Dark', 'route' => 'unify.shortcodes.headers.sidebar.staticleftdark'],
                                ['label' => 'Static Left Light', 'route' => 'unify.shortcodes.headers.sidebar.staticleftlight'],
                                ['label' => 'Static Right Light', 'route' => 'unify.shortcodes.headers.sidebar.staticrightlight'],
                            ],
                        ],
                        [
                            'label' => 'Smart',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Bottom Left', 'route' => 'unify.shortcodes.headers.smart.bottomleft'],
                                ['label' => 'Bottom Right', 'route' => 'unify.shortcodes.headers.smart.bottomright'],
                                ['label' => 'Top Right', 'route' => 'unify.shortcodes.headers.smart.topright'],
                            ],
                        ],
                    ],
                ],


                [
                    'label' => 'Blocks',
                    'route' => null,
                    'type' => 'dual-column',
                    'submenu' => [
                        ['label' => 'Banners', 'route' => 'unify.shortcodes.blocks.banners'],
                        ['label' => 'Clients', 'route' => 'unify.shortcodes.blocks.clients'],
                        ['label' => 'Comments', 'route' => 'unify.shortcodes.blocks.comments'],
                        ['label' => 'Countdowns', 'route' => 'unify.shortcodes.blocks.countdowns'],
                        ['label' => 'Counters', 'route' => 'unify.shortcodes.blocks.counters'],
                        [
                            'label' => 'CTA',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Boxed', 'route' => 'unify.shortcodes.blocks.cta.boxed'],
                                ['label' => 'Full Width', 'route' => 'unify.shortcodes.blocks.cta.fullwidth'],
                            ],
                        ],
                        ['label' => 'Gallery', 'route' => 'unify.shortcodes.blocks.gallery'],
                        ['label' => 'Counters', 'route' => 'unify.shortcodes.blocks.counters'],
                        [
                            'label' => 'Hero',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Blocks', 'route' => 'unify.shortcodes.blocks.hero.blocks'],
                                ['label' => 'Content', 'route' => 'unify.shortcodes.blocks.hero.content'],
                                ['label' => 'Info', 'route' => 'unify.shortcodes.blocks.hero.info'],
                            ],
                        ],
                        [
                            'label' => 'Icon',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Icons', 'route' => 'unify.shortcodes.blocks.icons.icons'],
                                ['label' => 'App', 'route' => 'unify.shortcodes.blocks.icons.app'],
                                ['label' => 'Interactive', 'route' => 'unify.shortcodes.blocks.icons.interactive'],
                            ],
                        ],
                        ['label' => 'Info Blocks', 'route' => 'unify.shortcodes.blocks.infoblocks'],
                        [
                            'label' => 'News',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Image', 'route' => 'unify.shortcodes.blocks.news.image'],
                                ['label' => 'News', 'route' => 'unify.shortcodes.blocks.news.news'],
                                ['label' => 'No Images', 'route' => 'unify.shortcodes.blocks.news.noimages'],
                                ['label' => 'Small', 'route' => 'unify.shortcodes.blocks.news.small'],
                            ],
                        ],
                        [
                            'label' => 'Pricing',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Plans', 'route' => 'unify.shortcodes.blocks.pricing.plans'],
                                ['label' => 'Sections', 'route' => 'unify.shortcodes.blocks.pricing.sections'],
                                ['label' => 'Table', 'route' => 'unify.shortcodes.blocks.pricing.table'],
                            ],
                        ],
                        [
                            'label' => 'Products',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Products', 'route' => 'unify.shortcodes.blocks.products.products'],
                                ['label' => 'Advanced', 'route' => 'unify.shortcodes.blocks.products.advanced'],
                                ['label' => 'List', 'route' => 'unify.shortcodes.blocks.products.list'],
                                ['label' => 'Overlay', 'route' => 'unify.shortcodes.blocks.products.overlay'],
                            ],
                        ],
                        ['label' => 'Tables', 'route' => 'unify.shortcodes.blocks.tables'],
                        [
                            'label' => 'Team',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Team', 'route' => 'unify.shortcodes.blocks.team.team'],
                                ['label' => 'Advanced', 'route' => 'unify.shortcodes.blocks.team.advanced'],
                            ],
                        ],
                        [
                            'label' => 'Testimonials',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Testimonials', 'route' => 'unify.shortcodes.blocks.testimonials.testimonials'],
                                ['label' => 'Advanced', 'route' => 'unify.shortcodes.blocks.testimonials.advanced'],
                            ],
                        ],
                        ['label' => 'Timelines', 'route' => 'unify.shortcodes.blocks.timelines'],
                        ['label' => 'Users', 'route' => 'unify.shortcodes.blocks.users'],
                    ],
                ],
                [
                    'label' => 'Promo',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Examples', 'route' => 'unify.shortcodes.promo.example','notes'=>'(44 examples)'],
                    ]
                ],

            ]
        ]
    ]
];
