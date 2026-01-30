<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>Lightbox | Unify - Responsive Website Template</title>

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
    <link rel="stylesheet" href="assets/vendor/jquery-ui/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/vendor/custombox/custombox.min.css">

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
            class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall"
            data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}">
            <!-- Parallax Image -->
            <div style="height: 200%; background-image: url(assets/img/bg/pattern6-2.png); transform: translate3d(0px, -210.955px, 0px);"
                class="divimage dzsparallaxer--target w-100 g-bg-repeat g-bg-gray-light-v4"></div>
            <!-- End Parallax Image -->

            <div class="container g-z-index-1 g-py-100">
                <h1 class="g-font-weight-300 g-letter-spacing-1 g-mb-15">Lightbox</h1>

                <div class="lead g-font-weight-400 g-line-height-2 g-letter-spacing-0_5">
                    <p class="mb-0">Base Components are usually small helper components to build Block Components.
                        <br>These Components can be easily used and customized in any blocks.
                    </p>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <section>
            <div class="g-py-100">
                <div class="container">
                    <!-- Lightbox Types -->
                    <section>
                        <!-- Heading -->
                        <header class="g-mb-80">
                            <div class="u-heading-v6-2  text-uppercase">
                                <h2 class="h4 u-heading-v6__title g-font-weight-300">Lightbox Types</h2>
                            </div>

                            <div class="g-line-height-2 g-pl-90">
                                <p>Nulla ipsum dolor sit amet, consectetur adipiscing elitut eleifend nisl. In hac
                                    habitasse platea dictumst. Curabitur hendrerit.</p>
                            </div>
                        </header>
                        <!-- End Heading -->

                        <!-- Lightbox Single Image -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">Lightbox Single Image</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode1">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;" data-type="image"
                                                    data-src="assets/img-temp/400x270/img4.jpg" data-animate-in="zoomIn"
                                                    data-animate-out="zoomOut" data-speed="1000"
                                                    data-overlay-bg="rgba(0, 0, 0, 0.5)">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img4.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img9.jpg"
                                                    data-animate-in="bounceIn" data-animate-out="bounceOut"
                                                    data-speed="1000" data-overlay-bg="rgba(0, 0, 0, 1)">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img9.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img13.jpg"
                                                    data-animate-in="zoomIn" data-animate-out="zoomOut"
                                                    data-speed="1000" data-overlay-bg="rgba(0, 0, 0, 1)">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img13.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode1"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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

                            </div>
                        </div>
                        <!-- End Lightbox Single Image -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- Lightbox Gallery (without thumbnails) -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">Lightbox Gallery (without thumbnails)</h3>
                            </div>
                            <div class="col-md-9">
                                <div id="shortcode2">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-fancybox="lightbox-gallery"
                                                    data-src="assets/img-temp/400x270/img1.jpg"
                                                    data-caption="Lightbox Gallery" data-speed="500"
                                                    data-is-infinite="true" data-slideshow-speed="5000">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img1.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-fancybox="lightbox-gallery"
                                                    data-src="assets/img-temp/400x270/img2.jpg"
                                                    data-caption="Lightbox Gallery" data-is-infinite="true"
                                                    data-slideshow-speed="5000">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img2.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-fancybox="lightbox-gallery"
                                                    data-src="assets/img-temp/400x270/img3.jpg"
                                                    data-caption="Lightbox Gallery" data-speed="500"
                                                    data-is-infinite="true" data-slideshow-speed="5000">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img3.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-fancybox="lightbox-gallery"
                                                    data-src="assets/img-temp/400x270/img4.jpg"
                                                    data-caption="Lightbox Gallery" data-speed="500"
                                                    data-is-infinite="true" data-slideshow-speed="5000">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img4.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-fancybox="lightbox-gallery"
                                                    data-src="assets/img-temp/400x270/img5.jpg"
                                                    data-caption="Lightbox Gallery" data-speed="500"
                                                    data-is-infinite="true" data-slideshow-speed="5000">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img5.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-fancybox="lightbox-gallery"
                                                    data-src="assets/img-temp/400x270/img6.jpg"
                                                    data-caption="Lightbox Gallery" data-speed="500"
                                                    data-is-infinite="true" data-slideshow-speed="5000">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img6.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode2"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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

                            </div>
                        </div>
                        <!-- End Lightbox Gallery (without thumbnails) -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- Lightbox Gallery (with thumbnails) -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">Lightbox Gallery (with thumbnails)</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode3">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox-thumbs" href="javascript:;"
                                                    data-fancybox="lightbox-gallery-2"
                                                    data-src="assets/img-temp/500x450/img1.jpg"
                                                    data-caption="Lightbox Gallery" data-speed="500"
                                                    data-slideshow-speed="1000">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img1.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox-thumbs" href="javascript:;"
                                                    data-fancybox="lightbox-gallery-2"
                                                    data-src="assets/img-temp/500x450/img2.jpg"
                                                    data-caption="Lightbox Gallery" data-speed="500"
                                                    data-slideshow-speed="1000">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img2.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox-thumbs" href="javascript:;"
                                                    data-fancybox="lightbox-gallery-2"
                                                    data-src="assets/img-temp/500x450/img3.jpg"
                                                    data-caption="Lightbox Gallery" data-speed="500"
                                                    data-slideshow-speed="1000">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img3.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox-thumbs" href="javascript:;"
                                                    data-fancybox="lightbox-gallery-2"
                                                    data-src="assets/img-temp/500x450/img4.jpg"
                                                    data-caption="Lightbox Gallery" data-speed="500"
                                                    data-slideshow-speed="1000">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img4.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox-thumbs" href="javascript:;"
                                                    data-fancybox="lightbox-gallery-2"
                                                    data-src="assets/img-temp/500x450/img5.jpg"
                                                    data-caption="Lightbox Gallery" data-speed="500"
                                                    data-slideshow-speed="1000">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img5.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox-thumbs" href="javascript:;"
                                                    data-fancybox="lightbox-gallery-2"
                                                    data-src="assets/img-temp/500x450/img6.jpg"
                                                    data-caption="Lightbox Gallery" data-speed="500"
                                                    data-slideshow-speed="1000">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img6.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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

                        // initialization of gallery with thumbs
                        $.HSCore.components.HSPopup.init('.js-fancybox-thumbs', {
                          thumbs: {
                            showOnStart: true
                          }
                        });
                      });
                    </script>
                                    </div>
                                </div>



                                <!-- Show Code -->
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode3"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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

                            </div>
                        </div>
                        <!-- End Lightbox Gallery (with thumbnails) -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- Lightbox Gallery (with hidden images) -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">Lightbox Gallery (with hidden images)</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode4">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-fancybox="lightbox-gallery-hidden"
                                                    data-src="assets/img-temp/500x650/img1.jpg"
                                                    data-caption="Image Description 1" data-speed="500"
                                                    data-slideshow-speed="1000">
                                                    <img class="img-fluid" src="assets/img-temp/500x650/img1.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-fancybox="lightbox-gallery-hidden"
                                                    data-src="assets/img-temp/500x650/img2.jpg"
                                                    data-caption="Image Description 2" data-speed="500"
                                                    data-slideshow-speed="1000">
                                                    <img class="img-fluid" src="assets/img-temp/500x650/img2.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_5--after"
                                                    href="javascript:;" data-fancybox="lightbox-gallery-hidden"
                                                    data-src="assets/img-temp/500x650/img3.jpg"
                                                    data-caption="Image Description 3" data-speed="500"
                                                    data-slideshow-speed="1000">
                                                    <img class="img-fluid" src="assets/img-temp/500x650/img3.jpg"
                                                        alt="Image Description">
                                                    <span
                                                        class="u-bg-overlay__inner g-absolute-centered g-color-white">
                                                        <span class="g-font-size-46">3+</span>
                                                        <br>view photos
                                                    </span>
                                                </a>
                                            </div>

                                            <img class="js-fancybox g-hidden-xs-up"
                                                data-fancybox="lightbox-gallery-hidden"
                                                data-src="assets/img-temp/500x650/img4.jpg"
                                                data-caption="Image Description 4" data-speed="500"
                                                data-slideshow-speed="1000">
                                            <img class="js-fancybox g-hidden-xs-up" data-caption="Image Description 5"
                                                data-src="assets/img-temp/500x650/img5.jpg"
                                                data-fancybox="lightbox-gallery-hidden" data-speed="500"
                                                data-slideshow-speed="1000">
                                            <img class="js-fancybox g-hidden-xs-up"
                                                data-fancybox="lightbox-gallery-hidden"
                                                data-src="assets/img-temp/500x650/img6.jpg"
                                                data-caption="Image Description 6" data-speed="500"
                                                data-slideshow-speed="1000">
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode4"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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

                            </div>
                        </div>
                        <!-- End Lightbox Gallery (with hidden images) -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- Lightbox Gallery (with hidden videos) -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">Lightbox Gallery (with hidden videos)</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode5">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox d-block u-bg-overlay g-bg-black-opacity-0_5--after"
                                                    href="javascript:;" data-fancybox="lightbox-gallery-hidden-2"
                                                    data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=0">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img8.jpg"
                                                        alt="Image Description">
                                                    <span
                                                        class="u-bg-overlay__inner g-absolute-centered g-color-white">
                                                        <span class="g-font-size-46">2</span>
                                                        <br>videos
                                                    </span>
                                                </a>
                                            </div>

                                            <iframe class="js-fancybox g-hidden-xs-up"
                                                data-src="//www.youtube.com/embed/vlDzYIIOYmM?autoplay=0"
                                                data-fancybox="lightbox-gallery-hidden-2" data-type="iframe"></iframe>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode5"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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

                            </div>
                        </div>
                        <!-- End Lightbox Gallery (with hidden videos) -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- Additional Lightbox Types -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">Additional Lightbox Types</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode6">
                                    <div class="shortcode-html">
                                        <a class="js-fancybox btn btn-md u-btn-primary g-mr-10 g-mb-15"
                                            href="javascript:;" data-src="#fancybox-form" data-speed="350">Open
                                            Form
                                        </a>

                                        <div id="fancybox-form" class="clearfix rounded-0 g-pa-30"
                                            style="display: none; min-width: 400px;">
                                            <h4 class="h5 text-uppercase g-letter-spacing-1 g-mb-20">Fancybox with
                                                Form</h4>

                                            <form>
                                                <div class="form-group g-mb-20">
                                                    <label class="g-mb-5" for="alt-login">Login</label>
                                                    <input id="alt-login"
                                                        class="form-control rounded-0 u-form-control g-px-15"
                                                        type="email" placeholder="Enter email">
                                                </div>

                                                <div class="form-group g-mb-20">
                                                    <label class="g-mb-5" for="alt-password">Password</label>
                                                    <input id="alt-password"
                                                        class="form-control rounded-0 u-form-control g-px-15 g-mb-5"
                                                        type="email" placeholder="Enter email">
                                                </div>

                                                <a class="btn btn-md u-btn-primary pull-right" href="#">Log
                                                    In</a>
                                                <a class="d-inline-block g-color-gray-dark-v3 g-font-size-90x g-pt-10"
                                                    href="#">Forgotten password?</a>
                                            </form>
                                        </div>

                                        <a class="js-fancybox btn btn-md u-btn-primary g-mr-10 g-mb-15"
                                            href="javascript:;"
                                            data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=0"
                                            data-speed="350">Open Video
                                        </a>

                                        <a class="js-fancybox fancybox.iframe btn btn-md u-btn-primary g-mr-10 g-mb-15"
                                            href="javascript:;"
                                            data-src="//maps.google.com/?output=embed&f=q&source=s_q&hl=en&geocode=&q=London+Eye,+County+Hall,+Westminster+Bridge+Road,+London,+United+Kingdom&hl=lv&ll=51.504155,-0.117749&spn=0.00571,0.016512&sll=56.879635,24.603189&sspn=10.280244,33.815918&vpsrc=6&hq=London+Eye&radius=15000&t=h&z=17"
                                            data-speed="350">Open Google Map
                                        </a>

                                        <a class="js-fancybox btn btn-md u-btn-primary g-mr-10 g-mb-15"
                                            href="javascript:;" data-type="ajax" data-src="test.html"
                                            data-filter="#one" data-speed="350">Ajax
                                        </a>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode6"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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

                            </div>
                        </div>
                        <!-- End Additional Lightbox Types -->
                    </section>
                    <!-- End Lightbox Types -->

                    <hr class="g-brd-gray-light-v4 g-my-60">

                    <!-- Popup Animations -->
                    <section>
                        <!-- Heading -->
                        <header class="g-mb-80">
                            <div class="u-heading-v6-2  text-uppercase">
                                <h2 class="h4 u-heading-v6__title g-font-weight-300">Popup Animations</h2>
                            </div>

                            <div class="g-line-height-2 g-pl-90">
                                <p>Nulla ipsum dolor sit amet, consectetur adipiscing elitut eleifend nisl. In hac
                                    habitasse platea dictumst. Curabitur hendrerit.</p>
                            </div>
                        </header>
                        <!-- End Heading -->

                        <!-- FlipInX/FlipOutX -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">FlipInX/FlipOutX</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode7">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/350x230/img4.jpg"
                                                    data-caption="Single Image" data-animate-in="flipInX"
                                                    data-animate-out="flipOutX" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/350x230/img4.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/350x230/img1.jpg"
                                                    data-caption="Single Image" data-animate-in="flipInX"
                                                    data-animate-out="flipOutX" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/350x230/img1.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/350x230/img3.jpg"
                                                    data-caption="Single Image" data-animate-in="flipInX"
                                                    data-animate-out="flipOutX" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/350x230/img3.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode7"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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

                            </div>
                        </div>
                        <!-- End FlipInX/FlipOutX -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- FlipInY/FlipOutY -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">FlipInY/FlipOutY</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode8">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img14.jpg"
                                                    data-caption="Single Image" data-animate-in="flipInY"
                                                    data-animate-out="flipOutY" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img14.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img11.jpg"
                                                    data-caption="Single Image" data-animate-in="flipInY"
                                                    data-animate-out="flipOutY" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img11.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img13.jpg"
                                                    data-caption="Single Image" data-animate-in="flipInY"
                                                    data-animate-out="flipOutY" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img13.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode8"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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
                        <!-- End FlipInY/FlipOutY -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- BounceInRight/BounceOutLeft -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">BounceInRight/ BounceOutLeft</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode9">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/230x230/img4.jpg"
                                                    data-caption="Single Image" data-animate-in="bounceInRight"
                                                    data-animate-out="bounceOutLeft" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/230x230/img4.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/230x230/img1.jpg"
                                                    data-caption="Single Image" data-animate-in="bounceInRight"
                                                    data-animate-out="bounceOutLeft" data-speed="2000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/230x230/img1.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/230x230/img3.jpg"
                                                    data-caption="Single Image" data-animate-in="bounceInRight"
                                                    data-animate-out="bounceOutLeft" data-speed="400"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/230x230/img3.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode9"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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
                        <!-- End BounceInRight/BounceOutLeft -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- BounceInRight/BounceOutRight -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">BounceInRight/ BounceOutRight</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode10">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/500x450/img4.jpg"
                                                    data-caption="Single Image" data-animate-in="bounceInRight"
                                                    data-animate-out="bounceOutRight" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img4.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/500x450/img1.jpg"
                                                    data-caption="Single Image" data-animate-in="bounceInRight"
                                                    data-animate-out="bounceOutRight" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img1.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/500x450/img3.jpg"
                                                    data-caption="Single Image" data-animate-in="bounceInRight"
                                                    data-animate-out="bounceOutRight" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img3.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode10"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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

                            </div>
                        </div>
                        <!-- End BounceInRight/BounceOutRight -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- BounceInDown/BounceOutDown -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">BounceInDown/ BounceOutDown</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode11">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img4.jpg"
                                                    data-caption="Single Image" data-animate-in="bounceInDown"
                                                    data-animate-out="bounceOutDown" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img4.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img1.jpg"
                                                    data-caption="Single Image" data-animate-in="bounceInDown"
                                                    data-animate-out="bounceOutDown" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img1.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img3.jpg"
                                                    data-caption="Single Image" data-animate-in="bounceInDown"
                                                    data-animate-out="bounceOutDown" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img3.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode11"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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

                            </div>
                        </div>
                        <!-- End BounceInDown/BounceOutDown -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- ZoomIn/ZoomOut -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">ZoomIn/ZoomOut</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode12">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/500x320/img2.jpg"
                                                    data-caption="Single Image" data-animate-in="zoomIn"
                                                    data-animate-out="zoomOut" data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/500x320/img2.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/500x320/img1.jpg"
                                                    data-caption="Single Image" data-animate-in="zoomIn"
                                                    data-animate-out="zoomOut" data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/500x320/img1.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/500x320/img3.jpg"
                                                    data-caption="Single Image" data-animate-in="zoomIn"
                                                    data-animate-out="zoomOut" data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/500x320/img3.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode12"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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

                            </div>
                        </div>
                        <!-- End ZoomIn/ZoomOut -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- FadeInRightBig/FadeOutLeftBig -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">FadeInRightBig/ FadeOutLeftBig</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode13">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/900x400/img4.jpg"
                                                    data-caption="Single Image" data-animate-in="fadeInRightBig"
                                                    data-animate-out="fadeOutLeftBig" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/900x400/img4.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/900x400/img1.jpg"
                                                    data-caption="Single Image" data-animate-in="fadeInRightBig"
                                                    data-animate-out="fadeOutLeftBig" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/900x400/img1.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/900x400/img3.jpg"
                                                    data-caption="Single Image" data-animate-in="fadeInRightBig"
                                                    data-animate-out="fadeOutLeftBig" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/900x400/img3.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode13"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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

                            </div>
                        </div>
                        <!-- End FadeInRightBig/FadeOutLeftBig -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- FadeInDownBig/FadeOutDownBig -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">FadeInDownBig/ FadeOutDownBig</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode14">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img12.jpg"
                                                    data-caption="Single Image" data-animate-in="fadeInDownBig"
                                                    data-animate-out="fadeOutDownBig" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img12.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img15.jpg"
                                                    data-caption="Single Image" data-animate-in="fadeInDownBig"
                                                    data-animate-out="fadeOutDownBig" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img15.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img9.jpg"
                                                    data-caption="Single Image" data-animate-in="fadeInDownBig"
                                                    data-animate-out="fadeOutDownBig" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img9.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode14"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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

                            </div>
                        </div>
                        <!-- End FadeInDownBig/FadeOutDownBig -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- LightSpeedIn/LightSpeedOut -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">LightSpeedIn/ LightSpeedOut</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode15">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img7.jpg"
                                                    data-caption="Single Image" data-animate-in="lightSpeedIn"
                                                    data-animate-out="lightSpeedOut" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img7.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img8.jpg"
                                                    data-caption="Single Image" data-animate-in="lightSpeedIn"
                                                    data-animate-out="lightSpeedOut" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img8.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img6.jpg"
                                                    data-caption="Single Image" data-animate-in="lightSpeedIn"
                                                    data-animate-out="lightSpeedOut" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img6.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode15"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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

                            </div>
                        </div>
                        <!-- End LightSpeedIn/LightSpeedOut -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- RotateIn/RotateOut -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">RotateIn/RotateOut</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode16">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/500x450/img11.jpg"
                                                    data-caption="Single Image" data-animate-in="rotateIn"
                                                    data-animate-out="rotateOut" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img11.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/500x450/img10.jpg"
                                                    data-caption="Single Image" data-animate-in="rotateIn"
                                                    data-animate-out="rotateOut" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img10.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/500x450/img6.jpg"
                                                    data-caption="Single Image" data-animate-in="rotateIn"
                                                    data-animate-out="rotateOut" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img6.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode16"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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

                            </div>
                        </div>
                        <!-- End RotateIn/RotateOut -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- SlideInUp/SlideOutUp -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">SlideInUp/SlideOutUp</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode17">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/500x450/img7.jpg"
                                                    data-caption="Single Image" data-animate-in="slideInUp"
                                                    data-animate-out="slideOutUp" data-speed="1000"
                                                    data-overlay-bg="rgba(0, 0, 0, 0.4)"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img7.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/500x450/img8.jpg"
                                                    data-caption="Single Image" data-animate-in="slideInUp"
                                                    data-animate-out="slideOutUp" data-speed="1000"
                                                    data-overlay-bg="rgba(0, 0, 0, 0.4)"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img8.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/500x450/img5.jpg"
                                                    data-caption="Single Image" data-animate-in="slideInUp"
                                                    data-animate-out="slideOutUp" data-speed="1000"
                                                    data-overlay-bg="rgba(0, 0, 0, 0.4)"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img5.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode17"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
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

                            </div>
                        </div>
                        <!-- End SlideInUp/SlideOutUp -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- SlideInLeft/SlideOutRight -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">SlideInLeft/ SlideOutRight</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode18">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img4.jpg"
                                                    data-caption="Single Image" data-animate-in="slideInLeft"
                                                    data-animate-out="slideOutRight" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img4.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img1.jpg"
                                                    data-caption="Single Image" data-animate-in="slideInLeft"
                                                    data-animate-out="slideOutRight" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img1.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img3.jpg"
                                                    data-caption="Single Image" data-animate-in="slideInLeft"
                                                    data-animate-out="slideOutRight" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img3.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode18"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
                                        <i class="fa fa-code"></i>
                                        Show code
                                    </a>
                                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                                        data-content-target="#shortcode18" data-success-text="Copied">
                                        <i class="fa fa-clone"></i>
                                        Copy code
                                    </a>
                                </div>
                                <!-- End Show Code -->

                            </div>
                        </div>
                        <!-- End SlideInLeft/SlideOutRight -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- RollIn/RollOut -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">RollIn/RollOut</h3>
                            </div>

                            <div class="col-md-9">
                                <div id="shortcode19">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img5.jpg"
                                                    data-caption="Single Image" data-animate-in="rollIn"
                                                    data-animate-out="rollOut" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img5.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img6.jpg"
                                                    data-caption="Single Image" data-animate-in="rollIn"
                                                    data-animate-out="rollOut" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img6.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox" href="javascript:;"
                                                    data-src="assets/img-temp/400x270/img7.jpg"
                                                    data-caption="Single Image" data-animate-in="rollIn"
                                                    data-animate-out="rollOut" data-speed="1000"
                                                    data-overlay-blur-bg="true">
                                                    <img class="img-fluid" src="assets/img-temp/400x270/img7.jpg"
                                                        alt="Image Description">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode19"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
                                        <i class="fa fa-code"></i>
                                        Show code
                                    </a>
                                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                                        data-content-target="#shortcode19" data-success-text="Copied">
                                        <i class="fa fa-clone"></i>
                                        Copy code
                                    </a>
                                </div>
                                <!-- End Show Code -->

                            </div>
                        </div>
                        <!-- End RollIn/RollOut -->
                    </section>
                    <!-- End Popup Animations -->

                    <hr class="g-brd-gray-light-v4 g-my-60">

                    <!-- Examples -->
                    <section>
                        <!-- Heading -->
                        <header class="g-mb-80">
                            <div class="u-heading-v6-2  text-uppercase">
                                <h2 class="h4 u-heading-v6__title g-font-weight-300">Examples</h2>
                            </div>
                            <div class="g-line-height-2 g-pl-90">
                                <p>Nulla ipsum dolor sit amet, consectetur adipiscing elitut eleifend nisl. In hac
                                    habitasse platea dictumst. Curabitur hendrerit.</p>
                            </div>
                        </header>
                        <!-- End Heading -->

                        <!-- With Icon -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300 g-mb-30">With Icon</h3>
                            </div>

                            <div class="col-md-9 g-mb-60">
                                <div id="shortcode20">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox d-block g-pos-rel" href="javascript:;"
                                                    data-src="assets/img-temp/500x450/img1.jpg"
                                                    data-caption="Single Image">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img1.jpg"
                                                        alt="Image Description">
                                                    <span
                                                        class="u-icon-v3 u-icon-size--xs g-bg-white g-color-black g-rounded-50x g-cursor-pointer g-pos-abs g-bottom-10 g-right-10">
                                                        <i class="hs-icon hs-icon-magnifier"></i>
                                                    </span>
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox d-block g-pos-rel" href="javascript:;"
                                                    data-src="assets/img-temp/500x450/img2.jpg"
                                                    data-caption="Single Image">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img2.jpg"
                                                        alt="Image Description">
                                                    <span
                                                        class="u-icon-v3 u-icon-size--xs g-bg-white g-color-black g-rounded-50x g-cursor-pointer g-pos-abs g-bottom-10 g-right-10">
                                                        <i class="hs-icon hs-icon-magnifier"></i>
                                                    </span>
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox d-block g-pos-rel" href="javascript:;"
                                                    data-src="assets/img-temp/500x450/img3.jpg"
                                                    data-caption="Single Image">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img3.jpg"
                                                        alt="Image Description">
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode20"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
                                        <i class="fa fa-code"></i>
                                        Show code
                                    </a>
                                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                                        data-content-target="#shortcode20" data-success-text="Copied">
                                        <i class="fa fa-clone"></i>
                                        Copy code
                                    </a>
                                </div>
                                <!-- End Show Code -->

                            </div>

                            <div class="col-md-9 ml-md-auto">
                                <div id="shortcode21">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                    href="javascript:;"
                                                    data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=0"
                                                    data-caption="Single Image">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img4.jpg"
                                                        alt="Image Description">
                                                    <span
                                                        class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                        <i class="fa fa-play g-left-2"></i>
                                                    </span>
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                    href="javascript:;"
                                                    data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=0"
                                                    data-caption="Single Image">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img6.jpg"
                                                        alt="Image Description">
                                                    <span
                                                        class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                        <i class="fa fa-play g-left-2"></i>
                                                    </span>
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox d-block u-block-hover g-pos-rel"
                                                    href="javascript:;"
                                                    data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=0"
                                                    data-caption="Single Image">
                                                    <img class="img-fluid" src="assets/img-temp/500x450/img8.jpg"
                                                        alt="Image Description">
                                                    <span
                                                        class="u-icon-v3 u-icon-size--sm g-bg-white-opacity-0_7 g-bg-primary--hover g-color-black g-color-white--hover g-font-size-12 g-rounded-50x g-cursor-pointer g-absolute-centered">
                                                        <i class="fa fa-play g-left-2"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode21"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
                                        <i class="fa fa-code"></i>
                                        Show code
                                    </a>
                                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                                        data-content-target="#shortcode21" data-success-text="Copied">
                                        <i class="fa fa-clone"></i>
                                        Copy code
                                    </a>
                                </div>
                                <!-- End Show Code -->

                            </div>
                        </div>
                        <!-- End With Icon -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- With Hover Effect -->
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="h4 g-font-weight-300">With Hover Effect</h3>
                                <p>More block hover effects – shortcode-blocks-block-hovers.html</p>
                            </div>

                            <div class="col-md-9 g-mb-60">
                                <div id="shortcode22">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox d-block u-block-hover" href="javascript:;"
                                                    data-src="assets/img-temp/500x600/img4.jpg"
                                                    data-caption="Single Image">
                                                    <img class="img-fluid" src="assets/img-temp/500x600/img4.jpg"
                                                        alt="Image Description">
                                                    <span
                                                        class="u-block-hover__additional--fade g-bg-black-opacity-0_8 g-color-white">
                                                        <i
                                                            class="hs-icon hs-icon-plus g-absolute-centered g-font-size-25"></i>
                                                    </span>
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox d-block u-block-hover" href="javascript:;"
                                                    data-src="assets/img-temp/500x600/img1.jpg"
                                                    data-caption="Single Image">
                                                    <img class="img-fluid" src="assets/img-temp/500x600/img1.jpg"
                                                        alt="Image Description">
                                                    <span
                                                        class="u-block-hover__additional--fade g-bg-black-opacity-0_8 g-color-white">
                                                        <i
                                                            class="hs-icon hs-icon-plus g-absolute-centered g-font-size-25"></i>
                                                    </span>
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox d-block u-block-hover" href="javascript:;"
                                                    data-src="assets/img-temp/500x600/img3.jpg"
                                                    data-caption="Single Image">
                                                    <img class="img-fluid" src="assets/img-temp/500x600/img3.jpg"
                                                        alt="Image Description">
                                                    <span
                                                        class="u-block-hover__additional--fade g-bg-black-opacity-0_8 g-color-white">
                                                        <i
                                                            class="hs-icon hs-icon-plus g-absolute-centered g-font-size-25"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode22"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
                                        <i class="fa fa-code"></i>
                                        Show code
                                    </a>
                                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                                        data-content-target="#shortcode22" data-success-text="Copied">
                                        <i class="fa fa-clone"></i>
                                        Copy code
                                    </a>
                                </div>
                                <!-- End Show Code -->

                            </div>

                            <div class="col-md-9 ml-md-auto">
                                <div id="shortcode23">
                                    <div class="shortcode-html">
                                        <div class="row">
                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox d-block u-block-hover" href="javascript:;"
                                                    data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=0">
                                                    <img class="img-fluid" src="assets/img-temp/500x600/img2.jpg"
                                                        alt="Image Description">
                                                    <span
                                                        class="u-block-hover__additional--fade g-bg-black-opacity-0_8 g-color-white">
                                                        <i
                                                            class="hs-icon hs-icon-play g-absolute-centered g-font-size-25"></i>
                                                    </span>
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox d-block u-block-hover" href="javascript:;"
                                                    data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=0">
                                                    <img class="img-fluid" src="assets/img-temp/500x600/img3.jpg"
                                                        alt="Image Description">
                                                    <span
                                                        class="u-block-hover__additional--fade g-bg-black-opacity-0_8 g-color-white">
                                                        <i
                                                            class="hs-icon hs-icon-play g-absolute-centered g-font-size-25"></i>
                                                    </span>
                                                </a>
                                            </div>

                                            <div class="col-md-4 g-mb-30">
                                                <a class="js-fancybox d-block u-block-hover" href="javascript:;"
                                                    data-src="http://www.youtube.com/embed/BNpiwOkKIJ8?autoplay=0">
                                                    <img class="img-fluid" src="assets/img-temp/500x600/img4.jpg"
                                                        alt="Image Description">
                                                    <span
                                                        class="u-block-hover__additional--fade g-bg-black-opacity-0_8 g-color-white">
                                                        <i
                                                            class="hs-icon hs-icon-play g-absolute-centered g-font-size-25"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
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
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode23"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
                                        <i class="fa fa-code"></i>
                                        Show code
                                    </a>
                                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                                        data-content-target="#shortcode23" data-success-text="Copied">
                                        <i class="fa fa-clone"></i>
                                        Copy code
                                    </a>
                                </div>
                                <!-- End Show Code -->

                            </div>
                        </div>
                        <!-- End With Hover Effect -->
                    </section>
                    <!-- End Examples -->
                </div>
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
    <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

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

            // initialization of popups
            $.HSCore.components.HSPopup.init('.js-fancybox');

            // initialization of gallery with thumbs
            $.HSCore.components.HSPopup.init('.js-fancybox-thumbs', {
                thumbs: {
                    autoStart: true
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
