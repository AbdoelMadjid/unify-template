<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>Promo Blocks | Unify - Responsive Website Template</title>

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
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/offcanvas.css">
    <link rel="stylesheet" href="assets/vendor/jquery-ui/themes/base/jquery-ui.min.css">

    <!-- Show / Copy Code -->
    <link rel="stylesheet" href="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/vendor/prism/themes/prism.css">
    <link rel="stylesheet" href="assets/vendor/custombox/custombox.min.css">


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
                            <a href="unify-main/shortcodes/shortcode-base-buttons"
                                class="nav-link ">Buttons</a>
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
                            <a href="unify-main/shortcodes/shortcode-base-gallery-grid"
                                class="nav-link ">Gallery Grid</a>
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
                            <a href="unify-main/shortcodes/headers/index" class="nav-link ">Headers</a>
                        </li>
                        <li class="js-shortcode-filter__item nav-item blocks">
                            <a href="unify-main/shortcodes/promo/index" class="nav-link active">Promo</a>
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

                    <button class="btn u-sidebar-navigation__closer" id="sideNav-toggler-closer"
                        aria-haspopup="true" aria-expanded="false" aria-controls="sideNav"
                        aria-label="Toggle Header" data-target="#sideNav">
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
                <h1 class="g-font-weight-300 g-letter-spacing-1 g-mb-15">Promo Blocks</h1>

                <div class="lead g-font-weight-400 g-line-height-2 g-letter-spacing-0_5">
                    <p class="mb-0">Block Components are usually collection of Base Components with/without the
                        Global Classes.
                        <br>These Components can be easily used and customized in any pages. Build websites like a Lego!
                    </p>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- Promo Blocks -->
        <section class="container g-py-100">
            <!-- Promo Blocks -->
            <div class="row g-mx-minus-25">
                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30" src="promo/assets/img-temp/600x295/img1.jpg"
                            alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-1">Promo Demo 1</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-1"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30" src="promo/assets/img-temp/600x295/img2.jpg"
                            alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-2">Promo Demo 2</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-2"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30" src="promo/assets/img-temp/600x295/img3.jpg"
                            alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-3">Promo Demo 3</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-3"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img4.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-4">Promo Demo 4</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-4"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img5.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-5">Promo Demo 5</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-5"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img6.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-6">Promo Demo 6</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-6"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img7.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-7">Promo Demo 7</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-7"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img8.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-8">Promo Demo 8</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-8"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img9.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-9">Promo Demo 9</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-9"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img10.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-10">Promo Demo 10</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-10"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img11.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-11">Promo Demo 11</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-11"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img12.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-12">Promo Demo 12</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-12"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img13.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-13">Promo Demo 13</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-13"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img14.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-14">Real Promo Demo 14</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-14"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img15.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-15">Promo Demo 15</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-15"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img16.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-16">Promo Demo 16</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-16"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img17.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-17">Promo Demo 17</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-17"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img18.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-18">Promo Demo 18</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-18"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img19.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-19">Promo Demo 19</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-19"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img20.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-20">Promo Demo 20</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-20"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img21.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-21">Promo Demo 21</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-21"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img22.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-22">Promo Demo 22</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-22"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img23.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-23">Promo Demo 23</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-23"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img24.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-24">Promo Demo 24</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-24"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img25.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-25">Promo Demo 25</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-25"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img26.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-26">Promo Demo 26</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-26"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img27.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-27">Promo Demo 27</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-27"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img28.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-28">Promo Demo 28</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-28"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img29.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-29">Promo Demo 29</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-29"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img30.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-30">Promo Demo 30</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-30"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img31.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-31">Promo Demo 31</a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-31"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img32.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-32">
                                Promo Demo 32 <span
                                    class="u-label u-label--sm g-bg-lightred text-uppercase rounded g-ml-10">New</span>
                            </a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-32"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img33.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-33">
                                Promo Demo 33 <span
                                    class="u-label u-label--sm g-bg-lightred text-uppercase rounded g-ml-10">New</span>
                            </a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-33"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img34.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-34">
                                Promo Demo 34 <span
                                    class="u-label u-label--sm g-bg-lightred text-uppercase rounded g-ml-10">New</span>
                            </a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-34"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img35.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-35">
                                Promo Demo 35 <span
                                    class="u-label u-label--sm g-bg-lightred text-uppercase rounded g-ml-10">New</span>
                            </a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-35"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img36.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-36">
                                Promo Demo 36 <span
                                    class="u-label u-label--sm g-bg-lightred text-uppercase rounded g-ml-10">New</span>
                            </a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-36"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img37.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-37">
                                Promo Demo 37 <span
                                    class="u-label u-label--sm g-bg-lightred text-uppercase rounded g-ml-10">New</span>
                            </a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-37"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img38.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-38">
                                Promo Demo 38 <span
                                    class="u-label u-label--sm g-bg-lightred text-uppercase rounded g-ml-10">New</span>
                            </a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-38"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img39.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-39">
                                Promo Demo 39 <span
                                    class="u-label u-label--sm g-bg-lightred text-uppercase rounded g-ml-10">New</span>
                            </a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-39"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img40.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-40">
                                Promo Demo 40 <span
                                    class="u-label u-label--sm g-bg-lightred text-uppercase rounded g-ml-10">New</span>
                            </a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-40"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img41.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-41">
                                Promo Demo 41 <span
                                    class="u-label u-label--sm g-bg-lightred text-uppercase rounded g-ml-10">New</span>
                            </a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-41"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img42.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-42">
                                Promo Demo 42 <span
                                    class="u-label u-label--sm g-bg-lightred text-uppercase rounded g-ml-10">New</span>
                            </a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-42"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img43.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-43">
                                Promo Demo 43 <span
                                    class="u-label u-label--sm g-bg-lightred text-uppercase rounded g-ml-10">New</span>
                            </a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-43"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>

                <div class="col-sm-6 col-lg-3 g-px-25 g-mb-70">
                    <!-- Promo Blocks -->
                    <div class="text-center u-block-hover">
                        <img class="img-fluid u-shadow-v21 rounded g-mb-30"
                            src="promo/assets/img-temp/600x295/img44.jpg" alt="Image Description">
                        <h3 class="h6 g-color-black g-font-weight-600 g-font-size-13 text-uppercase">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" target="_blank"
                                href="/unify/main/features/promo/demo-44">
                                Promo Demo 44 <span
                                    class="u-label u-label--sm g-bg-lightred text-uppercase rounded g-ml-10">New</span>
                            </a>
                        </h3>
                        <a class="u-link-v2" target="_blank" href="/unify/main/features/promo/demo-44"></a>
                    </div>
                    <!-- End Promo Blocks -->
                </div>
            </div>
            <!-- End Promo Blocks -->
        </section>
        <!-- End Promo Blocks -->

        <!-- Call To Action -->
        <section class="g-bg-primary g-color-white g-pa-30"
            style="background-image: url(assets/img/bg/pattern5.png);">
            <div class="d-md-flex justify-content-md-center text-center">
                <div class="align-self-md-center">
                    <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">We offer best in class service
                        for your needs</p>
                </div>
                <div class="align-self-md-center">
                    <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" target="_blank"
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
                                        <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">About
                                            Us</a>
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

    <div id="modalMarkup" class="text-left modal-demo g-width-95x g-height-95x g-bg-white g-color-black g-pa-20"
        style="display: none;"></div>


    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>


    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
    <script src="assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>

    <!-- jQuery UI Core -->
    <script src="assets/vendor/jquery-ui/jquery-ui.core.min.js"></script>


    <!-- jQuery UI Helpers -->
    <script src="assets/vendor/jquery-ui/ui/widgets/menu.js"></script>
    <script src="assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>

    <!-- jQuery UI Widgets -->
    <script src="assets/vendor/jquery-ui/ui/widgets/autocomplete.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.header-side.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>
    <script src="assets/style-switcher/vendor/cookiejs/jquery.cookie.js"></script>
    <script src="assets/js/helpers/hs.shortcode-filter.js"></script>
    <script src="assets/js/components/hs.autocomplete-local-search.js"></script>

    <!-- Show / Copy Code -->
    <script src="assets/vendor/clipboard/dist/clipboard.min.js"></script>
    <script src="assets/vendor/prism/prism.core.min.js"></script>

    <script src="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/custombox/custombox.min.js"></script>

    <script src="assets/js/components/hs.scrollbar.js"></script>
    <script src="assets/js/components/hs.modal-window.js"></script>
    <script src="assets/js/helpers/hs.modal-markup.js"></script>
    <script src="assets/js/components/hs.markup-copy.js"></script>
    <script src="assets/js/components/hs.tabs.js"></script>

    <script>
        $(document).on('ready', function() {
            $.HSCore.helpers.HSModalMarkup.init('.js-modal-markup');

            $.HSCore.components.HSMarkupCopy.init('.js-copy');
        });
    </script>

    <!-- JS Plugins Init. -->
    <script>
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
        });
    </script>
</body>

</html>
