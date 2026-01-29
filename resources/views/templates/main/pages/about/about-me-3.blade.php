<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>About Me 3 | | Unify - Responsive Website Template</title>

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
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
    <link rel="stylesheet" href="assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">

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

        <!-- Promo Block -->
        <section
            class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall"
            data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
            <!-- Parallax Image -->
            <div class="divimage dzsparallaxer--target w-100"
                style="height: 140%; background-image: url(assets/img-temp/1920x800/img4.jpg);"></div>
            <!-- End Parallax Image -->

            <!-- Promo Block Content -->
            <div class="container g-color-white g-py-200">
                <h3 class="g-font-size-40 text-uppercase mb-2">Anna Watson</h3>
                <p class="g-color-primary g-font-weight-300 g-font-size-25 text-uppercase">CEO, Director</p>
            </div>
            <!-- Promo Block Content -->
        </section>
        <!-- End Promo Block -->

        <!-- Section -->
        <section class="container g-pt-100 g-pb-70">
            <div class="row">
                <!-- Section Body -->
                <div class="col-lg-6 g-mb-30">
                    <div class="mb-4">
                        <h2 class="h4 text-uppercase mb-3">About <span class="g-color-primary">me</span></h2>
                        <div class="g-width-35 g-height-1 g-bg-primary"></div>
                    </div>
                    <p>I am an ambitious workaholic, but apart from that, pretty simple person. Whether it's branding,
                        print, UI + UX I've got you covered. I strive to figure out the right solutions for your look to
                        stand out amongst the rest.</p>
                    <p>As creatives, it's important that I strive to do work outside of obligation. This lets us stay
                        ahead of the curve for our clients and internal projects.</p>

                    <!-- Section Social Icons -->
                    <ul class="list-inline">
                        <li class="list-inline-item g-mx-4">
                            <a class="u-icon-v3 u-icon-size--xs g-color-gray-dark-v3 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle"
                                href="#!">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-4">
                            <a class="u-icon-v3 u-icon-size--xs g-color-gray-dark-v3 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle"
                                href="#!">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-4">
                            <a class="u-icon-v3 u-icon-size--xs g-color-gray-dark-v3 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle"
                                href="#!">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-4">
                            <a class="u-icon-v3 u-icon-size--xs g-color-gray-dark-v3 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle"
                                href="#!">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-4">
                            <a class="u-icon-v3 u-icon-size--xs g-color-gray-dark-v3 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle"
                                href="#!">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End Section Social Icons -->
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <h2 class="h4 text-uppercase mb-3">My <span class="g-color-primary">skills</span></h2>
                        <div class="g-width-35 g-height-1 g-bg-primary"></div>
                    </div>

                    <!-- Progress Bar v2 -->
                    <h4 class="h6 g-mb-5">Web Design - 80%</h4>
                    <div class="js-hr-progress-bar progress rounded-0 g-height-4 g-mb-30">
                        <div class="js-hr-progress-bar-indicator progress-bar" role="progressbar" style="width: 80%;"
                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Progress Bar v2 -->

                    <!-- Progress Bar v2 -->
                    <h4 class="h6 g-mb-5">PHP/WordPress - 76%</h4>
                    <div class="js-hr-progress-bar progress rounded-0 g-height-4 g-mb-30">
                        <div class="js-hr-progress-bar-indicator progress-bar" role="progressbar" style="width: 76%;"
                            aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Progress Bar v2 -->

                    <!-- Progress Bar v2 -->
                    <h4 class="h6 g-mb-5">jQuery - 80%</h4>
                    <div class="js-hr-progress-bar progress rounded-0 g-height-4">
                        <div class="js-hr-progress-bar-indicator progress-bar" role="progressbar" style="width: 80%;"
                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Progress Bar v2 -->
                </div>
                <!-- End Section Body -->
            </div>
        </section>
        <!-- End Section -->

        <!-- Testimonials v17 -->
        <section
            class="dzsparallaxer auto-init height-is-based-on-content use-loading g-bg-cover g-bg-black-opacity-0_5--after">
            <div class="divimage dzsparallaxer--target w-100"
                style="height: 140%; background-image: url(assets/img-temp/1920x800/img2.jpg);"></div>
            <div class="container g-z-index-1 g-py-120">
                <!-- Testimonials -->
                <div class="text-center g-px-100--lg">
                    <i class="d-block g-color-primary g-font-size-80 g-line-height-0_7 g-pos-rel g-top-20">&#8220;</i>
                    <blockquote class="g-color-white g-font-size-25 g-pt-40">Dear Htmlstream team, I just bought the
                        Unify template some weeks ago. The template is really nice and offers quite a large set of
                        options.</blockquote>
                </div>
                <!-- End Testimonials -->
            </div>
        </section>
        <!-- End Testimonials v17 -->

        <!-- Cubeportfolio -->
        <section class="container g-py-100">
            <div class="row justify-content-center g-mb-60">
                <div class="col-lg-7">
                    <!-- Heading -->
                    <div class="text-center">
                        <h2 class="h4 text-uppercase mb-3">Branding works</h2>
                        <div class="d-inline-block g-width-60 g-height-1 g-bg-black mb-2"></div>
                        <p class="mb-0">I am a creative person focusing on culture, luxury, editorial &amp; art.
                            Somewhere between sophistication and simplicity.</p>
                    </div>
                    <!-- End Heading -->
                </div>
            </div>

            <!-- Cubeportfolio Filter -->
            <ul id="filterControls" class="text-center u-filter-v1 g-mb-40">
                <li class="list-inline-item cbp-filter-item cbp-filter-item-active g-cursor-pointer g-transition-0_2"
                    data-filter="*">All</li>
                <li class="list-inline-item cbp-filter-item text-uppercase g-cursor-pointer g-transition-0_2"
                    data-filter=".js-illustration">Illustration</li>
                <li class="list-inline-item cbp-filter-item text-uppercase g-cursor-pointer g-transition-0_2"
                    data-filter=".js-design">Design</li>
                <li class="list-inline-item cbp-filter-item text-uppercase g-cursor-pointer g-transition-0_2"
                    data-filter=".js-graphic">Graphic</li>
                <li class="list-inline-item cbp-filter-item text-uppercase g-cursor-pointer g-transition-0_2"
                    data-filter=".js-logo">Logo</li>
            </ul>
            <!-- End Cubeportfolio Filter -->

            <!-- Cubeportfolio container -->
            <div class="cbp" data-controls="#filterControls">
                <div class="cbp-item js-logo">
                    <!-- Figure -->
                    <figure class="u-info-v1-4 g-overflow-hidden mb-0">
                        <!-- Figure Image -->
                        <img class="w-100 u-info-v1-4__item-regular g-transition-0_2"
                            src="assets/img-temp/400x270/img13.jpg" alt="Image Description">
                        <!-- End Figure Image-->

                        <a class="cbp-caption cbp-singlePageInline u-link-v2"
                            href="../ajax/projects/projects-1.html"></a>

                        <!-- Figure Caption -->
                        <figcaption
                            class="u-info-v1-4__item-hidden g-transition-0_2 g-bg-black g-color-white g-px-30 g-py-10">
                            <h4 class="h6 g-font-weight-500 mb-0">Kathy Reyes</h4>
                            <em class="d-block g-color-white-opacity-0_8 g-font-style-normal g-font-size-13">Logo</em>
                        </figcaption>
                        <!-- End Figure Caption-->
                    </figure>
                    <!-- End Figure -->
                </div>

                <div class="cbp-item js-logo">
                    <!-- Figure -->
                    <figure class="u-info-v1-4 g-overflow-hidden mb-0">
                        <!-- Figure Image -->
                        <img class="w-100 u-info-v1-4__item-regular g-transition-0_2"
                            src="assets/img-temp/400x270/img14.jpg" alt="Image Description">
                        <!-- End Figure Image-->

                        <a class="cbp-caption cbp-singlePageInline u-link-v2"
                            href="../ajax/projects/projects-2.html"></a>

                        <!-- Figure Caption -->
                        <figcaption
                            class="u-info-v1-4__item-hidden g-transition-0_2 g-bg-black g-color-white g-px-30 g-py-10">
                            <h4 class="h6 g-font-weight-500 mb-0">Kathy Reyes</h4>
                            <em class="d-block g-color-white-opacity-0_8 g-font-style-normal g-font-size-13">Logo</em>
                        </figcaption>
                        <!-- End Figure Caption-->
                    </figure>
                    <!-- End Figure -->
                </div>

                <div class="cbp-item js-illustration js-design">
                    <!-- Figure -->
                    <figure class="u-info-v1-4 g-overflow-hidden mb-0">
                        <!-- Figure Image -->
                        <img class="w-100 u-info-v1-4__item-regular g-transition-0_2"
                            src="assets/img-temp/400x270/img15.jpg" alt="Image Description">
                        <!-- End Figure Image-->

                        <a class="cbp-caption cbp-singlePageInline u-link-v2"
                            href="../ajax/projects/projects-3.html"></a>

                        <!-- Figure Caption -->
                        <figcaption
                            class="u-info-v1-4__item-hidden g-transition-0_2 g-bg-black g-color-white g-px-30 g-py-10">
                            <h4 class="h6 g-font-weight-500 mb-0">Kathy Reyes</h4>
                            <em
                                class="d-block g-color-white-opacity-0_8 g-font-style-normal g-font-size-13">Illustration</em>
                        </figcaption>
                        <!-- End Figure Caption-->
                    </figure>
                    <!-- End Figure -->
                </div>

                <div class="cbp-item js-design js-illustration">
                    <!-- Figure -->
                    <figure class="u-info-v1-4 g-overflow-hidden mb-0">
                        <!-- Figure Image -->
                        <img class="w-100 u-info-v1-4__item-regular g-transition-0_2"
                            src="assets/img-temp/400x270/img16.jpg" alt="Image Description">
                        <!-- End Figure Image-->

                        <a class="cbp-caption cbp-singlePageInline u-link-v2"
                            href="../ajax/projects/projects-4.html"></a>

                        <!-- Figure Caption -->
                        <figcaption
                            class="u-info-v1-4__item-hidden g-transition-0_2 g-bg-black g-color-white g-px-30 g-py-10">
                            <h4 class="h6 g-font-weight-500 mb-0">Kathy Reyes</h4>
                            <em
                                class="d-block g-color-white-opacity-0_8 g-font-style-normal g-font-size-13">Design</em>
                        </figcaption>
                        <!-- End Figure Caption-->
                    </figure>
                    <!-- End Figure -->
                </div>

                <div class="cbp-item js-design js-graphic">
                    <!-- Figure -->
                    <figure class="u-info-v1-4 g-overflow-hidden mb-0">
                        <!-- Figure Image -->
                        <img class="w-100 u-info-v1-4__item-regular g-transition-0_2"
                            src="assets/img-temp/400x270/img9.jpg" alt="Image Description">
                        <!-- End Figure Image-->

                        <a class="cbp-caption cbp-singlePageInline u-link-v2"
                            href="../ajax/projects/projects-5.html"></a>

                        <!-- Figure Caption -->
                        <figcaption
                            class="u-info-v1-4__item-hidden g-transition-0_2 g-bg-black g-color-white g-px-30 g-py-10">
                            <h4 class="h6 g-font-weight-500 mb-0">Kathy Reyes</h4>
                            <em
                                class="d-block g-color-white-opacity-0_8 g-font-style-normal g-font-size-13">Graphic</em>
                        </figcaption>
                        <!-- End Figure Caption-->
                    </figure>
                    <!-- End Figure -->
                </div>

                <div class="cbp-item js-illustration js-design js-graphic">
                    <!-- Figure -->
                    <figure class="u-info-v1-4 g-overflow-hidden mb-0">
                        <!-- Figure Image -->
                        <img class="w-100 u-info-v1-4__item-regular g-transition-0_2"
                            src="assets/img-temp/400x270/img10.jpg" alt="Image Description">
                        <!-- End Figure Image-->

                        <a class="cbp-caption cbp-singlePageInline u-link-v2"
                            href="../ajax/projects/projects-6.html"></a>

                        <!-- Figure Caption -->
                        <figcaption
                            class="u-info-v1-4__item-hidden g-transition-0_2 g-bg-black g-color-white g-px-30 g-py-10">
                            <h4 class="h6 g-font-weight-500 mb-0">Kathy Reyes</h4>
                            <em
                                class="d-block g-color-white-opacity-0_8 g-font-style-normal g-font-size-13">Design</em>
                        </figcaption>
                        <!-- End Figure Caption-->
                    </figure>
                    <!-- End Figure -->
                </div>
            </div>
            <!-- End Cubeportfolio container -->
        </section>
        <!-- End Cubeportfolio -->

        <section class="dzsparallaxer auto-init height-is-based-on-content use-loading"
            data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
            <!-- Parallax Image -->
            <div class="divimage dzsparallaxer--target w-100 g-bg-repeat"
                style="height: 160%; background-image: url(assets/img/bg/pattern4.png)"></div>
            <!-- End Parallax Image -->

            <div class="container text-center g-py-50">
                <h2 class="h2 text-uppercase mb-4">Hire me!</h2>
                <p class="lead mb-4">I am a creative person focusing on culture, luxury, editorial &amp; art. Somewhere
                    between sophistication and simplicity.</p>
                <a class="btn btn-md u-btn-primary g-font-size-default rounded-0 g-px-30 g-py-12"
                    href="#!">Contact me</a>
            </div>
        </section>

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
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">New terms and
                                    conditions</a>
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
                                        href="#!">www.htmlstream.com</a>
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
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Terms of
                                        Use</a>
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

    <div class="u-outer-spaces-helper"></div>


    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>


    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/appear.js"></script>
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
    <script src="assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
    <script src="assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.tabs.js"></script>
    <script src="assets/js/components/hs.progress-bar.js"></script>
    <script src="assets/js/components/hs.cubeportfolio.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of tabs
            $.HSCore.components.HSTabs.init('[role="tablist"]');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });

        $(window).on('load', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });

            // initialization of cubeportfolio
            $.HSCore.components.HSCubeportfolio.init('.cbp');

            // initialization of horizontal progress bars
            var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
                direction: 'horizontal',
                indicatorSelector: '.js-hr-progress-bar-indicator'
            });
        });

        $(window).on('resize', function() {
            setTimeout(function() {
                $.HSCore.components.HSTabs.init('[role="tablist"]');
            }, 200);
        });
    </script>







</body>

</html>
