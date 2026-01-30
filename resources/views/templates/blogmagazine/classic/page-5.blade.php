<!DOCTYPE html>
<html lang="en">
<base href="{{ url('/') }}/">

<head>
    <!-- Title -->
    <title>Blog and Magazine Page Layout 2 | Unify - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700%7COpen+Sans:400,600,700">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="blogmagazine/classic/assets/css/styles.bm-classic.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <main>
        <!-- Header -->
        @include('layouts.blogmagazine.blogmagazine-header')
        <!-- End Header -->

        <!-- Promo Articles -->
        <div class="js-carousel" data-infinite="true"
            data-arrows-classes="u-arrow-v1 g-pos-abs g-absolute-centered--x g-bottom-20 text-center g-width-30 g-height-28 g-color-secondary-dark-v1 g-color-primary--hover"
            data-arrow-left-classes="fa fa-angle-left g-ml-minus-50"
            data-arrow-right-classes="fa fa-angle-right g-ml-50"
            data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x g-bottom-30 text-center">
            <div class="js-slide">
                <!-- Promo Articles -->
                <div class="g-bg-secondary">
                    <div class="container g-pt-70 g-pb-20">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-6 g-mb-50">
                                <div class="d-flex align-items-center g-mb-50">
                                    <!-- Authors -->
                                    <div class="g-width-32 g-height-30">
                                        <img class="img-fluid g-brd-around g-brd-2 g-brd-white rounded-circle"
                                            src="blogmagazine/classic/assets/img-temp/100x100/img8.jpg"
                                            alt="Image Description">
                                    </div>
                                    <div class="g-width-32 g-height-30 g-ml-minus-7">
                                        <img class="img-fluid g-brd-around g-brd-2 g-brd-white rounded-circle"
                                            src="blogmagazine/classic/assets/img-temp/100x100/img9.jpg"
                                            alt="Image Description">
                                    </div>
                                    <div class="g-width-32 g-height-30 g-ml-minus-7">
                                        <img class="img-fluid g-brd-around g-brd-2 g-brd-white rounded-circle"
                                            src="blogmagazine/classic/assets/img-temp/100x100/img11.jpg"
                                            alt="Image Description">
                                    </div>
                                    <div class="g-font-size-11 g-pl-10 g-pr-25">
                                        <span class="d-block g-font-weight-600">By</span>
                                        <a class="d-block g-color-secondary-dark-v1" href="#">3 Authors</a>
                                    </div>
                                    <div
                                        class="list-inline-item g-height-35 g-brd-right g-brd-secondary-light-v2 g-mr-20">
                                    </div>
                                    <!-- End Authors -->

                                    <!-- Share Button Group -->
                                    <div class="btn-group dropup">
                                        <button
                                            class="btn align-items-center g-color-secondary-light-v1 g-bg-transparent g-color-primary--hover g-font-size-12 g-pa-0"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <span
                                                class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle">
                                                <i class="g-font-size-12 fa fa-share-alt"></i>
                                            </span>
                                        </button>
                                        <div
                                            class="dropdown-menu g-min-width-170 g-brd-secondary-light-v2 g-bg-white g-font-size-12 text-center mx-auto">
                                            <a class="u-icon-v1 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-text-underline--none--hover g-pa-5"
                                                href="#">
                                                <i class="g-font-size-12 fa fa-facebook"></i>
                                            </a>
                                            <a class="u-icon-v1 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-text-underline--none--hover g-pa-5"
                                                href="#">
                                                <i class="g-font-size-12 fa fa-twitter"></i>
                                            </a>
                                            <a class="u-icon-v1 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-text-underline--none--hover g-pa-5"
                                                href="#">
                                                <i class="g-font-size-12 fa fa-google-plus"></i>
                                            </a>
                                            <a class="u-icon-v1 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-text-underline--none--hover g-pa-5"
                                                href="#">
                                                <i class="g-font-size-12 fa fa-instagram"></i>
                                            </a>
                                            <a class="u-icon-v1 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-text-underline--none--hover g-pa-5"
                                                href="#">
                                                <i class="g-font-size-12 fa fa-pinterest"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Share Button Group -->
                                </div>

                                <!-- Info -->
                                <div class="g-mb-70">
                                    <div class="mb-4">
                                        <span
                                            class="d-block g-color-primary g-font-weight-700 text-uppercase mb-2">Sport</span>
                                        <h1 class="mb-4">First Look: New Niner AIR 9 Mountain Bike and RLT 9 Gravel
                                            Bike</h1>
                                        <p class="g-color-secondary-dark-v1 g-font-size-16">For 2018 Niner’s Air 9
                                            hydroformed aluminum hardtail mountain bike returns, with Boost 148mm rear
                                            axle spacing and clearance for up to 29x2.4” or 27.5x3.0” tires. Geometry
                                            also sees an update with a longer reach, shorter chainstays, steeper seat
                                            tube.</p>
                                    </div>

                                    <a class="btn u-btn-black g-color-primary--hover g-font-weight-700 g-font-size-13 text-uppercase rounded g-py-12 g-px-20"
                                        href="bm-classic-single-2.html">Read More</a>
                                </div>
                                <!-- End Info -->

                                <!-- Dates -->
                                <ul class="list-inline g-font-size-13 mb-0">
                                    <li class="list-inline-item">
                                        <a class="d-inline-block u-block-hover g-brd-around g-text-underline--none--hover g-pr-7 g-mr-7"
                                            href="#">
                                            <i class="align-middle mr-1 icon-education-124 u-line-icon-pro"></i>
                                            <span class="g-color-secondary-dark-v1 g-color-primary--hover">Aug 18,
                                                2017</span>
                                        </a>
                                    </li>
                                    <li
                                        class="list-inline-item g-height-20 g-brd-right g-brd-secondary-light-v2 g-pos-rel g-top-minus-2">
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="d-inline-block u-block-hover g-brd-around g-text-underline--none--hover g-px-7 g-mr-7"
                                            href="#">
                                            <i class="align-middle mr-1 icon-medical-022 u-line-icon-pro"></i>
                                            <span class="g-color-secondary-dark-v1 g-color-primary--hover">55</span>
                                        </a>
                                    </li>
                                    <li
                                        class="list-inline-item g-height-20 g-brd-right g-brd-secondary-light-v2 g-pos-rel g-top-minus-2">
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="d-inline-block u-block-hover g-brd-around g-text-underline--none--hover g-pl-7"
                                            href="#">
                                            <i class="align-middle mr-1 icon-finance-206 u-line-icon-pro"></i>
                                            <span class="g-color-secondary-dark-v1 g-color-primary--hover">157</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Dates -->
                            </div>

                            <div class="col-md-6 col-lg-5 g-mb-50">
                                <img class="img-fluid" src="blogmagazine/classic/assets/img-temp/500x650/img3.jpg"
                                    alt="Image Description">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Promo Articles -->
            </div>

            <div class="js-slide">
                <!-- Promo Articles -->
                <div class="g-bg-darkblue-v1">
                    <div class="container g-pt-70 g-pb-20">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-6 g-mb-50">
                                <div class="d-flex align-items-center g-mb-50">
                                    <!-- Authors -->
                                    <div class="g-width-32 g-height-30">
                                        <img class="img-fluid g-brd-around g-brd-2 g-brd-gray-dark-v2 rounded-circle"
                                            src="blogmagazine/classic/assets/img-temp/100x100/img10.jpg"
                                            alt="Image Description">
                                    </div>
                                    <div class="g-width-32 g-height-30 g-ml-minus-7">
                                        <img class="img-fluid g-brd-around g-brd-2 g-brd-gray-dark-v2 rounded-circle"
                                            src="blogmagazine/classic/assets/img-temp/100x100/img9.jpg"
                                            alt="Image Description">
                                    </div>
                                    <div class="g-font-size-11 g-pl-10 g-pr-25">
                                        <span class="d-block g-color-white g-font-weight-600">By</span>
                                        <a class="d-block g-color-secondary-dark-v1" href="#">2 Authors</a>
                                    </div>
                                    <div class="list-inline-item g-height-35 g-brd-right g-brd-gray-dark-v2 g-mr-20">
                                    </div>
                                    <!-- End Authors -->

                                    <!-- Share Button Group -->
                                    <div class="btn-group dropup">
                                        <button
                                            class="btn align-items-center g-color-secondary-light-v1 g-bg-transparent g-color-primary--hover g-font-size-12 g-pa-0"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <span
                                                class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle">
                                                <i class="g-font-size-12 fa fa-share-alt"></i>
                                            </span>
                                        </button>
                                        <div
                                            class="dropdown-menu g-min-width-170 g-brd-secondary-light-v2 g-bg-white g-font-size-12 text-center mx-auto">
                                            <a class="u-icon-v1 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-text-underline--none--hover g-pa-5"
                                                href="#">
                                                <i class="g-font-size-12 fa fa-facebook"></i>
                                            </a>
                                            <a class="u-icon-v1 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-text-underline--none--hover g-pa-5"
                                                href="#">
                                                <i class="g-font-size-12 fa fa-twitter"></i>
                                            </a>
                                            <a class="u-icon-v1 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-text-underline--none--hover g-pa-5"
                                                href="#">
                                                <i class="g-font-size-12 fa fa-google-plus"></i>
                                            </a>
                                            <a class="u-icon-v1 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-text-underline--none--hover g-pa-5"
                                                href="#">
                                                <i class="g-font-size-12 fa fa-instagram"></i>
                                            </a>
                                            <a class="u-icon-v1 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-text-underline--none--hover g-pa-5"
                                                href="#">
                                                <i class="g-font-size-12 fa fa-pinterest"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Share Button Group -->
                                </div>

                                <!-- Info -->
                                <div class="g-mb-70">
                                    <div class="mb-4">
                                        <span
                                            class="d-block g-color-primary g-font-weight-700 text-uppercase mb-2">House
                                            Interior</span>
                                        <h2 class="g-color-white mb-4">Lesson in minimalism: at home with media mogul
                                            Mads Munk in Denmark</h2>
                                        <p class="g-color-secondary-dark-v1 g-font-size-16">Many of us fantasise about
                                            living in the perfect white box – a light-suffused dream home with sleek
                                            surfaces, invisible cabling and minimal clutter.</p>
                                    </div>

                                    <a class="btn u-btn-white g-color-primary--hover g-font-weight-700 g-font-size-13 text-uppercase rounded g-py-12 g-px-20"
                                        href="bm-classic-single-2.html">Read More</a>
                                </div>
                                <!-- End Info -->

                                <!-- Dates -->
                                <ul class="list-inline g-font-size-13 mb-0">
                                    <li class="list-inline-item">
                                        <a class="d-inline-block u-block-hover g-brd-around g-text-underline--none--hover g-pr-7 g-mr-7"
                                            href="#">
                                            <i class="align-middle mr-1 icon-education-124 u-line-icon-pro"></i>
                                            <span class="g-color-secondary-dark-v1 g-color-primary--hover">Aug 18,
                                                2017</span>
                                        </a>
                                    </li>
                                    <li
                                        class="list-inline-item g-height-20 g-brd-right g-brd-gray-dark-v2 g-pos-rel g-top-minus-2">
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="d-inline-block u-block-hover g-brd-around g-text-underline--none--hover g-px-7 g-mr-7"
                                            href="#">
                                            <i class="align-middle mr-1 icon-medical-022 u-line-icon-pro"></i>
                                            <span class="g-color-secondary-dark-v1 g-color-primary--hover">55</span>
                                        </a>
                                    </li>
                                    <li
                                        class="list-inline-item g-height-20 g-brd-right g-brd-gray-dark-v2 g-pos-rel g-top-minus-2">
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="d-inline-block u-block-hover g-brd-around g-text-underline--none--hover g-pl-7"
                                            href="#">
                                            <i class="align-middle mr-1 icon-finance-206 u-line-icon-pro"></i>
                                            <span class="g-color-secondary-dark-v1 g-color-primary--hover">157</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Dates -->
                            </div>

                            <div class="col-md-6 col-lg-5 g-mb-50">
                                <img class="img-fluid" src="blogmagazine/classic/assets/img-temp/500x650/img4.jpg"
                                    alt="Image Description">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Promo Articles -->
            </div>
        </div>
        <!-- End Promo Articles -->

        <!-- Articles -->
        <div class="g-max-width-700 mx-auto g-px-20 g-px-0--md g-pt-100">
            <!-- Article -->
            <article class="g-mb-100">
                <div class="text-center">
                    <!-- Category & Date -->
                    <ul
                        class="list-inline g-color-secondary-dark-v1 g-font-weight-600 g-font-size-12 text-uppercase mb-3">
                        <li class="list-inline-item g-mr-10">
                            <i class="align-middle g-color-primary mr-1 icon-communication-020 u-line-icon-pro"></i>
                            <a class="g-font-weight-700" href="#">Fashion</a>
                        </li>
                        <li class="list-inline-item">&#8226;</li>
                        <li class="list-inline-item g-ml-10">
                            <i
                                class="align-middle g-color-secondary-dark-v1 mr-1 icon-education-124 u-line-icon-pro"></i>
                            Aug 16, 2017
                        </li>
                    </ul>
                    <!-- End Category & Date -->

                    <h2 class="h3 mb-5"><a class="u-link-v5 g-color-main g-color-primary--hover"
                            href="#">Editta Sherman Gets Her Due at the New-York Historical Society</a></h2>
                </div>

                <figure class="mb-4">
                    <img class="img-fluid" src="blogmagazine/classic/assets/img-temp/900x450/img3.jpg"
                        alt="Image Description">
                </figure>

                <!-- Info -->
                <div class="mb-4">
                    <p>The name Editta Sherman may not ring a bell, but she was the blithe spirit who flitted through
                        “Bill Cunningham New York,” about the New York Times’s street-fashion photographer, who died in
                        2016.</p>
                </div>
                <!-- End Info -->

                <div class="g-mb-25">
                    <!-- Info -->
                    <div class="d-flex justify-content-start">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mx-0">
                                <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-pr-15 g-py-4"
                                    href="#">
                                    <i class="align-middle mr-2 icon-medical-022 u-line-icon-pro"></i>
                                    25
                                </a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-px-15 g-py-4"
                                    href="#">
                                    <i class="align-middle mr-2 icon-finance-206 u-line-icon-pro"></i>
                                    12
                                </a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-15 g-text-underline--none--hover g-px-15 g-py-4"
                                    href="#" data-toggle="tooltip" data-placement="top"
                                    title="Save to Read Later">
                                    <i class="fa fa-bookmark-o"></i>
                                </a>
                            </li>
                        </ul>

                        <a class="g-font-weight-600 g-font-size-13 text-uppercase ml-auto g-py-4"
                            href="bm-classic-single-2.html">Read More</a>
                    </div>
                    <!-- End Info -->
                </div>

                <!-- Social Icons -->
                <div class="g-overflow-hidden">
                    <ul class="list-inline u-info-v10-1 mb-0">
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Social Icons -->
            </article>
            <!-- End Article -->

            <!-- Article -->
            <article class="g-mb-100">
                <div class="text-center">
                    <!-- Category & Date -->
                    <ul
                        class="list-inline g-color-secondary-dark-v1 g-font-weight-600 g-font-size-12 text-uppercase mb-3">
                        <li class="list-inline-item g-mr-10">
                            <i class="align-middle g-color-primary mr-1 icon-communication-020 u-line-icon-pro"></i>
                            <a class="g-font-weight-700" href="#">Sport</a>
                        </li>
                        <li class="list-inline-item">&#8226;</li>
                        <li class="list-inline-item g-ml-10">
                            <i
                                class="align-middle g-color-secondary-dark-v1 mr-1 icon-education-124 u-line-icon-pro"></i>
                            Aug 14, 2017
                        </li>
                    </ul>
                    <!-- End Category & Date -->

                    <h2 class="h3 mb-4"><a class="u-link-v5 g-color-main g-color-primary--hover" href="#">The
                            2018 Specialized Enduro has officially landed</a></h2>
                </div>

                <!-- Info -->
                <div class="mb-4">
                    <p>The top line is that both platforms have been lengthened, and the 27.5 version has had a top tube
                        tweak to give it a look more in keeping with the 29er version.</p>
                </div>
                <!-- End Info -->

                <div class="g-mb-25">
                    <!-- Info -->
                    <div class="d-flex justify-content-start">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mx-0">
                                <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-pr-15 g-py-4"
                                    href="#">
                                    <i class="align-middle mr-2 icon-medical-022 u-line-icon-pro"></i>
                                    215
                                </a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-px-15 g-py-4"
                                    href="#">
                                    <i class="align-middle mr-2 icon-finance-206 u-line-icon-pro"></i>
                                    9
                                </a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-15 g-text-underline--none--hover g-px-15 g-py-4"
                                    href="#" data-toggle="tooltip" data-placement="top"
                                    title="Save to Read Later">
                                    <i class="fa fa-bookmark-o"></i>
                                </a>
                            </li>
                        </ul>

                        <a class="g-font-weight-600 g-font-size-13 text-uppercase ml-auto g-py-4"
                            href="bm-classic-single-2.html">Read More</a>
                    </div>
                    <!-- End Info -->
                </div>

                <!-- Social Icons -->
                <div class="g-overflow-hidden">
                    <ul class="list-inline u-info-v10-1 mb-0">
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Social Icons -->
            </article>
            <!-- End Article -->
        </div>
        <!-- End Articles -->

        <!-- Related Posts -->
        <div class="g-bg-secondary g-py-70">
            <div class="container">
                <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-4">Related Posts</h3>

                <!-- Carousel -->
                <div id="carouselCus3" class="js-carousel g-mx-minus-10" data-infinite="true" data-slides-show="4"
                    data-lazy-load="ondemand"
                    data-arrows-classes="u-arrow-v1 g-pos-abs g-top-minus-40 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover"
                    data-arrow-left-classes="fa fa-angle-left g-right-30"
                    data-arrow-right-classes="fa fa-angle-right g-right-0">
                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article>
                            <img class="img-fluid" src="blogmagazine/classic/assets/img-temp/400x270/img17.jpg"
                                alt="Image Description">

                            <div class="g-bg-white g-pa-20">
                                <h3 class="g-font-size-15"><a class="u-link-v5 g-color-main g-color-primary--hover"
                                        href="#">The Five Most Beautiful Phones</a></h3>
                                <p class="g-font-size-13">We aim high at being focused on building relationships with
                                    clients.</p>

                                <hr class="g-brd-secondary-light-v2 my-3">

                                <!-- Info -->
                                <ul class="d-flex list-inline mb-0">
                                    <li class="list-inline-item mx-0">
                                        <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-12 g-text-underline--none--hover g-pr-5 g-py-4"
                                            href="#">
                                            <i class="align-middle mr-1 icon-medical-022 u-line-icon-pro"></i>
                                            5
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-12 g-text-underline--none--hover g-px-5 g-py-4"
                                            href="#">
                                            <i class="align-middle mr-1 icon-finance-206 u-line-icon-pro"></i>
                                            1
                                        </a>
                                    </li>
                                    <li class="list-inline-item ml-auto mr-0">
                                        <span
                                            class="d-inline-block g-color-secondary-dark-v1 g-font-size-12 g-px-5 g-py-4">
                                            <i class="align-middle mr-1 icon-education-097 u-line-icon-pro"></i>
                                            15 min ago
                                        </span>
                                    </li>
                                </ul>
                                <!-- End Info -->
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article>
                            <img class="img-fluid" src="blogmagazine/classic/assets/img-temp/400x270/img11.jpg"
                                alt="Image Description">

                            <div class="g-bg-white g-pa-20">
                                <h3 class="g-font-size-15"><a class="u-link-v5 g-color-main g-color-primary--hover"
                                        href="#">How to pursue happiness in XXIth century?</a></h3>
                                <p class="g-font-size-13">We aim high at being focused on building relationships with
                                    clients.</p>

                                <hr class="g-brd-secondary-light-v2 my-3">

                                <!-- Info -->
                                <ul class="d-flex list-inline mb-0">
                                    <li class="list-inline-item mx-0">
                                        <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-12 g-text-underline--none--hover g-pr-5 g-py-4"
                                            href="#">
                                            <i class="align-middle mr-1 icon-medical-022 u-line-icon-pro"></i>
                                            5
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-12 g-text-underline--none--hover g-px-5 g-py-4"
                                            href="#">
                                            <i class="align-middle mr-1 icon-finance-206 u-line-icon-pro"></i>
                                            1
                                        </a>
                                    </li>
                                    <li class="list-inline-item ml-auto mr-0">
                                        <span
                                            class="d-inline-block g-color-secondary-dark-v1 g-font-size-12 g-px-5 g-py-4">
                                            <i class="align-middle mr-1 icon-education-097 u-line-icon-pro"></i>
                                            15 min ago
                                        </span>
                                    </li>
                                </ul>
                                <!-- End Info -->
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article>
                            <img class="img-fluid" src="blogmagazine/classic/assets/img-temp/400x270/img18.jpg"
                                alt="Image Description">

                            <div class="g-bg-white g-pa-20">
                                <h3 class="g-font-size-15"><a class="u-link-v5 g-color-main g-color-primary--hover"
                                        href="#">Your healthy breakfast to start a day</a></h3>
                                <p class="g-font-size-13">We aim high at being focused on building relationships with
                                    clients.</p>

                                <hr class="g-brd-secondary-light-v2 my-3">

                                <!-- Info -->
                                <ul class="d-flex list-inline mb-0">
                                    <li class="list-inline-item mx-0">
                                        <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-12 g-text-underline--none--hover g-pr-5 g-py-4"
                                            href="#">
                                            <i class="align-middle mr-1 icon-medical-022 u-line-icon-pro"></i>
                                            62
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-12 g-text-underline--none--hover g-px-5 g-py-4"
                                            href="#">
                                            <i class="align-middle mr-1 icon-finance-206 u-line-icon-pro"></i>
                                            11
                                        </a>
                                    </li>
                                    <li class="list-inline-item ml-auto mr-0">
                                        <span
                                            class="d-inline-block g-color-secondary-dark-v1 g-font-size-12 g-px-5 g-py-4">
                                            <i class="align-middle mr-1 icon-education-097 u-line-icon-pro"></i>
                                            14 min ago
                                        </span>
                                    </li>
                                </ul>
                                <!-- End Info -->
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article>
                            <img class="img-fluid" src="blogmagazine/classic/assets/img-temp/400x270/img6.jpg"
                                alt="Image Description">

                            <div class="g-bg-white g-pa-20">
                                <h3 class="g-font-size-15"><a class="u-link-v5 g-color-main g-color-primary--hover"
                                        href="#">Orange is the new color for your room</a></h3>
                                <p class="g-font-size-13">We aim high at being focused on building relationships with
                                    clients.</p>

                                <hr class="g-brd-secondary-light-v2 my-3">

                                <!-- Info -->
                                <ul class="d-flex list-inline mb-0">
                                    <li class="list-inline-item mx-0">
                                        <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-12 g-text-underline--none--hover g-pr-5 g-py-4"
                                            href="#">
                                            <i class="align-middle mr-1 icon-medical-022 u-line-icon-pro"></i>
                                            11
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-12 g-text-underline--none--hover g-px-5 g-py-4"
                                            href="#">
                                            <i class="align-middle mr-1 icon-finance-206 u-line-icon-pro"></i>
                                            0
                                        </a>
                                    </li>
                                    <li class="list-inline-item ml-auto mr-0">
                                        <span
                                            class="d-inline-block g-color-secondary-dark-v1 g-font-size-12 g-px-5 g-py-4">
                                            <i class="align-middle mr-1 icon-education-097 u-line-icon-pro"></i>
                                            13 min ago
                                        </span>
                                    </li>
                                </ul>
                                <!-- End Info -->
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10">
                        <!-- Article -->
                        <article>
                            <img class="img-fluid" src="blogmagazine/classic/assets/img-temp/400x270/img5.jpg"
                                alt="Image Description">

                            <div class="g-bg-white g-pa-20">
                                <h3 class="g-font-size-15"><a class="u-link-v5 g-color-main g-color-primary--hover"
                                        href="#">Traveling with her around the city</a></h3>
                                <p class="g-font-size-13">We aim high at being focused on building relationships with
                                    clients.</p>

                                <hr class="g-brd-secondary-light-v2 my-3">

                                <!-- Info -->
                                <ul class="d-flex list-inline mb-0">
                                    <li class="list-inline-item mx-0">
                                        <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-12 g-text-underline--none--hover g-pr-5 g-py-4"
                                            href="#">
                                            <i class="align-middle mr-1 icon-medical-022 u-line-icon-pro"></i>
                                            96
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-12 g-text-underline--none--hover g-px-5 g-py-4"
                                            href="#">
                                            <i class="align-middle mr-1 icon-finance-206 u-line-icon-pro"></i>
                                            38
                                        </a>
                                    </li>
                                    <li class="list-inline-item ml-auto mr-0">
                                        <span
                                            class="d-inline-block g-color-secondary-dark-v1 g-font-size-12 g-px-5 g-py-4">
                                            <i class="align-middle mr-1 icon-education-097 u-line-icon-pro"></i>
                                            12 min ago
                                        </span>
                                    </li>
                                </ul>
                                <!-- End Info -->
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Related Posts -->

        <!-- Articles -->
        <div class="g-max-width-700 mx-auto g-px-20 g-px-0--md g-pt-100 g-pb-50">
            <!-- Article -->
            <article class="g-mb-100">
                <div class="text-center">
                    <!-- Category & Date -->
                    <ul
                        class="list-inline g-color-secondary-dark-v1 g-font-weight-600 g-font-size-12 text-uppercase mb-3">
                        <li class="list-inline-item g-mr-10">
                            <i class="align-middle g-color-primary mr-1 icon-communication-020 u-line-icon-pro"></i>
                            <a class="g-font-weight-700" href="#">Spa</a>
                        </li>
                        <li class="list-inline-item">&#8226;</li>
                        <li class="list-inline-item g-ml-10">
                            <i
                                class="align-middle g-color-secondary-dark-v1 mr-1 icon-education-124 u-line-icon-pro"></i>
                            Aug 12, 2017
                        </li>
                    </ul>
                    <!-- End Category & Date -->

                    <h2 class="h3 mb-5"><a class="u-link-v5 g-color-main g-color-primary--hover"
                            href="#">Bamford Haybarn Spas opens first US site</a></h2>
                </div>

                <figure class="mb-4">
                    <div class="js-carousel g-mx-minus-10" data-infinite="true"
                        data-arrows-classes="u-arrow-v1 g-pos-abs g-absolute-centered--y g-width-30 g-height-30 g-brd-around g-brd-white g-color-white g-color-primary--hover rounded"
                        data-arrow-left-classes="fa fa-angle-left g-left-20"
                        data-arrow-right-classes="fa fa-angle-right g-right-20">
                        <div class="js-slide">
                            <img class="img-fluid" src="blogmagazine/classic/assets/img-temp/900x450/img2.jpg"
                                alt="Image Description">
                        </div>
                        <div class="js-slide">
                            <img class="img-fluid" src="blogmagazine/classic/assets/img-temp/900x450/img4.jpg"
                                alt="Image Description">
                        </div>
                    </div>
                </figure>

                <!-- Info -->
                <div class="mb-4">
                    <p>Originally created by Carole Bamford in the English Cotswolds, the Bamford Haybarn brand has
                        migrated across the pond, with a new 4500sq ft spa in Miami Beach.</p>
                </div>
                <!-- End Info -->

                <div class="g-mb-25">
                    <!-- Info -->
                    <div class="d-flex justify-content-start">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mx-0">
                                <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-pr-15 g-py-4"
                                    href="#">
                                    <i class="align-middle mr-2 icon-medical-022 u-line-icon-pro"></i>
                                    76
                                </a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-px-15 g-py-4"
                                    href="#">
                                    <i class="align-middle mr-2 icon-finance-206 u-line-icon-pro"></i>
                                    4
                                </a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-15 g-text-underline--none--hover g-px-15 g-py-4"
                                    href="#" data-toggle="tooltip" data-placement="top"
                                    title="Save to Read Later">
                                    <i class="fa fa-bookmark-o"></i>
                                </a>
                            </li>
                        </ul>

                        <a class="g-font-weight-600 g-font-size-13 text-uppercase ml-auto g-py-4"
                            href="bm-classic-single-2.html">Read More</a>
                    </div>
                    <!-- End Info -->
                </div>

                <!-- Social Icons -->
                <div class="g-overflow-hidden">
                    <ul class="list-inline u-info-v10-1 mb-0">
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Social Icons -->
            </article>
            <!-- End Article -->

            <!-- Article -->
            <article class="g-mb-100">
                <div class="text-center">
                    <!-- Category & Date -->
                    <ul
                        class="list-inline g-color-secondary-dark-v1 g-font-weight-600 g-font-size-12 text-uppercase mb-3">
                        <li class="list-inline-item g-mr-10">
                            <i class="align-middle g-color-primary mr-1 icon-communication-020 u-line-icon-pro"></i>
                            <a class="g-font-weight-700" href="#">Europe</a>
                        </li>
                        <li class="list-inline-item">&#8226;</li>
                        <li class="list-inline-item g-ml-10">
                            <i
                                class="align-middle g-color-secondary-dark-v1 mr-1 icon-education-124 u-line-icon-pro"></i>
                            Aug 11, 2017
                        </li>
                    </ul>
                    <!-- End Category & Date -->

                    <h2 class="h3 mb-4"><a class="u-link-v5 g-color-main g-color-primary--hover"
                            href="#">Attacks Are Nation’s Deadliest in Decade; Driver of Van Sought</a></h2>
                </div>

                <!-- Info -->
                <div class="mb-4">
                    <p>BARCELONA, Spain — Largely spared the Islamic State attacks that have plagued Europe in recent
                        years, Spaniards were confronted on Friday with the aftermath of a devastating terrorist plot,
                        involving an explosives factory and two vehicular assaults, that swept through Barcelona and a
                        seaside resort town leaving at least 14 dead and scores wounded.</p>
                </div>
                <!-- End Info -->

                <div class="g-mb-25">
                    <!-- Info -->
                    <div class="d-flex justify-content-start">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mx-0">
                                <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-pr-15 g-py-4"
                                    href="#">
                                    <i class="align-middle mr-2 icon-medical-022 u-line-icon-pro"></i>
                                    34
                                </a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-px-15 g-py-4"
                                    href="#">
                                    <i class="align-middle mr-2 icon-finance-206 u-line-icon-pro"></i>
                                    2
                                </a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a class="d-inline-block g-color-secondary-dark-v1 g-color-primary--hover g-font-size-15 g-text-underline--none--hover g-px-15 g-py-4"
                                    href="#" data-toggle="tooltip" data-placement="top"
                                    title="Save to Read Later">
                                    <i class="fa fa-bookmark-o"></i>
                                </a>
                            </li>
                        </ul>

                        <a class="g-font-weight-600 g-font-size-13 text-uppercase ml-auto g-py-4"
                            href="bm-classic-single-2.html">Read More</a>
                    </div>
                    <!-- End Info -->
                </div>

                <!-- Social Icons -->
                <div class="g-overflow-hidden">
                    <ul class="list-inline u-info-v10-1 mb-0">
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v3 u-icon-size--xs g-color-primary g-color-white--hover g-bg-secondary g-bg-primary--hover rounded-circle"
                                href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Social Icons -->
            </article>
            <!-- End Article -->
        </div>
        <!-- End Articles -->

        <!-- Pagination -->
        <div class="container g-pb-100">
            <nav aria-label="Page Navigation">
                <ul class="list-inline text-center mb-0">
                    <li class="list-inline-item">
                        <a class="active u-pagination-v1__item g-width-30 g-height-30 g-brd-secondary-light-v2 g-brd-primary--active g-color-white g-bg-primary--active g-font-size-12 rounded g-pa-5"
                            href="#">1</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="u-pagination-v1__item g-width-30 g-height-30 g-brd-transparent g-brd-primary--hover g-brd-primary--active g-color-secondary-dark-v1 g-bg-primary--active g-font-size-12 rounded g-pa-5"
                            href="#">2</a>
                    </li>
                    <li class="list-inline-item g-hidden-xs-down">
                        <a class="u-pagination-v1__item g-width-30 g-height-30 g-brd-transparent g-brd-primary--hover g-brd-primary--active g-color-secondary-dark-v1 g-bg-primary--active g-font-size-12 rounded g-pa-5"
                            href="#">3</a>
                    </li>
                    <li class="list-inline-item">
                        <span
                            class="g-width-30 g-height-30 g-color-gray-dark-v5 g-font-size-12 rounded g-pa-5">...</span>
                    </li>
                    <li class="list-inline-item g-hidden-xs-down">
                        <a class="u-pagination-v1__item g-width-30 g-height-30 g-brd-transparent g-brd-primary--hover g-brd-primary--active g-color-secondary-dark-v1 g-bg-primary--active g-font-size-12 rounded g-pa-5"
                            href="#">15</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="u-pagination-v1__item g-brd-secondary-light-v2 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded g-px-15 g-py-5 g-ml-15"
                            href="#" aria-label="Next">
                            <span aria-hidden="true">
                                Next
                                <i class="ml-2 fa fa-angle-right"></i>
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- End Pagination -->

        <!-- Footer -->
        <footer class="g-bg-secondary">
            <div class="g-brd-bottom g-brd-secondary-light-v2 g-py-50 g-mb-50">
                <div class="container">
                    <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">Popular Stories</h3>

                    <!-- Footer - Popular Stories Carousel -->
                    <div id="carouselCus2" class="js-carousel g-mx-minus-10" data-infinite="true"
                        data-slides-show="4" data-autoplay="true" data-speed="7000" data-lazy-load="ondemand"
                        data-arrows-classes="u-arrow-v1 g-pos-abs g-top-minus-35 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover"
                        data-arrow-left-classes="fa fa-angle-left g-right-30"
                        data-arrow-right-classes="fa fa-angle-right g-right-0">
                        <div class="js-slide g-px-10">
                            <!-- Article -->
                            <article class="media g-bg-white g-pa-10">
                                <figure class="d-flex g-width-70 g-height-70 g-pos-rel mr-3">
                                    <img class="img-fluid"
                                        src="blogmagazine/classic/assets/img-temp/230x230/img10.jpg"
                                        alt="Image Description">

                                    <figcaption class="g-absolute-centered">
                                        <a class="js-fancybox d-block" href="https://vimeo.com/167434033"
                                            title="Single Image">
                                            <span
                                                class="u-icon-v2 u-icon-size--xs g-brd-white g-color-white g-color-primary--hover g-bg-white--hover rounded-circle g-cursor-pointer">
                                                <i class="g-pos-rel g-left-2 fa fa-play"></i>
                                            </span>
                                        </a>
                                    </figcaption>
                                </figure>

                                <div class="media-body">
                                    <a class="d-block g-color-bluegray g-font-weight-700 g-font-size-12 text-uppercase mb-1"
                                        href="#">Architecture</a>
                                    <h4 class="g-font-size-13 mb-0"><a
                                            class="u-link-v5 g-color-main g-color-primary--hover"
                                            href="#">Office III builds simple open-air center on Island</a></h4>
                                </div>
                            </article>
                            <!-- End Article -->
                        </div>

                        <div class="js-slide g-px-10">
                            <!-- Article -->
                            <article class="media g-bg-white g-pa-10">
                                <figure class="d-flex g-width-70 g-height-70 mr-3">
                                    <img class="img-fluid" src="blogmagazine/classic/assets/img-temp/230x230/img5.jpg"
                                        alt="Image Description">
                                </figure>

                                <div class="media-body">
                                    <a class="d-block g-color-lightred g-font-weight-700 g-font-size-12 text-uppercase mb-1"
                                        href="#">Travel</a>
                                    <h4 class="g-font-size-13 mb-0"><a
                                            class="u-link-v5 g-color-main g-color-primary--hover"
                                            href="#">Revealed: World's 10 most beautiful cities</a></h4>
                                </div>
                            </article>
                            <!-- End Article -->
                        </div>

                        <div class="js-slide g-px-10">
                            <!-- Article -->
                            <article class="media g-bg-white g-pa-10">
                                <figure class="d-flex g-width-70 g-height-70 g-pos-rel mr-3">
                                    <img class="img-fluid" src="blogmagazine/classic/assets/img-temp/230x230/img6.jpg"
                                        alt="Image Description">

                                    <figcaption class="g-absolute-centered">
                                        <a class="js-fancybox d-block" href="https://vimeo.com/167434033"
                                            title="Single Image">
                                            <span
                                                class="u-icon-v2 u-icon-size--xs g-brd-white g-color-white g-color-primary--hover g-bg-white--hover rounded-circle g-cursor-pointer">
                                                <i class="g-pos-rel g-left-2 fa fa-play"></i>
                                            </span>
                                        </a>
                                    </figcaption>
                                </figure>

                                <div class="media-body">
                                    <a class="d-block g-color-teal g-font-weight-700 g-font-size-12 text-uppercase mb-1"
                                        href="#">Hi-Tech</a>
                                    <h4 class="g-font-size-13 mb-0"><a
                                            class="u-link-v5 g-color-main g-color-primary--hover"
                                            href="#">Borrowing goes hi-tech at library</a></h4>
                                </div>
                            </article>
                            <!-- End Article -->
                        </div>

                        <div class="js-slide g-px-10">
                            <!-- Article -->
                            <article class="media g-bg-white g-pa-10">
                                <figure class="d-flex g-width-70 g-height-70 mr-3">
                                    <img class="img-fluid" src="blogmagazine/classic/assets/img-temp/230x230/img7.jpg"
                                        alt="Image Description">
                                </figure>

                                <div class="media-body">
                                    <a class="d-block g-color-cyan g-font-weight-700 g-font-size-12 text-uppercase mb-1"
                                        href="#">Sport</a>
                                    <h4 class="g-font-size-13 mb-0"><a
                                            class="u-link-v5 g-color-main g-color-primary--hover"
                                            href="#">Adidas originals unveils the new tubular dawn</a></h4>
                                </div>
                            </article>
                            <!-- End Article -->
                        </div>

                        <div class="js-slide g-px-10">
                            <!-- Article -->
                            <article class="media g-bg-white g-pa-10">
                                <figure class="d-flex g-width-70 g-height-70 mr-3">
                                    <img class="img-fluid" src="blogmagazine/classic/assets/img-temp/230x230/img8.jpg"
                                        alt="Image Description">
                                </figure>

                                <div class="media-body">
                                    <a class="d-block g-color-purple g-color-purple--hover g-font-weight-700 g-font-size-12 text-uppercase mb-1"
                                        href="#">Start-Up</a>
                                    <h4 class="g-font-size-13 mb-0"><a
                                            class="u-link-v5 g-color-main g-color-primary--hover" href="#">Apple
                                            video explain how iOS work on MacBook</a></h4>
                                </div>
                            </article>
                            <!-- End Article -->
                        </div>

                        <div class="js-slide g-px-10">
                            <!-- Article -->
                            <article class="media g-bg-white g-pa-10">
                                <figure class="d-flex g-width-70 g-height-70 mr-3">
                                    <img class="img-fluid" src="blogmagazine/classic/assets/img-temp/230x230/img9.jpg"
                                        alt="Image Description">
                                </figure>

                                <div class="media-body">
                                    <a class="d-block g-color-brown g-font-weight-700 g-font-size-12 text-uppercase mb-1"
                                        href="#">Fashion</a>
                                    <h4 class="g-font-size-13 mb-0"><a
                                            class="u-link-v5 g-color-main g-color-primary--hover"
                                            href="#">Olivia Palermo reveals zara strategy</a></h4>
                                </div>
                            </article>
                            <!-- End Article -->
                        </div>
                    </div>
                    <!-- End Footer - Popular Stories Carousel -->
                </div>
            </div>

            <div class="container">
                <!-- Footer - Content -->
                <div class="g-brd-bottom--md g-brd-secondary-light-v2 g-pb-30--md g-mb-30">
                    <div class="row">
                        <div class="col-6 col-md-3 g-brd-right--md g-brd-secondary-light-v2 g-mb-30 g-mb-0--md">
                            <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">News</h3>

                            <!-- News -->
                            <ul class="list-unstyled mb-0">
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">World</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">U.S.</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">Politics</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">Business</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">Economy</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">Tech</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">Science</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">Health</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">Sports</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">Education</a>
                                </li>
                            </ul>
                            <!-- End News -->
                        </div>

                        <div class="col-6 col-md-3 g-brd-right--md g-brd-secondary-light-v2 g-mb-30 g-mb-0--md">
                            <div class="g-pl-10--md">
                                <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">Opinion</h3>

                                <!-- Opinion -->
                                <ul class="list-unstyled mb-0">
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                            href="#">Today's Opinion</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                            href="#">Contributing Writers</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                            href="#">Letters</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                            href="#">Sunday Review</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                            href="#">Taking Note</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                            href="#">Room for Debate</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                            href="#">Op-Ed Columnists</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                            href="#">Editorials</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                            href="#">Op-Ed Contributors</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                            href="#">Video: Opinion</a>
                                    </li>
                                </ul>
                                <!-- End Opinion -->
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="g-pl-10--md">
                                <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">Magazines</h3>

                                <!-- Carousel -->
                                <div id="carouselCus1" class="js-carousel g-mx-minus-5" data-infinite="true"
                                    data-slides-show="2" data-lazy-load="ondemand"
                                    data-arrows-classes="u-arrow-v1 g-pos-abs g-top-minus-35 g-width-30 g-height-30 g-color-secondary-dark-v1 g-color-primary--hover"
                                    data-arrow-left-classes="fa fa-angle-left g-right-30"
                                    data-arrow-right-classes="fa fa-angle-right g-right-0">
                                    <div class="js-slide g-px-5">
                                        <!-- Magazines -->
                                        <figure class="u-block-hover g-pos-rel">
                                            <img class="img-fluid u-block-hover__main--zoom-v1 g-transition-0_5"
                                                src="blogmagazine/classic/assets/img-temp/350x400/img3.jpg"
                                                alt="Image Description">
                                            <figcaption class="g-color-white">
                                                <div class="g-pos-abs g-top-0 g-left-0 g-pa-20">
                                                    <h2 class="h4 g-color-white">Singer<br>of the Year</h2>
                                                </div>
                                                <div class="w-50 g-pos-abs g-bottom-0 g-left-0 g-pa-20">
                                                    <span class="d-block h6 g-color-white">Manchester Evening</span>
                                                </div>
                                                <div class="w-50 text-right g-pos-abs g-bottom-0 g-right-0 g-pa-20">
                                                    <span class="d-block h6 g-color-white">2017</span>
                                                </div>
                                                <a class="u-link-v2" href="bm-classic-single-2.html"></a>
                                            </figcaption>
                                        </figure>
                                        <!-- End Magazines -->
                                    </div>

                                    <div class="js-slide g-px-5">
                                        <!-- Magazines -->
                                        <figure class="u-block-hover g-pos-rel">
                                            <img class="img-fluid u-block-hover__main--zoom-v1 g-transition-0_5"
                                                src="blogmagazine/classic/assets/img-temp/350x400/img2.jpg"
                                                alt="Image Description">
                                            <figcaption class="g-color-white">
                                                <div class="g-pos-abs g-top-0 g-left-0 g-pa-20">
                                                    <h2 class="h4 g-color-white">Trip to<br>Wonderland</h2>
                                                </div>
                                                <div class="w-50 g-pos-abs g-bottom-0 g-left-0 g-pa-20">
                                                    <span class="d-block h6 g-color-white">The New York Times</span>
                                                </div>
                                                <div class="w-50 text-right g-pos-abs g-bottom-0 g-right-0 g-pa-20">
                                                    <span class="d-block h6 g-color-white">2017</span>
                                                </div>
                                                <a class="u-link-v2" href="bm-classic-single-2.html"></a>
                                            </figcaption>
                                        </figure>
                                        <!-- End Magazines -->
                                    </div>

                                    <div class="js-slide g-px-5">
                                        <!-- Magazines -->
                                        <figure class="u-block-hover g-pos-rel">
                                            <img class="img-fluid u-block-hover__main--zoom-v1 g-transition-0_5"
                                                src="blogmagazine/classic/assets/img-temp/350x400/img1.jpg"
                                                alt="Image Description">
                                            <figcaption class="g-color-white">
                                                <div class="g-pos-abs g-top-0 g-left-0 g-pa-20">
                                                    <h2 class="h4 g-color-white">Science<br>in Yellow</h2>
                                                </div>
                                                <div class="w-50 g-pos-abs g-bottom-0 g-left-0 g-pa-20">
                                                    <span class="d-block h6 g-color-white">Sunday News</span>
                                                </div>
                                                <div class="w-50 text-right g-pos-abs g-bottom-0 g-right-0 g-pa-20">
                                                    <span class="d-block h6 g-color-white">2017</span>
                                                </div>
                                                <a class="u-link-v2" href="bm-classic-single-2.html"></a>
                                            </figcaption>
                                        </figure>
                                        <!-- End Magazines -->
                                    </div>

                                    <div class="js-slide g-px-5">
                                        <!-- Magazines -->
                                        <figure class="u-block-hover g-pos-rel">
                                            <img class="img-fluid u-block-hover__main--zoom-v1 g-transition-0_5"
                                                src="blogmagazine/classic/assets/img-temp/350x400/img4.jpg"
                                                alt="Image Description">
                                            <figcaption class="g-color-white">
                                                <div class="g-pos-abs g-top-0 g-left-0 g-pa-20">
                                                    <h2 class="h4 g-color-white">Magnificent<br>Woman</h2>
                                                </div>
                                                <div class="w-50 g-pos-abs g-bottom-0 g-left-0 g-pa-20">
                                                    <span class="d-block h6 g-color-white">The New York Times</span>
                                                </div>
                                                <div class="w-50 text-right g-pos-abs g-bottom-0 g-right-0 g-pa-20">
                                                    <span class="d-block h6 g-color-white">2017</span>
                                                </div>
                                                <a class="u-link-v2" href="bm-classic-single-2.html"></a>
                                            </figcaption>
                                        </figure>
                                        <!-- End Magazines -->
                                    </div>
                                </div>
                                <!-- End Carousel -->
                            </div>
                        </div>

                        <div class="w-100 g-brd-bottom--md g-brd-secondary-light-v2 g-pb-40--md g-mb-40"></div>

                        <div class="col-sm-4 col-md-3 g-brd-right--md g-brd-secondary-light-v2 g-mb-30 g-mb-0--md">
                            <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">Arts</h3>

                            <!-- Arts -->
                            <ul class="list-unstyled mb-0">
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">Movies</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">Sculptures</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">Books</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">Dance</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">Television</a>
                                </li>
                                <li class="g-px-0 g-my-8">
                                    <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                    <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                        href="#">Video: Arts</a>
                                </li>
                            </ul>
                            <!-- End Arts -->
                        </div>

                        <div class="col-sm-8 col-md-6 g-brd-right--md g-brd-secondary-light-v2 g-mb-30 g-mb-0--md">
                            <div class="g-pl-10--md">
                                <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-2">Listing &amp; More
                                </h3>

                                <div class="row">
                                    <!-- Listing & More -->
                                    <ul class="col list-unstyled mb-0">
                                        <li class="g-px-0 g-my-8">
                                            <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                            <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                                href="#">Reader Center</a>
                                        </li>
                                        <li class="g-px-0 g-my-8">
                                            <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                            <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                                href="#">Classifieds</a>
                                        </li>
                                        <li class="g-px-0 g-my-8">
                                            <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                            <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                                href="#">Tools &amp; Services</a>
                                        </li>
                                        <li class="g-px-0 g-my-8">
                                            <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                            <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                                href="#">Unify Topics</a>
                                        </li>
                                        <li class="g-px-0 g-my-8">
                                            <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                            <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                                href="#">Events Guide</a>
                                        </li>
                                        <li class="g-px-0 g-my-8">
                                            <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                            <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                                href="#">Blogs</a>
                                        </li>
                                    </ul>
                                    <!-- End Listing & More -->

                                    <!-- Listing & More -->
                                    <ul class="col list-unstyled mb-0">
                                        <li class="g-px-0 g-my-8">
                                            <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                            <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                                href="#">Multimedia</a>
                                        </li>
                                        <li class="g-px-0 g-my-8">
                                            <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                            <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                                href="#">Photography</a>
                                        </li>
                                        <li class="g-px-0 g-my-8">
                                            <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                            <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                                href="#">Music</a>
                                        </li>
                                        <li class="g-px-0 g-my-8">
                                            <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                            <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                                href="#">Video</a>
                                        </li>
                                        <li class="g-px-0 g-my-8">
                                            <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                            <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                                href="#">Unify Store</a>
                                        </li>
                                        <li class="g-px-0 g-my-8">
                                            <i class="g-color-primary mr-2 fa fa-angle-right"></i>
                                            <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                                href="#">Unify Journeys</a>
                                        </li>
                                    </ul>
                                    <!-- End Listing & More -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="g-pl-10--md">
                                <h3 class="h6 g-font-primary g-font-weight-700 text-uppercase mb-3">Subscribe</h3>

                                <!-- Subscribe -->
                                <ul class="list-unstyled mb-0">
                                    <li class="g-px-0 g-my-8">
                                        <i
                                            class="align-middle g-color-primary mr-2 icon-real-estate-044 u-line-icon-pro"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                            href="#">Home Delivery</a>
                                    </li>
                                    <li class="g-px-0 g-my-8">
                                        <i
                                            class="align-middle g-color-primary mr-2 icon-education-060 u-line-icon-pro"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                            href="#">Digital Subscriptions</a>
                                    </li>
                                    <li class="g-px-0 g-my-15">
                                        <i
                                            class="align-middle g-color-primary mr-2 icon-finance-160 u-line-icon-pro"></i>
                                        <a class="u-link-v5 g-color-secondary-dark-v1 g-color-primary--hover g-font-size-13 g-pl-0 g-pl-7--hover g-transition-0_3 g-py-7"
                                            href="#">Corporate Subscriptions</a>
                                    </li>
                                    <li class="dropdown-divider g-brd-secondary-light-v2 g-px-0 g-mt-8 g-my-15"></li>
                                    <li class="row g-px-0 g-my-8 g-mx-minus-5">
                                        <div class="col g-px-5 mb-2">
                                            <!-- Button -->
                                            <button
                                                class="btn btn-block u-btn-black g-brd-primary--hover g-bg-primary--hover text-left g-px-12"
                                                type="button">
                                                <div class="media align-items-center">
                                                    <div class="d-flex mr-3">
                                                        <i class="g-font-size-25 fa fa-android"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block g-font-size-10">Get it for</span>
                                                        <span class="d-block g-font-size-15">Android</span>
                                                    </div>
                                                </div>
                                            </button>
                                            <!-- End Button -->
                                        </div>

                                        <div class="col g-px-5 mb-2">
                                            <!-- Button -->
                                            <button
                                                class="btn btn-block u-btn-black g-brd-primary--hover g-bg-primary--hover text-left g-px-12"
                                                type="button">
                                                <div class="media align-items-center">
                                                    <div class="d-flex mr-3">
                                                        <i class="g-font-size-25 fa fa-apple"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="d-block g-font-size-10">Get it for</span>
                                                        <span class="d-block g-font-size-15">iOS</span>
                                                    </div>
                                                </div>
                                            </button>
                                            <!-- End Button -->
                                        </div>
                                    </li>
                                </ul>
                                <!-- End Subscribe -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Footer - Content -->

                <!-- Footer - Top Section -->
                <div class="g-brd-bottom g-brd-secondary-light-v2 g-mb-30">
                    <div class="row align-items-center">
                        <div class="col-md-4 g-hidden-sm-down g-mb-30">
                            <!-- Logo -->
                            <a href="bm-classic-home-2.html">
                                <img class="g-width-150" src="blogmagazine/classic/assets/img/logo.png"
                                    alt="Logo">
                            </a>
                            <!-- End Logo -->
                        </div>

                        <div class="col-md-4 ml-auto g-mb-30">
                            <!-- Social Icons -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item g-mx-2">
                                    <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded"
                                        href="#" data-toggle="tooltip" data-placement="top"
                                        title="Like Us on Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mx-2">
                                    <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded"
                                        href="#" data-toggle="tooltip" data-placement="top"
                                        title="Follow Us on Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mx-2">
                                    <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded"
                                        href="#" data-toggle="tooltip" data-placement="top"
                                        title="Join Our Cirlce on Google Plus">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mx-2">
                                    <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded"
                                        href="#" data-toggle="tooltip" data-placement="top"
                                        title="Subscribe to Our YouTube Channel">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mx-2">
                                    <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded"
                                        href="#" data-toggle="tooltip" data-placement="top"
                                        title="Follow Us on Instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mx-2">
                                    <a class="u-icon-v2 u-icon-size--sm g-brd-secondary-light-v2 g-color-secondary-dark-v2 g-color-white--hover g-bg-primary--hover g-font-size-default rounded"
                                        href="#" data-toggle="tooltip" data-placement="top" title="RSS">
                                        <i class="fa fa-rss"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Social Icons -->
                        </div>

                        <div class="col-md-4 text-center text-md-right g-mb-30">
                            <!-- Subscribe Form -->
                            <form class="input-group rounded">
                                <input
                                    class="form-control g-brd-secondary-light-v2 g-color-secondary-dark-v1 g-placeholder-secondary-dark-v1 g-bg-secondary-light-v3 g-font-weight-400 g-font-size-13 rounded g-px-20 g-py-12"
                                    type="email" placeholder="Enter your email address">
                                <span class="input-group-addon g-brd-none g-py-0 g-pr-0">
                                    <button
                                        class="btn u-btn-white g-color-primary--hover g-font-weight-600 g-font-size-13 text-uppercase rounded g-py-12 g-px-20"
                                        type="submit">Subscribe</button>
                                </span>
                            </form>
                            <!-- End Subscribe Form -->
                        </div>
                    </div>
                </div>
                <!-- End Footer - Top Section -->

                <!-- Footer - Bottom Section -->
                <div class="row align-items-center">
                    <div class="col-md-2 g-brd-right--md g-brd-secondary-light-v2 g-mb-30">
                        <!-- Copyright -->
                        <p class="g-color-secondary-light-v1 g-font-size-12 mb-0">&copy; 2017 Htmlstream.</p>
                        <!-- End Copyright -->
                    </div>

                    <div class="col-md-8 g-brd-right--md g-brd-secondary-light-v2 g-mb-30">
                        <!-- Links -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item g-pl-0 g-pr-10">
                                <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#">Contact
                                    Us</a>
                            </li>
                            <li class="list-inline-item g-px-10">
                                <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#">Help</a>
                            </li>
                            <li class="list-inline-item g-px-10">
                                <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#">Work
                                    with Us</a>
                            </li>
                            <li class="list-inline-item g-px-10">
                                <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12"
                                    href="#">Advertise</a>
                            </li>
                            <li class="list-inline-item g-px-10">
                                <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#">Your
                                    Ad Choices</a>
                            </li>
                            <li class="list-inline-item g-px-10">
                                <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12"
                                    href="#">Privacy</a>
                            </li>
                            <li class="list-inline-item g-px-10">
                                <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#">Terms
                                    of Use</a>
                            </li>
                            <li class="list-inline-item g-px-10">
                                <a class="u-link-v5 g-color-secondary-light-v1 g-font-size-12" href="#">Send
                                    Feedback</a>
                            </li>
                        </ul>
                        <!-- End Links -->
                    </div>

                    <div class="col-md-2 g-mb-30">
                        <!-- Large Button Group -->
                        <div class="btn-group dropup float-md-right">
                            <button
                                class="btn align-items-center g-color-secondary-light-v1 g-bg-transparent g-color-primary--hover g-font-size-12 g-px-0"
                                type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <svg class="g-pos-rel g-top-2" xmlns="http://www.w3.org/2000/svg" height="11"
                                    width="27" viewBox="0 0 640 480">
                                    <defs>
                                        <clipPath id="a">
                                            <path fill-opacity=".67" d="M-85.333 0h682.67v512h-682.67z" />
                                        </clipPath>
                                    </defs>
                                    <g clip-path="url(#a)" transform="translate(80) scale(.94)">
                                        <g stroke-width="1pt">
                                            <path fill="#006" d="M-256 0H768.02v512.01H-256z" />
                                            <path
                                                d="M-256 0v57.244l909.535 454.768H768.02V454.77L-141.515 0H-256zM768.02 0v57.243L-141.515 512.01H-256v-57.243L653.535 0H768.02z"
                                                fill="#fff" />
                                            <path
                                                d="M170.675 0v512.01h170.67V0h-170.67zM-256 170.67v170.67H768.02V170.67H-256z"
                                                fill="#fff" />
                                            <path
                                                d="M-256 204.804v102.402H768.02V204.804H-256zM204.81 0v512.01h102.4V0h-102.4zM-256 512.01L85.34 341.34h76.324l-341.34 170.67H-256zM-256 0L85.34 170.67H9.016L-256 38.164V0zm606.356 170.67L691.696 0h76.324L426.68 170.67h-76.324zM768.02 512.01L426.68 341.34h76.324L768.02 473.848v38.162z"
                                                fill="#c00" />
                                        </g>
                                    </g>
                                </svg>
                                English
                                <i class="g-font-size-12 ml-2 fa fa-caret-up"></i>
                            </button>
                            <div class="dropdown-menu g-brd-secondary-light-v2 g-bg-white g-font-size-12">
                                <a class="dropdown-item g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-py-5"
                                    href="#">
                                    <svg class="g-pos-rel g-top-1" xmlns="http://www.w3.org/2000/svg"
                                        height="11" width="27" viewBox="0 0 640 480">
                                        <defs>
                                            <clipPath id="a">
                                                <path fill-opacity=".67" d="M-85.333 0h682.67v512h-682.67z" />
                                            </clipPath>
                                        </defs>
                                        <g clip-path="url(#a)" transform="translate(80) scale(.94)">
                                            <g stroke-width="1pt">
                                                <path fill="#006" d="M-256 0H768.02v512.01H-256z" />
                                                <path
                                                    d="M-256 0v57.244l909.535 454.768H768.02V454.77L-141.515 0H-256zM768.02 0v57.243L-141.515 512.01H-256v-57.243L653.535 0H768.02z"
                                                    fill="#fff" />
                                                <path
                                                    d="M170.675 0v512.01h170.67V0h-170.67zM-256 170.67v170.67H768.02V170.67H-256z"
                                                    fill="#fff" />
                                                <path
                                                    d="M-256 204.804v102.402H768.02V204.804H-256zM204.81 0v512.01h102.4V0h-102.4zM-256 512.01L85.34 341.34h76.324l-341.34 170.67H-256zM-256 0L85.34 170.67H9.016L-256 38.164V0zm606.356 170.67L691.696 0h76.324L426.68 170.67h-76.324zM768.02 512.01L426.68 341.34h76.324L768.02 473.848v38.162z"
                                                    fill="#c00" />
                                            </g>
                                        </g>
                                    </svg>
                                    English
                                </a>
                                <a class="dropdown-item g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-py-5"
                                    href="#">
                                    <svg class="g-pos-rel g-top-1" xmlns="http://www.w3.org/2000/svg"
                                        height="11" width="27" viewBox="0 0 640 480">
                                        <g stroke-width="1pt" fill-rule="evenodd">
                                            <path fill="#fff" d="M0 0h640v480H0z" />
                                            <path fill="#00267f" d="M0 0h213.33v480H0z" />
                                            <path fill="#f31830" d="M426.67 0H640v480H426.67z" />
                                        </g>
                                    </svg>
                                    Spanish
                                </a>
                                <a class="dropdown-item g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-py-5"
                                    href="#">
                                    <svg class="g-pos-rel g-top-1" xmlns="http://www.w3.org/2000/svg"
                                        height="11" width="27" viewBox="0 0 640 480">
                                        <g fill-rule="evenodd" stroke-width="1pt">
                                            <path fill="#fff" d="M0 0h640v480H0z" />
                                            <path fill="#0039a6" d="M0 160.003h640V480H0z" />
                                            <path fill="#d52b1e" d="M0 319.997h640V480H0z" />
                                        </g>
                                    </svg>
                                    Russian
                                </a>
                                <a class="dropdown-item g-color-secondary-dark-v1 g-color-primary--hover g-bg-secondary--hover g-py-5"
                                    href="#">
                                    <svg class="g-pos-rel g-top-1" xmlns="http://www.w3.org/2000/svg"
                                        height="11" width="27" viewBox="0 0 640 480">
                                        <path fill="#ffce00" d="M0 320h640v160.002H0z" />
                                        <path d="M0 0h640v160H0z" />
                                        <path fill="#d00" d="M0 160h640v160H0z" />
                                    </svg>
                                    German
                                </a>
                            </div>
                        </div>
                        <!-- End Large Button Group -->
                    </div>
                </div>
                <!-- End Footer - Bottom Section -->
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Go To -->
        <a class="js-go-to u-go-to-v2" href="#" data-type="fixed"
            data-position='{
           "bottom": 15,
           "right": 15
         }' data-offset-top="400"
            data-compensation="#js-header" data-show-effect="zoomIn">
            <i class="hs-icon hs-icon-arrow-top"></i>
        </a>
        <!-- End Go To -->
    </main>

    <div class="u-outer-spaces-helper"></div>

    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.js/index.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/appear.js"></script>
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.dropdown.js"></script>
    <script src="assets/js/components/hs.carousel.js"></script>
    <script src="assets/js/components/hs.popup.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of MegaMenu
            $('.js-mega-menu').HSMegaMenu();

            // initialization of HSDropdown component
            $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
                afterOpen: function() {
                    $(this).find('input[type="search"]').focus();
                }
            });

            // initialization of carousel
            $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

            $('#carouselCus1').slick('setOption', 'responsive', [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }], true);

            $('#carouselCus2').slick('setOption', 'responsive', [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }], true);

            $('#carouselCus3').slick('setOption', 'responsive', [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }], true);

            // initialization of popups
            $.HSCore.components.HSPopup.init('.js-fancybox');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });
    </script>
</body>

</html>
