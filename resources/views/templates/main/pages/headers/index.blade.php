<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>Headers &amp; Navigation Panels | Unify - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
    <!-- CSS Global Icons -->
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendor/icon-etlinefont/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
    <link rel="stylesheet" href="assets/vendor/jquery-ui/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="assets/css/unify-core.css">
    <link rel="stylesheet" href="assets/css/unify-components.css">
    <link rel="stylesheet" href="assets/css/unify-globals.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <main>



        <!-- Header -->
        @include('layouts.main.header')
        <!-- End Header -->

        <!-- Shortcode Sidebar Navigation -->
        {{-- <div id="sideNav" class="u-header u-header--side u-sidebar-navigation" aria-labelledby="sideNav-toggler"
            data-header-behavior="push" data-header-position="left" data-header-breakpoint="lg"
            data-header-classes="g-transition-0_5" data-header-body-classes="g-transition-0_5"
            data-header-overlay-classes="g-bg-black-opacity-0_8 g-transition-0_5">
            <!-- Header Toggle Button -->
            <button class="btn u-sidebar-navigation__toggler" id="sideNav-toggler" aria-haspopup="true"
                aria-expanded="false" aria-controls="sideNav" aria-label="Toggle Header" data-target="#sideNav">
                <i class="icon-list"></i>
            </button>
            <!-- End Header Toggle Button -->
            <div class="u-header__sections-container">
                <div class="u-sidebar-navigation-inner">

                    <h3 class="h5 g-px-20 g-mb-20">Unify Shortcodes</h3>

                    <div class="form-group g-px-20 g-mb-20">
                        <input id="u-sidebar-navigation__search-autocomplete"
                            class="form-control form-control-md u-sidebar-navigation__search-input g-py-13"
                            type="text" placeholder="Search over 1610 shortcodes"
                            data-url="assets/include/ajax/autocomplete-data-shortcode-search.json">
                    </div>

                    <ul class="js-shortcode-filter list-inline d-flex justify-content-between u-hs-filter">
                        <li class="list-inline-item active g-mr-10 g-mb-10">
                            <a href="#!" data-shortcode-filter="all">All</a>
                        </li>
                        <li class="list-inline-item g-mr-10 g-mb-10">
                            <a href="#!" data-shortcode-filter="bases">Bases</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!" data-shortcode-filter="blocks">Blocks</a>
                        </li>
                    </ul>

                    <ul class="js-shortcode-filter-result nav flex-column u-sidebar-navigation-list">
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-accordions"
                                class="nav-link ">Accordions</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-alerts" class="nav-link ">Alerts</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-badges" class="nav-link ">Badges</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-blockquotes"
                                class="nav-link ">Blockquotes</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-box-shadows" class="nav-link ">Box
                                Shadow</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-breadcrumbs"
                                class="nav-link ">Breadcrumbs</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-buttons" class="nav-link ">Buttons</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-dividers"
                                class="nav-link ">Dividers</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-lightbox"
                                class="nav-link ">Lightbox</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-modals" class="nav-link ">Modals</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-gallery-grid" class="nav-link ">Gallery
                                Grid</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-gradient-backgrounds"
                                class="nav-link ">Gradient Backgrounds</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-labels" class="nav-link ">Labels</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-lists-group" class="nav-link ">Lists
                                Group</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item dropdown bases">
                            <a class="nav-link dropdown-toggle " href="#!" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media</a>
                            <div class="dropdown-menu u-dropdown-static">
                                <ul class="nav flex-column">
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/shortcode-base-media-audios"
                                            class="nav-link ">Media Audios</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/shortcode-base-media-images"
                                            class="nav-link ">Media Images</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/shortcode-base-media-videos"
                                            class="nav-link ">Media Videos</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-onscroll-animations"
                                class="nav-link ">Onscroll Animations</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-paginations"
                                class="nav-link ">Paginations</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-panels" class="nav-link ">Panels</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-progress-bars"
                                class="nav-link ">Progress Bars</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item dropdown blocks">
                            <a class="nav-link dropdown-toggle " href="#!" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Process
                                Blocks</a>
                            <div class="dropdown-menu u-dropdown-static">
                                <ul class="nav flex-column">
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-base-dynamic-process-blocks-1"
                                            class="nav-link ">Dynamic Process Blocks</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-base-static-process-blocks-1"
                                            class="nav-link ">Static Process Blocks</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-tables" class="nav-link ">Tables</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-taglines"
                                class="nav-link ">Taglines</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-tags" class="nav-link ">Tags</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-headings"
                                class="nav-link ">Headings</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-typography"
                                class="nav-link ">Typography</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/shortcode-base-dropcaps"
                                class="nav-link ">Dropcaps</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item dropdown bases">
                            <a class="nav-link dropdown-toggle " href="#!" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Maps</a>
                            <div class="dropdown-menu u-dropdown-static">
                                <ul class="nav flex-column">
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/shortcode-base-google-maps"
                                            class="nav-link ">Google Maps</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/shortcode-base-vector-maps"
                                            class="nav-link ">Vector Maps</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/shortcode-base-maps-with-pins"
                                            class="nav-link ">Maps With Pins</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="js-shortcode-filter__item nav-item dropdown bases">
                            <a class="nav-link dropdown-toggle " href="#!" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Forms</a>
                            <div class="dropdown-menu u-dropdown-static">
                                <ul class="nav flex-column">
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/forms/shortcode-base-forms-bootstrap"
                                            class="nav-link ">Forms Bootstrap</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/forms/shortcode-base-forms-unify"
                                            class="nav-link ">Forms Unify</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/forms/shortcode-base-forms-horizontal-unify"
                                            class="nav-link ">Forms Horizontal Unify</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/forms/shortcode-base-forms-disabled-states-unify"
                                            class="nav-link ">Forms Disabled States Unify</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/forms/shortcode-base-forms-success-states-unify"
                                            class="nav-link ">Forms Success States unify</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/forms/shortcode-base-forms-error-states-unify"
                                            class="nav-link ">Forms Error States Unify</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="js-shortcode-filter__item nav-item dropdown bases">
                            <a class="nav-link dropdown-toggle " href="#!" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Icons</a>
                            <div class="dropdown-menu u-dropdown-static">
                                <ul class="nav flex-column">
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/icons/shortcode-base-icons"
                                            class="nav-link ">Icons</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/icons/shortcode-base-icon-hovers"
                                            class="nav-link ">Icon Hovers</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/icons/shortcode-base-icon-sizes"
                                            class="nav-link ">Icon Sizes</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/icons/shortcode-base-social-icons"
                                            class="nav-link ">Social Icons</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/icons/shortcode-base-icon-fontawesome"
                                            class="nav-link ">Icon Fontawesome</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/icons/shortcode-base-icon-material"
                                            class="nav-link ">Material Icons</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/icons/shortcode-base-icon-line-icons-pro-1"
                                            class="nav-link ">Icon Line Icons Pro 1</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/icons/shortcode-base-icon-line-icons-pro-2"
                                            class="nav-link ">Icon Line Icons Pro 2</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/icons/shortcode-base-icon-simple-line-icons"
                                            class="nav-link ">Icon Simple Line Icons</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item bases">
                                        <a href="unify-main/shortcodes/icons/shortcode-base-icon-et-line-icon"
                                            class="nav-link ">Icon Et Line Icon</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="js-shortcode-filter__item nav-item bases">
                            <a href="unify-main/shortcodes/tabs/index" class="nav-link ">Tabs</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item blocks">
                            <a href="unify-main/shortcodes/portfolios/index" class="nav-link ">Portfolios</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item blocks">
                            <a href="unify-main/shortcodes/headers/index" class="nav-link active">Headers</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item blocks">
                            <a href="unify-main/shortcodes/promo/index" class="nav-link ">Promo</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item dropdown blocks">
                            <a class="nav-link dropdown-toggle " href="#!" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Footers</a>
                            <div class="dropdown-menu u-dropdown-static">
                                <ul class="nav flex-column">
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/footers/shortcode-blocks-footer-classic"
                                            class="nav-link ">Footer Classic</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/footers/shortcode-blocks-footer-contact-forms"
                                            class="nav-link ">Footer Contact Forms</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/footers/shortcode-blocks-footer-maps"
                                            class="nav-link ">Footer Maps</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/footers/shortcode-blocks-footer-modern"
                                            class="nav-link ">Footer Modern</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="js-shortcode-filter__item nav-item blocks">
                            <a href="unify-main/shortcodes/shortcode-blocks-banners"
                                class="nav-link ">Banners</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item blocks">
                            <a href="unify-main/shortcodes/shortcode-blocks-clients"
                                class="nav-link ">Clients</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item blocks">
                            <a href="unify-main/shortcodes/shortcode-blocks-comments"
                                class="nav-link ">Comments</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item blocks">
                            <a href="unify-main/shortcodes/shortcode-blocks-countdowns"
                                class="nav-link ">Countdowns</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item blocks">
                            <a href="unify-main/shortcodes/shortcode-blocks-counters"
                                class="nav-link ">Counters</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item dropdown blocks">
                            <a class="nav-link dropdown-toggle " href="#!" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Call To
                                Action</a>
                            <div class="dropdown-menu u-dropdown-static">
                                <ul class="nav flex-column">
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-cta-boxed"
                                            class="nav-link ">Call To Action (boxed)</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-cta-full-width"
                                            class="nav-link ">Call To Action (full width)</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="js-shortcode-filter__item nav-item blocks">
                            <a href="unify-main/shortcodes/shortcode-blocks-gallery"
                                class="nav-link ">Gallery</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item dropdown blocks">
                            <a class="nav-link dropdown-toggle " href="#!" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hero</a>
                            <div class="dropdown-menu u-dropdown-static">
                                <ul class="nav flex-column">
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-hero-info"
                                            class="nav-link ">Hero Info</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-hero-blocks"
                                            class="nav-link ">Hero Blocks</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-hero-content"
                                            class="nav-link ">Hero Content</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="js-shortcode-filter__item nav-item dropdown blocks">
                            <a class="nav-link dropdown-toggle " href="#!" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Icon Blocks</a>
                            <div class="dropdown-menu u-dropdown-static">
                                <ul class="nav flex-column">
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-icons"
                                            class="nav-link ">Icon Blocks</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-icons-app"
                                            class="nav-link ">Icons App</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-icons-interactive"
                                            class="nav-link ">Icons Interactive</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="js-shortcode-filter__item nav-item blocks">
                            <a href="unify-main/shortcodes/shortcode-blocks-info-blocks" class="nav-link ">Info
                                Blocks</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item dropdown blocks">
                            <a class="nav-link dropdown-toggle " href="#!" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News Blocks</a>
                            <div class="dropdown-menu u-dropdown-static">
                                <ul class="nav flex-column">
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-news"
                                            class="nav-link ">News</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-news-image"
                                            class="nav-link ">News Image</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-news-no-images"
                                            class="nav-link ">News Without Images</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-news-small"
                                            class="nav-link ">News Small</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="js-shortcode-filter__item nav-item blocks">
                            <a href="unify-main/shortcodes/shortcode-blocks-tables" class="nav-link ">Table
                                Designs</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item dropdown blocks">
                            <a class="nav-link dropdown-toggle " href="#!" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pricing</a>
                            <div class="dropdown-menu u-dropdown-static">
                                <ul class="nav flex-column">
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-pricing-plans"
                                            class="nav-link ">Pricing Plans</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-pricing-sections"
                                            class="nav-link ">Pricing Sections</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-pricing-table"
                                            class="nav-link ">Pricing Table</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="js-shortcode-filter__item nav-item dropdown blocks">
                            <a class="nav-link dropdown-toggle " href="#!" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                            <div class="dropdown-menu u-dropdown-static">
                                <ul class="nav flex-column">
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-products"
                                            class="nav-link ">Products</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-products-advanced"
                                            class="nav-link ">Products Advanced</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-products-list"
                                            class="nav-link ">Products List</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-products-overlay"
                                            class="nav-link ">Products Overlay</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="js-shortcode-filter__item nav-item dropdown blocks">
                            <a class="nav-link dropdown-toggle " href="#!" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Team Blocks</a>
                            <div class="dropdown-menu u-dropdown-static">
                                <ul class="nav flex-column">
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-team"
                                            class="nav-link ">Team</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-team-advanced"
                                            class="nav-link ">Team Advanced</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="js-shortcode-filter__item nav-item dropdown blocks">
                            <a class="nav-link dropdown-toggle " href="#!" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Testimonials</a>
                            <div class="dropdown-menu u-dropdown-static">
                                <ul class="nav flex-column">
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-testimonials"
                                            class="nav-link ">Testimonials</a>
                                    </li>
                                    <li class="js-shortcode-filter__item nav-item blocks">
                                        <a href="unify-main/shortcodes/shortcode-blocks-testimonials-advanced"
                                            class="nav-link ">Testimonials Advanced</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="js-shortcode-filter__item nav-item blocks">
                            <a href="unify-main/shortcodes/shortcode-blocks-timelines"
                                class="nav-link ">Timelines</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item blocks">
                            <a href="unify-main/shortcodes/shortcode-blocks-users" class="nav-link ">Users</a>
                        </li>
                    </ul>

                    <button class="btn u-sidebar-navigation__closer" id="sideNav-toggler-closer" aria-haspopup="true"
                        aria-expanded="false" aria-controls="sideNav" aria-label="Toggle Header"
                        data-target="#sideNav">
                        <i class="hs-icon hs-icon-close"></i>
                    </button>
                </div>
            </div>
        </div> --}}
        <!-- End Shortcode Sidebar Navigation -->

        <!-- Page Title -->
        <section
            class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall g-overflow-hidden"
            data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}">
            <!-- Parallax Image -->
            <div style="height: 200%; background-image: url(assets/img/bg/pattern6-2.png); transform: translate3d(0px, -210.955px, 0px);"
                class="divimage dzsparallaxer--target w-100 g-bg-repeat g-bg-gray-light-v4"></div>
            <!-- End Parallax Image -->

            <div class="container g-z-index-1 g-py-100">
                <h1 class="g-font-weight-300 g-letter-spacing-1 g-mb-15">Headers &amp; Navigation Panels</h1>

                <div class="lead g-font-weight-400 g-line-height-2 g-letter-spacing-0_5">
                    <p class="mb-0">Block Components are usually collection of Base Components with/without the
                        Global Classes.
                        <br>These Components can be easily used and customized in any pages. Build websites like a Lego!
                    </p>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <section class="container g-py-100">
            <div class="g-pb-40">
                <!-- Classic Header -->
                <section id="plain-icons">
                    <!-- Heading -->
                    <header class="g-mb-60">
                        <div class="u-heading-v6-2 text-uppercase">
                            <h2 class="h4 u-heading-v6__title g-font-weight-300">Classic Header</h2>
                        </div>

                        <div class="g-pl-90">
                            <p>Classic Header has a variety of design options, types of positioning, types of change
                                when scrolling, several designs for mobile devices. You can combine the settings of
                                headers the way you want.</p>
                        </div>
                    </header>
                    <!-- End Heading -->

                    <!-- Classic Designs -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Classic Designs</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- White BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">White BG</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/design/bg-white"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End White BG -->

                                <!-- Dark BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Dark BG</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/design/bg-dark"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Dark BG -->

                                <!-- Primary BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Primary BG</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/design/bg-primary"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Primary BG -->

                                <!-- Gradient BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Gradient BG</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/design/bg-gradient"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Gradient BG -->

                                <!-- Transparent BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Transparent BG</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/design/bg-transparent" target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Transparent BG -->

                                <!-- SemiTransparent white BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">SemiTransparent white BG</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/design/bg-semitransparent-white"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End SemiTransparent white BG -->

                                <!-- SemiTransparent black BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">SemiTransparent black BG</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/design/bg-semitransparent-dark"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End SemiTransparent black BG -->

                                <!-- Bordered BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Bordered BG</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/design/bordered"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Bordered BG -->
                            </div>
                        </div>
                    </div>
                    <!-- End Classic Designs -->

                    <hr class="g-brd-gray-light-v4 g-pt-10 g-mb-60">

                    <!-- Floating Header Designs -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Floating Header Designs</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- White BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">White BG</h3>
                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/floating/bg-white"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End White BG -->

                                <!-- Dark BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Dark BG</h3>
                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/floating/bg-dark"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Dark BG -->

                                <!-- Primary BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Primary BG</h3>
                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/floating/bg-primary"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Primary BG -->

                                <!-- Gradient BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Gradient BG</h3>
                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/floating/bg-gradient"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Gradient BG -->
                            </div>
                        </div>
                    </div>
                    <!-- End Floating Header Designs -->

                    <hr class="g-brd-gray-light-v4 g-pt-10 g-mb-60">

                    <!-- Splitted Header Designs -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Splitted Header Designs</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- White BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">White BG</h3>
                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/splitted/bg-white"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End White BG -->

                                <!-- Dark BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Dark BG</h3>
                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/splitted/bg-dark"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Dark BG -->

                                <!-- Primary BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Primary BG</h3>
                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/splitted/bg-primary"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Primary BG -->

                                <!-- Gradient BG -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Gradient BG</h3>
                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/splitted/bg-gradient"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Gradient BG -->
                            </div>
                        </div>
                    </div>
                    <!-- End Splitted Header Designs -->

                    <hr class="g-brd-gray-light-v4 g-pt-10 g-mb-60">

                    <!-- Header Components -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Header Components</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- Search bar -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Search bar</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/components/search"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Search bar -->

                                <!-- Basket -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Basket</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/components/basket"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Basket -->

                                <!-- Languages -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Languages</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/components/langs"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Languages -->
                            </div>
                        </div>
                    </div>
                    <!-- End Header Components -->

                    <hr class="g-brd-gray-light-v4 g-pt-10 g-mb-60">

                    <!-- Nav Styles -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Nav Styles</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- Nav Styles - 1 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Nav Styles - 1</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/nav/nav-1"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Nav Styles - 1 -->

                                <!-- Nav Styles - 2 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Nav Styles - 2</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/nav/nav-2"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Nav Styles - 2 -->

                                <!-- Nav Styles - 3 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Nav Styles - 3</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/nav/nav-3"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Nav Styles - 3 -->

                                <!-- Nav Styles - 4 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Nav Styles - 4</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/nav/nav-4"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Nav Styles - 4 -->

                                <!-- Nav Styles - 5 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Nav Styles - 5</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/nav/nav-5"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Nav Styles - 5 -->

                                <!-- Nav Styles - 6 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Nav Styles - 6</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/nav/nav-6"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Nav Styles - 6 -->

                                <!-- Nav Styles - 7 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Nav Styles - 7</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/nav/nav-7"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Nav Styles - 7 -->

                                <!-- Nav Styles - 8 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Nav Styles - 8</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/nav/nav-8"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Nav Styles - 8 -->
                            </div>
                        </div>
                    </div>
                    <!-- End Nav Styles -->

                    <hr class="g-brd-gray-light-v4 g-pt-10 g-mb-60">

                    <!-- Full Width -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Full Width</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- Splitted Header -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <!-- <h3 class="h5 g-font-weight-300 g-mb-15">Full Width</h3> -->

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/fullwidth/full-width"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Splitted Header -->
                            </div>
                        </div>
                    </div>
                    <!-- End Full Width -->

                    <hr class="g-brd-gray-light-v4 g-pt-10 g-mb-60">

                    <!-- Alignments -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Alignments</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- Left -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Left</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/alignments/left"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Left -->

                                <!-- Center -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Center</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/alignments/center"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Center -->

                                <!-- Right -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Right</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/alignments/right"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Right -->
                            </div>
                        </div>
                    </div>
                    <!-- End Alignments -->

                    <hr class="g-brd-gray-light-v4 g-pt-10 g-mb-60">

                    <!-- TopBar -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">TopBar</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- TopBar - 1 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">TopBar - 1</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/topbar/topbar-1"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End TopBar - 1 -->

                                <!-- TopBar - 2 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">TopBar - 2</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/topbar/topbar-2"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End TopBar - 2 -->

                                <!-- TopBar - 3 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">TopBar - 3</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/topbar/topbar-3"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End TopBar - 3 -->

                                <!-- TopBar - 4 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">TopBar - 4</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/topbar/topbar-4"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End TopBar - 4 -->

                                <!-- TopBar - 5 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">TopBar - 5</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/topbar/topbar-5"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End TopBar - 5 -->

                                <!-- TopBar - 6 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">TopBar - 6</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/topbar/topbar-6"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End TopBar - 6 -->

                                <!-- TopBar - 7 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">TopBar - 7</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/topbar/topbar-7"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End TopBar - 7 -->

                                <!-- TopBar - 8 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">TopBar - 8</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/topbar/topbar-8"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End TopBar - 8 -->
                            </div>
                        </div>
                    </div>
                    <!-- End TopBar -->

                    <hr class="g-brd-gray-light-v4 g-pt-10 g-mb-60">

                    <!-- Positions -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Positions</h3>
                            <!-- <p>At the moment, there are 6 different types of positions for the Classic Header.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- Static -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Static</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/position/static"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Static -->

                                <!-- Absolute. Top. -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Absolute. Top.</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/position/absolute-top" target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Absolute. Top. -->

                                <!-- Absolute. Bottom. -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Absolute. Bottom.</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/position/absolute-bottom" target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Absolute. Bottom. -->

                                <!-- Absolute. 2-nd screen. -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Absolute. 2-nd Screen.</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/position/absolute-2screen"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Absolute. 2-nd screen. -->

                                <!-- Sticky. Top. -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Sticky. Top.</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/position/sticky-top"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Sticky. Top. -->

                                <!-- Sticky. Bottom. -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Sticky. Bottom.</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/position/sticky-bottom" target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Sticky. Bottom. -->
                            </div>
                        </div>
                    </div>
                    <!-- End Positions -->

                    <hr class="g-brd-gray-light-v4 g-pt-10 g-mb-60">

                    <!-- On Scroll Behaviors -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">On Scroll Behaviors</h3>
                            <!-- <p>Unify has 5 types of "On Scroll Behaviors". You can combine different types of the behaviors.</p> -->
                            <!--<ul class="list-unstyled">
              <li class="g-mb-10">– show hidden header in N px (actual for static header or header with absolute position on the top);</li>
              <li class="g-mb-10">– change appearance: you can change background color, padding etc;</li>
              <li class="g-mb-10">– change logo;</li>
              <li class="g-mb-10">– hide top bar.</li>
            </ul>-->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- Show/hide header -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Show/hide header</h3>

                                    <a class="btn u-btn-primary" href="unify/main/pages/headers/behavior/behavior"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Show/hide header -->

                                <!-- Change logo -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Change logo</h3>

                                    <a class="btn u-btn-primary" href="unify/main/pages/headers/behavior/behavior"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Change logo -->

                                <!-- Change appearance -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Change appearance</h3>

                                    <a class="btn u-btn-primary" href="unify/main/pages/headers/behavior/behavior"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Change appearance -->

                                <!-- Toggle Header -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Toggle Header</h3>

                                    <a class="btn u-btn-primary"
                                        href="unify/main/pages/headers/behavior/behavior-toggle-header"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Toggle Header -->

                                <!-- Hide Top Bar -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Hide Top Bar</h3>

                                    <a class="btn u-btn-primary"
                                        href="unify/main/pages/headers/behavior/behavior-hide-top-bar"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Hide Top Bar -->
                            </div>
                        </div>
                    </div>
                    <!-- End On Scroll Behaviors -->

                    <hr class="g-brd-gray-light-v4 g-pt-10 g-mb-60">

                    <!-- Navigation's mobile behavior -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Navigation's mobile behavior</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- Default -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Default (top)</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/mobile/top"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Default -->

                                <!-- Push (sidebar) -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Push (sidebar)</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/mobile/sidebar-push"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Push (sidebar) -->

                                <!-- Overlay (sidebar) -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Overlay (sidebar)</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/mobile/sidebar-overlay" target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Overlay (sidebar) -->
                            </div>
                        </div>
                    </div>
                    <!-- End Navigation's mobile behavior -->

                    <hr class="g-brd-gray-light-v4 g-pt-10 g-mb-60">

                    <!-- Submenu & Megamenu-->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Submenu &amp;&nbsp;Megamenu</h3>
                            <!-- <p>Unify has 3 way to show submenu: bootstrap method, onhover method &amp;&nbsp;onclick method.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- Bootstrap Method -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Submenu<br> (Bootstrap Method)</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/submenu/bootstrap"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Bootstrap Method -->

                                <!-- Onhover Method -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Submenu<br> (Onhover Method)</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/submenu/onhover"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Onhover Method -->

                                <!-- Onclick Method -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Submenu<br> (Onclick Method)</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/submenu/onclick"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Onclick Method -->

                                <!-- Inline Submenu -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Inline<br> Submenu</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/submenu/inline"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Inline Submenu -->

                                <!-- Megamenu (2 column) -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Megamenu<br> (2 column)</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/megamenu/2column"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Megamenu (2 column) -->

                                <!-- Megamenu (3 column) -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Megamenu<br> (3 column)</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/megamenu/3column"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Megamenu (3 column) -->

                                <!-- Megamenu (4 column) -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Megamenu<br> (4 column)</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/megamenu/4column"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Megamenu (4 column) -->

                                <!-- Megamenu (5 column) -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Megamenu<br> (5 column)</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/megamenu/5column"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Megamenu (5 column) -->

                                <!-- Megamenu with horizontal tab -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Megamenu<br> with horizontal tab</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/megamenu/tabs-horizontal" target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Megamenu with horizontal tab -->

                                <!-- Megamenu with vertical tab -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Megamenu<br> with vertical tab</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/megamenu/tabs-vertical" target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Megamenu with vertical tab -->

                                <!-- Megamenu with Contact Form -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Megamenu<br> with Contact Form</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/megamenu/contact-form" target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Megamenu with Contact Form -->

                                <!-- Megamenu with Contact Form - 2 -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Megamenu<br> with Contact Form - 2</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/megamenu/contact-form-2" target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Megamenu with Contact Form - 2 -->

                                <!-- Megamenu with Login Form -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Megamenu<br> with Login Form</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/megamenu/login-form"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Megamenu with Login Form -->

                                <!-- Megamenu with Map & Form -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Megamenu<br> with Map &amp; Form</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/megamenu/map-form"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Megamenu with Map & Form -->

                                <!-- Megamenu with Map -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Megamenu<br> with Map</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/megamenu/map"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Megamenu with Map -->

                                <!-- Megamenu with News Items -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Megamenu<br> with News Items</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/megamenu/news"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Megamenu with News Items -->

                                <!-- Megamenu with Products -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Megamenu<br> with Products</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/megamenu/products"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Megamenu with Products -->
                            </div>
                        </div>
                    </div>
                    <!-- End Submenu & Megamenu -->

                    <hr class="g-brd-gray-light-v4 g-pt-10 g-mb-60">

                    <!-- One Page Scrolling-->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">One Page Navigation</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- One Page Navigation -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/onepagescrolling/one-page-scrolling"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End One Page Navigation -->
                            </div>
                        </div>
                    </div>
                    <!-- End One Page Scrolling -->
                </section>
                <!-- End Classic Header -->

                <hr class="g-brd-gray-light-v4 g-my-60">

                <!-- Sidebar Navigation -->
                <section id="plain-icons">
                    <!-- Heading -->
                    <header class="g-mb-60">
                        <div class="u-heading-v6-2 text-uppercase">
                            <h2 class="h4 u-heading-v6__title g-font-weight-300">Sidebar Navigation</h2>
                        </div>

                        <div class="g-pl-90">
                            <p>Unify has 3 basic type of a Sidebar Navigation: Static Sidebar Navigation,
                                Dynamic-Overlay Sidebar Navigation &amp; Dynamic-Push Sidebar Navigation. Each type has
                                2 type of a position (left or right). By choosing g-classes You can change
                                a Sidebar Navigation Design the way you wish.</p>
                        </div>
                    </header>
                    <!-- End Heading -->

                    <!-- Static Sidebar Navigation -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Static Sidebar Navigation</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- Left Side -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Left Side</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/sidebar/static-left-light"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Left Side -->

                                <!-- Right Side -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Right Side</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/sidebar/static-right-light"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Right Side -->

                                <!-- Right Side -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Right Side</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/sidebar/static-left-dark" target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Right Side -->
                            </div>
                        </div>
                    </div>
                    <!-- End Static Sidebar Navigation -->

                    <hr class="g-brd-gray-light-v4 g-pt-10 g-mb-60">

                    <!-- Overlay Sidebar Navigation -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Overlay Sidebar Navigation</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- Left Side -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Left Side</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/sidebar/overlay-left-light"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Left Side -->

                                <!-- Right Side -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Right Side</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/sidebar/overlay-right-light"
                                        target="_blank">View Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Right Side -->
                            </div>
                        </div>
                    </div>
                    <!-- End Overlay Sidebar Navigation -->

                    <hr class="g-brd-gray-light-v4 g-pt-10 g-mb-60">

                    <!-- Push Sidebar Navigation -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Push Sidebar Navigation</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- Left Side -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Left Side</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/sidebar/push-left-light" target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Left Side -->

                                <!-- Right Side -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Right Side</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/sidebar/push-right-light" target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Right Side -->
                            </div>
                        </div>
                    </div>
                    <!-- End Push Sidebar Navigation -->
                </section>
                <!-- End Sidebar Navigation -->

                <hr class="g-brd-gray-light-v4 g-my-60">

                <!-- Fullscreen Navigation & Smart Navigation -->
                <section id="plain-icons">
                    <!-- Heading -->
                    <header class="g-mb-60">
                        <div class="u-heading-v6-2 text-uppercase">
                            <h2 class="h4 u-heading-v6__title g-font-weight-300">Fullscreen Navigation &amp; Smart
                                Navigation</h2>
                        </div>

                        <div class="g-pl-90">
                            <p>Unify has number of Fullscreen and Smart Navigation. We tried to make everything as
                                simple as possible. Just choose any examples you like and implement it. If there any
                                questions please feel free to contact and our team will answer as soon
                                as possible.</p>
                        </div>
                    </header>
                    <!-- End Heading -->

                    <!-- Fullscreen Navigation -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Fullscreen Navigation</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- Top-Right -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Top-Right</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/fullscreen/top-right"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Top-Right -->

                                <!-- Bottom-Right -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Bottom-Right</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/fullscreen/bottom-right" target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Bottom-Right -->

                                <!-- Bottom-Left -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Bottom-Left</h3>

                                    <a class="btn u-btn-primary"
                                        href="/unify/main/pages/headers/fullscreen/bottom-left" target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Bottom-Left -->
                            </div>
                        </div>
                    </div>
                    <!-- End Fullscreen Navigation -->

                    <hr class="g-brd-gray-light-v4 g-my-60">

                    <!-- Smart Navigation -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Smart Navigation</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- Top-Right -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Top-Right</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/smart/top-right"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Top-Right -->

                                <!-- Bottom-Right -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Bottom-Right</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/smart/bottom-right"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Bottom-Right -->

                                <!-- Bottom-Left -->
                                <div class="col-xs-6 col-md-4 col-lg-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Bottom-Left</h3>

                                    <a class="btn u-btn-primary" href="/unify/main/pages/headers/smart/bottom-left"
                                        target="_blank">View
                                        Header</a>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Bottom-Left -->
                            </div>
                        </div>
                    </div>
                    <!-- End Smart Navigation -->
                </section>
                <!-- End Fullscreen Navigation & Smart Navigation -->

                <hr class="g-brd-gray-light-v4 g-pt-10 g-mb-60">

                <!-- Tasty CSS-animated hamburgers -->
                <section id="plain-icons">
                    <!-- Heading -->
                    <header class="g-mb-60">
                        <div class="u-heading-v6-2 text-uppercase">
                            <h2 class="h4 u-heading-v6__title g-font-weight-300">Tasty CSS-animated hamburgers</h2>
                        </div>

                        <div class="g-pl-90">
                            <p>We also thought that the way user clicks the and hamburger icon behaves also very
                                important and added 9 different type of hamburger animations. Choose any type you like.
                            </p>
                        </div>
                    </header>
                    <!-- End Heading -->

                    <!-- Types -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300">Types</h3>
                            <!-- <p>In hac habitasse platea dictumst urabitur hendrerit.</p> -->
                        </div>

                        <div class="col-md-9">
                            <div class="row">
                                <!-- Slider -->
                                <div class="col-sm-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Slider</h3>
                                    <div class="js-hamburger hamburger hamburger--slider g-pa-0">
                                        <div class="hamburger-box g-opacity-0_3">
                                            <div class="hamburger-inner"></div>
                                        </div>
                                    </div>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Slider -->

                                <!-- Squeeze -->
                                <div class="col-sm-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Squeeze</h3>
                                    <div class="js-hamburger hamburger hamburger--squeeze g-pa-0">
                                        <div class="hamburger-box g-opacity-0_3">
                                            <div class="hamburger-inner"></div>
                                        </div>
                                    </div>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Squeeze -->

                                <!-- Arrow -->
                                <div class="col-sm-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Arrow</h3>
                                    <div class="js-hamburger hamburger hamburger--arrow g-pa-0">
                                        <div class="hamburger-box g-opacity-0_3">
                                            <div class="hamburger-inner"></div>
                                        </div>
                                    </div>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Arrow -->

                                <!-- Arrow Alt -->
                                <div class="col-sm-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Arrow Alt</h3>
                                    <div class="js-hamburger hamburger hamburger--arrowalt g-pa-0">
                                        <div class="hamburger-box g-opacity-0_3">
                                            <div class="hamburger-inner"></div>
                                        </div>
                                    </div>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Arrow Alt -->

                                <!-- Spin -->
                                <div class="col-sm-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Spin</h3>
                                    <div class="js-hamburger hamburger hamburger--spin g-pa-0">
                                        <div class="hamburger-box g-opacity-0_3">
                                            <div class="hamburger-inner"></div>
                                        </div>
                                    </div>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Spin -->

                                <!-- Elastic -->
                                <div class="col-sm-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Elastic</h3>
                                    <div class="js-hamburger hamburger hamburger--elastic g-pa-0">
                                        <div class="hamburger-box g-opacity-0_3">
                                            <div class="hamburger-inner"></div>
                                        </div>
                                    </div>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Elastic -->

                                <!-- Collapse -->
                                <div class="col-sm-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Collapse</h3>
                                    <div class="js-hamburger hamburger hamburger--collapse g-pa-0">
                                        <div class="hamburger-box g-opacity-0_3">
                                            <div class="hamburger-inner"></div>
                                        </div>
                                    </div>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Collapse -->

                                <!-- Vortex -->
                                <div class="col-sm-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Vortex</h3>
                                    <div class="js-hamburger hamburger hamburger--vortex g-pa-0">
                                        <div class="hamburger-box g-opacity-0_3">
                                            <div class="hamburger-inner"></div>
                                        </div>
                                    </div>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Vortex -->

                                <!-- Boring -->
                                <div class="col-sm-3 g-mb-50">
                                    <h3 class="h5 g-font-weight-300 g-mb-15">Boring</h3>
                                    <div class="js-hamburger hamburger hamburger--boring g-pa-0">
                                        <div class="hamburger-box g-opacity-0_3">
                                            <div class="hamburger-inner"></div>
                                        </div>
                                    </div>

                                    <!-- Show Code
                <div class="g-font-size-12 g-font-code g-pt-20">
                  <a class="js-show-code g-color-main g-text-underline--none--hover" href="#!">
                    <i class="fa fa-code"></i> Show code
                  </a>
                </div>
                End Show Code -->
                                </div>
                                <!-- End Boring -->
                            </div>
                        </div>
                    </div>
                    <!-- End Types -->
                </section>
                <!-- End Tasty CSS-animated hamburgers -->
            </div>
        </section>

        <!-- Call To Action -->
        <section class="g-bg-primary g-color-white g-pa-30"
            style="background-image: url(assets/img/bg/pattern5.png);">
            <div class="d-md-flex justify-content-md-center text-center">
                <div class="align-self-md-center">
                    <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">We offer best in class service
                        for your needs</p>
                </div>
                <div class="align-self-md-center">
                    <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12"
                        target="_blank"
                        href="https://wrapbootstrap.com/theme/unify-responsive-website-template-WB0412697?ref=htmlstream">Purchase
                        Now</a>
                </div>
            </div>
        </section>
        <!-- End Call To Action -->

        <!-- Footer -->
        <div id="contacts-section" class="g-bg-black-opacity-0_9 g-color-white-opacity-0_8 g-py-60">
            <div class="container">
                <div class="row">
                    <!-- Footer Content -->
                    <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
                        <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                            <h2 class="u-heading-v2__title h6 text-uppercase mb-0">About Us</h2>
                        </div>

                        <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero
                            tincidunt sodales.</p>
                    </div>
                    <!-- End Footer Content -->

                    <!-- Footer Content -->
                    <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
                        <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                            <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Latest Posts</h2>
                        </div>

                        <article>
                            <h3 class="h6 g-mb-2">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Incredible
                                    template</a>
                            </h3>
                            <div class="small g-color-white-opacity-0_6">May 8, 2017</div>
                        </article>

                        <hr class="g-brd-white-opacity-0_1 g-my-10">

                        <article>
                            <h3 class="h6 g-mb-2">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">New
                                    features</a>
                            </h3>
                            <div class="small g-color-white-opacity-0_6">June 23, 2017</div>
                        </article>

                        <hr class="g-brd-white-opacity-0_1 g-my-10">

                        <article>
                            <h3 class="h6 g-mb-2">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">New terms
                                    and conditions</a>
                            </h3>
                            <div class="small g-color-white-opacity-0_6">September 15, 2017</div>
                        </article>
                    </div>
                    <!-- End Footer Content -->

                    <!-- Footer Content -->
                    <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
                        <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                            <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Useful Links</h2>
                        </div>

                        <nav class="text-uppercase1">
                            <ul class="list-unstyled g-mt-minus-10 mb-0">
                                <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                                    <h4 class="h6 g-pr-20 mb-0">
                                        <a class="g-color-white-opacity-0_8 g-color-white--hover"
                                            href="#!">About Us</a>
                                        <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                                    </h4>
                                </li>
                                <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                                    <h4 class="h6 g-pr-20 mb-0">
                                        <a class="g-color-white-opacity-0_8 g-color-white--hover"
                                            href="#!">Portfolio</a>
                                        <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                                    </h4>
                                </li>
                                <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                                    <h4 class="h6 g-pr-20 mb-0">
                                        <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Our
                                            Services</a>
                                        <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                                    </h4>
                                </li>
                                <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                                    <h4 class="h6 g-pr-20 mb-0">
                                        <a class="g-color-white-opacity-0_8 g-color-white--hover"
                                            href="#!">Latest Jobs</a>
                                        <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                                    </h4>
                                </li>
                                <li class="g-pos-rel g-py-10">
                                    <h4 class="h6 g-pr-20 mb-0">
                                        <a class="g-color-white-opacity-0_8 g-color-white--hover"
                                            href="#!">Contact Us</a>
                                        <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                                    </h4>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- End Footer Content -->

                    <!-- Footer Content -->
                    <div class="col-lg-3 col-md-6">
                        <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                            <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Our Contacts</h2>
                        </div>

                        <address class="g-bg-no-repeat g-font-size-12 mb-0"
                            style="background-image: url(assets/img/maps/map2.png);">
                            <!-- Location -->
                            <div class="d-flex g-mb-20">
                                <div class="g-mr-10">
                                    <span
                                        class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                </div>
                                <p class="mb-0">795 Folsom Ave, Suite 600, <br> San Francisco, CA 94107 795</p>
                            </div>
                            <!-- End Location -->

                            <!-- Phone -->
                            <div class="d-flex g-mb-20">
                                <div class="g-mr-10">
                                    <span
                                        class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                </div>
                                <p class="mb-0">(+123) 456 7890 <br> (+123) 456 7891</p>
                            </div>
                            <!-- End Phone -->

                            <!-- Email and Website -->
                            <div class="d-flex g-mb-20">
                                <div class="g-mr-10">
                                    <span
                                        class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                                        <i class="fa fa-globe"></i>
                                    </span>
                                </div>
                                <p class="mb-0">
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover"
                                        href="mailto:info@htmlstream.com">info@htmlstream.com</a>
                                    <br>
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover"
                                        href="#!">wwwstream.com</a>
                                </p>
                            </div>
                            <!-- End Email and Website -->
                        </address>
                    </div>
                    <!-- End Footer Content -->
                </div>
            </div>
        </div>
        <!-- End Footer -->

        <!-- Copyright Footer -->
        <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
                        <div class="d-lg-flex">
                            <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2017 © All Rights
                                Reserved.</small>
                            <ul class="u-list-inline">
                                <li class="list-inline-item">
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Privacy
                                        Policy</a>
                                </li>
                                <li class="list-inline-item">
                                    <span>|</span>
                                </li>
                                <li class="list-inline-item">
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Terms
                                        of Use</a>
                                </li>
                                <li class="list-inline-item">
                                    <span>|</span>
                                </li>
                                <li class="list-inline-item">
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover"
                                        href="#!">License</a>
                                </li>
                                <li class="list-inline-item">
                                    <span>|</span>
                                </li>
                                <li class="list-inline-item">
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover"
                                        href="#!">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 align-self-center">
                        <ul class="list-inline text-center text-md-right mb-0">
                            <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top"
                                title="Facebook">
                                <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top"
                                title="Skype">
                                <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top"
                                title="Linkedin">
                                <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top"
                                title="Pinterest">
                                <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top"
                                title="Twitter">
                                <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top"
                                title="Dribbble">
                                <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Copyright Footer -->
        <a class="js-go-to u-go-to-v1" href="#!" data-type="fixed"
            data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400"
            data-compensation="#js-header" data-show-effect="zoomIn">
            <i class="hs-icon hs-icon-arrow-top"></i>
        </a>
    </main>

    <div id="modal" class="text-left modal-demo g-max-width-600 g-bg-white g-color-black g-pa-20"
        style="display: none;"></div>

    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>


    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
    <script src="assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- jQuery UI Core -->
    <script src="assets/vendor/jquery-ui/jquery-ui.core.min.js"></script>


    <!-- jQuery UI Helpers -->
    <script src="assets/vendor/jquery-ui/ui/widgets/menu.js"></script>
    <script src="assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>
    <!-- End jQuery UI Helpers -->

    <!-- jQuery UI Widgets -->
    <script src="assets/vendor/jquery-ui/ui/widgets/autocomplete.js"></script>
    <!-- End jQuery UI Widgets -->

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.header-side.js"></script>
    <script src="assets/js/components/hs.tabs.js"></script>
    <script src="assets/style-switcher/vendor/cookiejs/jquery.cookie.js"></script>
    <script src="assets/js/helpers/hs.shortcode-filter.js"></script>
    <script src="assets/js/components/hs.cubeportfolio.js"></script>
    <script src="assets/js/components/hs.autocomplete-local-search.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>
    <script src="assets/js/components/hs.scrollbar.js"></script>

    <!-- JS Custom -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of tabs
            $.HSCore.components.HSTabs.init('[data-tabs-mobile-type]');
        });

        $(window).on('load', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');
            $.HSCore.components.HSHeaderSide.init($('#sideNav'));

            // initialization of autocomplet
            $.HSCore.components.HSLocalSearchAutocomplete.init('#u-sidebar-navigation__search-autocomplete');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });

            // initialization of cubeportfolio
            $.HSCore.components.HSCubeportfolio.init('.cbp');
        });

        $(window).on('resize', function() {
            setTimeout(function() {
                $.HSCore.components.HSTabs.init('[data-tabs-mobile-type]');
            }, 200);
        });
    </script>
</body>

</html>
