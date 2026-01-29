<?php

return [
    'menu_blog' => [
        [
            'label' => 'Blog',
            'route' => null,
            'icon' => null,
            'submenu' => [
                [
                    'label' => 'Minimal',
                    'route' => null,
                    'type' => 'col-3',
                    'submenu' => [
                        ['label' => 'Minimal 1', 'route' => 'unify.blog.minimal.minimal1'],
                        ['label' => 'Minimal 1 (left sidebar)', 'route' => 'unify.blog.minimal.minimal1leftsidebar'],
                        ['label' => 'Minimal 1 (right sidebar)', 'route' => 'unify.blog.minimal.minimal1rightsidebar'],
                        ['label' => 'Minimal 2', 'route' => 'unify.blog.minimal.minimal2'],
                        ['label' => 'Minimal 2 (left sidebar)', 'route' => 'unify.blog.minimal.minimal2leftsidebar'],
                        ['label' => 'Minimal 2 (right sidebar)', 'route' => 'unify.blog.minimal.minimal2rightsidebar'],
                        ['label' => 'Minimal 3', 'route' => 'unify.blog.minimal.minimal3'],
                        ['label' => 'Minimal 3 (left sidebar)', 'route' => 'unify.blog.minimal.minimal3leftsidebar'],
                        ['label' => 'Minimal 3 (right sidebar)', 'route' => 'unify.blog.minimal.minimal3rightsidebar'],
                        ['label' => 'Minimal 4', 'route' => 'unify.blog.minimal.minimal4'],
                        ['label' => 'Minimal 4 (left sidebar)', 'route' => 'unify.blog.minimal.minimal4leftsidebar'],
                        ['label' => 'Minimal 4 (right sidebar)', 'route' => 'unify.blog.minimal.minimal4rightsidebar'],
                    ],
                ],
                [
                    'label' => 'Grid',
                    'route' => null,
                    'submenu' => [
                        [
                            'label' => 'Background',
                            'route' => null,
                            'type' => 'dual-column',
                            'submenu' => [
                                ['label' => 'Column 2', 'route' => 'unify.blog.grid.background.overlay2'],
                                ['label' => 'Column 2 (left sidebar)', 'route' => 'unify.blog.grid.background.overlay2leftsidebar'],
                                ['label' => 'Column 2 (right sidebar)', 'route' => 'unify.blog.grid.background.overlay2rightsidebar'],
                                ['label' => 'Column 3', 'route' => 'unify.blog.grid.background.overlay3'],
                                ['label' => 'Column 3 (full width)', 'route' => 'unify.blog.grid.background.overlay3fullwidth'],
                                ['label' => 'Column 4', 'route' => 'unify.blog.grid.background.overlay4'],
                                ['label' => 'Column 4 (full width)', 'route' => 'unify.blog.grid.background.overlay4fullwidth'],
                            ],
                        ],
                        [
                            'label' => 'Classic',
                            'route' => null,
                            'type' => 'dual-column',
                            'submenu' => [
                                ['label' => 'Column 2', 'route' => 'unify.blog.grid.classic.blogclassic2'],
                                ['label' => 'Column 2 (left sidebar)', 'route' => 'unify.blog.grid.classic.blogclassic2leftsidebar'],
                                ['label' => 'Column 2 (right sidebar)', 'route' => 'unify.blog.grid.classic.blogclassic2rightsidebar'],
                                ['label' => 'Column 3', 'route' => 'unify.blog.grid.classic.blogclassic3'],
                                ['label' => 'Column 3 (full width)', 'route' => 'unify.blog.grid.classic.blogclassic3fullwidth'],
                                ['label' => 'Column 4', 'route' => 'unify.blog.grid.classic.blogclassic4'],
                                ['label' => 'Column 4 (full width)', 'route' => 'unify.blog.grid.classic.blogclassic4fullwidth'],
                            ],
                        ],
                        [
                            'label' => 'Modern',
                            'route' => null,
                            'submenu' => [
                                ['label' => 'Modern 1', 'route' => 'unify.blog.grid.modern.modern1'],
                                ['label' => 'Modern 2', 'route' => 'unify.blog.grid.modern.modern2'],
                            ],
                        ],
                        [
                            'label' => 'Overlap',
                            'route' => null,
                            'type' => 'dual-column',
                            'submenu' => [
                                ['label' => 'Column 2', 'route' => 'unify.blog.grid.overlap.overlap2'],
                                ['label' => 'Column 2 (left sidebar)', 'route' => 'unify.blog.grid.overlap.overlap2leftsidebar'],
                                ['label' => 'Column 2 (right sidebar)', 'route' => 'unify.blog.grid.overlap.overlap2rightsidebar'],
                                ['label' => 'Column 3', 'route' => 'unify.blog.grid.overlap.overlap3'],
                                ['label' => 'Column 3 (full width)', 'route' => 'unify.blog.grid.overlap.overlap3fullwidth'],
                                ['label' => 'Column 4 (full width)', 'route' => 'unify.blog.grid.overlap.overlap4fullwidth'],
                            ],
                        ],
                    ],
                ],
                [
                    'label' => 'Masonry',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Column 2', 'route' => 'unify.blog.masonry.masonrycol2'],
                        ['label' => 'Column 3', 'route' => 'unify.blog.masonry.masonrycol3'],
                        ['label' => 'Column 3 (full width)', 'route' => 'unify.blog.masonry.masonrycol3fullwidth'],
                        ['label' => 'Column 4', 'route' => 'unify.blog.masonry.masonrycol4'],
                        ['label' => 'Column 4 (full width)', 'route' => 'unify.blog.masonry.masonrycol4fullwidth'],
                    ],
                ],
                [
                    'label' => 'Single items',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Single item 1', 'route' => 'unify.blog.single.item1'],
                        ['label' => 'Single item 2', 'route' => 'unify.blog.single.item2'],
                    ],
                ],
            ],
        ],
    ],
];
