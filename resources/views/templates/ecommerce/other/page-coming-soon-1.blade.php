<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>E-commerce Coming Soon Page | Unify - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet"
        href="//fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500%2C700%7CPlayfair+Display%7CRaleway%7CSpectral%7CRubik">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line/css/simple-line-icons.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="ecommerce/assets/css/styles.e-commerce.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <main>
        <!-- Header -->
        @include('layouts.ecommerce.ecommerce-header')
        <!-- End Header -->

        <!-- Coming Soon -->
        <div class="g-pos-rel g-py-100">
            <div class="g-pos-rel g-z-index-1">
                <!-- Heading -->
                <div class="g-max-width-645 text-center mx-auto g-mb-70">
                    <h2 class="g-font-size-50 mb-3">Coming Soon</h2>
                    <p class="g-font-size-17">We are glad to see you, but please be patient. This page is under
                        construction.</p>
                </div>
                <!-- End Heading -->

                <div class="container">
                    <!-- Countdown -->
                    <div class="js-countdown u-countdown-v1 text-center g-mb-70" data-end-date="2019/08/09"
                        data-month-format="%m" data-days-format="%d" data-hours-format="%H" data-minutes-format="%M"
                        data-seconds-format="%S">
                        <div
                            class="d-inline-block u-shadow-v19 g-brd-around g-brd-gray-light-v3 rounded g-pa-20 g-mx-15 g-mb-30">
                            <div class="js-cd-month g-color-primary g-font-weight-700 g-font-size-40 g-line-height-1_4">
                            </div>
                            <hr class="g-brd-gray-light-v3 my-2 mb-3">
                            <h3 class="h6 g-color-text g-font-weight-400 mb-0">Month</h3>
                        </div>

                        <div
                            class="d-inline-block u-shadow-v19 g-brd-around g-brd-gray-light-v3 rounded g-pa-20 g-mx-15 g-mb-30">
                            <div class="js-cd-days g-color-primary g-font-weight-700 g-font-size-40 g-line-height-1_4">
                            </div>
                            <hr class="g-brd-gray-light-v3 my-2 mb-3">
                            <h3 class="h6 g-color-text g-font-weight-400 mb-0">Days</h3>
                        </div>

                        <div
                            class="d-inline-block u-shadow-v19 g-brd-around g-brd-gray-light-v3 rounded g-pa-20 g-mx-15 g-mb-30">
                            <div class="js-cd-hours g-color-primary g-font-weight-700 g-font-size-40 g-line-height-1_4">
                            </div>
                            <hr class="g-brd-gray-light-v3 my-2 mb-3">
                            <h3 class="h6 g-color-text g-font-weight-400 mb-0">Hours</h3>
                        </div>

                        <div
                            class="d-inline-block u-shadow-v19 g-brd-around g-brd-gray-light-v3 rounded g-pa-20 g-mx-15 g-mb-30">
                            <div
                                class="js-cd-minutes g-color-primary g-font-weight-700 g-font-size-40 g-line-height-1_4">
                            </div>
                            <hr class="g-brd-gray-light-v3 my-2 mb-3">
                            <h3 class="h6 g-color-text g-font-weight-400 mb-0">Minutes</h3>
                        </div>

                        <div
                            class="d-inline-block u-shadow-v19 g-brd-around g-brd-gray-light-v3 rounded g-pa-20 g-mx-15 g-mb-30">
                            <div
                                class="js-cd-seconds g-color-primary g-font-weight-700 g-font-size-40 g-line-height-1_4">
                            </div>
                            <hr class="g-brd-gray-light-v3 my-2 mb-3">
                            <h3 class="h6 g-color-text g-font-weight-400 mb-0">Seconds</h3>
                        </div>
                    </div>
                    <!-- End Countdown -->

                    <!-- Subscribe -->
                    <div class="g-max-width-550 text-center mx-auto">
                        <div class="mb-4">
                            <h2 class="h4">Subscribe</h2>
                            <p class="g-color-gray-dark-v5">Subscribe and stay in touch with the latest news, deals and
                                promotions.</p>
                        </div>

                        <form class="input-group u-shadow-v21 g-brd-around g-brd-gray-light-v4 rounded">
                            <input
                                class="form-control g-brd-none g-color-gray-dark-v4 g-placeholder-gray-dark-v3 rounded g-px-25 g-py-17"
                                type="email" placeholder="Enter your email">
                            <span class="input-group-addon u-shadow-v19 g-brd-none g-bg-white">
                                <button class="btn u-btn-primary g-font-size-12 rounded text-uppercase g-py-12 g-px-15"
                                    type="submit"><i class="fa fa-long-arrow-right"></i></button>
                            </span>
                        </form>
                        <!-- End Subscribe -->
                    </div>
                </div>
            </div>

            <div class="g-pos-abs g-bottom-0 g-right-minus-50 g-right-0--lg">
                <img class="img-fluid" src="ecommerce/assets/img-temp/444x359/img1.png" alt="Image Description">
            </div>
        </div>
        <!-- End Coming Soon -->

        <!-- Call to Action -->
        <div class="g-bg-primary">
            <div class="container g-py-20">
                <div class="row justify-content-center">
                    <div class="col-md-4 mx-auto g-py-20">
                        <!-- Media -->
                        <div class="media g-px-50--lg">
                            <i
                                class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-real-estate-048 u-line-icon-pro"></i>
                            <div class="media-body">
                                <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free
                                    Shipping</span>
                                <span class="d-block g-color-white-opacity-0_8">In 2-3 Days</span>
                            </div>
                        </div>
                        <!-- End Media -->
                    </div>

                    <div class="col-md-4 mx-auto g-brd-x--md g-brd-white-opacity-0_3 g-py-20">
                        <!-- Media -->
                        <div class="media g-px-50--lg">
                            <i
                                class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-real-estate-040 u-line-icon-pro"></i>
                            <div class="media-body">
                                <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free
                                    Returns</span>
                                <span class="d-block g-color-white-opacity-0_8">No Questions Asked</span>
                            </div>
                        </div>
                        <!-- End Media -->
                    </div>

                    <div class="col-md-4 mx-auto g-py-20">
                        <!-- Media -->
                        <div class="media g-px-50--lg">
                            <i
                                class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-hotel-restaurant-062 u-line-icon-pro"></i>
                            <div class="media-body text-left">
                                <span
                                    class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free
                                    24</span>
                                <span class="d-block g-color-white-opacity-0_8">Days Storage</span>
                            </div>
                        </div>
                        <!-- End Media -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Call to Action -->

        <!-- Footer -->
        <footer class="g-bg-main-light-v1">
            <!-- Content -->
            <div class="g-brd-bottom g-brd-secondary-light-v1">
                <div class="container g-pt-100">
                    <div class="row justify-content-start g-mb-30 g-mb-0--md">
                        <div class="col-md-5 g-mb-30">
                            <h2 class="h5 g-color-gray-light-v3 mb-4">Products</h2>

                            <div class="row">
                                <div class="col-4 g-mb-20">
                                    <!-- Links -->
                                    <ul class="list-unstyled g-font-size-13 mb-0">
                                        <li class="g-mb-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">SmartPhone</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Laptop</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Mouse</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Monitor</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Watch</a>
                                        </li>
                                    </ul>
                                    <!-- End Links -->
                                </div>

                                <div class="col-4 g-mb-20">
                                    <!-- Links -->
                                    <ul class="list-unstyled g-font-size-13 mb-0">
                                        <li class="g-mb-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Tablet</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Accessorie</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Mouses Pad</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Handset</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Phablet</a>
                                        </li>
                                    </ul>
                                    <!-- End Links -->
                                </div>

                                <div class="col-4 g-mb-20">
                                    <!-- Links -->
                                    <ul class="list-unstyled g-font-size-13 mb-0">
                                        <li class="g-mb-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Speakers</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Camera</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Play Station</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Xbox</a>
                                        </li>
                                    </ul>
                                    <!-- End Links -->
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 g-mb-30 g-mb-0--sm">
                            <h2 class="h5 g-color-gray-light-v3 mb-4">Brands</h2>

                            <div class="row">
                                <div class="col-6 g-mb-20">
                                    <!-- Links -->
                                    <ul class="list-unstyled g-font-size-13 mb-0">
                                        <li class="g-mb-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Logitech</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Samsung</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Microsoft</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Apple</a>
                                        </li>
                                    </ul>
                                    <!-- End Links -->
                                </div>

                                <div class="col-6 g-mb-20">
                                    <!-- Links -->
                                    <ul class="list-unstyled g-font-size-13 mb-0">
                                        <li class="g-mb-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Huawei</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Motorola</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Sony</a>
                                        </li>
                                        <li class="g-my-10">
                                            <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover"
                                                href="#!">Nokia</a>
                                        </li>
                                    </ul>
                                    <!-- End Links -->
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-5 col-md-3 ml-auto g-mb-30 g-mb-0--sm">
                            <h2 class="h5 g-color-gray-light-v3 mb-4">Contacts</h2>

                            <!-- Links -->
                            <ul class="list-unstyled g-color-gray-dark-v5 g-font-size-13">
                                <li class="media my-3">
                                    <i class="d-flex mt-1 mr-3 icon-hotel-restaurant-235 u-line-icon-pro"></i>
                                    <div class="media-body">
                                        Unit 25 Suite 3, 925 Prospect<br>PI New York Avenue
                                    </div>
                                </li>
                                <li class="media my-3">
                                    <i class="d-flex mt-1 mr-3 icon-communication-062 u-line-icon-pro"></i>
                                    <div class="media-body">
                                        htmlstream@support.com
                                    </div>
                                </li>
                                <li class="media my-3">
                                    <i class="d-flex mt-1 mr-3 icon-communication-033 u-line-icon-pro"></i>
                                    <div class="media-body">
                                        +32 333 444 555
                                    </div>
                                </li>
                            </ul>
                            <!-- End Links -->
                        </div>
                    </div>

                    <!-- Secondary Content -->
                    <div class="row">
                        <div class="col-md-4 g-mb-50">
                            <h2 class="h5 g-color-gray-light-v3 mb-4">Subscribe</h2>

                            <!-- Subscribe Form -->
                            <form class="input-group u-shadow-v19 rounded">
                                <input
                                    class="form-control g-brd-none g-color-gray-dark-v5 g-bg-main-light-v2 g-bg-main-light-v2--focus g-placeholder-gray-dark-v3 rounded g-px-20 g-py-8"
                                    type="email" placeholder="Enter your email">
                                <span class="input-group-addon u-shadow-v19 g-brd-none g-bg-main-light-v2 g-pa-5">
                                    <button class="btn u-btn-primary rounded text-uppercase g-py-8 g-px-18"
                                        type="submit"><i class="fa fa-angle-right"></i></button>
                                </span>
                            </form>
                            <!-- End Subscribe Form -->
                        </div>

                        <div class="col-6 col-md-3 offset-lg-1 g-mb-30">
                            <h2 class="h5 g-color-gray-light-v3 mb-4">Language/Currency:</h2>

                            <!-- Large Button Group -->
                            <div class="btn-group dropup">
                                <button
                                    class="btn btn-black g-bg-main-light-v1 btn-lg g-color-gray-dark-v5 g-color-primary--hover g-font-size-default g-pl-0 mr-5"
                                    type="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <svg class="g-ml-minus-6" xmlns="http://www.w3.org/2000/svg" height="11"
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
                                <div class="dropdown-menu g-brd-gray-dark-v2 g-bg-main-light-v2">
                                    <a class="dropdown-item g-color-gray-dark-v5" href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="11" width="27"
                                            viewBox="0 0 640 480">
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
                                    <a class="dropdown-item g-color-gray-dark-v5" href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="11" width="27"
                                            viewBox="0 0 640 480">
                                            <g stroke-width="1pt" fill-rule="evenodd">
                                                <path fill="#fff" d="M0 0h640v480H0z" />
                                                <path fill="#00267f" d="M0 0h213.33v480H0z" />
                                                <path fill="#f31830" d="M426.67 0H640v480H426.67z" />
                                            </g>
                                        </svg>
                                        Spanish
                                    </a>
                                    <a class="dropdown-item g-color-gray-dark-v5" href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="11" width="27"
                                            viewBox="0 0 640 480">
                                            <g fill-rule="evenodd" stroke-width="1pt">
                                                <path fill="#fff" d="M0 0h640v480H0z" />
                                                <path fill="#0039a6" d="M0 160.003h640V480H0z" />
                                                <path fill="#d52b1e" d="M0 319.997h640V480H0z" />
                                            </g>
                                        </svg>
                                        Russian
                                    </a>
                                    <a class="dropdown-item g-color-gray-dark-v5" href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="11" width="27"
                                            viewBox="0 0 640 480">
                                            <path fill="#ffce00" d="M0 320h640v160.002H0z" />
                                            <path d="M0 0h640v160H0z" />
                                            <path fill="#d00" d="M0 160h640v160H0z" />
                                        </svg>
                                        German
                                    </a>
                                </div>
                            </div>
                            <!-- End Large Button Group -->

                            <!-- Large Button Group -->
                            <div class="btn-group dropup">
                                <button
                                    class="btn btn-black g-bg-main-light-v1 btn-lg g-color-gray-dark-v5 g-color-primary--hover g-font-size-default g-pl-0"
                                    type="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="mr-2 fa fa-euro"></i>
                                    Euro
                                    <i class="mr-2 g-font-size-12 ml-2 fa fa-caret-up"></i>
                                </button>
                                <div class="dropdown-menu g-max-width-100 g-brd-gray-dark-v2 g-bg-main-light-v2">
                                    <a class="dropdown-item g-color-gray-dark-v5" href="#!">
                                        <i class="mr-2 fa fa-euro"></i>
                                        Euro
                                    </a>
                                    <a class="dropdown-item g-color-gray-dark-v5" href="#!">
                                        <i class="mr-2 fa fa-dollar"></i>
                                        US Dollars
                                    </a>
                                    <a class="dropdown-item g-color-gray-dark-v5" href="#!">
                                        <i class="mr-2 fa fa-gbp"></i>
                                        GBP
                                    </a>
                                    <a class="dropdown-item g-color-gray-dark-v5" href="#!">
                                        <i class="mr-2 fa fa-yen"></i>
                                        Yen
                                    </a>
                                </div>
                            </div>
                            <!-- End Large Button Group -->
                        </div>

                        <div class="col-6 col-md-3 ml-auto g-mb-30">
                            <h2 class="h5 g-color-gray-light-v3 mb-4">Follow Us On:</h2>

                            <!-- Social Icons -->
                            <ul class="list-inline mb-50">
                                <li class="list-inline-item g-mr-2">
                                    <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-facebook--hover rounded"
                                        href="#!">
                                        <i
                                            class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-facebook"></i>
                                        <i
                                            class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mx-2">
                                    <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-twitter--hover rounded"
                                        href="#!">
                                        <i
                                            class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-twitter"></i>
                                        <i
                                            class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mx-2">
                                    <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-instagram--hover rounded"
                                        href="#!">
                                        <i
                                            class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-instagram"></i>
                                        <i
                                            class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mx-2">
                                    <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-google-plus--hover rounded"
                                        href="#!">
                                        <i
                                            class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-google-plus"></i>
                                        <i
                                            class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mx-2">
                                    <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-linkedin--hover rounded"
                                        href="#!">
                                        <i
                                            class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-linkedin"></i>
                                        <i
                                            class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Social Icons -->
                        </div>
                    </div>
                    <!-- End Secondary Content -->
                </div>
            </div>
            <!-- End Content -->

            <!-- Copyright -->
            <div class="container g-pt-30 g-pb-10">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 g-mb-20">
                        <p class="g-font-size-13 mb-0">2017 © Htmlstream. All Rights Reserved.</p>
                    </div>

                    <div class="col-md-6 text-md-right g-mb-20">
                        <ul class="list-inline g-color-gray-dark-v5 g-font-size-25 mb-0">
                            <li class="list-inline-item g-cursor-pointer mr-1">
                                <i class="fa fa-cc-visa" title="Visa" data-toggle="tooltip"
                                    data-placement="top"></i>
                            </li>
                            <li class="list-inline-item g-cursor-pointer mx-1">
                                <i class="fa fa-cc-paypal" title="Paypal" data-toggle="tooltip"
                                    data-placement="top"></i>
                            </li>
                            <li class="list-inline-item g-cursor-pointer mx-1">
                                <i class="fa fa-cc-mastercard" title="Master Card" data-toggle="tooltip"
                                    data-placement="top"></i>
                            </li>
                            <li class="list-inline-item g-cursor-pointer ml-1">
                                <i class="fa fa-cc-stripe" title="Stripe" data-toggle="tooltip"
                                    data-placement="top"></i>
                            </li>
                            <li class="list-inline-item g-cursor-pointer ml-1">
                                <i class="fa fa-cc-discover" title="Discover" data-toggle="tooltip"
                                    data-placement="top"></i>
                            </li>
                            <li class="list-inline-item g-cursor-pointer ml-1">
                                <i class="fa fa-cc-jcb" title="JCB" data-toggle="tooltip"
                                    data-placement="top"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->
        </footer>
        <!-- End Footer -->

        <a class="js-go-to u-go-to-v2" href="#!" data-type="fixed"
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
    <script src="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/jquery.countdown.min.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.dropdown.js"></script>
    <script src="assets/js/components/hs.scrollbar.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>
    <script src="assets/js/components/hs.countdown.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });

            // initialization of HSDropdown component
            $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
                afterOpen: function() {
                    $(this).find('input[type="search"]').focus();
                }
            });

            // initialization of HSScrollBar component
            $.HSCore.components.HSScrollBar.init($('.js-scrollbar'));

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // initialization of countdowns
            var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                yearsElSelector: '.js-cd-years',
                monthElSelector: '.js-cd-month',
                daysElSelector: '.js-cd-days',
                hoursElSelector: '.js-cd-hours',
                minutesElSelector: '.js-cd-minutes',
                secondsElSelector: '.js-cd-seconds'
            });
        });
    </script>
</body>

</html>
