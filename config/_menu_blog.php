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
                    'type' => 'dual-column',
                    'submenu' => [
                        ['label' => 'Minimal 1', 'route' => 'unify.templates.main.blog.minimal.minimal1'],
                        ['label' => 'Minimal 1 (left sidebar)', 'route' => 'unify.templates.main.blog.minimal.minimal1leftsidebar'],
                        ['label' => 'Minimal 1 (right sidebar)', 'route' => 'unify.templates.main.blog.minimal.minimal1rightsidebar'],
                        ['label' => 'Minimal 2', 'route' => 'unify.templates.main.blog.minimal.minimal2'],
                        ['label' => 'Minimal 2 (left sidebar)', 'route' => 'unify.templates.main.blog.minimal.minimal2leftsidebar'],
                        ['label' => 'Minimal 2 (right sidebar)', 'route' => 'unify.templates.main.blog.minimal.minimal2rightsidebar'],
                        ['label' => 'Minimal 3', 'route' => 'unify.templates.main.blog.minimal.minimal3'],
                        ['label' => 'Minimal 3 (left sidebar)', 'route' => 'unify.templates.main.blog.minimal.minimal3leftsidebar'],
                        ['label' => 'Minimal 3 (right sidebar)', 'route' => 'unify.templates.main.blog.minimal.minimal3rightsidebar'],
                        ['label' => 'Minimal 4', 'route' => 'unify.templates.main.blog.minimal.minimal4'],
                        ['label' => 'Minimal 4 (left sidebar)', 'route' => 'unify.templates.main.blog.minimal.minimal4leftsidebar'],
                        ['label' => 'Minimal 4 (right sidebar)', 'route' => 'unify.templates.main.blog.minimal.minimal4rightsidebar'],
                    ],
                ],
                [
                    'label' => 'Grid Background',
                    'route' => null,
                    'type' => 'dual-column',
                    'submenu' => [
                        ['label' => 'Column 2', 'route' => 'unify.templates.main.blog.background.backgroundoverlay2'],
                        ['label' => 'Column 2 (left sidebar)', 'route' => 'unify.templates.main.blog.background.backgroundoverlayleftsidebar'],
                        ['label' => 'Column 2 (right sidebar)', 'route' => 'unify.templates.main.blog.background.backgroundoverlayrightsidebar'],
                        ['label' => 'Column 3', 'route' => 'unify.templates.main.blog.background.backgroundoverlay3'],
                        ['label' => 'Column 3 (full width)', 'route' => 'unify.templates.main.blog.background.backgroundoverlay3fullwidth'],
                        ['label' => 'Column 4', 'route' => 'unify.templates.main.blog.background.backgroundoverlay4'],
                        ['label' => 'Column 4 (full width)', 'route' => 'unify.templates.main.blog.background.backgroundoverlay4fullwidth'],
                    ],
                ],
                [
                    'label' => 'Grid Classic',
                    'route' => null,
                    'type' => 'dual-column',
                    'submenu' => [
                        ['label' => 'Column 2', 'route' => 'unify.templates.main.blog.classic.classic2'],
                        ['label' => 'Column 2 (left sidebar)', 'route' => 'unify.templates.main.blog.classic.classicleftsidebar'],
                        ['label' => 'Column 2 (right sidebar)', 'route' => 'unify.templates.main.blog.classic.classicrightsidebar'],
                        ['label' => 'Column 3', 'route' => 'unify.templates.main.blog.classic.classic3'],
                        ['label' => 'Column 3 (full width)', 'route' => 'unify.templates.main.blog.classic.classic3fullwidth'],
                        ['label' => 'Column 4', 'route' => 'unify.templates.main.blog.classic.classic4'],
                        ['label' => 'Column 4 (full width)', 'route' => 'unify.templates.main.blog.classic.classic4fullwidth'],
                    ],
                ],
                [
                    'label' => 'Grid Modern',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Modern 1', 'route' => 'unify.templates.main.blog.modern.modern1'],
                        ['label' => 'Modern 2', 'route' => 'unify.templates.main.blog.modern.modern2'],
                    ],
                ],
                [
                    'label' => 'Grid Overlap',
                    'route' => null,
                    'type' => 'dual-column',
                    'submenu' => [
                        ['label' => 'Column 2', 'route' => 'unify.templates.main.blog.overlap.overlap2'],
                        ['label' => 'Column 2 (left sidebar)', 'route' => 'unify.templates.main.blog.overlap.overlapleftsidebar'],
                        ['label' => 'Column 2 (right sidebar)', 'route' => 'unify.templates.main.blog.overlap.overlaprightsidebar'],
                        ['label' => 'Column 3', 'route' => 'unify.templates.main.blog.overlap.overlap3'],
                        ['label' => 'Column 3 (full width)', 'route' => 'unify.templates.main.blog.overlap.overlap3fullwidth'],
                        ['label' => 'Column 4 (full width)', 'route' => 'unify.templates.main.blog.overlap.overlap4fullwidth'],
                    ],
                ],
                [
                    'label' => 'Grid Masonry',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Column 2', 'route' => 'unify.templates.main.blog.masonry.masonrycol2'],
                        ['label' => 'Column 3', 'route' => 'unify.templates.main.blog.masonry.masonrycol3'],
                        ['label' => 'Column 3 (full width)', 'route' => 'unify.templates.main.blog.masonry.masonrycol3fullwidth'],
                        ['label' => 'Column 4', 'route' => 'unify.templates.main.blog.masonry.masonrycol4'],
                        ['label' => 'Column 4 (full width)', 'route' => 'unify.templates.main.blog.masonry.masonrycol4fullwidth'],
                    ],
                ],
                [
                    'label' => 'Single items',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Single item 1', 'route' => 'unify.templates.main.blog.single.singleitem1'],
                        ['label' => 'Single item 2', 'route' => 'unify.templates.main.blog.single.singleitem2'],
                    ],
                ],
            ],
        ],
    ],
];
