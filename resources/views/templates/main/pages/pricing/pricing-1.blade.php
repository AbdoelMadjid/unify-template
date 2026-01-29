<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>Pricing Page | | Unify - Responsive Website Template</title>

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

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
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
            class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall "
            data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
            <!-- Parallax Image -->
            <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-primary-gradient-opacity-v1--after"
                style="height: 140%; background-image: url(assets/img-temp/1920x800/img2.jpg);"></div>
            <!-- End Parallax Image -->

            <!-- Promo Block Content -->
            <div class="container g-color-white text-center g-pos-rel g-z-index-1 g-pt-150 g-pb-200">
                <h3 class="h2 g-font-weight-300 mb-0">Finding your perfect plan.</h3>
                <h2 class="g-font-weight-700 g-font-size-65 text-uppercase">Pricing plan</h2>
            </div>
            <!-- Promo Block Content -->
        </section>
        <!-- End Promo Block -->

        <!-- Pricing Plans -->
        <section class="g-bg-gray-light-v5">
            <div class="container g-pb-100">
                <!-- Pricing Plans -->
                <div class="row g-mt-minus-100 g-mb-70">
                    <div class="col-md-4 g-mb-30">
                        <!-- Article -->
                        <article
                            class="u-shadow-v21 u-shadow-v21--hover g-bg-white text-center g-overflow-hidden g-rounded-4 g-pos-rel g-z-index-2 g-cursor-pointer g-transition-0_3">
                            <!-- Article Header -->
                            <header class="g-bg-primary g-pos-rel g-px-20 g-py-70">
                                <svg class="g-pos-abs g-bottom-0 g-left-0 g-right-0" version="1.1"
                                    preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="70px"
                                    viewBox="0 0 300 70">
                                    <path d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" opacity="0.6" fill="#ffffff" />
                                    <path d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" opacity="0.6" fill="#ffffff" />
                                    <path d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                H42.401L43.415,98.342z" opacity="0.7" fill="#ffffff" />
                                    <path d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#ffffff" />
                                </svg>
                                <strong class="d-block g-color-white g-font-size-50 g-line-height-0_7 g-mb-20">
                                    <span class="g-valign-top g-font-size-default">$</span>19<span
                                        class="g-font-size-default">/ month</span>
                                </strong>
                                <h3 class="h6 text-uppercase g-color-white-opacity-0_7 g-letter-spacing-3 g-mb-20">
                                    Starter</h3>
                            </header>
                            <!-- End Article Header -->

                            <!-- Article Content -->
                            <div class="g-px-20 g-py-40">
                                <ul class="list-unstyled g-mb-40">
                                    <li class="g-mb-20">1GB of space</li>
                                    <li class="g-mb-20">Unlimited traffic</li>
                                    <li class="g-mb-20">Online Support</li>
                                    <li class="g-mb-20">24 hour Support</li>
                                </ul>
                                <a class="btn text-uppercase u-btn-primary g-rounded-50 g-font-size-12 g-font-weight-700 g-pa-15-30 g-mb-10"
                                    href="#!">Order Now</a>
                            </div>
                            <!-- End Article Content -->
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="col-md-4 g-mb-30">
                        <!-- Article -->
                        <article
                            class="u-shadow-v21 u-shadow-v21--hover g-bg-white text-center g-overflow-hidden g-rounded-4 g-pos-rel g-z-index-2 g-cursor-pointer g-transition-0_3">
                            <!-- Article Header -->
                            <header class="g-bg-primary g-pos-rel g-px-20 g-py-70">
                                <svg class="g-pos-abs g-bottom-0 g-left-0 g-right-0" version="1.1"
                                    preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="70px"
                                    viewBox="0 0 300 70">
                                    <path d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" opacity="0.6" fill="#ffffff" />
                                    <path d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" opacity="0.6" fill="#ffffff" />
                                    <path d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                H42.401L43.415,98.342z" opacity="0.7" fill="#ffffff" />
                                    <path d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#ffffff" />
                                </svg>
                                <strong class="d-block g-color-white g-font-size-50 g-line-height-0_7 g-mb-20">
                                    <span class="g-valign-top g-font-size-default">$</span>49<span
                                        class="g-font-size-default">/ month</span>
                                </strong>
                                <h3 class="h6 text-uppercase g-color-white-opacity-0_7 g-letter-spacing-3 g-mb-20">
                                    Professional</h3>
                            </header>
                            <!-- End Article Header -->

                            <!-- Article Content -->
                            <div class="g-px-20 g-py-40">
                                <ul class="list-unstyled g-mb-40">
                                    <li class="g-mb-20">200GB of space</li>
                                    <li class="g-mb-20">Unlimited traffic</li>
                                    <li class="g-mb-20">Online Support</li>
                                    <li class="g-mb-20">24 hour Support</li>
                                </ul>
                                <a class="btn text-uppercase u-btn-primary g-rounded-50 g-font-size-12 g-font-weight-700 g-pa-15-30 g-mb-10"
                                    href="#!">Order Now</a>
                            </div>
                            <!-- End Article Content -->
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="col-md-4 g-mb-30">
                        <!-- Article -->
                        <article
                            class="u-shadow-v21 u-shadow-v21--hover g-bg-white text-center g-overflow-hidden g-rounded-4 g-pos-rel g-z-index-2 g-cursor-pointer g-transition-0_3">
                            <!-- Article Header -->
                            <header class="g-bg-primary g-pos-rel g-px-20 g-py-70">
                                <svg class="g-pos-abs g-bottom-0 g-left-0 g-right-0" version="1.1"
                                    preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="70px"
                                    viewBox="0 0 300 70">
                                    <path d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" opacity="0.6" fill="#ffffff" />
                                    <path d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" opacity="0.6" fill="#ffffff" />
                                    <path d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                H42.401L43.415,98.342z" opacity="0.7" fill="#ffffff" />
                                    <path d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#ffffff" />
                                </svg>
                                <strong class="d-block g-color-white g-font-size-50 g-line-height-0_7 g-mb-20">
                                    <span class="g-valign-top g-font-size-default">$</span>99<span
                                        class="g-font-size-default">/ month</span>
                                </strong>
                                <h3 class="h6 text-uppercase g-color-white-opacity-0_7 g-letter-spacing-3 g-mb-20">
                                    Business</h3>
                            </header>
                            <!-- End Article Header -->

                            <!-- Article Content -->
                            <div class="g-px-20 g-py-40">
                                <ul class="list-unstyled g-mb-40">
                                    <li class="g-mb-20">1TB of space</li>
                                    <li class="g-mb-20">Unlimited traffic</li>
                                    <li class="g-mb-20">Online Support</li>
                                    <li class="g-mb-20">24 hour Support</li>
                                </ul>
                                <a class="btn text-uppercase u-btn-primary g-rounded-50 g-font-size-12 g-font-weight-700 g-pa-15-30 g-mb-10"
                                    href="#!">Order Now</a>
                            </div>
                            <!-- End Article Content -->
                        </article>
                        <!-- End Article -->
                    </div>
                </div>
                <!-- End Pricing Plans -->

                <h2 class="h5 g-font-weight-700 text-center text-uppercase mb-5">Why Unify?</h2>

                <!-- Icons Block -->
                <div class="row no-gutters justify-content-center">
                    <div class="col-md-5 col-lg-4">
                        <!-- Icon Blocks -->
                        <div
                            class="u-shadow-v20 g-brd-right--md g-brd-gray-light-v5 g-bg-white text-center g-rounded-left-5 g-px-20 g-py-40">
                            <span class="u-icon-v1 u-icon-size--lg g-color-black g-mb-10">
                                <i class="icon-education-087 u-line-icon-pro"></i>
                            </span>
                            <h3 class="h5 mb-2">Creative ideas</h3>
                            <p class="g-color-gray-dark-v5">This is where we sit down, grab a cup of coffee and dial
                                in the details.</p>
                        </div>
                        <!-- End Icon Blocks -->
                    </div>

                    <div class="col-md-5 col-lg-4">
                        <!-- Icon Blocks -->
                        <div class="u-shadow-v20 g-bg-white text-center g-rounded-right-5 g-px-20 g-py-40">
                            <span class="u-icon-v1 u-icon-size--lg g-color-black g-mb-10">
                                <i class="icon-education-035 u-line-icon-pro"></i>
                            </span>
                            <h3 class="h5 mb-2">Excellent features</h3>
                            <p class="g-color-gray-dark-v5">This is where we sit down, grab a cup of coffee and dial
                                in the details.</p>
                        </div>
                        <!-- End Icon Blocks -->
                    </div>
                </div>
                <!-- End Icons Block -->
            </div>
        </section>
        <!-- End Pricing Plans -->

        <!-- Features -->
        <section class="container g-pt-100 g-pb-40">
            <!-- Heading -->
            <div class="text-center g-mb-60">
                <h2 class="mb-3">Easy things with Unify</h2>
                <div class="d-inline-block g-width-35 g-height-1 g-bg-gray-dark-v5 mb-2"></div>
                <p class="mb-2">We aim high at being focused on building relationships with our clients and
                    community.</p>
            </div>
            <!-- End Heading -->

            <div class="row justify-content-between">
                <div class="col-md-6 align-self-center g-mb-60">
                    <img class="img-fluid" src="assets/img-temp/770x502/img1.png" alt="Image Description">
                </div>

                <div class="col-md-5 align-self-center g-mb-30">
                    <!-- Icon Blocks -->
                    <div class="g-mb-30">
                        <div class="media mb-2">
                            <div class="d-flex align-self-center mr-3">
                                <span class="u-icon-v1 g-color-primary g-font-size-26">
                                    <i class="icon-finance-009 u-line-icon-pro"></i>
                                </span>
                            </div>
                            <div class="media-body align-self-center">
                                <h3 class="h5 mb-0">Modern design</h3>
                            </div>
                        </div>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which
                            allows us to keep our clients relevant.</p>
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">Learn More</a>
                    </div>
                    <!-- End Icon Blocks -->

                    <!-- Icon Blocks -->
                    <div class="g-mb-40">
                        <div class="media mb-2">
                            <div class="d-flex align-self-center mr-3">
                                <span class="u-icon-v1 g-color-primary g-font-size-26">
                                    <i class="icon-science-020 u-line-icon-pro"></i>
                                </span>
                            </div>
                            <div class="media-body align-self-center">
                                <h3 class="h5 mb-0">Extensive documentation</h3>
                            </div>
                        </div>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which
                            allows us to keep our clients relevant.</p>
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">Learn More</a>
                    </div>
                    <!-- End Icon Blocks -->

                    <a class="btn btn-md u-btn-primary g-font-weight-600 g-font-size-11 text-uppercase g-rounded-25 g-py-12 g-px-30 mr-2"
                        href="#!">Purchase Now</a>
                </div>
            </div>
        </section>
        <!-- End Features -->

        <!-- Accordion -->
        <section class="g-bg-gray-gradient-opacity-v1">
            <div class="container g-py-100">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <!-- Heading -->
                        <div class="text-center g-mb-60">
                            <h2 class="mb-2">Frequently Asked Questions</h2>
                            <div class="d-inline-block g-width-35 g-height-1 g-bg-gray-dark-v5 mb-2"></div>
                            <p>We aim high at being focused on building relationships with our clients and community.
                            </p>
                        </div>
                        <!-- End Heading -->

                        <div id="accordion" class="u-accordion u-accordion-color-primary" role="tablist"
                            aria-multiselectable="true">
                            <!-- Card -->
                            <div class="card g-brd-none rounded g-mb-20">
                                <div id="accordion-heading-01" class="u-accordion__header g-pa-0" role="tab">
                                    <h5 class="mb-0">
                                        <a class="collapsed d-flex justify-content-between u-shadow-v19 g-color-main g-text-underline--none--hover rounded g-px-30 g-py-20"
                                            href="#accordion-body-01" data-toggle="collapse" data-parent="#accordion"
                                            aria-expanded="false" aria-controls="accordion-body-01">
                                            Guarantee?
                                            <span class="u-accordion__control-icon g-color-primary">
                                                <i class="fa fa-angle-down"></i>
                                                <i class="fa fa-angle-up"></i>
                                            </span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="accordion-body-01" class="collapse" role="tabpanel"
                                    aria-labelledby="accordion-heading-01">
                                    <div class="u-accordion__body g-color-gray-dark-v4 g-pa-30">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird
                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                        keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                        proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table,
                                        raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                        labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div class="card g-brd-none rounded g-mb-20">
                                <div id="accordion-heading-02" class="u-accordion__header g-pa-0" role="tab">
                                    <h5 class="mb-0">
                                        <a class="collapsed d-flex justify-content-between u-shadow-v19 g-color-main g-text-underline--none--hover rounded g-px-30 g-py-20"
                                            href="#accordion-body-02" data-toggle="collapse" data-parent="#accordion"
                                            aria-expanded="false" aria-controls="accordion-body-02">
                                            Do you have any built-in caching?
                                            <span class="u-accordion__control-icon g-color-primary">
                                                <i class="fa fa-angle-down"></i>
                                                <i class="fa fa-angle-up"></i>
                                            </span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="accordion-body-02" class="collapse" role="tabpanel"
                                    aria-labelledby="accordion-heading-02">
                                    <div class="u-accordion__body g-color-gray-dark-v4 g-pa-30">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird
                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                        keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                        proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table,
                                        raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                        labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div class="card g-brd-none rounded g-mb-20">
                                <div id="accordion-heading-03" class="u-accordion__header g-pa-0" role="tab">
                                    <h5 class="mb-0">
                                        <a class="collapsed d-flex justify-content-between u-shadow-v19 g-color-main g-text-underline--none--hover rounded g-px-30 g-py-20"
                                            href="#accordion-body-03" data-toggle="collapse" data-parent="#accordion"
                                            aria-expanded="false" aria-controls="accordion-body-03">
                                            Can I add/upgrade my plan at any time?
                                            <span class="u-accordion__control-icon g-color-primary">
                                                <i class="fa fa-angle-down"></i>
                                                <i class="fa fa-angle-up"></i>
                                            </span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="accordion-body-03" class="collapse" role="tabpanel"
                                    aria-labelledby="accordion-heading-03">
                                    <div class="u-accordion__body g-color-gray-dark-v4 g-pa-30">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird
                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                        keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                        proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table,
                                        raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                        labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div class="card g-brd-none rounded g-mb-20">
                                <div id="accordion-heading-04" class="u-accordion__header g-pa-0" role="tab">
                                    <h5 class="mb-0">
                                        <a class="collapsed d-flex justify-content-between u-shadow-v19 g-color-main g-text-underline--none--hover rounded g-px-30 g-py-20"
                                            href="#accordion-body-04" data-toggle="collapse" data-parent="#accordion"
                                            aria-expanded="false" aria-controls="accordion-body-04">
                                            What access comes with my hosting plan?
                                            <span class="u-accordion__control-icon g-color-primary">
                                                <i class="fa fa-angle-down"></i>
                                                <i class="fa fa-angle-up"></i>
                                            </span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="accordion-body-04" class="collapse" role="tabpanel"
                                    aria-labelledby="accordion-heading-04">
                                    <div class="u-accordion__body g-color-gray-dark-v4 g-pa-30">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird
                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                        keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                        proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table,
                                        raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                        labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients -->
        <div class="container g-py-70">
            <div class="js-carousel" data-infinite="true" data-autoplay="true" data-slides-show="6"
                data-responsive='[{
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 1
               }
             }]'>
                <div class="js-slide u-block-hover">
                    <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer"
                        src="assets/img-temp/200x100/img1.png" alt="Image Description">
                </div>

                <div class="js-slide u-block-hover">
                    <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer"
                        src="assets/img-temp/200x100/img2.png" alt="Image Description">
                </div>

                <div class="js-slide u-block-hover">
                    <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer"
                        src="assets/img-temp/200x100/img3.png" alt="Image Description">
                </div>

                <div class="js-slide u-block-hover">
                    <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer"
                        src="assets/img-temp/200x100/img4.png" alt="Image Description">
                </div>

                <div class="js-slide u-block-hover">
                    <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer"
                        src="assets/img-temp/200x100/img5.png" alt="Image Description">
                </div>

                <div class="js-slide u-block-hover">
                    <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer"
                        src="assets/img-temp/200x100/img6.png" alt="Image Description">
                </div>

                <div class="js-slide u-block-hover">
                    <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer"
                        src="assets/img-temp/200x100/img7.png" alt="Image Description">
                </div>

                <div class="js-slide u-block-hover">
                    <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer"
                        src="assets/img-temp/200x100/img8.png" alt="Image Description">
                </div>

                <div class="js-slide u-block-hover">
                    <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer"
                        src="assets/img-temp/200x100/img9.png" alt="Image Description">
                </div>
            </div>
        </div>
        <!-- End Clients -->

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

    <div class="u-outer-spaces-helper"></div>


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
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.tabs.js"></script>
    <script src="assets/js/components/hs.carousel.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of carousel
            $.HSCore.components.HSCarousel.init('.js-carousel');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // initialization of tabs
            $.HSCore.components.HSTabs.init('[role="tablist"]');
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
        });

        $(window).on('resize', function() {
            setTimeout(function() {
                $.HSCore.components.HSTabs.init('[role="tablist"]');
            }, 200);
        });
    </script>







</body>

</html>
