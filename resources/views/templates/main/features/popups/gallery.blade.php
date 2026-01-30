<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>Galleries | Unify - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
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
    <link rel="stylesheet" href="assets/vendor/jquery-ui/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">

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

        <!-- Page Title -->
        <section
            class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall g-overflow-hidden"
            data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}">
            <!-- Parallax Image -->
            <div style="height: 200%; background-image: url(assets/img/bg/pattern6-2.png); transform: translate3d(0px, -210.955px, 0px);"
                class="divimage dzsparallaxer--target w-100 g-bg-repeat g-bg-gray-light-v4"></div>
            <!-- End Parallax Image -->

            <div class="container g-z-index-1 g-py-100">
                <h1 class="g-font-weight-300 g-letter-spacing-1 g-mb-15">Galleries</h1>

                <div class="lead g-font-weight-400 g-line-height-2 g-letter-spacing-0_5">
                    <p class="mb-0">Block Components are usually collection of Base Components with/without the Global
                        Classes.
                        <br>These Components can be easily used and customized in any pages. Build websites like a Lego!
                    </p>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <section class="g-py-100">
            <!-- Gallery #01 -->
            <section class="container">
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#01</span>
                    </h2>
                </div>

                <div id="shortcode1">
                    <div class="shortcode-html">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 g-mb-30">
                                <!-- Article -->
                                <article
                                    class="u-block-hover u-bg-overlay g-color-white g-bg-black-opacity-0_3--after text-center g-rounded-3">
                                    <!-- Article Image -->
                                    <img class="w-100 u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/500x650/img1.jpg" alt="Image Description">
                                    <!-- End Article Image -->

                                    <!-- Article Content -->
                                    <div
                                        class="u-block-hover__additional g-flex-middle g-z-index-2 g-brd-around g-brd-2 g-brd-white-opacity-0_3 g-pa-15 g-ma-20">
                                        <div class="g-flex-middle-item">
                                            <h3 class="h4 d-inline-block">Photography</h3>
                                            <span
                                                class="d-block g-font-weight-600 g-font-size-40 text-uppercase g-mb-20">40%
                                                Off</span>
                                            <a class="js-fancybox btn btn-md u-btn-primary g-font-weight-600 g-font-size-12 text-uppercase"
                                                href="javascript:;" data-fancybox="lightbox-gallery-01-1"
                                                data-src="assets/img-temp/400x270/img2.jpg">View portfolio
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Article Content -->
                                </article>
                                <!-- End Article -->

                                <img class="g-hidden-xs-up" src="assets/img-temp/400x270/img4.jpg"
                                    alt="Image Description" data-fancybox-gallery="lightbox-gallery-01-1">
                                <img class="g-hidden-xs-up" src="assets/img-temp/400x270/img5.jpg"
                                    alt="Image Description" data-fancybox-gallery="lightbox-gallery-01-1">
                                <img class="g-hidden-xs-up" src="assets/img-temp/400x270/img6.jpg"
                                    alt="Image Description" data-fancybox-gallery="lightbox-gallery-01-1">
                            </div>

                            <div class="col-md-6 col-lg-4 g-mb-30">
                                <!-- Article -->
                                <article
                                    class="u-block-hover u-bg-overlay g-color-white g-bg-black-opacity-0_3--after text-center g-rounded-3">
                                    <!-- Article Image -->
                                    <img class="w-100 u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/500x650/img4.jpg" alt="Image Description">
                                    <!-- End Article Image -->

                                    <!-- Article Content -->
                                    <div
                                        class="u-block-hover__additional g-flex-middle g-z-index-2 g-brd-around g-brd-2 g-brd-white-opacity-0_3 g-pa-15 g-ma-20">
                                        <div class="g-flex-middle-item">
                                            <h3 class="h4 d-inline-block">Videography</h3>
                                            <span
                                                class="d-block g-font-weight-600 g-font-size-40 text-uppercase g-mb-20">25%
                                                Off</span>
                                            <a class="js-fancybox-media btn btn-md u-btn-primary g-font-weight-600 g-font-size-12 text-uppercase"
                                                href="javascript:;" data-fancybox="lightbox-gallery-01-2"
                                                data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1">View
                                                portfolio
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Article Content -->
                                </article>
                                <!-- End Article -->

                                <iframe class="g-hidden-xs-up"
                                    src="http://www.youtube.com/embed/p2_O6M1m6xg?autoplay=0"
                                    data-fancybox-hidden-gallery="lightbox-gallery-01-2"
                                    data-fancybox-type="iframe"></iframe>
                                <iframe class="g-hidden-xs-up"
                                    src="http://www.youtube.com/embed/wbpBdMUrqV8?autoplay=0"
                                    data-fancybox-hidden-gallery="lightbox-gallery-01-2"
                                    data-fancybox-type="iframe"></iframe>
                                <iframe class="g-hidden-xs-up"
                                    src="http://www.youtube.com/embed/R27KHLQ0cIU?autoplay=0"
                                    data-fancybox-hidden-gallery="lightbox-gallery-01-2"
                                    data-fancybox-type="iframe"></iframe>
                            </div>

                            <div class="col-lg-4 g-mb-30">
                                <div class="row">
                                    <div class="col-md-6 col-lg-12">
                                        <!-- Article -->
                                        <article
                                            class="u-block-hover g-color-white g-bg-cyan-gradient-opacity-v1 text-center rounded g-mb-30">
                                            <div
                                                class="g-z-index-2 g-brd-around g-brd-2 g-brd-white-opacity-0_3 g-pa-30 g-ma-20">
                                                <div class="g-flex-middle-item">
                                                    <span
                                                        class="d-block g-color-white g-font-weight-700 g-font-size-25 mb-1">$99.00</span>
                                                    <h3 class="h4 d-inline-block g-mb-13">Web Design</h3>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- End Article -->
                                    </div>

                                    <div class="col-md-6 col-lg-12">
                                        <!-- Article -->
                                        <article
                                            class="u-block-hover u-bg-overlay g-color-white g-bg-black-opacity-0_3--after text-center g-rounded-3">
                                            <!-- Article Image -->
                                            <img class="w-100 u-block-hover__main--zoom-v1"
                                                src="assets/img-temp/400x270/img1.jpg" alt="Image Description">
                                            <!-- End Article Image -->

                                            <!-- Article Content -->
                                            <div
                                                class="u-block-hover__additional g-flex-middle g-z-index-2 g-brd-around g-brd-2 g-brd-white-opacity-0_3 g-pa-15 g-ma-20">
                                                <div class="g-flex-middle-item">
                                                    <h3 class="h4 d-inline-block">Branding</h3>
                                                    <span class="d-block g-color-white-opacity-0_9">Understanding who
                                                        you are and what you want is our strategy for your brand.</span>
                                                </div>
                                            </div>
                                            <!-- End Article Content -->
                                        </article>
                                        <!-- End Article -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="shortcode-styles">
                        <!-- CSS Implementing Plugins -->
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/fancybox/jquery.fancybox.min.css">
                    </div>

                    <div class="shortcode-scripts">
                        <!-- JS Implementing Plugins -->
                        <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

                        <!-- JS Unify -->
                        <script type="text/plain" src="assets/js/components/hs.popup.js"></script>

                        <!-- JS Plugins Init. -->
                        <script type="text/plain">
              $(document).on('ready', function () {
                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox');

                // initialization of popups with media
                $.HSCore.components.HSPopup.init('.js-fancybox-media', {
                  helpers: {
                    media: {},
                    overlay: {
                      css: {
                        'background': 'rgba(255, 255, 255, .8)'
                      }
                    }
                  }
                });
              });
            </script>
                    </div>
                </div>




                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 container">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode1" data-modal-target="#modalMarkup"
                        data-modal-effect="fadein">
                        <i class="fa fa-code"></i>
                        Show code
                    </a>
                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                        data-content-target="#shortcode1" data-success-text="Copied">
                        <i class="fa fa-clone"></i>
                        Copy code
                    </a>
                </div>
                <!-- End Show Code -->

            </section>
            <!-- End Gallery #01 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #02 -->
            <section class="container">
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#02</span>
                    </h2>
                </div>

                <div id="shortcode2">
                    <div class="shortcode-html">
                        <div class="masonry-grid">
                            <div class="masonry-grid-sizer g-width-20x--sm"></div>

                            <div class="masonry-grid-item u-block-hover g-width-20x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--02"
                                    data-src="assets/img-temp/740x380/img4.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/740x380/img4.jpg" alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-bg-black-opacity-0_3 g-color-white">
                                        <i class="hs-icon hs-icon-plus g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-40x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--02"
                                    data-src="assets/img-temp/740x380/img6.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/740x380/img6.jpg" alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-bg-black-opacity-0_3 g-color-white">
                                        <i class="hs-icon hs-icon-plus g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-20x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--02"
                                    data-src="assets/img-temp/740x380/img1.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/740x380/img1.jpg" alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-bg-black-opacity-0_3 g-color-white">
                                        <i class="hs-icon hs-icon-plus g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-20x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--02"
                                    data-src="assets/img-temp/740x380/img2.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/740x380/img2.jpg" alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-bg-black-opacity-0_3 g-color-white">
                                        <i class="hs-icon hs-icon-plus g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-20x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--02"
                                    data-src="assets/img-temp/740x380/img3.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/740x380/img3.jpg" alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-bg-black-opacity-0_3 g-color-white">
                                        <i class="hs-icon hs-icon-plus g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-20x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--02"
                                    data-src="assets/img-temp/740x380/img4.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/740x380/img4.jpg" alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-bg-black-opacity-0_3 g-color-white">
                                        <i class="hs-icon hs-icon-plus g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-20x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--02"
                                    data-src="assets/img-temp/740x380/img3.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/740x380/img3.jpg" alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-bg-black-opacity-0_3 g-color-white">
                                        <i class="hs-icon hs-icon-plus g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-60x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--02"
                                    data-src="assets/img-temp/740x380/img2.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/740x380/img2.jpg" alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-bg-black-opacity-0_3 g-color-white">
                                        <i class="hs-icon hs-icon-plus g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-20x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--02"
                                    data-src="assets/img-temp/740x380/img1.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/740x380/img1.jpg" alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-bg-black-opacity-0_3 g-color-white">
                                        <i class="hs-icon hs-icon-plus g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-20x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--02"
                                    data-src="assets/img-temp/740x380/img2.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/740x380/img2.jpg" alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-bg-black-opacity-0_3 g-color-white">
                                        <i class="hs-icon hs-icon-plus g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-40x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--02"
                                    data-src="assets/img-temp/740x380/img1.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/740x380/img1.jpg" alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-bg-black-opacity-0_3 g-color-white">
                                        <i class="hs-icon hs-icon-plus g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="shortcode-styles">
                        <!-- CSS Implementing Plugins -->
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/fancybox/jquery.fancybox.min.css">
                    </div>

                    <div class="shortcode-scripts">
                        <!-- JS Implementing Plugins -->
                        <script type="text/plain" src="assets/vendor/masonry/dist/masonry.pkgd.min.js"></script>
                        <script type="text/plain" src="assets/vendor/imagesloaded/imagesloaded.js"></script>
                        <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

                        <!-- JS Unify -->
                        <script type="text/plain" src="assets/js/components/hs.popup.js"></script>

                        <!-- JS Plugins Init. -->
                        <script type="text/plain">
              $(document).on('ready', function () {
                // initialization of masonry
                $('.masonry-grid').imagesLoaded().then(function () {
                  $('.masonry-grid').masonry({
                    columnWidth: '.masonry-grid-sizer',
                    itemSelector: '.masonry-grid-item',
                    percentPosition: true
                  });
                });

                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox');
              });
            </script>
                    </div>
                </div>




                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 container">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode2" data-modal-target="#modalMarkup"
                        data-modal-effect="fadein">
                        <i class="fa fa-code"></i>
                        Show code
                    </a>
                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                        data-content-target="#shortcode2" data-success-text="Copied">
                        <i class="fa fa-clone"></i>
                        Copy code
                    </a>
                </div>
                <!-- End Show Code -->

            </section>
            <!-- End Gallery #02 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #03 -->
            <section class="container">
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#03</span>
                    </h2>
                </div>

                <div id="shortcode3">
                    <div class="shortcode-html">
                        <div class="row">
                            <div class="col-md-3 g-mb-30">
                                <a class="js-fancybox d-block u-block-hover" href="javascript:;"
                                    data-fancybox="lightbox-gallery--03" data-src="assets/img-temp/740x380/img1.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--mover-right"
                                        src="assets/img-temp/740x380/img1.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-3 g-mb-30">
                                <a class="js-fancybox d-block u-block-hover" href="javascript:;"
                                    data-fancybox="lightbox-gallery--03" data-src="assets/img-temp/740x380/img2.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--mover-right"
                                        src="assets/img-temp/740x380/img2.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-3 g-mb-30">
                                <a class="js-fancybox d-block u-block-hover" href="javascript:;"
                                    data-fancybox="lightbox-gallery--03" data-src="assets/img-temp/740x380/img3.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--mover-right"
                                        src="assets/img-temp/740x380/img3.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-3 g-mb-30">
                                <a class="js-fancybox d-block u-block-hover" href="javascript:;"
                                    data-fancybox="lightbox-gallery--03" data-src="assets/img-temp/740x380/img4.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--mover-right"
                                        src="assets/img-temp/740x380/img4.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-3 g-mb-30">
                                <a class="js-fancybox d-block u-block-hover" href="javascript:;"
                                    data-fancybox="lightbox-gallery--03" data-src="assets/img-temp/740x380/img5.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--mover-right"
                                        src="assets/img-temp/740x380/img5.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-3 g-mb-30">
                                <a class="js-fancybox d-block u-block-hover" href="javascript:;"
                                    data-fancybox="lightbox-gallery--03" data-src="assets/img-temp/740x380/img6.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--mover-right"
                                        src="assets/img-temp/740x380/img6.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-3 g-mb-30">
                                <a class="js-fancybox d-block u-block-hover" href="javascript:;"
                                    data-fancybox="lightbox-gallery--03" data-src="assets/img-temp/740x380/img1.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--mover-right"
                                        src="assets/img-temp/740x380/img1.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-3 g-mb-30">
                                <a class="js-fancybox d-block u-block-hover" href="javascript:;"
                                    data-fancybox="lightbox-gallery--03" data-src="assets/img-temp/740x380/img2.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--mover-right"
                                        src="assets/img-temp/740x380/img2.jpg" alt="Image Description">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="shortcode-styles">
                        <!-- CSS Implementing Plugins -->
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/fancybox/jquery.fancybox.min.css">
                    </div>

                    <div class="shortcode-scripts">
                        <!-- JS Implementing Plugins -->
                        <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

                        <!-- JS Unify -->
                        <script type="text/plain" src="assets/js/components/hs.popup.js"></script>

                        <!-- JS Plugins Init. -->
                        <script type="text/plain">
              $(document).on('ready', function () {
                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox');
              });
            </script>
                    </div>
                </div>



                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 container">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode3" data-modal-target="#modalMarkup"
                        data-modal-effect="fadein">
                        <i class="fa fa-code"></i>
                        Show code
                    </a>
                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                        data-content-target="#shortcode3" data-success-text="Copied">
                        <i class="fa fa-clone"></i>
                        Copy code
                    </a>
                </div>
                <!-- End Show Code -->

            </section>
            <!-- End Gallery #03 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #04 -->
            <section>
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#04</span>
                    </h2>
                </div>

                <div id="shortcode4">
                    <div class="shortcode-html">
                        <div class="js-carousel text-center" data-infinite="true" data-center-mode="true"
                            data-center-padding="60px" data-slides-show="4"
                            data-arrows-classes="u-arrow-v1 g-absolute-centered--y g-width-35 g-height-40 g-font-size-18 g-color-gray g-bg-white"
                            data-arrow-left-classes="fa fa-angle-left g-left-0"
                            data-arrow-right-classes="fa fa-angle-right g-right-0"
                            data-responsive='[{
                   "breakpoint": 768,
                   "settings": {
                     "slidesToShow": 2,
                     "slidesToScroll": 2,
                     "centerPadding": 0
                   }
                 }]'>
                            <div class="js-slide g-px-10">
                                <a class="js-fancybox d-block u-block-hover g-pos-rel" href="javascript:;"
                                    data-fancybox="lightbox-gallery--04" data-src="assets/img-temp/350x230/img1.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/350x230/img1.jpg" alt="Image Description">
                                    <span
                                        class="u-icon-v3 u-icon-size--xs g-bg-white g-color-black g-rounded-50x g-cursor-pointer g-pos-abs g-bottom-10 g-right-10">
                                        <i class="hs-icon hs-icon-magnifier"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide g-px-10">
                                <a class="js-fancybox d-block u-block-hover g-pos-rel" href="javascript:;"
                                    data-fancybox="lightbox-gallery--04" data-src="assets/img-temp/350x230/img2.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/350x230/img2.jpg" alt="Image Description">
                                    <span
                                        class="u-icon-v3 u-icon-size--xs g-bg-white g-color-black g-rounded-50x g-cursor-pointer g-pos-abs g-bottom-10 g-right-10">
                                        <i class="hs-icon hs-icon-magnifier"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide g-px-10">
                                <a class="js-fancybox d-block u-block-hover g-pos-rel" href="javascript:;"
                                    data-fancybox="lightbox-gallery--04" data-src="assets/img-temp/350x230/img3.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/350x230/img3.jpg" alt="Image Description">
                                    <span
                                        class="u-icon-v3 u-icon-size--xs g-bg-white g-color-black g-rounded-50x g-cursor-pointer g-pos-abs g-bottom-10 g-right-10">
                                        <i class="hs-icon hs-icon-magnifier"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide g-px-10">
                                <a class="js-fancybox d-block u-block-hover g-pos-rel" href="javascript:;"
                                    data-fancybox="lightbox-gallery--04" data-src="assets/img-temp/350x230/img4.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/350x230/img4.jpg" alt="Image Description">
                                    <span
                                        class="u-icon-v3 u-icon-size--xs g-bg-white g-color-black g-rounded-50x g-cursor-pointer g-pos-abs g-bottom-10 g-right-10">
                                        <i class="hs-icon hs-icon-magnifier"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide g-px-10">
                                <a class="js-fancybox d-block u-block-hover g-pos-rel" href="javascript:;"
                                    data-fancybox="lightbox-gallery--04" data-src="assets/img-temp/350x230/img5.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/350x230/img5.jpg" alt="Image Description">
                                    <span
                                        class="u-icon-v3 u-icon-size--xs g-bg-white g-color-black g-rounded-50x g-cursor-pointer g-pos-abs g-bottom-10 g-right-10">
                                        <i class="hs-icon hs-icon-magnifier"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide g-px-10">
                                <a class="js-fancybox d-block u-block-hover g-pos-rel" href="javascript:;"
                                    data-fancybox="lightbox-gallery--04" data-src="assets/img-temp/350x230/img6.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/350x230/img6.jpg" alt="Image Description">
                                    <span
                                        class="u-icon-v3 u-icon-size--xs g-bg-white g-color-black g-rounded-50x g-cursor-pointer g-pos-abs g-bottom-10 g-right-10">
                                        <i class="hs-icon hs-icon-magnifier"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="shortcode-styles">
                        <!-- CSS Implementing Plugins -->
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/fancybox/jquery.fancybox.min.css">
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
                    </div>

                    <div class="shortcode-scripts">
                        <!-- JS Implementing Plugins -->
                        <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
                        <script type="text/plain" src="assets/vendor/slick-carousel/slick/slick.js"></script>

                        <!-- JS Unify -->
                        <script type="text/plain" src="assets/js/components/hs.popup.js"></script>
                        <script type="text/plain" src="assets/js/components/hs.carousel.js"></script>

                        <!-- JS Plugins Init. -->
                        <script type="text/plain">
              $(document).on('ready', function () {
                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox');

                // initialization of carousel
                $.HSCore.components.HSCarousel.init('.js-carousel');
              });
            </script>
                    </div>
                </div>




                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 container">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode4" data-modal-target="#modalMarkup"
                        data-modal-effect="fadein">
                        <i class="fa fa-code"></i>
                        Show code
                    </a>
                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                        data-content-target="#shortcode4" data-success-text="Copied">
                        <i class="fa fa-clone"></i>
                        Copy code
                    </a>
                </div>
                <!-- End Show Code -->

            </section>
            <!-- End Gallery #04 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #05 -->
            <section class="container">
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#05</span>
                    </h2>
                </div>

                <div id="shortcode5">
                    <div class="shortcode-html">
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_5--after g-mb-30 g-mb-0--md"
                                    href="javascript:;" data-fancybox="lightbox-gallery--05"
                                    data-src="assets/img-temp/800x700/img1.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/800x700/img1.jpg"
                                        alt="Image Description">

                                    <span
                                        class="u-bg-overlay__inner g-font-size-18 g-color-white g-pos-abs g-left-20 g-bottom-20">
                                        Pipsum dolor sit amet
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_5--after g-mb-30"
                                    href="javascript:;" data-fancybox="lightbox-gallery--05"
                                    data-src="assets/img-temp/500x450/img1.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/500x450/img1.jpg"
                                        alt="Image Description">

                                    <span class="u-bg-overlay__inner g-color-white g-pos-abs g-left-20 g-bottom-20">
                                        Platea dictumst
                                    </span>
                                </a>

                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_5--after g-mb-30 g-mb-0--md"
                                    href="javascript:;" data-fancybox="lightbox-gallery--05"
                                    data-src="assets/img-temp/500x450/img2.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/500x450/img2.jpg"
                                        alt="Image Description">

                                    <span class="u-bg-overlay__inner g-color-white g-pos-abs g-left-20 g-bottom-20">
                                        Hendrerit curabitur
                                    </span>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_5--after g-mb-30"
                                    href="javascript:;" data-fancybox="lightbox-gallery--05"
                                    data-src="assets/img-temp/500x450/img3.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/500x450/img3.jpg"
                                        alt="Image Description">

                                    <span class="u-bg-overlay__inner g-color-white g-pos-abs g-left-20 g-bottom-20">
                                        Consectetur adipiscing
                                    </span>
                                </a>

                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_5--after g-mb-30 g-mb-0--md"
                                    href="javascript:;" data-fancybox="lightbox-gallery--05"
                                    data-src="assets/img-temp/500x450/img4.jpg" data-speed="350"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/500x450/img4.jpg"
                                        alt="Image Description">

                                    <span class="u-bg-overlay__inner g-absolute-centered g-color-white">
                                        <span class="g-font-size-46">10+</span>
                                        <br>view photos
                                    </span>
                                </a>

                                <img class="js-fancybox g-hidden-xs-up" href="javascript:;"
                                    data-fancybox="lightbox-gallery--05" data-src="assets/img-temp/500x450/img1.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                <img class="js-fancybox g-hidden-xs-up" href="javascript:;"
                                    data-fancybox="lightbox-gallery--05" data-src="assets/img-temp/500x450/img2.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                                <img class="js-fancybox g-hidden-xs-up" href="javascript:;"
                                    data-fancybox="lightbox-gallery--05" data-src="assets/img-temp/500x450/img3.jpg"
                                    data-speed="350" data-caption="Lightbox Gallery">
                            </div>
                        </div>
                    </div>

                    <div class="shortcode-styles">
                        <!-- CSS Implementing Plugins -->
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/fancybox/jquery.fancybox.min.css">
                    </div>

                    <div class="shortcode-scripts">
                        <!-- JS Implementing Plugins -->
                        <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

                        <!-- JS Unify -->
                        <script type="text/plain" src="assets/js/components/hs.popup.js"></script>

                        <!-- JS Plugins Init. -->
                        <script type="text/plain">
              $(document).on('ready', function () {
                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox');
              });
            </script>
                    </div>
                </div>



                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 container">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode5" data-modal-target="#modalMarkup"
                        data-modal-effect="fadein">
                        <i class="fa fa-code"></i>
                        Show code
                    </a>
                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                        data-content-target="#shortcode5" data-success-text="Copied">
                        <i class="fa fa-clone"></i>
                        Copy code
                    </a>
                </div>
                <!-- End Show Code -->

            </section>
            <!-- End Gallery #05 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #06 -->
            <section class="container">
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#06</span>
                    </h2>
                </div>

                <div id="shortcode6">
                    <div class="shortcode-html">
                        <div class="row">
                            <div class="col-md-6 text-center g-mb-30">
                                <div class="js-carousel text-center g-pb-30" data-infinite="true"
                                    data-arrows-classes="u-arrow-v1 g-absolute-centered--y g-width-35 g-height-40 g-font-size-18 g-color-gray g-bg-white g-mt-minus-10"
                                    data-arrow-left-classes="fa fa-angle-left g-left-0"
                                    data-arrow-right-classes="fa fa-angle-right g-right-0">
                                    <div class="js-slide">
                                        <a class="js-fancybox" href="javascript:;"
                                            data-fancybox="lightbox-gallery--07-1"
                                            data-src="assets/img-temp/900x600/img5.jpg"
                                            data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                            data-animate-out="bounceOutDown" data-speed="1000"
                                            data-overlay-blur-bg="true">
                                            <img class="img-fluid g-rounded-6" src="assets/img-temp/900x600/img5.jpg"
                                                alt="Image Description">
                                        </a>
                                    </div>

                                    <div class="js-slide">
                                        <a class="js-fancybox" href="javascript:;"
                                            data-fancybox="lightbox-gallery--07-1"
                                            data-src="assets/img-temp/900x600/img4.jpg"
                                            data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                            data-animate-out="bounceOutDown" data-speed="1000"
                                            data-overlay-blur-bg="true">
                                            <img class="img-fluid g-rounded-6" src="assets/img-temp/900x600/img4.jpg"
                                                alt="Image Description">
                                        </a>
                                    </div>
                                </div>
                                <h3 class="h4 g-color-black">Nulla ipsum dolor</h3>
                                <p>Consectetur adipiscing elitut eleifend nisl</p>
                            </div>
                            <div class="col-md-6 text-center g-mb-30">
                                <div class="js-carousel text-center g-pb-30" data-infinite="true"
                                    data-arrows-classes="u-arrow-v1 g-absolute-centered--y g-width-35 g-height-40 g-font-size-18 g-color-gray g-bg-white g-mt-minus-10"
                                    data-arrow-left-classes="fa fa-angle-left g-left-0"
                                    data-arrow-right-classes="fa fa-angle-right g-right-0">
                                    <div class="js-slide">
                                        <a class="js-fancybox" href="javascript:;"
                                            data-fancybox="lightbox-gallery--07-2"
                                            data-src="assets/img-temp/900x600/img6.jpg"
                                            data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                            data-animate-out="bounceOutDown" data-speed="1000"
                                            data-overlay-blur-bg="true">
                                            <img class="img-fluid g-rounded-6" src="assets/img-temp/900x600/img6.jpg"
                                                alt="Image Description">
                                        </a>
                                    </div>

                                    <div class="js-slide">
                                        <a class="js-fancybox" href="javascript:;"
                                            data-fancybox="lightbox-gallery--07-2"
                                            data-src="assets/img-temp/900x600/img2.jpg"
                                            data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                            data-animate-out="bounceOutDown" data-speed="1000"
                                            data-overlay-blur-bg="true">
                                            <img class="img-fluid g-rounded-6" src="assets/img-temp/900x600/img2.jpg"
                                                alt="Image Description">
                                        </a>
                                    </div>
                                </div>
                                <h3 class="h4 g-color-black">Habitasse platea</h3>
                                <p>Consectetur adipiscing elitut eleifend nisl</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-center g-mb-30">
                                <div class="js-carousel text-center g-pb-30" data-infinite="true"
                                    data-arrows-classes="u-arrow-v1 g-absolute-centered--y g-width-35 g-height-40 g-font-size-18 g-color-gray g-bg-white g-mt-minus-10"
                                    data-arrow-left-classes="fa fa-angle-left g-left-0"
                                    data-arrow-right-classes="fa fa-angle-right g-right-0">
                                    <div class="js-slide">
                                        <a class="js-fancybox" href="javascript:;"
                                            data-fancybox="lightbox-gallery--07-3"
                                            data-src="assets/img-temp/900x600/img7.jpg"
                                            data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                            data-animate-out="bounceOutDown" data-speed="1000"
                                            data-overlay-blur-bg="true">
                                            <img class="img-fluid g-rounded-6" src="assets/img-temp/900x600/img7.jpg"
                                                alt="Image Description">
                                        </a>
                                    </div>

                                    <div class="js-slide">
                                        <a class="js-fancybox" href="javascript:;"
                                            data-fancybox="lightbox-gallery--07-3"
                                            data-src="assets/img-temp/900x600/img3.jpg"
                                            data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                            data-animate-out="bounceOutDown" data-speed="1000"
                                            data-overlay-blur-bg="true">
                                            <img class="img-fluid g-rounded-6" src="assets/img-temp/900x600/img3.jpg"
                                                alt="Image Description">
                                        </a>
                                    </div>
                                </div>
                                <h3 class="h4 g-color-black">Adipiscing elitut</h3>
                                <p>Consectetur adipiscing elitut eleifend nisl</p>
                            </div>

                            <div class="col-md-6 text-center g-mb-30">
                                <div class="js-carousel text-center g-pb-30" data-infinite="true"
                                    data-arrows-classes="u-arrow-v1 g-absolute-centered--y g-width-35 g-height-40 g-font-size-18 g-color-gray g-bg-white g-mt-minus-10"
                                    data-arrow-left-classes="fa fa-angle-left g-left-0"
                                    data-arrow-right-classes="fa fa-angle-right g-right-0">
                                    <div class="js-slide">
                                        <a class="js-fancybox" href="javascript:;"
                                            data-fancybox="lightbox-gallery--07-4"
                                            data-src="assets/img-temp/900x600/img3.jpg"
                                            data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                            data-animate-out="bounceOutDown" data-speed="1000"
                                            data-overlay-blur-bg="true">
                                            <img class="img-fluid g-rounded-6" src="assets/img-temp/900x600/img3.jpg"
                                                alt="Image Description">
                                        </a>
                                    </div>

                                    <div class="js-slide">
                                        <a class="js-fancybox" href="javascript:;"
                                            data-fancybox="lightbox-gallery--07-4"
                                            data-src="assets/img-temp/900x600/img4.jpg"
                                            data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                            data-animate-out="bounceOutDown" data-speed="1000"
                                            data-overlay-blur-bg="true">
                                            <img class="img-fluid g-rounded-6" src="assets/img-temp/900x600/img4.jpg"
                                                alt="Image Description">
                                        </a>
                                    </div>
                                </div>
                                <h3 class="h4 g-color-black">Eleifend nisl</h3>
                                <p>Consectetur adipiscing elitut eleifend nisl</p>
                            </div>
                        </div>
                    </div>

                    <div class="shortcode-styles">
                        <!-- CSS Implementing Plugins -->
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/fancybox/jquery.fancybox.min.css">
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
                    </div>

                    <div class="shortcode-scripts">
                        <!-- JS Implementing Plugins -->
                        <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
                        <script type="text/plain" src="assets/vendor/slick-carousel/slick/slick.js"></script>

                        <!-- JS Unify -->
                        <script type="text/plain" src="assets/js/components/hs.popup.js"></script>
                        <script type="text/plain" src="assets/js/components/hs.carousel.js"></script>

                        <!-- JS Plugins Init. -->
                        <script type="text/plain">
              $(document).on('ready', function () {
                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox');

                // initialization of carousel
                $.HSCore.components.HSCarousel.init('.js-carousel');
              });
            </script>
                    </div>
                </div>




                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 container">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode6" data-modal-target="#modalMarkup"
                        data-modal-effect="fadein">
                        <i class="fa fa-code"></i>
                        Show code
                    </a>
                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                        data-content-target="#shortcode6" data-success-text="Copied">
                        <i class="fa fa-clone"></i>
                        Copy code
                    </a>
                </div>
                <!-- End Show Code -->

            </section>
            <!-- End Gallery #06 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #07 -->
            <section>
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#07</span>
                    </h2>
                </div>

                <div id="shortcode7">
                    <div class="shortcode-html">
                        <div class="masonry-grid">
                            <div class="masonry-grid-sizer g-width-16_6x--sm"></div>
                            <div class="masonry-grid-item u-block-hover g-width-16_6x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after g-opacity-0_8--hover g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--07"
                                    data-src="assets/img-temp/900x600/img4.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img4.jpg"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-16_6x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after g-opacity-0_8--hover g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--07"
                                    data-src="assets/img-temp/900x600/img1.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img1.jpg"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-33_3x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after g-opacity-0_8--hover g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--07"
                                    data-src="assets/img-temp/900x600/img6.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img6.jpg"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-16_6x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after g-opacity-0_8--hover g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--07"
                                    data-src="assets/img-temp/900x600/img2.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img2.jpg"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-16_6x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after g-opacity-0_8--hover g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--07"
                                    data-src="assets/img-temp/900x600/img13.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img3.jpg"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-33_3x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after g-opacity-0_8--hover g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--07"
                                    data-src="assets/img-temp/900x600/img6.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img6.jpg"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-16_6x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after g-opacity-0_8--hover g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--07"
                                    data-src="assets/img-temp/900x600/img4.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img4.jpg"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-16_6x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after g-opacity-0_8--hover g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--07"
                                    data-src="assets/img-temp/900x600/img3.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img3.jpg"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-33_3x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after g-opacity-0_8--hover g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--07"
                                    data-src="assets/img-temp/900x600/img1.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img1.jpg"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-16_6x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after g-opacity-0_8--hover g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--07"
                                    data-src="assets/img-temp/900x600/img1.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img1.jpg"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-16_6x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after g-opacity-0_8--hover g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--07"
                                    data-src="assets/img-temp/900x600/img2.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img2.jpg"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-16_6x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after g-opacity-0_8--hover g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--07"
                                    data-src="assets/img-temp/900x600/img1.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img1.jpg"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-16_6x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after g-opacity-0_8--hover g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--07"
                                    data-src="assets/img-temp/900x600/img6.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img6.jpg"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-16_6x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after g-opacity-0_8--hover g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--07"
                                    data-src="assets/img-temp/900x600/img2.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img2.jpg"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="masonry-grid-item u-block-hover g-width-16_6x--sm">
                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_3--after g-opacity-0_8--hover g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--07"
                                    data-src="assets/img-temp/900x600/img13.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img3.jpg"
                                        alt="Image Description">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="shortcode-styles">
                        <!-- CSS Implementing Plugins -->
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/fancybox/jquery.fancybox.min.css">
                    </div>

                    <div class="shortcode-scripts">
                        <!-- JS Implementing Plugins -->
                        <script type="text/plain" src="assets/vendor/masonry/dist/masonry.pkgd.min.js"></script>
                        <script type="text/plain" src="assets/vendor/imagesloaded/imagesloaded.js"></script>
                        <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

                        <!-- JS Unify -->
                        <script type="text/plain" src="assets/js/components/hs.popup.js"></script>

                        <!-- JS Plugins Init. -->
                        <script type="text/plain">
              $(document).on('ready', function () {
                // initialization of masonry
                $('.masonry-grid').imagesLoaded().then(function () {
                  $('.masonry-grid').masonry({
                    columnWidth: '.masonry-grid-sizer',
                    itemSelector: '.masonry-grid-item',
                    percentPosition: true
                  });
                });

                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox');
              });
            </script>
                    </div>
                </div>




                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 container">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode7" data-modal-target="#modalMarkup"
                        data-modal-effect="fadein">
                        <i class="fa fa-code"></i>
                        Show code
                    </a>
                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                        data-content-target="#shortcode7" data-success-text="Copied">
                        <i class="fa fa-clone"></i>
                        Copy code
                    </a>
                </div>
                <!-- End Show Code -->

            </section>
            <!-- End Gallery #07 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #08 -->
            <section class="container">
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#08</span>
                    </h2>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <div id="shortcode8">
                            <div class="shortcode-html">
                                <div id="carousel-08-1" class="js-carousel text-center g-mb-20" data-infinite="true"
                                    data-arrows-classes="u-arrow-v1 g-absolute-centered--y g-width-35 g-height-40 g-font-size-18 g-color-gray g-bg-white g-mt-minus-10"
                                    data-arrow-left-classes="fa fa-angle-left g-left-0"
                                    data-arrow-right-classes="fa fa-angle-right g-right-0"
                                    data-nav-for="#carousel-08-2">
                                    <div class="js-slide">
                                        <a class="js-fancybox d-block g-pos-rel" href="javascript:;"
                                            data-fancybox="lightbox-gallery--08-1"
                                            data-src="assets/img-temp/500x450/img1.jpg"
                                            data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                            data-animate-out="bounceOutDown" data-speed="1000"
                                            data-overlay-blur-bg="true">
                                            <img class="img-fluid w-100" src="assets/img-temp/500x450/img1.jpg"
                                                alt="Image Description">
                                        </a>
                                    </div>

                                    <div class="js-slide">
                                        <a class="js-fancybox d-block g-pos-rel" href="javascript:;"
                                            data-fancybox="lightbox-gallery--08-1"
                                            data-src="assets/img-temp/500x450/img2.jpg"
                                            data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                            data-animate-out="bounceOutDown" data-speed="1000"
                                            data-overlay-blur-bg="true">
                                            <img class="img-fluid w-100" src="assets/img-temp/500x450/img2.jpg"
                                                alt="Image Description">
                                        </a>
                                    </div>

                                    <div class="js-slide">
                                        <a class="js-fancybox d-block g-pos-rel" href="javascript:;"
                                            data-fancybox="lightbox-gallery--08-1"
                                            data-src="assets/img-temp/500x450/img3.jpg"
                                            data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                            data-animate-out="bounceOutDown" data-speed="1000"
                                            data-overlay-blur-bg="true">
                                            <img class="img-fluid w-100" src="assets/img-temp/500x450/img3.jpg"
                                                alt="Image Description">
                                        </a>
                                    </div>

                                    <div class="js-slide">
                                        <a class="js-fancybox d-block g-pos-rel" href="javascript:;"
                                            data-fancybox="lightbox-gallery--08-1"
                                            data-src="assets/img-temp/500x450/img4.jpg"
                                            data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                            data-animate-out="bounceOutDown" data-speed="1000"
                                            data-overlay-blur-bg="true">
                                            <img class="img-fluid w-100" src="assets/img-temp/500x450/img4.jpg"
                                                alt="Image Description">
                                        </a>
                                    </div>

                                    <div class="js-slide">
                                        <a class="js-fancybox d-block g-pos-rel" href="javascript:;"
                                            data-fancybox="lightbox-gallery--08-1"
                                            data-src="assets/img-temp/500x450/img5.jpg"
                                            data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                            data-animate-out="bounceOutDown" data-speed="1000"
                                            data-overlay-blur-bg="true">
                                            <img class="img-fluid w-100" src="assets/img-temp/500x450/img5.jpg"
                                                alt="Image Description">
                                        </a>
                                    </div>

                                    <div class="js-slide">
                                        <a class="js-fancybox d-block g-pos-rel" href="javascript:;"
                                            data-fancybox="lightbox-gallery--08-1"
                                            data-src="assets/img-temp/500x450/img6.jpg"
                                            data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                            data-animate-out="bounceOutDown" data-speed="1000"
                                            data-overlay-blur-bg="true">
                                            <img class="img-fluid w-100" src="assets/img-temp/500x450/img6.jpg"
                                                alt="Image Description">
                                        </a>
                                    </div>
                                </div>

                                <div id="carousel-08-2" class="js-carousel text-center g-mx-minus-10 u-carousel-v3"
                                    data-infinite="true" data-center-mode="true" data-slides-show="4"
                                    data-is-thumbs="true" data-nav-for="#carousel-08-1">
                                    <div class="js-slide g-px-10">
                                        <img class="img-fluid w-100" src="assets/img-temp/500x450/img1.jpg"
                                            alt="Image Description">
                                    </div>

                                    <div class="js-slide g-px-10">
                                        <img class="img-fluid w-100" src="assets/img-temp/500x450/img2.jpg"
                                            alt="Image Description">
                                    </div>

                                    <div class="js-slide g-px-10">
                                        <img class="img-fluid w-100" src="assets/img-temp/500x450/img3.jpg"
                                            alt="Image Description">
                                    </div>

                                    <div class="js-slide g-px-10">
                                        <img class="img-fluid w-100" src="assets/img-temp/500x450/img4.jpg"
                                            alt="Image Description">
                                    </div>

                                    <div class="js-slide g-px-10">
                                        <img class="img-fluid w-100" src="assets/img-temp/500x450/img5.jpg"
                                            alt="Image Description">
                                    </div>

                                    <div class="js-slide g-px-10">
                                        <img class="img-fluid w-100" src="assets/img-temp/500x450/img6.jpg"
                                            alt="Image Description">
                                    </div>
                                </div>
                            </div>

                            <div class="shortcode-styles">
                                <!-- CSS Implementing Plugins -->
                                <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                                <link type="text/plain" rel="stylesheet"
                                    href="assets/vendor/fancybox/jquery.fancybox.min.css">
                                <link type="text/plain" rel="stylesheet"
                                    href="assets/vendor/slick-carousel/slick/slick.css">
                            </div>

                            <div class="shortcode-scripts">
                                <!-- JS Implementing Plugins -->
                                <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
                                <script type="text/plain" src="assets/vendor/slick-carousel/slick/slick.js"></script>

                                <!-- JS Unify -->
                                <script type="text/plain" src="assets/js/components/hs.popup.js"></script>
                                <script type="text/plain" src="assets/js/components/hs.carousel.js"></script>

                                <!-- JS Plugins Init. -->
                                <script type="text/plain">
                  $(document).on('ready', function () {
                    // initialization of popups
                    $.HSCore.components.HSPopup.init('.js-fancybox');

                    // initialization of carousel
                    $.HSCore.components.HSCarousel.init('.js-carousel');
                  });
                </script>
                            </div>
                        </div>



                        <!-- Show Code -->
                        <div class="g-font-size-12 g-my-30 container">
                            <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                href="#!" data-content-target="#shortcode8" data-modal-target="#modalMarkup"
                                data-modal-effect="fadein">
                                <i class="fa fa-code"></i>
                                Show code
                            </a>
                            <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                                data-content-target="#shortcode8" data-success-text="Copied">
                                <i class="fa fa-clone"></i>
                                Copy code
                            </a>
                        </div>
                        <!-- End Show Code -->

                    </div>
                </div>
            </section>
            <!-- End Gallery #08 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #09 -->
            <section class="container">
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#09</span>
                    </h2>
                </div>

                <div class="row">
                    <div class="col-md-8 ml-md-auto mr-md-auto">
                        <div id="shortcode9">
                            <div class="shortcode-html">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div id="carousel-09-1"
                                            class="js-carousel text-center g-font-size-0 g-mb-20 g-mb-0--sm"
                                            data-infinite="true" data-vertical="true"
                                            data-arrows-classes="u-arrow-v1 g-absolute-centered--x g-width-35 g-height-35 g-font-size-18 g-color-gray g-bg-white"
                                            data-arrow-left-classes="fa fa-angle-up g-top-0"
                                            data-arrow-right-classes="fa fa-angle-down g-bottom-0"
                                            data-nav-for="#carousel-09-2">
                                            <div class="js-slide">
                                                <a class="js-fancybox d-block g-pos-rel" href="javascript:;"
                                                    data-fancybox="lightbox-gallery--09-1"
                                                    data-src="assets/img-temp/900x600/img3.jpg"
                                                    data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                                    data-animate-out="bounceOutDown" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid w-100"
                                                        src="assets/img-temp/900x600/img3.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="js-slide">
                                                <a class="js-fancybox d-block g-pos-rel" href="javascript:;"
                                                    data-fancybox="lightbox-gallery--09-1"
                                                    data-src="assets/img-temp/900x600/img4.jpg"
                                                    data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                                    data-animate-out="bounceOutDown" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid w-100"
                                                        src="assets/img-temp/900x600/img4.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="js-slide">
                                                <a class="js-fancybox d-block g-pos-rel" href="javascript:;"
                                                    data-fancybox="lightbox-gallery--09-1"
                                                    data-src="assets/img-temp/900x600/img5.jpg"
                                                    data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                                    data-animate-out="bounceOutDown" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid w-100"
                                                        src="assets/img-temp/900x600/img5.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="js-slide">
                                                <a class="js-fancybox d-block g-pos-rel" href="javascript:;"
                                                    data-fancybox="lightbox-gallery--09-1"
                                                    data-src="assets/img-temp/900x600/img6.jpg"
                                                    data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                                    data-animate-out="bounceOutDown" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid w-100"
                                                        src="assets/img-temp/900x600/img6.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="js-slide">
                                                <a class="js-fancybox d-block g-pos-rel" href="javascript:;"
                                                    data-fancybox="lightbox-gallery--09-1"
                                                    data-src="assets/img-temp/900x600/img1.jpg"
                                                    data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                                    data-animate-out="bounceOutDown" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid w-100"
                                                        src="assets/img-temp/900x600/img1.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="js-slide">
                                                <a class="js-fancybox d-block g-pos-rel" href="javascript:;"
                                                    data-fancybox="lightbox-gallery--09-1"
                                                    data-src="assets/img-temp/900x600/img2.jpg"
                                                    data-caption="Lightbox Gallery" data-animate-in="bounceInDown"
                                                    data-animate-out="bounceOutDown" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid w-100"
                                                        src="assets/img-temp/900x600/img2.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div id="carousel-09-2"
                                            class="js-carousel text-center u-carousel-v3 g-mx-minus-10 g-mx-minus-0--sm g-my-minus-5--sm"
                                            data-infinite="true" data-center-mode="true" data-vertical="true"
                                            data-slides-show="4" data-is-thumbs="true"
                                            data-nav-for="#carousel-09-1">
                                            <div class="js-slide g-px-10 g-px-0--sm g-py-5--sm">
                                                <img class="img-fluid w-100" src="assets/img-temp/900x600/img3.jpg"
                                                    alt="Image Description">
                                            </div>

                                            <div class="js-slide g-px-10 g-px-0--sm g-py-5--sm">
                                                <img class="img-fluid w-100" src="assets/img-temp/900x600/img4.jpg"
                                                    alt="Image Description">
                                            </div>

                                            <div class="js-slide g-px-10 g-px-0--sm g-py-5--sm">
                                                <img class="img-fluid w-100" src="assets/img-temp/900x600/img5.jpg"
                                                    alt="Image Description">
                                            </div>

                                            <div class="js-slide g-px-10 g-px-0--sm g-py-5--sm">
                                                <img class="img-fluid w-100" src="assets/img-temp/900x600/img6.jpg"
                                                    alt="Image Description">
                                            </div>

                                            <div class="js-slide g-px-10 g-px-0--sm g-py-5--sm">
                                                <img class="img-fluid w-100" src="assets/img-temp/900x600/img1.jpg"
                                                    alt="Image Description">
                                            </div>

                                            <div class="js-slide g-px-10 g-px-0--sm g-py-5--sm">
                                                <img class="img-fluid w-100" src="assets/img-temp/900x600/img2.jpg"
                                                    alt="Image Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="shortcode-styles">
                                <!-- CSS Implementing Plugins -->
                                <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                                <link type="text/plain" rel="stylesheet"
                                    href="assets/vendor/fancybox/jquery.fancybox.min.css">
                                <link type="text/plain" rel="stylesheet"
                                    href="assets/vendor/slick-carousel/slick/slick.css">
                            </div>

                            <div class="shortcode-scripts">
                                <!-- JS Implementing Plugins -->
                                <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
                                <script type="text/plain" src="assets/vendor/slick-carousel/slick/slick.js"></script>

                                <!-- JS Unify -->
                                <script type="text/plain" src="assets/js/components/hs.popup.js"></script>
                                <script type="text/plain" src="assets/js/components/hs.carousel.js"></script>

                                <!-- JS Plugins Init. -->
                                <script type="text/plain">
                  $(document).on('ready', function () {
                    // initialization of popups
                    $.HSCore.components.HSPopup.init('.js-fancybox');

                    // initialization of carousel
                    $.HSCore.components.HSCarousel.init('.js-carousel');
                  });
                </script>
                            </div>
                        </div>



                        <!-- Show Code -->
                        <div class="g-font-size-12 g-my-30 container">
                            <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                href="#!" data-content-target="#shortcode9" data-modal-target="#modalMarkup"
                                data-modal-effect="fadein">
                                <i class="fa fa-code"></i>
                                Show code
                            </a>
                            <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                                data-content-target="#shortcode9" data-success-text="Copied">
                                <i class="fa fa-clone"></i>
                                Copy code
                            </a>
                        </div>
                        <!-- End Show Code -->

                    </div>
                </div>
            </section>
            <!-- End Gallery #09 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #10 -->
            <section class="container">
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#10</span>
                    </h2>
                </div>

                <div id="shortcode10">
                    <div class="shortcode-html">
                        <div class="js-carousel text-center g-font-size-0 g-pb-20" data-infinite="true"
                            data-center-padding="60px" data-slides-show="5" data-slides-scroll="5"
                            data-rows="3"
                            data-arrows-classes="u-arrow-v1 g-absolute-centered--y g-width-40 g-height-40 g-font-size-18 g-color-white g-bg-primary"
                            data-arrow-left-classes="fa fa-angle-left g-left-0"
                            data-arrow-right-classes="fa fa-angle-right g-right-0"
                            data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x g-bottom-0"
                            data-responsive='[{
                   "breakpoint": 768,
                   "settings": {
                     "slidesToShow": 2,
                     "slidesToScroll": 2,
                     "centerPadding": 0
                   }
                 }]'>
                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img1.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img1.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img2.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img2.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img3.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img3.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img4.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img4.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img5.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img5.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img6.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img6.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img1.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img1.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img2.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img2.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img3.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img3.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img4.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img4.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img5.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img5.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img6.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img6.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img1.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img1.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img2.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img2.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img3.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img3.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img4.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img4.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img5.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img5.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="js-slide">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-primary-opacity-0_8--hover--after g-transition-0_3"
                                    href="javascript:;" data-fancybox="lightbox-gallery--10"
                                    data-src="assets/img-temp/900x600/img6.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid" src="assets/img-temp/900x600/img6.jpg"
                                        alt="Image Description">

                                    <span class="u-block-hover__additional--fade g-color-white g-z-index-2">
                                        <i class="hs-icon hs-icon-magnifier g-absolute-centered g-font-size-25"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="shortcode-styles">
                        <!-- CSS Implementing Plugins -->
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/fancybox/jquery.fancybox.min.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/slick-carousel/slick/slick.css">
                    </div>

                    <div class="shortcode-scripts">
                        <!-- JS Implementing Plugins -->
                        <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
                        <script type="text/plain" src="assets/vendor/slick-carousel/slick/slick.js"></script>

                        <!-- JS Unify -->
                        <script type="text/plain" src="assets/js/components/hs.popup.js"></script>
                        <script type="text/plain" src="assets/js/components/hs.carousel.js"></script>

                        <!-- JS Plugins Init. -->
                        <script type="text/plain">
              $(document).on('ready', function () {
                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox');

                // initialization of carousel
                $.HSCore.components.HSCarousel.init('.js-carousel');
              });
            </script>
                    </div>
                </div>



                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 container">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode10" data-modal-target="#modalMarkup"
                        data-modal-effect="fadein">
                        <i class="fa fa-code"></i>
                        Show code
                    </a>
                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                        data-content-target="#shortcode10" data-success-text="Copied">
                        <i class="fa fa-clone"></i>
                        Copy code
                    </a>
                </div>
                <!-- End Show Code -->

            </section>
            <!-- End Gallery #10 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #11 -->
            <section>
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#11</span>
                    </h2>
                </div>

                <div id="shortcode11">
                    <div class="shortcode-html">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay" href="javascript:;"
                                    data-fancybox="lightbox-gallery--11" data-src="assets/img-temp/900x600/img7.jpg"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--grayscale"
                                        src="assets/img-temp/900x600/img7.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay" href="javascript:;"
                                    data-fancybox="lightbox-gallery--11" data-src="assets/img-temp/900x600/img2.jpg"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--grayscale"
                                        src="assets/img-temp/900x600/img2.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay" href="javascript:;"
                                    data-fancybox="lightbox-gallery--11" data-src="assets/img-temp/900x600/img3.jpg"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--grayscale"
                                        src="assets/img-temp/900x600/img3.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay" href="javascript:;"
                                    data-fancybox="lightbox-gallery--11" data-src="assets/img-temp/900x600/img4.jpg"
                                    data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--grayscale"
                                        src="assets/img-temp/900x600/img4.jpg" alt="Image Description">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="shortcode-styles">
                        <!-- CSS Implementing Plugins -->
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/fancybox/jquery.fancybox.min.css">
                    </div>

                    <div class="shortcode-scripts">
                        <!-- JS Implementing Plugins -->
                        <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

                        <!-- JS Unify -->
                        <script type="text/plain" src="assets/js/components/hs.popup.js"></script>

                        <!-- JS Plugins Init. -->
                        <script type="text/plain">
              $(document).on('ready', function () {
                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox');
              });
            </script>
                    </div>
                </div>




                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 container">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode11" data-modal-target="#modalMarkup"
                        data-modal-effect="fadein">
                        <i class="fa fa-code"></i>
                        Show code
                    </a>
                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                        data-content-target="#shortcode11" data-success-text="Copied">
                        <i class="fa fa-clone"></i>
                        Copy code
                    </a>
                </div>
                <!-- End Show Code -->

            </section>
            <!-- End Gallery #11 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #12 -->
            <section class="container">
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#12</span>
                    </h2>
                </div>

                <div id="shortcode12">
                    <div class="shortcode-html">
                        <div class="row">
                            <div class="col-md-6 g-mb-30--md">
                                <article class="u-block-hover g-rounded-6">
                                    <figure class="u-bg-overlay g-bg-black-opacity-0_4--after">
                                        <img class="img-fluid u-block-hover__main--zoom-v1"
                                            src="assets/img-temp/900x600/img6.jpg" alt="Image Description">
                                    </figure>
                                    <header
                                        class="u-bg-overlay__inner g-pos-abs g-top-30 g-right-30 g-left-30 g-color-white">
                                        <h3 class="h4">Nulla ipsum dolor sit amet</h3>
                                        Consectetur adipiscing elitut eleifend nisl
                                    </header>
                                    <ul
                                        class="list-inline u-bg-overlay__inner g-pos-abs g-bottom-10 g-left-30 g-opacity-0_8">
                                        <li class="list-inline-item">
                                            <div class="g-brd-around g-brd-3 g-brd-white rounded-circle">
                                                <img class="g-width-30 g-height-30 rounded-circle"
                                                    src="assets/img-temp/100x100/img4.jpg" alt="Image Description">
                                            </div>
                                        </li>
                                        <li class="list-inline-item g-ml-minus-20">
                                            <div class="g-brd-around g-brd-3 g-brd-white rounded-circle">
                                                <img class="g-width-30 g-height-30 rounded-circle"
                                                    src="assets/img-temp/100x100/img5.jpg" alt="Image Description">
                                            </div>
                                        </li>
                                        <li class="list-inline-item g-ml-minus-20">
                                            <div class="g-brd-around g-brd-3 g-brd-white rounded-circle">
                                                <img class="g-width-30 g-height-30 rounded-circle"
                                                    src="assets/img-temp/100x100/img12.jpg" alt="Image Description">
                                            </div>
                                        </li>
                                        <li class="list-inline-item g-font-size-12 g-color-white">+21</li>
                                    </ul>
                                    <a class="js-fancybox u-link-v2" href="javascript:;"
                                        data-src="assets/img-temp/900x600/img6.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true">Read More
                                    </a>
                                </article>
                            </div>
                            <div class="col-md-6 g-mb-30--md">
                                <article class="u-block-hover g-rounded-6">
                                    <figure class="u-bg-overlay g-bg-black-opacity-0_4--after">
                                        <img class="img-fluid u-block-hover__main--zoom-v1"
                                            src="assets/img-temp/900x600/img2.jpg" alt="Image Description">
                                    </figure>
                                    <header
                                        class="u-bg-overlay__inner g-pos-abs g-top-30 g-right-30 g-left-30 g-color-white">
                                        <h3 class="h4">Adipiscing elitut</h3>
                                        Consectetur adipiscing elitut eleifend nisl
                                    </header>
                                    <ul
                                        class="list-inline u-bg-overlay__inner g-pos-abs g-bottom-10 g-left-30 g-opacity-0_8">
                                        <li class="list-inline-item">
                                            <div class="g-brd-around g-brd-3 g-brd-white rounded-circle">
                                                <img class="g-width-30 g-height-30 rounded-circle"
                                                    src="assets/img-temp/100x100/img6.jpg" alt="Image Description">
                                            </div>
                                        </li>
                                        <li class="list-inline-item g-ml-minus-20">
                                            <div class="g-brd-around g-brd-3 g-brd-white rounded-circle">
                                                <img class="g-width-30 g-height-30 rounded-circle"
                                                    src="assets/img-temp/100x100/img5.jpg" alt="Image Description">
                                            </div>
                                        </li>
                                        <li class="list-inline-item g-ml-minus-20">
                                            <div class="g-brd-around g-brd-3 g-brd-white rounded-circle">
                                                <img class="g-width-30 g-height-30 rounded-circle"
                                                    src="assets/img-temp/100x100/img16.jpg" alt="Image Description">
                                            </div>
                                        </li>
                                        <li class="list-inline-item g-font-size-12 g-color-white">+8</li>
                                    </ul>
                                    <a class="js-fancybox u-link-v2" href="javascript:;"
                                        data-src="assets/img-temp/900x600/img2.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true">Read More
                                    </a>
                                </article>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 g-mb-30--md">
                                <article class="u-block-hover g-rounded-6">
                                    <figure class="u-bg-overlay g-bg-black-opacity-0_4--after">
                                        <img class="img-fluid u-block-hover__main--zoom-v1"
                                            src="assets/img-temp/900x600/img1.jpg" alt="Image Description">
                                    </figure>
                                    <header
                                        class="u-bg-overlay__inner g-pos-abs g-top-30 g-right-30 g-left-30 g-color-white">
                                        <h3 class="h4">Hac habitasse platea</h3>
                                        Consectetur adipiscing elitut eleifend nisl
                                    </header>
                                    <ul
                                        class="list-inline u-bg-overlay__inner g-pos-abs g-bottom-10 g-left-30 g-opacity-0_8">
                                        <li class="list-inline-item">
                                            <div class="g-brd-around g-brd-3 g-brd-white rounded-circle">
                                                <img class="g-width-30 g-height-30 rounded-circle"
                                                    src="assets/img-temp/100x100/img5.jpg" alt="Image Description">
                                            </div>
                                        </li>
                                        <li class="list-inline-item g-ml-minus-20">
                                            <div class="g-brd-around g-brd-3 g-brd-white rounded-circle">
                                                <img class="g-width-30 g-height-30 rounded-circle"
                                                    src="assets/img-temp/100x100/img17.jpg" alt="Image Description">
                                            </div>
                                        </li>
                                        <li class="list-inline-item g-ml-minus-20">
                                            <div class="g-brd-around g-brd-3 g-brd-white rounded-circle">
                                                <img class="g-width-30 g-height-30 rounded-circle"
                                                    src="assets/img-temp/100x100/img4.jpg" alt="Image Description">
                                            </div>
                                        </li>
                                        <li class="list-inline-item g-font-size-12 g-color-white">+13</li>
                                    </ul>
                                    <a class="js-fancybox u-link-v2" href="javascript:;"
                                        data-src="assets/img-temp/900x600/img1.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true">Read More
                                    </a>
                                </article>
                            </div>
                            <div class="col-md-6 g-mb-30--md">
                                <article class="u-block-hover g-rounded-6">
                                    <figure class="u-bg-overlay g-bg-black-opacity-0_4--after">
                                        <img class="img-fluid u-block-hover__main--zoom-v1"
                                            src="assets/img-temp/900x600/img5.jpg" alt="Image Description">
                                    </figure>
                                    <header
                                        class="u-bg-overlay__inner g-pos-abs g-top-30 g-right-30 g-left-30 g-color-white">
                                        <h3 class="h4">Eleifend adipiscing elitut</h3>
                                        Consectetur adipiscing elitut eleifend nisl
                                    </header>
                                    <ul
                                        class="list-inline u-bg-overlay__inner g-pos-abs g-bottom-10 g-left-30 g-opacity-0_8">
                                        <li class="list-inline-item">
                                            <div class="g-brd-around g-brd-3 g-brd-white rounded-circle">
                                                <img class="g-width-30 g-height-30 rounded-circle"
                                                    src="assets/img-temp/100x100/img2.jpg" alt="Image Description">
                                            </div>
                                        </li>
                                        <li class="list-inline-item g-ml-minus-20">
                                            <div class="g-brd-around g-brd-3 g-brd-white rounded-circle">
                                                <img class="g-width-30 g-height-30 rounded-circle"
                                                    src="assets/img-temp/100x100/img3.jpg" alt="Image Description">
                                            </div>
                                        </li>
                                        <li class="list-inline-item g-ml-minus-20">
                                            <div class="g-brd-around g-brd-3 g-brd-white rounded-circle">
                                                <img class="g-width-30 g-height-30 rounded-circle"
                                                    src="assets/img-temp/100x100/img1.jpg" alt="Image Description">
                                            </div>
                                        </li>
                                        <li class="list-inline-item g-font-size-12 g-color-white">+6</li>
                                    </ul>
                                    <a class="js-fancybox u-link-v2" href="javascript:;"
                                        data-src="assets/img-temp/900x600/img5.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true">Read More
                                    </a>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="shortcode-styles">
                        <!-- CSS Implementing Plugins -->
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/fancybox/jquery.fancybox.min.css">
                    </div>

                    <div class="shortcode-scripts">
                        <!-- JS Implementing Plugins -->
                        <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

                        <!-- JS Unify -->
                        <script type="text/plain" src="assets/js/components/hs.popup.js"></script>

                        <!-- JS Plugins Init. -->
                        <script type="text/plain">
              $(document).on('ready', function () {
                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox');
              });
            </script>
                    </div>
                </div>




                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 container">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode12" data-modal-target="#modalMarkup"
                        data-modal-effect="fadein">
                        <i class="fa fa-code"></i>
                        Show code
                    </a>
                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                        data-content-target="#shortcode12" data-success-text="Copied">
                        <i class="fa fa-clone"></i>
                        Copy code
                    </a>
                </div>
                <!-- End Show Code -->

            </section>
            <!-- End Gallery #12 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #13 -->
            <section class="container">
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#13</span>
                    </h2>
                </div>

                <div id="shortcode13">
                    <div class="shortcode-html">
                        <div class="row text-center">
                            <div class="col-md-4 g-mb-30">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery-13-1-hidden"
                                    data-src="assets/img-temp/400x270/img8.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img8.jpg" alt="Image Description">
                                    <strong
                                        class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10">
                                        Nulla ipsum dolor sit amet </strong>
                                </a>

                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-1-hidden"
                                    data-src="assets/img-temp/400x270/img1.jpg" data-caption="Lightbox Gallery">
                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-1-hidden"
                                    data-src="assets/img-temp/400x270/img2.jpg" data-caption="Lightbox Gallery">
                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-1-hidden"
                                    data-src="assets/img-temp/400x270/img3.jpg" data-caption="Lightbox Gallery">
                            </div>
                            <div class="col-md-4 g-mb-30">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery-13-2-hidden"
                                    data-src="assets/img-temp/400x270/img4.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img4.jpg" alt="Image Description">
                                    <strong
                                        class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10">
                                        Consectetur adipiscing </strong>
                                </a>

                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-2-hidden"
                                    data-src="assets/img-temp/400x270/img5.jpg" data-caption="Lightbox Gallery">
                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-2-hidden"
                                    data-src="assets/img-temp/400x270/img6.jpg" data-caption="Lightbox Gallery">
                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-2-hidden"
                                    data-src="assets/img-temp/400x270/img7.jpg" data-caption="Lightbox Gallery">
                            </div>
                            <div class="col-md-4 g-mb-30">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery-13-3-hidden"
                                    data-src="assets/img-temp/400x270/img7.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img7.jpg" alt="Image Description">
                                    <strong
                                        class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10">
                                        Elitut eleifend nisl </strong>
                                </a>

                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-3-hidden"
                                    data-src="assets/img-temp/400x270/img8.jpg" data-caption="Lightbox Gallery">
                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-3-hidden"
                                    data-src="assets/img-temp/400x270/img9.jpg" data-caption="Lightbox Gallery">
                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-3-hidden"
                                    data-src="assets/img-temp/400x270/img10.jpg" data-caption="Lightbox Gallery">
                            </div>
                            <div class="col-md-4 g-mb-30">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery-13-4-hidden"
                                    data-src="assets/img-temp/400x270/img1.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img1.jpg" alt="Image Description">
                                    <strong
                                        class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10">
                                        In hac habitasse </strong>
                                </a>

                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-4-hidden"
                                    data-src="assets/img-temp/400x270/img11.jpg" data-caption="Lightbox Gallery">
                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-4-hidden"
                                    data-src="assets/img-temp/400x270/img12.jpg" data-caption="Lightbox Gallery">
                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-4-hidden"
                                    data-src="assets/img-temp/400x270/img13.jpg" data-caption="Lightbox Gallery">
                            </div>
                            <div class="col-md-4 g-mb-30">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery-13-5-hidden"
                                    data-src="assets/img-temp/400x270/img2.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img2.jpg" alt="Image Description">
                                    <strong
                                        class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10">
                                        Platea dictumst </strong>
                                </a>

                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-5-hidden"
                                    data-src="assets/img-temp/400x270/img1.jpg" data-caption="Lightbox Gallery">
                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-5-hidden"
                                    data-src="assets/img-temp/400x270/img3.jpg" data-caption="Lightbox Gallery">
                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-5-hidden"
                                    data-src="assets/img-temp/400x270/img4.jpg" data-caption="Lightbox Gallery">
                            </div>
                            <div class="col-md-4 g-mb-30">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay u-bg-overlay--v1 g-bg-black-opacity-0_5--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery-13-6-hidden"
                                    data-src="assets/img-temp/400x270/img6.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img6.jpg" alt="Image Description">
                                    <strong
                                        class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10">
                                        Curabitur hendrerit </strong>
                                </a>

                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-6-hidden"
                                    data-src="assets/img-temp/400x270/img5.jpg" data-caption="Lightbox Gallery">
                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-6-hidden"
                                    data-src="assets/img-temp/400x270/img7.jpg" data-caption="Lightbox Gallery">
                                <img class="js-fancybox g-hidden-xs-up" data-fancybox="lightbox-gallery-13-6-hidden"
                                    data-src="assets/img-temp/400x270/img8.jpg" data-caption="Lightbox Gallery">
                            </div>
                        </div>
                    </div>

                    <div class="shortcode-styles">
                        <!-- CSS Implementing Plugins -->
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/fancybox/jquery.fancybox.min.css">
                    </div>

                    <div class="shortcode-scripts">
                        <!-- JS Implementing Plugins -->
                        <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

                        <!-- JS Unify -->
                        <script type="text/plain" src="assets/js/components/hs.popup.js"></script>

                        <!-- JS Plugins Init. -->
                        <script type="text/plain">
              $(document).on('ready', function () {
                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox');
              });
            </script>
                    </div>
                </div>



                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 container">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode13" data-modal-target="#modalMarkup"
                        data-modal-effect="fadein">
                        <i class="fa fa-code"></i>
                        Show code
                    </a>
                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                        data-content-target="#shortcode13" data-success-text="Copied">
                        <i class="fa fa-clone"></i>
                        Copy code
                    </a>
                </div>
                <!-- End Show Code -->

            </section>
            <!-- End Gallery #13 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #14 -->
            <section>
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#14</span>
                    </h2>
                </div>

                <div id="shortcode14">
                    <div class="shortcode-html">
                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-transparent--hover--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--14"
                                    data-src="assets/img-temp/400x270/img1.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img1.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-transparent--hover--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--14"
                                    data-src="assets/img-temp/400x270/img2.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img2.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-transparent--hover--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--14"
                                    data-src="assets/img-temp/400x270/img3.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img3.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-transparent--hover--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--14"
                                    data-src="assets/img-temp/400x270/img4.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img4.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-transparent--hover--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--14"
                                    data-src="assets/img-temp/400x270/img5.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img5.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-transparent--hover--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--14"
                                    data-src="assets/img-temp/400x270/img6.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img6.jpg" alt="Image Description">
                                </a>
                            </div>

                            <div class="col-md-2">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-transparent--hover--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--14"
                                    data-src="assets/img-temp/400x270/img6.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img6.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-transparent--hover--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--14"
                                    data-src="assets/img-temp/400x270/img7.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img7.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-transparent--hover--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--14"
                                    data-src="assets/img-temp/400x270/img8.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img8.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-transparent--hover--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--14"
                                    data-src="assets/img-temp/400x270/img9.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img9.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-transparent--hover--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--14"
                                    data-src="assets/img-temp/400x270/img10.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img10.jpg" alt="Image Description">
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a class="js-fancybox d-block u-block-hover u-bg-overlay g-bg-black-opacity-0_3--after g-bg-transparent--hover--after"
                                    href="javascript:;" data-fancybox="lightbox-gallery--14"
                                    data-src="assets/img-temp/400x270/img11.jpg" data-caption="Lightbox Gallery">
                                    <img class="img-fluid u-block-hover__main--zoom-v1"
                                        src="assets/img-temp/400x270/img11.jpg" alt="Image Description">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="shortcode-styles">
                        <!-- CSS Implementing Plugins -->
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/fancybox/jquery.fancybox.min.css">
                    </div>

                    <div class="shortcode-scripts">
                        <!-- JS Implementing Plugins -->
                        <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

                        <!-- JS Unify -->
                        <script type="text/plain" src="assets/js/components/hs.popup.js"></script>

                        <!-- JS Plugins Init. -->
                        <script type="text/plain">
              $(document).on('ready', function () {
                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox');
              });
            </script>
                    </div>
                </div>




                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 container">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode14" data-modal-target="#modalMarkup"
                        data-modal-effect="fadein">
                        <i class="fa fa-code"></i>
                        Show code
                    </a>
                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                        data-content-target="#shortcode14" data-success-text="Copied">
                        <i class="fa fa-clone"></i>
                        Copy code
                    </a>
                </div>
                <!-- End Show Code -->

            </section>
            <!-- End Gallery #14 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #15 -->
            <section class="container">
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#15</span>
                    </h2>
                </div>

                <div id="shortcode15">
                    <div class="shortcode-html">
                        <div class="row">
                            <div class="col-md-3 g-mb-30--md">
                                <div class="text-center u-block-hover g-bg-primary">
                                    <img class="u-block-hover__img u-block-hover__main--blur"
                                        src="assets/img-temp/400x270/img1.jpg" alt="Image Description">
                                    <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30"
                                        href="javascript:;" data-fancybox="lightbox-gallery--15"
                                        data-src="assets/img-temp/400x270/img1.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <strong
                                            class="h5 d-block w-100 g-absolute-centered g-font-weight-400">Eleifend
                                            nisl</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 g-mb-30--md">
                                <div class="text-center u-block-hover g-bg-primary">
                                    <img class="u-block-hover__img u-block-hover__main--blur"
                                        src="assets/img-temp/400x270/img2.jpg" alt="Image Description">
                                    <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30"
                                        href="javascript:;" data-fancybox="lightbox-gallery--15"
                                        data-src="assets/img-temp/400x270/img2.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <strong
                                            class="h5 d-block w-100 g-absolute-centered g-font-weight-400">Elitut</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 g-mb-30--md">
                                <div class="text-center u-block-hover g-bg-primary">
                                    <img class="u-block-hover__img u-block-hover__main--blur"
                                        src="assets/img-temp/400x270/img4.jpg" alt="Image Description">
                                    <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30"
                                        href="javascript:;" data-fancybox="lightbox-gallery--15"
                                        data-src="assets/img-temp/400x270/img4.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <strong
                                            class="h5 d-block w-100 g-absolute-centered g-font-weight-400">Adipiscing</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 g-mb-30--md">
                                <div class="text-center u-block-hover g-bg-primary">
                                    <img class="u-block-hover__img u-block-hover__main--blur"
                                        src="assets/img-temp/400x270/img5.jpg" alt="Image Description">
                                    <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30"
                                        href="javascript:;" data-fancybox="lightbox-gallery--15"
                                        data-src="assets/img-temp/400x270/img5.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <strong
                                            class="h5 d-block w-100 g-absolute-centered g-font-weight-400">Consectetur</strong>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-3 g-mb-30--md">
                                <div class="text-center u-block-hover g-bg-primary">
                                    <img class="u-block-hover__img u-block-hover__main--blur"
                                        src="assets/img-temp/400x270/img5.jpg" alt="Image Description">
                                    <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30"
                                        href="javascript:;" data-fancybox="lightbox-gallery--15"
                                        data-src="assets/img-temp/400x270/img5.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <strong
                                            class="h5 d-block w-100 g-absolute-centered g-font-weight-400">Curabitur
                                            hendrerit</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 g-mb-30--md">
                                <div class="text-center u-block-hover g-bg-primary">
                                    <img class="u-block-hover__img u-block-hover__main--blur"
                                        src="assets/img-temp/400x270/img4.jpg" alt="Image Description">
                                    <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30"
                                        href="javascript:;" data-fancybox="lightbox-gallery--15"
                                        data-src="assets/img-temp/400x270/img4.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <strong class="h5 d-block w-100 g-absolute-centered g-font-weight-400">Platea
                                            dictumst</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 g-mb-30--md">
                                <div class="text-center u-block-hover g-bg-primary">
                                    <img class="u-block-hover__img u-block-hover__main--blur"
                                        src="assets/img-temp/400x270/img3.jpg" alt="Image Description">
                                    <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30"
                                        href="javascript:;" data-fancybox="lightbox-gallery--15"
                                        data-src="assets/img-temp/400x270/img3.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <strong class="h5 d-block w-100 g-absolute-centered g-font-weight-400">In hac
                                            habitasse</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 g-mb-30--md">
                                <div class="text-center u-block-hover g-bg-primary">
                                    <img class="u-block-hover__img u-block-hover__main--blur"
                                        src="assets/img-temp/400x270/img2.jpg" alt="Image Description">
                                    <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30"
                                        href="javascript:;" data-fancybox="lightbox-gallery--15"
                                        data-src="assets/img-temp/400x270/img2.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <strong class="h5 d-block w-100 g-absolute-centered g-font-weight-400">Elitut
                                            eleifend nisl</strong>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-3 g-mb-30--md">
                                <div class="text-center u-block-hover g-bg-primary">
                                    <img class="u-block-hover__img u-block-hover__main--blur"
                                        src="assets/img-temp/400x270/img7.jpg" alt="Image Description">
                                    <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30"
                                        href="javascript:;" data-fancybox="lightbox-gallery--15"
                                        data-src="assets/img-temp/400x270/img7.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <strong
                                            class="h5 d-block w-100 g-absolute-centered g-font-weight-400">Consectetur
                                            adipiscing</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 g-mb-30--md">
                                <div class="text-center u-block-hover g-bg-primary">
                                    <img class="u-block-hover__img u-block-hover__main--blur"
                                        src="assets/img-temp/400x270/img5.jpg" alt="Image Description">
                                    <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30"
                                        href="javascript:;" data-fancybox="lightbox-gallery--15"
                                        data-src="assets/img-temp/400x270/img5.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <strong
                                            class="h5 d-block w-100 g-absolute-centered g-font-weight-400">Amet</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 g-mb-30--md">
                                <div class="text-center u-block-hover g-bg-primary">
                                    <img class="u-block-hover__img u-block-hover__main--blur"
                                        src="assets/img-temp/400x270/img9.jpg" alt="Image Description">
                                    <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30"
                                        href="javascript:;" data-fancybox="lightbox-gallery--15"
                                        data-src="assets/img-temp/400x270/img9.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <strong class="h5 d-block w-100 g-absolute-centered g-font-weight-400">Dolor
                                            sit</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 g-mb-30--md">
                                <div class="text-center u-block-hover g-bg-primary">
                                    <img class="u-block-hover__img u-block-hover__main--blur"
                                        src="assets/img-temp/400x270/img1.jpg" alt="Image Description">
                                    <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30"
                                        href="javascript:;" data-fancybox="lightbox-gallery--15"
                                        data-src="assets/img-temp/400x270/img1.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <strong class="h5 d-block w-100 g-absolute-centered g-font-weight-400">Nulla
                                            ipsum</strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="shortcode-styles">
                        <!-- CSS Implementing Plugins -->
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/fancybox/jquery.fancybox.min.css">
                    </div>

                    <div class="shortcode-scripts">
                        <!-- JS Implementing Plugins -->
                        <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

                        <!-- JS Unify -->
                        <script type="text/plain" src="assets/js/components/hs.popup.js"></script>

                        <!-- JS Plugins Init. -->
                        <script type="text/plain">
              $(document).on('ready', function () {
                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox');
              });
            </script>
                    </div>
                </div>



                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 container">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode15" data-modal-target="#modalMarkup"
                        data-modal-effect="fadein">
                        <i class="fa fa-code"></i>
                        Show code
                    </a>
                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                        data-content-target="#shortcode15" data-success-text="Copied">
                        <i class="fa fa-clone"></i>
                        Copy code
                    </a>
                </div>
                <!-- End Show Code -->

            </section>
            <!-- End Gallery #15 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #16 -->
            <section>
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#16</span>
                    </h2>
                </div>

                <div id="shortcode16">
                    <div class="shortcode-html">
                        <div class="row no-gutters">
                            <div class="col-md-4 g-mb-30 g-mb-0--md">
                                <article class="text-center u-block-hover g-bg-gray-dark-v2--hover g-transition-0_4">
                                    <figure>
                                        <img class="img-fluid" src="assets/img-temp/900x600/img1.jpg"
                                            alt="Image Description">
                                    </figure>
                                    <h3
                                        class="h6 text-uppercase g-font-weight-600 g-letter-spacing-2 g-color-white--hover g-pa-30-20 g-mb-0">
                                        <em
                                            class="d-block g-font-size-12 g-font-style-normal g-font-weight-300 g-color-primary--hover g-mb-10">Popularised</em>
                                        Ipsum passages
                                    </h3>
                                    <a class="js-fancybox u-link-v2" href="javascript:;"
                                        data-fancybox="lightbox-gallery--16"
                                        data-src="assets/img-temp/900x600/img1.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">See
                                    </a>
                                </article>
                            </div>
                            <div class="col-md-4 g-mb-30 g-mb-0--md">
                                <article class="text-center u-block-hover g-bg-gray-dark-v2--hover g-transition-0_4">
                                    <figure>
                                        <img class="img-fluid" src="assets/img-temp/900x600/img2.jpg"
                                            alt="Image Description">
                                    </figure>
                                    <h3
                                        class="h6 text-uppercase g-font-weight-600 g-letter-spacing-2 g-color-white--hover g-pa-30-20 g-mb-0">
                                        <em
                                            class="d-block g-font-size-12 g-font-style-normal g-font-weight-300 g-color-primary--hover g-mb-10">Dictumst</em>
                                        Habitasse platea
                                    </h3>
                                    <a class="js-fancybox u-link-v2" href="javascript:;"
                                        data-fancybox="lightbox-gallery--16"
                                        data-src="assets/img-temp/900x600/img2.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">See
                                    </a>
                                </article>
                            </div>
                            <div class="col-md-4 g-mb-30 g-mb-0--md">
                                <article class="text-center u-block-hover g-bg-gray-dark-v2--hover g-transition-0_4">
                                    <figure>
                                        <img class="img-fluid" src="assets/img-temp/900x600/img3.jpg"
                                            alt="Image Description">
                                    </figure>
                                    <h3
                                        class="h6 text-uppercase g-font-weight-600 g-letter-spacing-2 g-color-white--hover g-pa-30-20 g-mb-0">
                                        <em
                                            class="d-block g-font-size-12 g-font-style-normal g-font-weight-300 g-color-primary--hover g-mb-10">Simply
                                            dummy</em> Electronic typesetting
                                    </h3>
                                    <a class="js-fancybox u-link-v2" href="javascript:;"
                                        data-fancybox="lightbox-gallery--16"
                                        data-src="assets/img-temp/900x600/img3.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">See
                                    </a>
                                </article>
                            </div>
                            <div class="col-md-4 g-mb-30 g-mb-0--md">
                                <article class="text-center u-block-hover g-bg-gray-dark-v2--hover g-transition-0_4">
                                    <figure>
                                        <img class="img-fluid" src="assets/img-temp/900x600/img4.jpg"
                                            alt="Image Description">
                                    </figure>
                                    <h3
                                        class="h6 text-uppercase g-font-weight-600 g-letter-spacing-2 g-color-white--hover g-pa-30-20 g-mb-0">
                                        <em
                                            class="d-block g-font-size-12 g-font-style-normal g-font-weight-300 g-color-primary--hover g-mb-10">In
                                            hac</em> Eleifend nisl
                                    </h3>
                                    <a class="js-fancybox u-link-v2" href="javascript:;"
                                        data-fancybox="lightbox-gallery--16"
                                        data-src="assets/img-temp/900x600/img4.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">See
                                    </a>
                                </article>
                            </div>
                            <div class="col-md-4 g-mb-30 g-mb-0--md">
                                <article class="text-center u-block-hover g-bg-gray-dark-v2--hover g-transition-0_4">
                                    <figure>
                                        <img class="img-fluid" src="assets/img-temp/900x600/img5.jpg"
                                            alt="Image Description">
                                    </figure>
                                    <h3
                                        class="h6 text-uppercase g-font-weight-600 g-letter-spacing-2 g-color-white--hover g-pa-30-20 g-mb-0">
                                        <em
                                            class="d-block g-font-size-12 g-font-style-normal g-font-weight-300 g-color-primary--hover g-mb-10">Sit
                                            amet</em> Adipiscing elitut
                                    </h3>
                                    <a class="js-fancybox u-link-v2" href="javascript:;"
                                        data-fancybox="lightbox-gallery--16"
                                        data-src="assets/img-temp/900x600/img5.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">See
                                    </a>
                                </article>
                            </div>
                            <div class="col-md-4 g-mb-30 g-mb-0--md">
                                <article class="text-center u-block-hover g-bg-gray-dark-v2--hover g-transition-0_4">
                                    <figure>
                                        <img class="img-fluid" src="assets/img-temp/900x600/img6.jpg"
                                            alt="Image Description">
                                    </figure>
                                    <h3
                                        class="h6 text-uppercase g-font-weight-600 g-letter-spacing-2 g-color-white--hover g-pa-30-20 g-mb-0">
                                        <em
                                            class="d-block g-font-size-12 g-font-style-normal g-font-weight-300 g-color-primary--hover g-mb-10">Nulla
                                            ipsum</em> Consectetur adipiscing
                                    </h3>
                                    <a class="js-fancybox u-link-v2" href="javascript:;"
                                        data-fancybox="lightbox-gallery--16"
                                        data-src="assets/img-temp/900x600/img6.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">See
                                    </a>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="shortcode-styles">
                        <!-- CSS Implementing Plugins -->
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/fancybox/jquery.fancybox.min.css">
                    </div>

                    <div class="shortcode-scripts">
                        <!-- JS Implementing Plugins -->
                        <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

                        <!-- JS Unify -->
                        <script type="text/plain" src="assets/js/components/hs.popup.js"></script>

                        <!-- JS Plugins Init. -->
                        <script type="text/plain">
              $(document).on('ready', function () {
                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox')
              });
            </script>
                    </div>
                </div>




                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 container">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode16" data-modal-target="#modalMarkup"
                        data-modal-effect="fadein">
                        <i class="fa fa-code"></i>
                        Show code
                    </a>
                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                        data-content-target="#shortcode16" data-success-text="Copied">
                        <i class="fa fa-clone"></i>
                        Copy code
                    </a>
                </div>
                <!-- End Show Code -->

            </section>
            <!-- End Gallery #16 -->

            <hr class="g-brd-gray-light-v4 g-my-60">

            <!-- Gallery #17 -->
            <section class="container">
                <div class="text-center g-mb-50">
                    <h2 class="h4">Gallery
                        <span class="g-color-primary g-ml-5">#17</span>
                    </h2>
                </div>

                <div id="shortcode17">
                    <div class="shortcode-html">
                        <div class="row">
                            <div class="col-md-2 g-mb-30--md">
                                <div class="g-brd-around g-brd-gray-light-v4--hover">
                                    <a class="js-fancybox d-block u-block-hover u-block-hover--scale-down"
                                        href="javascript:;" data-fancybox="lightbox-gallery--17"
                                        data-src="assets/img-temp/400x270/img1.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <img class="img-fluid u-block-hover__main--grayscale u-block-hover__img"
                                            src="assets/img-temp/400x270/img1.jpg" alt="example-image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 g-mb-30--md">
                                <div class="g-brd-around g-brd-gray-light-v4--hover">
                                    <a class="js-fancybox d-block u-block-hover u-block-hover--scale-down"
                                        href="javascript:;" data-fancybox="lightbox-gallery--17"
                                        data-src="assets/img-temp/400x270/img2.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <img class="img-fluid u-block-hover__main--grayscale u-block-hover__img"
                                            src="assets/img-temp/400x270/img2.jpg" alt="example-image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 g-mb-30--md">
                                <div class="g-brd-around g-brd-gray-light-v4--hover">
                                    <a class="js-fancybox d-block u-block-hover u-block-hover--scale-down"
                                        href="javascript:;" data-fancybox="lightbox-gallery--17"
                                        data-src="assets/img-temp/400x270/img3.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <img class="img-fluid u-block-hover__main--grayscale u-block-hover__img"
                                            src="assets/img-temp/400x270/img3.jpg" alt="example-image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 g-mb-30--md">
                                <div class="g-brd-around g-brd-gray-light-v4--hover">
                                    <a class="js-fancybox d-block u-block-hover u-block-hover--scale-down"
                                        href="javascript:;" data-fancybox="lightbox-gallery--17"
                                        data-src="assets/img-temp/400x270/img4.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <img class="img-fluid u-block-hover__main--grayscale u-block-hover__img"
                                            src="assets/img-temp/400x270/img4.jpg" alt="example-image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 g-mb-30--md">
                                <div class="g-brd-around g-brd-gray-light-v4--hover">
                                    <a class="js-fancybox d-block u-block-hover u-block-hover--scale-down"
                                        href="javascript:;" data-fancybox="lightbox-gallery--17"
                                        data-src="assets/img-temp/400x270/img5.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <img class="img-fluid u-block-hover__main--grayscale u-block-hover__img"
                                            src="assets/img-temp/400x270/img5.jpg" alt="example-image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 g-mb-30--md">
                                <div class="g-brd-around g-brd-gray-light-v4--hover">
                                    <a class="js-fancybox d-block u-block-hover u-block-hover--scale-down"
                                        href="javascript:;" data-fancybox="lightbox-gallery--17"
                                        data-src="assets/img-temp/400x270/img6.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <img class="img-fluid u-block-hover__main--grayscale u-block-hover__img"
                                            src="assets/img-temp/400x270/img6.jpg" alt="example-image">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 g-mb-30--md">
                                <div class="g-brd-around g-brd-gray-light-v4--hover">
                                    <a class="js-fancybox d-block u-block-hover u-block-hover--scale-down"
                                        href="javascript:;" data-fancybox="lightbox-gallery--17"
                                        data-src="assets/img-temp/400x270/img7.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <img class="img-fluid u-block-hover__main--grayscale u-block-hover__img"
                                            src="assets/img-temp/400x270/img7.jpg" alt="example-image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 g-mb-30--md">
                                <div class="g-brd-around g-brd-gray-light-v4--hover">
                                    <a class="js-fancybox d-block u-block-hover u-block-hover--scale-down"
                                        href="javascript:;" data-fancybox="lightbox-gallery--17"
                                        data-src="assets/img-temp/400x270/img8.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <img class="img-fluid u-block-hover__main--grayscale u-block-hover__img"
                                            src="assets/img-temp/400x270/img8.jpg" alt="example-image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 g-mb-30--md">
                                <div class="g-brd-around g-brd-gray-light-v4--hover">
                                    <a class="js-fancybox d-block u-block-hover u-block-hover--scale-down"
                                        href="javascript:;" data-fancybox="lightbox-gallery--17"
                                        data-src="assets/img-temp/400x270/img9.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <img class="img-fluid u-block-hover__main--grayscale u-block-hover__img"
                                            src="assets/img-temp/400x270/img9.jpg" alt="example-image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 g-mb-30--md">
                                <div class="g-brd-around g-brd-gray-light-v4--hover">
                                    <a class="js-fancybox d-block u-block-hover u-block-hover--scale-down"
                                        href="javascript:;" data-fancybox="lightbox-gallery--17"
                                        data-src="assets/img-temp/400x270/img10.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <img class="img-fluid u-block-hover__main--grayscale u-block-hover__img"
                                            src="assets/img-temp/400x270/img10.jpg" alt="example-image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 g-mb-30--md">
                                <div class="g-brd-around g-brd-gray-light-v4--hover">
                                    <a class="js-fancybox d-block u-block-hover u-block-hover--scale-down"
                                        href="javascript:;" data-fancybox="lightbox-gallery--17"
                                        data-src="assets/img-temp/400x270/img11.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <img class="img-fluid u-block-hover__main--grayscale u-block-hover__img"
                                            src="assets/img-temp/400x270/img11.jpg" alt="example-image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 g-mb-30--md">
                                <div class="g-brd-around g-brd-gray-light-v4--hover">
                                    <a class="js-fancybox d-block u-block-hover u-block-hover--scale-down"
                                        href="javascript:;" data-fancybox="lightbox-gallery--17"
                                        data-src="assets/img-temp/400x270/img12.jpg" data-animate-in="bounceInDown"
                                        data-animate-out="bounceOutDown" data-speed="1000"
                                        data-overlay-blur-bg="true" data-caption="Lightbox Gallery">
                                        <img class="img-fluid u-block-hover__main--grayscale u-block-hover__img"
                                            src="assets/img-temp/400x270/img12.jpg" alt="example-image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="shortcode-styles">
                        <!-- CSS Implementing Plugins -->
                        <link type="text/plain" rel="stylesheet" href="assets/vendor/icon-hs/style.css">
                        <link type="text/plain" rel="stylesheet"
                            href="assets/vendor/fancybox/jquery.fancybox.min.css">
                    </div>

                    <div class="shortcode-scripts">
                        <!-- JS Implementing Plugins -->
                        <script type="text/plain" src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

                        <!-- JS Unify -->
                        <script type="text/plain" src="assets/js/components/hs.popup.js"></script>

                        <!-- JS Plugins Init. -->
                        <script type="text/plain">
              $(document).on('ready', function () {
                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox');
              });
            </script>
                    </div>
                </div>



                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 container">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode17" data-modal-target="#modalMarkup"
                        data-modal-effect="fadein">
                        <i class="fa fa-code"></i>
                        Show code
                    </a>
                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                        data-content-target="#shortcode17" data-success-text="Copied">
                        <i class="fa fa-clone"></i>
                        Copy code
                    </a>
                </div>
                <!-- End Show Code -->

            </section>
            <!-- End Gallery #17 -->
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

    <div id="modalMarkup" class="text-left modal-demo g-width-95x g-height-95x g-bg-white g-color-black g-pa-20"
        style="display: none;"></div>


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
    <script src="assets/vendor/masonry/dist/masonry.pkgd.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.min.js"></script>

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
    <script src="assets/js/components/hs.carousel.js"></script>
    <script src="assets/js/components/hs.popup.js"></script>
    <script src="assets/js/components/hs.autocomplete-local-search.js"></script>
    <script src="assets/style-switcher/vendor/cookiejs/jquery.cookie.js"></script>
    <script src="assets/js/helpers/hs.shortcode-filter.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>

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

    <!-- JS Custom -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // initialization of carousel
            $.HSCore.components.HSCarousel.init('.js-carousel');

            // initialization of masonry
            $('.masonry-grid').imagesLoaded().then(function() {
                $('.masonry-grid').masonry({
                    columnWidth: '.masonry-grid-sizer',
                    itemSelector: '.masonry-grid-item',
                    percentPosition: true
                });
            });

            // initialization of popups
            $.HSCore.components.HSPopup.init('.js-fancybox');

            // initialization of popups with media
            $.HSCore.components.HSPopup.init('.js-fancybox-media', {
                helpers: {
                    media: {},
                    overlay: {
                        css: {
                            'background': 'rgba(255, 255, 255, .8)'
                        }
                    }
                }
            });
        });

        $(window).on('load', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');
            $.HSCore.components.HSHeaderSide.init($('#sideNav'));

            // initialization of autocomplet
            $.HSCore.components.HSLocalSearchAutocomplete.init('#u-sidebar-navigation__search-autocomplete');

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
