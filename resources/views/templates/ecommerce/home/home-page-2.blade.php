<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>E-commerce Home Page 2 | Unify - Responsive Website Template</title>

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

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">

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

        <!-- Promo Slider -->
        <div class="g-bg-gray-light-v5 g-pt-20">
            <div class="container">
                <div class="row align-items-center g-bg-white g-py-15">
                    <div class="col-md-4 g-pl-30 g-mb-40 g-mb-0--md">
                        <!-- Product Info -->
                        <div class="text-center">
                            <div class="mb-4">
                                <h1 class="h2">Adidas Sneakers</h1>
                                <p>Our newest high top builds on the timeline appeal of traditional vulcanized shoes
                                    that are reimagined in a new, limited edition.</p>
                            </div>

                            <div class="mb-4">
                                <span class="g-color-primary g-font-weight-500 g-font-size-30 mr-2">$99.00</span>
                            </div>
                            <!-- End Product Info -->
                        </div>

                        <!-- Accordion -->
                        <div id="accordion-01" role="tablist" aria-multiselectable="true">
                            <div id="accordion-01-heading-01" class="g-brd-y g-brd-gray-light-v3 py-3" role="tab">
                                <h5 class="g-font-weight-400 g-font-size-default mb-0">
                                    <a class="d-block g-color-gray-dark-v5 g-text-underline--none--hover"
                                        href="#accordion-01-body-01" data-toggle="collapse" data-parent="#accordion-01"
                                        aria-expanded="false" aria-controls="accordion-01-body-01">Details
                                        <span class="float-right g-pos-rel g-top-3 mr-1 fa fa-angle-down"></span></a>
                                </h5>
                            </div>
                            <div id="accordion-01-body-01" class="collapse" role="tabpanel"
                                aria-labelledby="accordion-01-heading-01">
                                <div class="g-py-10">
                                    <p class="g-font-size-12 mb-2">SHELL: 100% POLYESTER</p>
                                    <p class="g-font-size-12 mb-2">Always check the care label instructions.</p>
                                    <p class="g-font-size-12 mb-2">Professional dry clean only. Remove all detachable
                                        parts before cleaning. Do not iron.</p>
                                    <p class="g-font-size-12 mb-2">(Navy: Avoid contact with light coloured fabrics and
                                        upholstery especially whilst damp.)</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion -->

                        <!-- Colour -->
                        <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3"
                            role="tab">
                            <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Colour</h5>

                            <!-- Checkbox -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item g-mx-10">
                                    <label class="form-check-inline u-check">
                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1"
                                            type="radio">
                                        <span
                                            class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                                            <i
                                                class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-primary rounded-circle"></i>
                                        </span>
                                    </label>
                                </li>
                                <li class="list-inline-item g-mx-10">
                                    <label class="form-check-inline u-check">
                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1"
                                            type="radio">
                                        <span
                                            class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                                            <i
                                                class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-beige rounded-circle"></i>
                                        </span>
                                    </label>
                                </li>
                                <li class="list-inline-item g-mx-10">
                                    <label class="form-check-inline u-check">
                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1"
                                            type="radio">
                                        <span
                                            class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                                            <i
                                                class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-black rounded-circle"></i>
                                        </span>
                                    </label>
                                </li>
                                <li class="list-inline-item g-ml-10 g-mr-20">
                                    <label class="form-check-inline u-check">
                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1"
                                            type="radio">
                                        <span
                                            class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                                            <i
                                                class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-gray-dark-v4 rounded-circle"></i>
                                        </span>
                                    </label>
                                </li>
                            </ul>
                            <!-- End Checkbox -->
                        </div>
                        <!-- End Colour -->

                        <!-- Size -->
                        <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3"
                            role="tab">
                            <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Size</h5>

                            <!-- Checkbox -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item g-mx-15">
                                    <label class="form-check-inline u-check">
                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1"
                                            type="radio">
                                        <span
                                            class="d-block u-check-icon-checkbox-v4 g-brd-none g-absolute-centered--y g-left-0">
                                            S
                                        </span>
                                    </label>
                                </li>
                                <li class="list-inline-item g-mx-15">
                                    <label class="form-check-inline u-check">
                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1"
                                            type="radio">
                                        <span
                                            class="d-block u-check-icon-checkbox-v4 g-brd-none g-absolute-centered--y g-left-0">
                                            M
                                        </span>
                                    </label>
                                </li>
                                <li class="list-inline-item g-mx-15">
                                    <label class="form-check-inline u-check">
                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1"
                                            type="radio">
                                        <span
                                            class="d-block u-check-icon-checkbox-v4 g-brd-none g-absolute-centered--y g-left-0">
                                            L
                                        </span>
                                    </label>
                                </li>
                                <li class="list-inline-item g-mx-15">
                                    <label class="form-check-inline u-check">
                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1"
                                            type="radio">
                                        <span
                                            class="d-block u-check-icon-checkbox-v4 g-brd-none g-absolute-centered--y g-left-0">
                                            XL
                                        </span>
                                    </label>
                                </li>
                                <li class="list-inline-item g-ml-15 g-mr-20">
                                    <label class="form-check-inline u-check">
                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1"
                                            type="radio">
                                        <span
                                            class="d-block u-check-icon-checkbox-v4 g-brd-none g-absolute-centered--y g-left-0">
                                            XXL
                                        </span>
                                    </label>
                                </li>
                            </ul>
                            <!-- End Checkbox -->
                        </div>
                        <!-- End Size -->

                        <!-- Quantity -->
                        <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3 g-mb-30"
                            role="tab">
                            <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Quantity</h5>

                            <div class="js-quantity input-group u-quantity-v1 g-width-80 g-brd-primary--focus">
                                <input class="js-result form-control text-center g-font-size-13 rounded-0"
                                    type="text" value="1" readonly>

                                <div
                                    class="input-group-addon d-flex align-items-center g-brd-gray-light-v2 g-width-30 g-bg-white g-font-size-13 rounded-0 g-pa-5">
                                    <i class="js-plus g-color-gray g-color-primary--hover fa fa-angle-up"></i>
                                    <i class="js-minus g-color-gray g-color-primary--hover fa fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                        <!-- End Quantity -->

                        <!-- Buttons -->
                        <div class="text-center">
                            <button class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25"
                                type="button">
                                Add to Cart <i class="align-middle ml-2 icon-finance-100 u-line-icon-pro"></i>
                            </button>
                        </div>
                        <!-- End Buttons -->
                    </div>

                    <div class="col-md-8">
                        <!-- Carousel Slider -->
                        <div class="js-carousel" data-infinite="true" data-autoplay="true" data-fade="true"
                            data-speed="7000" data-lazy-load="ondemand"
                            data-pagi-classes="u-carousel-indicators-v1 g-pos-abs g-bottom-20 g-left-20">
                            <div class="js-slide">
                                <div class="g-bg-size-cover g-bg-pos-center g-min-height-600"
                                    data-bg-img-src="ecommerce/assets/img-temp/900x600/img1.jpg"></div>
                            </div>
                            <div class="js-slide">
                                <div class="g-bg-size-cover g-bg-pos-center g-min-height-600"
                                    data-bg-img-src="ecommerce/assets/img-temp/900x600/img2.jpg"></div>
                            </div>
                            <div class="js-slide">
                                <div class="g-bg-size-cover g-bg-pos-center g-min-height-600"
                                    data-bg-img-src="ecommerce/assets/img-temp/900x600/img3.jpg"></div>
                            </div>
                        </div>
                        <!-- End Carousel Slider -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Promo Slider -->

        <div class="g-bg-gray-light-v5">
            <div class="container">
                <!-- Carousel Slider -->
                <div id="carouselCus2" class="js-carousel g-mx-minus-25" data-infinite="true" data-autoplay="false"
                    data-slides-show="3" data-slides-scroll="1" data-center-mode="true" data-speed="8000">

                    <div class="js-slide g-px-10 g-py-20">
                        <!-- Article -->
                        <article class="media g-bg-white rounded g-pa-15">
                            <!-- Article Image -->
                            <div class="g-max-width-100 g-mr-15">
                                <img class="d-flex w-100" src="ecommerce/assets/img-temp/150x150/img1.jpg"
                                    alt="Image Description">
                            </div>
                            <!-- End Article Image -->

                            <!-- Article Info -->
                            <div class="media-body align-self-center">
                                <h4 class="h5 g-mb-7">
                                    <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                        href="#!">Glasses</a>
                                </h4>
                                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10"
                                    href="#!">Accessories</a>
                                <!-- End Article Info -->

                                <!-- Article Footer -->
                                <footer class="d-flex justify-content-between g-font-size-16">
                                    <span class="g-color-black g-line-height-1">$22.00</span>
                                    <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                        <li
                                            class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                                            <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                                href="#!" title="Add to Cart" data-toggle="tooltip"
                                                data-placement="top">
                                                <i class="icon-finance-100 u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item align-middle">
                                            <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                                href="#!" title="Add to Wishlist" data-toggle="tooltip"
                                                data-placement="top">
                                                <i class="icon-medical-022 u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </footer>
                                <!-- End Article Footer -->
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10 g-py-20">
                        <!-- Article -->
                        <article class="media g-bg-white rounded g-pa-15">
                            <!-- Article Image -->
                            <div class="g-max-width-100 g-mr-15">
                                <img class="d-flex w-100" src="ecommerce/assets/img-temp/150x150/img2.jpg"
                                    alt="Image Description">
                            </div>
                            <!-- End Article Image -->

                            <!-- Article Info -->
                            <div class="media-body align-self-center">
                                <h4 class="h5 g-mb-7">
                                    <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                        href="#!">Gloves</a>
                                </h4>
                                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10"
                                    href="#!">Accessories</a>
                                <!-- End Article Info -->

                                <!-- Article Footer -->
                                <footer class="d-flex justify-content-between g-font-size-16">
                                    <span class="g-color-black g-line-height-1">$55.00</span>
                                    <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                        <li
                                            class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                                            <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                                href="#!" title="Add to Cart" data-toggle="tooltip"
                                                data-placement="top">
                                                <i class="icon-finance-100 u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item align-middle">
                                            <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                                href="#!" title="Add to Wishlist" data-toggle="tooltip"
                                                data-placement="top">
                                                <i class="icon-medical-022 u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </footer>
                                <!-- End Article Footer -->
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10 g-py-20">
                        <!-- Article -->
                        <article class="media g-bg-white rounded g-pa-15">
                            <!-- Article Image -->
                            <div class="g-max-width-100 g-mr-15">
                                <img class="d-flex w-100" src="ecommerce/assets/img-temp/150x150/img3.jpg"
                                    alt="Image Description">
                            </div>
                            <!-- End Article Image -->

                            <!-- Article Info -->
                            <div class="media-body align-self-center">
                                <h4 class="h5 g-mb-7">
                                    <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                        href="#!">Chukka Shoes</a>
                                </h4>
                                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10"
                                    href="#!">Footwear</a>
                                <!-- End Article Info -->

                                <!-- Article Footer -->
                                <footer class="d-flex justify-content-between g-font-size-16">
                                    <span class="g-color-black g-line-height-1">$55.00</span>
                                    <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                        <li
                                            class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                                            <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                                href="#!" title="Add to Cart" data-toggle="tooltip"
                                                data-placement="top">
                                                <i class="icon-finance-100 u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item align-middle">
                                            <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                                href="#!" title="Add to Wishlist" data-toggle="tooltip"
                                                data-placement="top">
                                                <i class="icon-medical-022 u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </footer>
                                <!-- End Article Footer -->
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10 g-py-20">
                        <!-- Article -->
                        <article class="media g-bg-white rounded g-pa-15">
                            <!-- Article Image -->
                            <div class="g-max-width-100 g-mr-15">
                                <img class="d-flex w-100" src="ecommerce/assets/img-temp/150x150/img4.jpg"
                                    alt="Image Description">
                            </div>
                            <!-- End Article Image -->

                            <!-- Article Info -->
                            <div class="media-body align-self-center">
                                <h4 class="h5 g-mb-7">
                                    <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                        href="#!">Shoes</a>
                                </h4>
                                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10"
                                    href="#!">Footwear</a>
                                <!-- End Article Info -->

                                <!-- Article Footer -->
                                <footer class="d-flex justify-content-between g-font-size-16">
                                    <span class="g-color-black g-line-height-1">$55.00</span>
                                    <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                        <li
                                            class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                                            <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                                href="#!" title="Add to Cart" data-toggle="tooltip"
                                                data-placement="top">
                                                <i class="icon-finance-100 u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item align-middle">
                                            <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                                href="#!" title="Add to Wishlist" data-toggle="tooltip"
                                                data-placement="top">
                                                <i class="icon-medical-022 u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </footer>
                                <!-- End Article Content -->
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="js-slide g-px-10 g-py-20">
                        <!-- Article -->
                        <article class="media g-bg-white rounded g-pa-15">
                            <!-- Article Image -->
                            <div class="g-max-width-100 g-mr-15">
                                <img class="d-flex w-100" src="ecommerce/assets/img-temp/150x150/img5.jpg"
                                    alt="Image Description">
                            </div>
                            <!-- End Article Image -->

                            <!-- Article Info -->
                            <div class="media-body align-self-center">
                                <h4 class="h5 g-mb-7">
                                    <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                        href="#!">Sneaker</a>
                                </h4>
                                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10"
                                    href="#!">Footwear</a>
                                <!-- End Article Info -->

                                <!-- Article Footer -->
                                <footer class="d-flex justify-content-between g-font-size-16">
                                    <span class="g-color-black g-line-height-1">$55.00</span>
                                    <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                        <li
                                            class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                                            <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                                href="#!" title="Add to Cart" data-toggle="tooltip"
                                                data-placement="top">
                                                <i class="icon-finance-100 u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item align-middle">
                                            <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                                href="#!" title="Add to Wishlist" data-toggle="tooltip"
                                                data-placement="top">
                                                <i class="icon-medical-022 u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </footer>
                                <!-- End Article Content -->
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>
                </div>
            </div>
            <!-- End Carousel Slider -->
        </div>

        <!-- Categories -->
        <div class="container g-pt-100 g-pb-70">
            <div class="row g-mx-minus-10">
                <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
                    <article class="u-block-hover">
                        <img class="w-100 u-block-hover__main--zoom-v1 g-mb-minus-8"
                            src="ecommerce/assets/img-temp/650x850/img1.jpg" alt="Image Description">
                        <div class="g-pos-abs g-bottom-30 g-left-30">
                            <span class="d-block g-color-black">Collections</span>
                            <h2 class="h1 mb-0">Women</h2>
                        </div>
                        <a class="u-link-v2" href="#!"></a>
                    </article>
                </div>

                <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
                    <article class="u-block-hover">
                        <img class="w-100 u-block-hover__main--zoom-v1 g-mb-minus-8"
                            src="ecommerce/assets/img-temp/650x850/img2.jpg" alt="Image Description">
                        <div class="g-pos-abs g-bottom-30 g-left-30">
                            <span class="d-block g-color-black">Collections</span>
                            <h2 class="h1 mb-0">Children</h2>
                        </div>
                        <a class="u-link-v2" href="#!"></a>
                    </article>
                </div>

                <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
                    <article class="u-block-hover">
                        <img class="w-100 u-block-hover__main--zoom-v1 g-mb-minus-8"
                            src="ecommerce/assets/img-temp/650x850/img3.jpg" alt="Image Description">
                        <div class="g-pos-abs g-bottom-30 g-left-30">
                            <span class="d-block g-color-black">Collections</span>
                            <h2 class="h1 mb-0">Men</h2>
                        </div>
                        <a class="u-link-v2" href="#!"></a>
                    </article>
                </div>
            </div>
        </div>
        <!-- End Categories -->

        <!-- Products -->
        <div class="container g-pb-100">
            <div class="text-center mx-auto g-max-width-600 g-mb-50">
                <h2 class="g-color-black mb-4">Featured Products</h2>
                <p class="lead">We want to create a range of beautiful, practical and modern outerwear that doesn't
                    cost the earth – but let's you still live life in style.</p>
            </div>

            <div id="carouselCus1" class="js-carousel g-pb-100 g-mx-minus-10" data-infinite="true"
                data-slides-show="4"
                data-arrows-classes="u-arrow-v1 g-pos-abs g-bottom-0 g-width-45 g-height-45 g-color-gray-dark-v5 g-bg-secondary g-color-white--hover g-bg-primary--hover rounded"
                data-arrow-left-classes="fa fa-angle-left g-left-10"
                data-arrow-right-classes="fa fa-angle-right g-right-10"
                data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x g-bottom-20 text-center">
                <div class="js-slide">
                    <div class="g-px-10">
                        <!-- Product -->
                        <figure class="g-pos-rel g-mb-20">
                            <img class="img-fluid" src="ecommerce/assets/img-temp/480x700/img1.jpg"
                                alt="Image Description">

                            <figcaption
                                class="w-100 g-bg-primary g-bg-black--hover text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                                <a class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1 g-text-underline--none--hover"
                                    href="#!">New Arrival</a>
                            </figcaption>
                        </figure>

                        <div class="media">
                            <!-- Product Info -->
                            <div class="d-flex flex-column">
                                <h4 class="h6 g-color-black mb-1">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                                        Summer shorts
                                    </a>
                                </h4>
                                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Man</a>
                                <span class="d-block g-color-black g-font-size-17">$52.00</span>
                            </div>
                            <!-- End Product Info -->

                            <!-- Products Icons -->
                            <ul class="list-inline media-body text-right">
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Cart">
                                        <i class="icon-finance-100 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Wishlist">
                                        <i class="icon-medical-022 u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Products Icons -->
                        </div>
                        <!-- End Product -->
                    </div>
                </div>

                <div class="js-slide">
                    <div class="g-px-10">
                        <!-- Product -->
                        <figure class="g-pos-rel g-mb-20">
                            <img class="img-fluid" src="ecommerce/assets/img-temp/480x700/img2.jpg"
                                alt="Image Description">

                            <span
                                class="u-ribbon-v1 g-width-40 g-height-40 g-color-white g-bg-primary g-font-size-13 text-center text-uppercase g-rounded-50x g-top-10 g-right-minus-10 g-px-2 g-py-10">-40%</span>
                        </figure>

                        <div class="media">
                            <!-- Product Info -->
                            <div class="d-flex flex-column">
                                <h4 class="h6 g-color-black mb-1">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                                        Stylish shirt
                                    </a>
                                </h4>
                                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Woman</a>
                                <span class="d-block g-color-black g-font-size-17">$99.00</span>
                            </div>
                            <!-- End Product Info -->

                            <!-- Products Icons -->
                            <ul class="list-inline media-body text-right">
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Cart">
                                        <i class="icon-finance-100 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Wishlist">
                                        <i class="icon-medical-022 u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Products Icons -->
                        </div>
                        <!-- End Product -->
                    </div>
                </div>

                <div class="js-slide">
                    <div class="g-px-10">
                        <!-- Product -->
                        <figure class="g-pos-rel g-mb-20">
                            <img class="img-fluid" src="ecommerce/assets/img-temp/480x700/img3.jpg"
                                alt="Image Description">

                            <figcaption
                                class="w-100 g-bg-lightred text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                                <span class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1">Sold
                                    Out</a>
                            </figcaption>
                        </figure>

                        <div class="media">
                            <!-- Product Info -->
                            <div class="d-flex flex-column">
                                <h4 class="h6 g-color-black mb-1">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                                        Classic jacket
                                    </a>
                                </h4>
                                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Man</a>
                                <span class="d-block g-color-black g-font-size-17">$49.99</span>
                            </div>
                            <!-- End Product Info -->

                            <!-- Products Icons -->
                            <ul class="list-inline media-body text-right">
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Cart">
                                        <i class="icon-finance-100 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Wishlist">
                                        <i class="icon-medical-022 u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Products Icons -->
                        </div>
                        <!-- End Product -->
                    </div>
                </div>

                <div class="js-slide">
                    <div class="g-px-10">
                        <!-- Product -->
                        <figure class="g-pos-rel g-mb-20">
                            <img class="img-fluid" src="ecommerce/assets/img-temp/480x700/img4.jpg"
                                alt="Image Description">
                        </figure>

                        <div class="media">
                            <!-- Product Info -->
                            <div class="d-flex flex-column">
                                <h4 class="h6 g-color-black mb-1">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                                        Wool lined parka
                                    </a>
                                </h4>
                                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Woman</a>
                                <span class="d-block g-color-black g-font-size-17">$82.37</span>
                            </div>
                            <!-- End Product Info -->

                            <!-- Products Icons -->
                            <ul class="list-inline media-body text-right">
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Cart">
                                        <i class="icon-finance-100 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Wishlist">
                                        <i class="icon-medical-022 u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Products Icons -->
                        </div>
                        <!-- End Product -->
                    </div>
                </div>

                <div class="js-slide">
                    <div class="g-px-10">
                        <!-- Product -->
                        <figure class="g-pos-rel g-mb-20">
                            <img class="img-fluid" src="ecommerce/assets/img-temp/480x700/img5.jpg"
                                alt="Image Description">

                            <figcaption
                                class="w-100 g-bg-lightred text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                                <span class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1">Sold
                                    Out</a>
                            </figcaption>
                        </figure>

                        <div class="media">
                            <!-- Product Info -->
                            <div class="d-flex flex-column">
                                <h4 class="h6 g-color-black mb-1">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                                        Hooded jeans
                                    </a>
                                </h4>
                                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Man</a>
                                <span class="d-block g-color-black g-font-size-17">$35.99</span>
                            </div>
                            <!-- End Product Info -->

                            <!-- Products Icons -->
                            <ul class="list-inline media-body text-right">
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Cart">
                                        <i class="icon-finance-100 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Wishlist">
                                        <i class="icon-medical-022 u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Products Icons -->
                        </div>
                        <!-- End Product -->
                    </div>
                </div>

                <div class="js-slide">
                    <div class="g-px-10">
                        <!-- Product -->
                        <figure class="g-pos-rel g-mb-20">
                            <img class="img-fluid" src="ecommerce/assets/img-temp/480x700/img6.jpg"
                                alt="Image Description">
                        </figure>

                        <div class="media">
                            <!-- Product Info -->
                            <div class="d-flex flex-column">
                                <h4 class="h6 g-color-black mb-1">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                                        Waterproof jacket
                                    </a>
                                </h4>
                                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Woman</a>
                                <span class="d-block g-color-black g-font-size-17">$105.99</span>
                            </div>
                            <!-- End Product Info -->

                            <!-- Products Icons -->
                            <ul class="list-inline media-body text-right">
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Cart">
                                        <i class="icon-finance-100 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Wishlist">
                                        <i class="icon-medical-022 u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Products Icons -->
                        </div>
                        <!-- End Product -->
                    </div>
                </div>

                <div class="js-slide">
                    <div class="g-px-10">
                        <!-- Product -->
                        <figure class="g-pos-rel g-mb-20">
                            <img class="img-fluid" src="ecommerce/assets/img-temp/480x700/img7.jpg"
                                alt="Image Description">

                            <span
                                class="u-ribbon-v1 g-width-40 g-height-40 g-color-white g-bg-primary g-font-size-13 text-center text-uppercase g-rounded-50x g-top-10 g-right-minus-10 g-px-2 g-py-10">-40%</span>

                            <figcaption
                                class="w-100 g-bg-primary g-bg-black--hover text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                                <a class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1 g-text-underline--none--hover"
                                    href="#!">New Arrival</a>
                            </figcaption>
                        </figure>

                        <div class="media">
                            <!-- Product Info -->
                            <div class="d-flex flex-column">
                                <h4 class="h6 g-color-black mb-1">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                                        Classic T-shirt
                                    </a>
                                </h4>
                                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Man</a>
                                <span class="d-block g-color-black g-font-size-17">$11.00</span>
                            </div>
                            <!-- End Product Info -->

                            <!-- Products Icons -->
                            <ul class="list-inline media-body text-right">
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Cart">
                                        <i class="icon-finance-100 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Wishlist">
                                        <i class="icon-medical-022 u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Products Icons -->
                        </div>
                        <!-- End Product -->
                    </div>
                </div>

                <div class="js-slide">
                    <div class="g-px-10">
                        <!-- Product -->
                        <figure class="g-pos-rel g-mb-20">
                            <img class="img-fluid" src="ecommerce/assets/img-temp/480x700/img8.jpg"
                                alt="Image Description">
                        </figure>

                        <div class="media">
                            <!-- Product Info -->
                            <div class="d-flex flex-column">
                                <h4 class="h6 g-color-black mb-1">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                                        Blue skirt
                                    </a>
                                </h4>
                                <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Woman</a>
                                <span class="d-block g-color-black g-font-size-17">$34.00</span>
                            </div>
                            <!-- End Product Info -->

                            <!-- Products Icons -->
                            <ul class="list-inline media-body text-right">
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Cart">
                                        <i class="icon-finance-100 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item align-middle mx-0">
                                    <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle"
                                        href="#!" data-toggle="tooltip" data-placement="top"
                                        title="Add to Wishlist">
                                        <i class="icon-medical-022 u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Products Icons -->
                        </div>
                        <!-- End Product -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Products -->

        <!-- Promo Block -->
        <section class="g-min-height-100vhg-flex-centered g-bg-secondary g-pos-rel">
            <div class="container g-pt-100 g-pb-70">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-8 col-lg-6 order-md-2 g-mb-30">
                        <div class="g-pos-rel">
                            <img class="img-fluid w-100" src="ecommerce/assets/img-temp/725x725/img1.png"
                                alt="Image Description">
                            <span
                                class="u-icon-v1 g-width-85 g-height-85 g-brd-3 g-brd-white g-color-white g-bg-primary g-font-weight-300 g-font-size-22 rounded-circle g-pos-abs g-top-100 g-left-0 g-brd-around">
                                <i class="g-font-style-normal">$60<span class="g-font-size-16">.00</span></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-4 order-md-1 g-mb-30">
                        <div class="g-mb-30">
                            <h1 class="g-color-primary g-font-weight-400 g-font-size-40 mb-0">Leather</h1>
                            <h2 class="g-color-dark g-font-weight-300 g-font-size-75 g-line-height-1 mb-4">Gloves</h2>
                            <p class="lead">We want to create a range of beautiful, practical and modern outerwear
                                that doesn't cost the earth.</p>
                        </div>

                        <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25 g-mb-70"
                            href="#!">Shop Now</a>

                        <!-- Countdown -->
                        <div class="text-uppercase">
                            <div class="js-countdown u-countdown-v3 g-line-height-1_3 g-color-black"
                                data-end-date="2018/08/20" data-month-format="%m" data-days-format="%D"
                                data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
                                <div class="d-inline-block text-center g-mx-15 mb-3">
                                    <div class="js-cd-days g-color-lightred g-font-weight-500 g-font-size-15">12</div>
                                    <span class="g-color-gray-dark-v4 g-font-size-11">Days</span>
                                </div>

                                <div class="hidden-down d-inline-block align-top g-font-size-15">:</div>

                                <div class="d-inline-block text-center g-mx-15 mb-3">
                                    <div class="js-cd-hours g-font-weight-500 g-font-size-15">01</div>
                                    <span class="g-color-gray-dark-v4 g-font-size-11">Hours</span>
                                </div>

                                <div class="hidden-down d-inline-block align-top g-font-size-15">:</div>

                                <div class="d-inline-block text-center g-mx-15 mb-3">
                                    <div class="js-cd-minutes g-font-weight-500 g-font-size-15">52</div>
                                    <span class="g-color-gray-dark-v4 g-font-size-11">Minutes</span>
                                </div>

                                <div class="hidden-down d-inline-block align-top g-font-size-15">:</div>

                                <div class="d-inline-block text-center g-mx-15 mb-3">
                                    <div class="js-cd-seconds g-font-weight-500 g-font-size-15">52</div>
                                    <span class="g-color-gray-dark-v4 g-font-size-11">Seconds</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Countdown -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Promo Block -->

        <!-- Product Blocks -->
        <section class="container g-py-100">
            <div class="text-center mx-auto g-max-width-600 g-mb-50">
                <h2 class="g-color-black mb-4">New Arrivals</h2>
                <p class="lead">We want to create a range of beautiful, practical and modern outerwear that doesn't
                    cost the earth – but let's you still live life in style.</p>
            </div>

            <div class="row g-mx-minus-10 g-mb-50">
                <div class="col-md-6 col-lg-4 g-px-10">
                    <!-- Article -->
                    <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
                        <!-- Article Image -->
                        <div class="g-max-width-100 g-mr-15">
                            <img class="d-flex w-100" src="ecommerce/assets/img-temp/150x150/img1.jpg"
                                alt="Image Description">
                        </div>
                        <!-- End Article Image -->

                        <!-- Article Info -->
                        <div class="media-body align-self-center">
                            <h4 class="h5 g-mb-7">
                                <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                    href="#!">Glasses</a>
                            </h4>
                            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10"
                                href="#!">Accessories</a>
                            <!-- End Article Info -->

                            <!-- Article Footer -->
                            <footer class="d-flex justify-content-between g-font-size-16">
                                <span class="g-color-black g-line-height-1">$22.00</span>
                                <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                    <li
                                        class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Cart" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-finance-100 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item align-middle">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Wishlist" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-medical-022 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                            <!-- End Article Footer -->
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-md-6 col-lg-4 g-px-10">
                    <!-- Article -->
                    <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
                        <!-- Article Image -->
                        <div class="g-max-width-100 g-mr-15">
                            <img class="d-flex w-100" src="ecommerce/assets/img-temp/150x150/img2.jpg"
                                alt="Image Description">
                        </div>
                        <!-- End Article Image -->

                        <!-- Article Info -->
                        <div class="media-body align-self-center">
                            <h4 class="h5 g-mb-7">
                                <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                    href="#!">Gloves</a>
                            </h4>
                            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10"
                                href="#!">Accessories</a>
                            <!-- End Article Info -->

                            <!-- Article Footer -->
                            <footer class="d-flex justify-content-between g-font-size-16">
                                <span class="g-color-black g-line-height-1">$55.00</span>
                                <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                    <li
                                        class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Cart" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-finance-100 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item align-middle">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Wishlist" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-medical-022 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                            <!-- End Article Footer -->
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-md-6 col-lg-4 g-px-10">
                    <!-- Article -->
                    <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
                        <!-- Article Image -->
                        <div class="g-max-width-100 g-mr-15">
                            <img class="d-flex w-100" src="ecommerce/assets/img-temp/150x150/img3.jpg"
                                alt="Image Description">
                        </div>
                        <!-- End Article Image -->

                        <!-- Article Info -->
                        <div class="media-body align-self-center">
                            <h4 class="h5 g-mb-7">
                                <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                    href="#!">Chukka Shoes</a>
                            </h4>
                            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10"
                                href="#!">Footwear</a>
                            <!-- End Article Info -->

                            <!-- Article Footer -->
                            <footer class="d-flex justify-content-between g-font-size-16">
                                <span class="g-color-black g-line-height-1">$55.00</span>
                                <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                    <li
                                        class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Cart" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-finance-100 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item align-middle">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Wishlist" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-medical-022 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                            <!-- End Article Footer -->
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-md-6 col-lg-4 g-px-10">
                    <!-- Article -->
                    <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
                        <!-- Article Image -->
                        <div class="g-max-width-100 g-mr-15">
                            <img class="d-flex w-100" src="ecommerce/assets/img-temp/150x150/img4.jpg"
                                alt="Image Description">
                        </div>
                        <!-- End Article Image -->

                        <!-- Article Info -->
                        <div class="media-body align-self-center">
                            <h4 class="h5 g-mb-7">
                                <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                    href="#!">Shoes</a>
                            </h4>
                            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10"
                                href="#!">Footwear</a>
                            <!-- End Article Info -->

                            <!-- Article Footer -->
                            <footer class="d-flex justify-content-between g-font-size-16">
                                <span class="g-color-black g-line-height-1">$55.00</span>
                                <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                    <li
                                        class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Cart" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-finance-100 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item align-middle">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Wishlist" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-medical-022 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                            <!-- End Article Content -->
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-md-6 col-lg-4 g-px-10">
                    <!-- Article -->
                    <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
                        <!-- Article Image -->
                        <div class="g-max-width-100 g-mr-15">
                            <img class="d-flex w-100" src="ecommerce/assets/img-temp/150x150/img5.jpg"
                                alt="Image Description">
                        </div>
                        <!-- End Article Image -->

                        <!-- Article Info -->
                        <div class="media-body align-self-center">
                            <h4 class="h5 g-mb-7">
                                <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                    href="#!">Sneaker</a>
                            </h4>
                            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10"
                                href="#!">Footwear</a>
                            <!-- End Article Info -->

                            <!-- Article Footer -->
                            <footer class="d-flex justify-content-between g-font-size-16">
                                <span class="g-color-black g-line-height-1">$55.00</span>
                                <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                    <li
                                        class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Cart" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-finance-100 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item align-middle">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Wishlist" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-medical-022 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                            <!-- End Article Content -->
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-md-6 col-lg-4 g-px-10">
                    <!-- Article -->
                    <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
                        <!-- Article Image -->
                        <div class="g-max-width-100 g-mr-15">
                            <img class="d-flex w-100" src="ecommerce/assets/img-temp/150x150/img6.jpg"
                                alt="Image Description">
                        </div>
                        <!-- End Article Image -->

                        <!-- Article Info -->
                        <div class="media-body align-self-center">
                            <h4 class="h5 g-mb-7">
                                <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                    href="#!">Sneaker</a>
                            </h4>
                            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10"
                                href="#!">Footwear</a>
                            <!-- End Article Info -->

                            <!-- Article Footer -->
                            <footer class="d-flex justify-content-between g-font-size-16">
                                <span class="g-color-black g-line-height-1">$55.00</span>
                                <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                    <li
                                        class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Cart" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-finance-100 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item align-middle">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Wishlist" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-medical-022 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                            <!-- End Article Footer -->
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-md-6 col-lg-4 g-px-10">
                    <!-- Article -->
                    <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
                        <!-- Article Image -->
                        <div class="g-max-width-100 g-mr-15">
                            <img class="d-flex w-100" src="ecommerce/assets/img-temp/150x150/img7.jpg"
                                alt="Image Description">
                        </div>
                        <!-- End Article Image -->

                        <!-- Article Info -->
                        <div class="media-body align-self-center">
                            <h4 class="h5 g-mb-7">
                                <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                    href="#!">Desk Clock</a>
                            </h4>
                            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10"
                                href="#!">Hi-Tech</a>
                            <!-- End Article Info -->

                            <!-- Article Footer -->
                            <footer class="d-flex justify-content-between g-font-size-16">
                                <span class="g-color-black g-line-height-1">$55.00</span>
                                <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                    <li
                                        class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Cart" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-finance-100 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item align-middle">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Wishlist" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-medical-022 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                            <!-- End Article Footer -->
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-md-6 col-lg-4 g-px-10">
                    <!-- Article -->
                    <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
                        <!-- Article Image -->
                        <div class="g-max-width-100 g-mr-15">
                            <img class="d-flex w-100" src="ecommerce/assets/img-temp/150x150/img8.jpg"
                                alt="Image Description">
                        </div>
                        <!-- End Article Image -->

                        <!-- Article Info -->
                        <div class="media-body align-self-center">
                            <h4 class="h5 g-mb-7">
                                <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                    href="#!">Alarm Clock</a>
                            </h4>
                            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10"
                                href="#!">Hi-Tech</a>
                            <!-- End Article Info -->

                            <!-- Article Footer -->
                            <footer class="d-flex justify-content-between g-font-size-16">
                                <span class="g-color-black g-line-height-1">$55.00</span>
                                <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                    <li
                                        class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Cart" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-finance-100 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item align-middle">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Wishlist" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-medical-022 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                            <!-- End Article Footer -->
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-md-6 col-lg-4 g-px-10">
                    <!-- Article -->
                    <article class="media g-brd-around g-brd-gray-light-v4 g-bg-white rounded g-pa-10 g-mb-20">
                        <!-- Article Image -->
                        <div class="g-max-width-100 g-mr-15">
                            <img class="d-flex w-100" src="ecommerce/assets/img-temp/150x150/img9.jpg"
                                alt="Image Description">
                        </div>
                        <!-- End Article Image -->

                        <!-- Article Info -->
                        <div class="media-body align-self-center">
                            <h4 class="h5 g-mb-7">
                                <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                    href="#!">Desk Clock</a>
                            </h4>
                            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13 g-mb-10"
                                href="#!">Hi-Tech</a>
                            <!-- End Article Info -->

                            <!-- Article Footer -->
                            <footer class="d-flex justify-content-between g-font-size-16">
                                <span class="g-color-black g-line-height-1">$55.00</span>
                                <ul class="list-inline g-color-gray-light-v2 g-font-size-14 g-line-height-1">
                                    <li
                                        class="list-inline-item align-middle g-brd-right g-brd-gray-light-v3 g-pr-10 g-mr-6">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Cart" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-finance-100 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item align-middle">
                                        <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover"
                                            href="#!" title="Add to Wishlist" data-toggle="tooltip"
                                            data-placement="top">
                                            <i class="icon-medical-022 u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                            <!-- End Article Footer -->
                        </div>
                    </article>
                    <!-- End Article -->
                </div>
            </div>

            <div class="text-center">
                <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" href="#!">All New
                    Arrivals</a>
            </div>
        </section>
        <!-- End Product Blocks -->

        <!-- Categories -->
        <div class="container-fluid px-0">
            <div class="row align-items-center no-gutters">
                <div class="col-md-7 col-lg-8 u-block-hover g-bg-size-cover g-min-height-500 g-flex-centered"
                    data-bg-img-src="ecommerce/assets/img-temp/1200x800/img1.jpg">
                    <div class="g-flex-centered-item text-right g-pa-50">
                        <h2 class="g-color-white g-font-weight-700 g-font-size-50 text-uppercase g-line-height-1 mb-4">
                            Summer<br>Collection
                        </h2>
                        <span class="u-link-v5 g-color-black g-color-primary--hover g-font-size-18">Shop Now</span>
                    </div>

                    <a class="u-link-v2" href="#!"></a>
                </div>

                <div class="col-md-5 col-lg-4 u-block-hover g-bg-size-cover g-min-height-500 g-flex-centered"
                    data-bg-img-src="assets/img/bg/secondary.png">
                    <div class="text-center">
                        <img class="img-fluid mb-3" src="ecommerce/assets/img-temp/500x320/img1.png"
                            alt="Image Description">
                        <h3 class="h5 u-link-v5 g-color-primary--hover g-font-weight-400 mb-3">Sneaker Shoes for Man
                        </h3>
                        <span class="g-color-primary g-font-weight-700 g-font-size-20">$45.00</span>
                    </div>

                    <a class="u-link-v2" href="#!"></a>
                </div>
            </div>
        </div>
        <!-- End Categories -->

        <!-- News -->
        <div class="container g-pt-100 g-pb-70">
            <div class="text-center mx-auto g-max-width-600 g-mb-50">
                <h2 class="g-color-black mb-4">Blog News</h2>
                <p class="lead">Keep in touch with the latest blogs &amp; news.</p>
            </div>

            <div class="row g-mx-minus-10">
                <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
                    <!-- Blog Background Overlay Blocks -->
                    <article class="u-block-hover">
                        <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
                            <img class="d-flex align-items-end u-block-hover__main--mover-down"
                                src="ecommerce/assets/img-temp/650x650/img1.jpg" alt="Image Description">
                        </div>
                        <div class="u-block-hover__additional--partially-slide-up text-center g-z-index-1 mt-auto">
                            <div class="u-block-hover__visible g-pa-25">
                                <span class="d-block g-color-white-opacity-0_7 g-font-size-13 mb-2">sport</span>
                                <h2 class="h4 g-color-white g-font-weight-400 mb-3">
                                    <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer"
                                        href="#!">24 Hours in Shopping</a>
                                </h2>
                                <h4 class="d-inline-block g-color-white-opacity-0_7 g-font-size-11 mb-0">
                                    By,
                                    <a class="g-color-white-opacity-0_7 text-uppercase" href="#!">Dan Shaw</a>
                                </h4>
                                <span class="g-color-white-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
                                <span class="g-color-white-opacity-0_7 g-font-size-10 text-uppercase">May 31,
                                    2017</span>
                            </div>

                            <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30"
                                href="#!">Read more</a>
                        </div>
                    </article>
                    <!-- End Blog Background Overlay Blocks -->
                </div>

                <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
                    <!-- Blog Background Overlay Blocks -->
                    <article class="u-block-hover">
                        <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
                            <img class="d-flex align-items-end u-block-hover__main--mover-down"
                                src="ecommerce/assets/img-temp/650x650/img2.jpg" alt="Image Description">
                        </div>
                        <div class="u-block-hover__additional--partially-slide-up text-center g-z-index-1 mt-auto">
                            <div class="u-block-hover__visible g-pa-25">
                                <span class="d-block g-color-white-opacity-0_7 g-font-size-13 mb-2">design</span>
                                <h2 class="h4 g-color-white g-font-weight-400 mb-3">
                                    <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer"
                                        href="#!">How to Design with Colors</a>
                                </h2>
                                <h4 class="d-inline-block g-color-white-opacity-0_7 g-font-size-11 mb-0">
                                    By,
                                    <a class="g-color-white-opacity-0_7 text-uppercase" href="#!">Dan Shaw</a>
                                </h4>
                                <span class="g-color-white-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
                                <span class="g-color-white-opacity-0_7 g-font-size-10 text-uppercase">May 31,
                                    2017</span>
                            </div>

                            <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30"
                                href="#!">Read more</a>
                        </div>
                    </article>
                    <!-- End Blog Background Overlay Blocks -->
                </div>

                <div class="col-sm-6 col-md-4 g-px-10 g-mb-30">
                    <!-- Blog Background Overlay Blocks -->
                    <article class="u-block-hover">
                        <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
                            <img class="d-flex align-items-end u-block-hover__main--mover-down"
                                src="ecommerce/assets/img-temp/650x650/img3.jpg" alt="Image Description">
                        </div>
                        <div class="u-block-hover__additional--partially-slide-up text-center g-z-index-1 mt-auto">
                            <div class="u-block-hover__visible g-pa-25">
                                <span class="d-block g-color-white-opacity-0_7 g-font-size-13 mb-2">photography</span>
                                <h2 class="h4 g-color-white g-font-weight-400 mb-3">
                                    <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer"
                                        href="#!">Stunning Woman's Capture</a>
                                </h2>
                                <h4 class="d-inline-block g-color-white-opacity-0_7 g-font-size-11 mb-0">
                                    By,
                                    <a class="g-color-white-opacity-0_7 text-uppercase" href="#!">Dan Shaw</a>
                                </h4>
                                <span class="g-color-white-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
                                <span class="g-color-white-opacity-0_7 g-font-size-10 text-uppercase">May 31,
                                    2017</span>
                            </div>

                            <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-500 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30"
                                href="#!">Read more</a>
                        </div>
                    </article>
                    <!-- End Blog Background Overlay Blocks -->
                </div>
            </div>
        </div>
        <!-- End News -->

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
                                <span
                                    class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free
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
                                <span
                                    class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free
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
    <script src="assets/vendor/jquery.countdown.min.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/appear.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.dropdown.js"></script>
    <script src="assets/js/components/hs.scrollbar.js"></script>
    <script src="assets/js/components/hs.countdown.js"></script>
    <script src="assets/js/components/hs.count-qty.js"></script>
    <script src="assets/js/components/hs.carousel.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of carousel
            $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

            $('#carouselCus1').slick('setOption', 'responsive', [{
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
            }], true);

            $('#carouselCus2').slick('setOption', 'responsive', [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3
                }
            }, {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }], true);
        });

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

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of quantity counter
        $.HSCore.components.HSCountQty.init('.js-quantity');

        // initialization of countdowns
        var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
            yearsElSelector: '.js-cd-years',
            monthElSelector: '.js-cd-month',
            daysElSelector: '.js-cd-days',
            hoursElSelector: '.js-cd-hours',
            minutesElSelector: '.js-cd-minutes',
            secondsElSelector: '.js-cd-seconds'
        });

        $(window).on('load', function() {
            // initialization of HSScrollBar component
            $.HSCore.components.HSScrollBar.init($('.js-scrollbar'));
        });
    </script>
</body>

</html>
