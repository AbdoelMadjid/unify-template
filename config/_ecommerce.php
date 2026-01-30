<?php

return [
    'menu_home' => [
        [
            'label' => 'Home',
            'route' => null,
            'icon' => null,
            'submenu' => [
                ['label' => 'Home Default', 'route' => 'unify.templates.ecommerce.home.homepage1',],
                ['label' => 'Home 2', 'route' => 'unify.templates.ecommerce.home.homepage2',],
                ['label' => 'Home 3', 'route' => 'unify.templates.ecommerce.home.homepage3',],
            ],
        ],
    ],
    'menu_pages' => [
        [
            'label' => 'Pages',
            'route' => null,
            'icon' => null,
            'submenu' => [
                [
                    'label' => 'Grid Filter',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Left Sidebar', 'route' => 'unify.templates.ecommerce.gridfilter.pagegridfilterleftsidebar1'],
                        ['label' => 'Right Sidebar', 'route' => 'unify.templates.ecommerce.gridfilter.pagegridfilterrightsidebar1'],
                        ['label' => 'No Sidebar 1', 'route' => 'unify.templates.ecommerce.gridfilter.pagegridfilternosidebar1'],
                        ['label' => 'No Sidebar 2', 'route' => 'unify.templates.ecommerce.gridfilter.pagegridfilternosidebar2'],
                        ['label' => 'No Sidebar 3', 'route' => 'unify.templates.ecommerce.gridfilter.pagegridfilternosidebar3'],
                        ['label' => 'No Sidebar 4', 'route' => 'unify.templates.ecommerce.gridfilter.pagegridfilternosidebar4'],
                    ],
                ],
                [
                    'label' => 'List Filter',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Left Sidebar', 'route' => 'unify.templates.ecommerce.listfilter.pagelistfilterleftsidebar1'],
                        ['label' => 'Right Sidebar', 'route' => 'unify.templates.ecommerce.listfilter.pagelistfilterrightsidebar1'],
                        ['label' => 'No Sidebar 1', 'route' => 'unify.templates.ecommerce.listfilter.pagelistfilternosidebar1'],
                        ['label' => 'No Sidebar 2', 'route' => 'unify.templates.ecommerce.listfilter.pagelistfilternosidebar2'],
                        ['label' => 'No Sidebar 3', 'route' => 'unify.templates.ecommerce.listfilter.pagelistfilternosidebar3'],
                        ['label' => 'No Sidebar 4', 'route' => 'unify.templates.ecommerce.listfilter.pagelistfilternosidebar4'],
                    ],
                ],
                [
                    'label' => 'Left/Right Category',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Left Sidebar', 'route' => 'unify.templates.ecommerce.category.pagecategorynosidebar1'],
                        ['label' => 'Right Sidebar', 'route' => 'unify.templates.ecommerce.category.pagecategoryrightsidebar1'],
                        ['label' => 'No Sidebar 1', 'route' => 'unify.templates.ecommerce.category.pagecategorynosidebar1'],
                        ['label' => 'No Sidebar 2', 'route' => 'unify.templates.ecommerce.category.pagecategorynosidebar2'],
                        ['label' => 'No Sidebar 3', 'route' => 'unify.templates.ecommerce.category.pagecategorynosidebar3'],
                        ['label' => 'No Sidebar 4', 'route' => 'unify.templates.ecommerce.category.pagecategorynosidebar4'],
                    ],
                ],
                [
                    'label' => 'Single Product',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Single Product', 'route' => 'unify.templates.ecommerce.singleproduct.pagesingleproduct1'],
                        ['label' => 'Single Product 2', 'route' => 'unify.templates.ecommerce.singleproduct.pagesingleproduct2'],
                        ['label' => 'Single Product 3', 'route' => 'unify.templates.ecommerce.singleproduct.pagesingleproduct3'],
                    ],
                ],
                [
                    'label' => 'Checkout',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Checkout', 'route' => 'unify.templates.ecommerce.checkout.pagecheckout1'],
                        ['label' => 'Order Completed', 'route' => 'unify.templates.ecommerce.checkout.pageordercompleted1'],
                        ['label' => 'Empty Cart', 'route' => 'unify.templates.ecommerce.checkout.pageemptycart1'],
                        ['label' => 'Gift Card', 'route' => 'unify.templates.ecommerce.checkout.pagegiftcard1'],
                    ],
                ],
                [
                    'label' => 'Account',
                    'route' => null,
                    'submenu' => [
                        ['label' => 'Your Wallet', 'route' => 'unify.templates.ecommerce.account.pagewallet1'],
                        ['label' => 'Your Orders', 'route' => 'unify.templates.ecommerce.account.pageorders1'],
                        ['label' => 'Open Orders', 'route' => 'unify.templates.ecommerce.account.pageopenorders1'],
                        ['label' => 'Cancelled Orders', 'route' => 'unify.templates.ecommerce.account.pagecancelledorders1'],
                        ['label' => 'Wishlist', 'route' => 'unify.templates.ecommerce.account.pagewishlist1'],
                        ['label' => 'Addresses', 'route' => 'unify.templates.ecommerce.account.pageaddresses1'],
                        ['label' => 'Payment Options', 'route' => 'unify.templates.ecommerce.account.pagepaymentoptions1'],
                        ['label' => 'Login & Security', 'route' => 'unify.templates.ecommerce.account.pageloginsecurity1'],
                        ['label' => 'Notifications', 'route' => 'unify.templates.ecommerce.account.pagenotifications1', 'badge' => 'new'],
                    ],
                ],
                ['label' => 'Login', 'route' => 'unify.templates.ecommerce.auth.pagelogin1'],
                ['label' => 'Signup', 'route' => 'unify.templates.ecommerce.auth.pagesignup1'],
                ['label' => 'Password Recovery', 'route' => 'unify.templates.ecommerce.auth.pagepasswordrecovery1', 'badge' => 'new'],
                ['label' => 'Help Center', 'route' => 'unify.templates.ecommerce.other.pagehelp1', 'badge' => 'new'],
                ['label' => 'Coming Soon', 'route' => 'unify.templates.ecommerce.other.pagecomingsoon1', 'badge' => 'new'],
                ['label' => 'Contact Us', 'route' => 'unify.templates.ecommerce.other.pagecontact1', 'badge' => 'new'],
                ['label' => 'Our Stores', 'route' => 'unify.templates.ecommerce.other.pageourstores1', 'badge' => 'new'],
            ],
        ],
    ],
];
