<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>Services 3 | | Unify - Responsive Website Template</title>

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
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
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
            <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-black-opacity-0_3--after"
                style="height: 140%; background-image: url(assets/img-temp/1920x800/img11.jpg);"></div>
            <!-- End Parallax Image -->

            <!-- Promo Block Content -->
            <div class="container g-color-white text-center g-py-150">
                <h2 class="h3 text-uppercase mb-2">Our services</h2>
                <p class="g-font-weight-600 g-font-size-40 text-uppercase">Creative freedom matters</p>
            </div>
            <!-- Promo Block Content -->
        </section>
        <!-- End Promo Block -->

        <!-- Icon Blocks v13 -->
        <section class="container g-pt-100 g-pb-70">
            <!-- Icon Blocks -->
            <div class="row">
                <div class="col-lg-4 g-mb-30">
                    <!-- Icon Blocks -->
                    <div class="media">
                        <div class="d-flex mr-4">
                            <span class="u-icon-v2 u-icon-size--sm g-color-primary rounded-circle">
                                <i class="icon-education-087 u-line-icon-pro"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h3 class="h5 g-color-black mb-20">Creative ideas</h3>
                            <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry
                                which allows us to keep our clients relevant.</p>
                            <a class="g-font-size-12 g-text-underline--none--hover text-uppercase" href="#!">Learn
                                More</a>
                        </div>
                    </div>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-lg-4 g-mb-30">
                    <!-- Icon Blocks -->
                    <div class="media">
                        <div class="d-flex mr-4">
                            <span class="u-icon-v2 u-icon-size--sm g-color-primary rounded-circle">
                                <i class="icon-education-035 u-line-icon-pro"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h3 class="h5 g-color-black mb-20">Excellent features</h3>
                            <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry
                                which allows us to keep our clients relevant.</p>
                            <a class="g-font-size-12 g-text-underline--none--hover text-uppercase" href="#!">Learn
                                More</a>
                        </div>
                    </div>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-lg-4 g-mb-30">
                    <!-- Icon Blocks -->
                    <div class="media">
                        <div class="d-flex mr-4">
                            <span class="u-icon-v2 u-icon-size--sm g-color-primary rounded-circle">
                                <i class="icon-education-141 u-line-icon-pro"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h3 class="h5 g-color-black mb-20">Fully responsive</h3>
                            <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry
                                which allows us to keep our clients relevant.</p>
                            <a class="g-font-size-12 g-text-underline--none--hover text-uppercase" href="#!">Learn
                                More</a>
                        </div>
                    </div>
                    <!-- End Icon Blocks -->
                </div>
            </div>
            <!-- End Icon Blocks -->
        </section>
        <!-- End Icon Blocks v13 -->

        <section class="g-bg-secondary">
            <div class="container g-pt-100 g-pb-40">
                <div class="row justify-content-center g-mb-60">
                    <div class="col-lg-7">
                        <!-- Heading -->
                        <div class="text-center">
                            <h2 class="h3 g-color-black text-uppercase mb-2">Our process</h2>
                            <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
                            <p class="lead mb-0">We are a creative person focusing on culture, luxury, editorial &amp;
                                art. Somewhere between sophistication and simplicity.</p>
                        </div>
                        <!-- End Heading -->
                    </div>
                </div>

                <!-- Static Process -->
                <div class="row">
                    <div class="col-sm-6 col-lg-3 g-mb-60">
                        <!-- Static Process -->
                        <div class="text-center">
                            <i class="u-dot-line-v1-2 g-brd-transparent--before g-brd-gray-light-v2--after g-mb-20">
                                <span
                                    class="u-dot-line-v1__inner g-bg-white g-bg-primary--before g-brd-gray-light-v2"></span>
                            </i>
                            <h3 class="h5 g-color-black mb-20">Consult</h3>
                            <p class="mb-0">This is where we sit down, grab a cup of coffee and dial in the details.
                            </p>
                        </div>
                        <!-- End Static Process -->
                    </div>

                    <div class="col-sm-6 col-lg-3 g-mb-60">
                        <!-- Static Process -->
                        <div class="text-center">
                            <i class="u-dot-line-v1-2 g-brd-gray-light-v2--before g-brd-gray-light-v2--after g-mb-20">
                                <span
                                    class="u-dot-line-v1__inner g-bg-white g-bg-primary--before g-brd-gray-light-v2"></span>
                            </i>
                            <h3 class="h5 g-color-black mb-20">Plan</h3>
                            <p class="mb-0">Now that we've aligned the details, it's time to get things organized.
                            </p>
                        </div>
                        <!-- End Static Process -->
                    </div>

                    <div class="col-sm-6 col-lg-3 g-mb-60">
                        <!-- Static Process -->
                        <div class="text-center">
                            <i class="u-dot-line-v1-2 g-brd-gray-light-v2--before g-brd-gray-light-v2--after g-mb-20">
                                <span
                                    class="u-dot-line-v1__inner g-bg-white g-bg-primary--before g-brd-gray-light-v2"></span>
                            </i>
                            <h3 class="h5 g-color-black mb-20">Create</h3>
                            <p class="mb-0">We begin to visualize your sketches and make them into beautiful pixels.
                            </p>
                        </div>
                        <!-- End Static Process -->
                    </div>

                    <div class="col-sm-6 col-lg-3 g-mb-60">
                        <!-- Static Process -->
                        <div class="text-center">
                            <i class="u-dot-line-v1-2 g-brd-gray-light-v2--before g-brd-transparent--after g-mb-20">
                                <span
                                    class="u-dot-line-v1__inner g-bg-white g-bg-primary--before g-brd-gray-light-v2"></span>
                            </i>
                            <h3 class="h5 g-color-black mb-20">Release</h3>
                            <p class="mb-0">Your brand is all dressed up and ready to party, it's time to release.
                            </p>
                        </div>
                        <!-- End Static Process -->
                    </div>
                </div>
                <!-- End Static Process -->
            </div>
        </section>

        <!-- Section -->
        <section class="container g-pt-100 g-pb-40">
            <div class="row">
                <div class="col-lg-6 align-self-center g-mb-60">
                    <img class="img-fluid" src="assets/img-temp/600x400/img1.png" alt="Image Description">
                </div>

                <div class="col-lg-6 align-self-center g-mb-60">
                    <div class="mb-2">
                        <h2 class="h3 g-color-black text-uppercase mb-2">We are creative agency</h2>
                        <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
                    </div>
                    <div class="mb-5">
                        <p class="mb-5">We are an ambitious workaholic, but apart from that, pretty simple person.
                            Whether it's branding, print, UI + UX I've got you covered.</p>

                        <ul class="list-unstyled g-font-size-13 mb-0">
                            <li>
                                <i class="d-inline-block g-color-primary mr-2 mb-3 fa fa-check"></i>
                                Jacks of all. experts in all.
                            </li>
                            <li>
                                <i class="d-inline-block g-color-primary mr-2 mb-3 fa fa-check"></i>
                                It's good to virtually meet you.
                            </li>
                            <li>
                                <i class="d-inline-block g-color-primary mr-2 mb-3 fa fa-check"></i>
                                A crew of creative doers.
                            </li>
                            <li>
                                <i class="d-inline-block g-color-primary mr-2 mb-3 fa fa-check"></i>
                                Let's create something great.
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-md u-btn-outline-black g-font-size-default g-rounded-50 g-py-10 mr-2"
                        href="#!">Explore more</a>
                    <a class="btn btn-md u-btn-primary g-font-size-default g-rounded-50 g-py-10"
                        href="#!">Purchase Now</a>
                </div>
            </div>
        </section>
        <!-- End Section -->

        <!-- Icon Blocks -->
        <section class="g-bg-secondary">
            <div class="container g-pt-100 g-pb-40">
                <div class="row justify-content-center g-mb-60">
                    <div class="col-lg-7">
                        <!-- Heading -->
                        <div class="text-center">
                            <h2 class="h3 g-color-black text-uppercase mb-2">Our services</h2>
                            <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
                            <p class="lead mb-0">We are a creative person focusing on culture, luxury, editorial &amp;
                                art. Somewhere between sophistication and simplicity.</p>
                        </div>
                        <!-- End Heading -->
                    </div>
                </div>

                <!-- Icon Blocks -->
                <div class="row">
                    <div class="col-lg-4 align-self-center g-mb-30">
                        <!-- Icon Blocks -->
                        <div class="media g-mb-30">
                            <div class="d-flex mr-4">
                                <span class="u-icon-v3 u-icon-size--sm g-color-white g-bg-primary rounded-circle">
                                    <i class="icon-education-087 u-line-icon-pro"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <h3 class="h5 g-color-black mb-20">Creative ideas</h3>
                                <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry
                                    which allows us to keep our clients relevant.</p>
                            </div>
                        </div>
                        <!-- End Icon Blocks -->

                        <!-- Icon Blocks -->
                        <div class="media g-mb-30">
                            <div class="d-flex mr-4">
                                <span class="u-icon-v3 u-icon-size--sm g-color-white g-bg-primary rounded-circle">
                                    <i class="icon-education-035 u-line-icon-pro"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <h3 class="h5 g-color-black mb-20">Excellent features</h3>
                                <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry
                                    which allows us to keep our clients relevant.</p>
                            </div>
                        </div>
                        <!-- End Icon Blocks -->
                    </div>

                    <div class="col-lg-4 align-self-center g-mb-30">
                        <!-- Icon Blocks -->
                        <div class="media g-mb-30">
                            <div class="d-flex mr-4">
                                <span class="u-icon-v3 u-icon-size--sm g-color-white g-bg-primary rounded-circle">
                                    <i class="icon-finance-256 u-line-icon-pro"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <h3 class="h5 g-color-black mb-20">Clean code</h3>
                                <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry
                                    which allows us to keep our clients relevant.</p>
                            </div>
                        </div>
                        <!-- End Icon Blocks -->

                        <!-- Icon Blocks -->
                        <div class="media g-mb-30">
                            <div class="d-flex mr-4">
                                <span class="u-icon-v3 u-icon-size--sm g-color-white g-bg-primary rounded-circle">
                                    <i class="icon-finance-009 u-line-icon-pro"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <h3 class="h5 g-color-black mb-20">Modern design</h3>
                                <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry
                                    which allows us to keep our clients relevant.</p>
                            </div>
                        </div>
                        <!-- End Icon Blocks -->
                    </div>

                    <div class="col-lg-4 align-self-center g-mb-30">
                        <div class="g-px-10">
                            <img class="img-fluid" src="assets/img-temp/900x700/img1.png" alt="Image Description">
                        </div>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </section>
        <!-- End Icon Blocks -->

        <!-- Counters -->
        <section class="dzsparallaxer auto-init height-is-based-on-content">
            <!-- Parallax Image -->
            <div class="dzsparallaxer--target w-100 g-bg-cover g-bg-size-cover g-bg-pos-center g-bg-black-opacity-0_4--after"
                style="height: 140%; background: url(assets/img-temp/1920x800/img8.jpg)"></div>
            <!-- End Parallax Image -->

            <div class="container u-bg-overlay__inner g-pt-130 g-pb-70">
                <div class="row text-center g-color-white">
                    <div class="col-md-3 col-6 d-flex justify-content-center g-mb-60">
                        <div
                            class="d-flex justify-content-center u-counter-v3 g-brd-white g-bg-white-opacity-0_2 g-width-150 g-height-150 rounded-circle g-pa-20">
                            <div class="align-self-center">
                                <div class="js-counter g-font-size-30 g-font-weight-300">5867</div>
                                <h4 class="h5">Customers</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 d-flex justify-content-center g-mb-60">
                        <div
                            class="d-flex justify-content-center u-counter-v3 g-brd-white g-bg-white-opacity-0_2 g-width-150 g-height-150 rounded-circle g-pa-20">
                            <div class="align-self-center">
                                <div class="js-counter g-font-size-30 g-font-weight-300">7169</div>
                                <h4 class="h5">Downloads</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 d-flex justify-content-center g-mb-60">
                        <div
                            class="d-flex justify-content-center u-counter-v3 g-brd-white g-bg-white-opacity-0_2 g-width-150 g-height-150 rounded-circle g-pa-20">
                            <div class="align-self-center">
                                <div class="js-counter g-font-size-30 g-font-weight-300">3146</div>
                                <h4 class="h5">Awards</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 d-flex justify-content-center g-mb-60">
                        <div
                            class="d-flex justify-content-center u-counter-v3 g-brd-white g-bg-white-opacity-0_2 g-width-150 g-height-150 rounded-circle g-pa-20">
                            <div class="align-self-center">
                                <div class="js-counter g-font-size-30 g-font-weight-300">9450</div>
                                <h4 class="h5">Projects</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counters -->

        <!-- Testimonials Advanced -->
        <section class="container g-py-100">
            <div class="row justify-content-center g-mb-60">
                <div class="col-lg-7">
                    <!-- Heading -->
                    <div class="text-center">
                        <h2 class="h3 g-color-black text-uppercase mb-2">What people say</h2>
                        <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
                    </div>
                    <!-- End Heading -->
                </div>
            </div>

            <!-- Testimonials Advanced -->
            <div class="js-carousel" data-infinite="true"
                data-arrows-classes="u-arrow-v1 g-width-50 g-height-50 g-brd-1 g-brd-style-solid g-brd-gray-light-v1 g-brd-primary--hover g-color-gray-dark-v5 g-bg-primary--hover g-color-white--hover g-absolute-centered--y rounded-circle g-mt-minus-25"
                data-arrow-left-classes="fa fa-angle-left g-left-0"
                data-arrow-right-classes="fa fa-angle-right g-right-0">
                <div class="js-slide">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <!-- Testimonial Advanced -->
                            <div class="g-pos-rel g-pt-40">
                                <em
                                    class="g-color-gray-light-v5 g-font-size-120 g-pos-abs g-top-minus-15 g-left-minus-15 g-z-index-minus-1">
                                    &#8220;
                                </em>
                                <blockquote class="lead g-font-style-italic g-line-height-2 g-pl-30 g-mb-30">Dear
                                    Htmlstream team, I just bought the Unify template some weeks ago. The template is
                                    really nice and offers quite a large set of options.</blockquote>

                                <div class="media">
                                    <img class="d-flex align-self-center g-width-50 g-height-50 rounded-circle mr-3"
                                        src="assets/img-temp/100x100/img7.jpg" alt="Image Description">

                                    <div class="media-body align-self-center">
                                        <h4 class="h5 g-font-weight-700 g-mb-0">Daniel Ramirez</h4>
                                        <span class="d-block g-color-gray-dark-v4">Designer</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonial Advanced -->
                        </div>
                    </div>
                </div>

                <div class="js-slide">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <!-- Testimonial Advanced -->
                            <div class="g-pos-rel g-pt-40">
                                <em
                                    class="g-color-gray-light-v5 g-font-size-120 g-pos-abs g-top-minus-15 g-left-minus-15 g-z-index-minus-1">
                                    &#8220;
                                </em>
                                <blockquote class="lead g-font-style-italic g-line-height-2 g-pl-30 g-mb-30">Hi there
                                    purchased a couple of days ago and the site looks great, big thanks to the
                                    htmlstream guys, they gave me some great help with some fiddly setup issues.
                                </blockquote>

                                <div class="media">
                                    <img class="d-flex align-self-center g-width-50 g-height-50 rounded-circle mr-3"
                                        src="assets/img-temp/100x100/img5.jpg" alt="Image Description">

                                    <div class="media-body align-self-center">
                                        <h4 class="h5 g-font-weight-700 g-mb-0">Sara Anderson</h4>
                                        <span class="d-block g-color-gray-dark-v4">Designer</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonial Advanced -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Testimonials Advanced -->
        </section>
        <!-- End Testimonials Advanced -->

        <!-- Clients -->
        <div class="g-bg-gray-light-v5">
            <div class="container g-py-70">
                <div id="carousel1" class="js-carousel" data-infinite="true" data-autoplay="true"
                    data-slides-show="6">
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
    <script src="assets/vendor/appear.js"></script>
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
    <script src="assets/js/components/hs.counter.js"></script>
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

            // initialization of counters
            var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');
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
