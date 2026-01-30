<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>Modals | Unify - Responsive Website Template</title>

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
                <h1 class="g-font-weight-300 g-letter-spacing-1 g-mb-15">Modals</h1>

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

                        <div class="row">
                            <!-- FadeIn -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">FadeIn</h3>

                                <div id="shortcode1">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal1" data-modal-target="#modal1"
                                            data-modal-effect="fadein">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal1"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End FadeIn -->

                            <!-- Slide -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Slide</h3>

                                <div id="shortcode2">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal2" data-modal-target="#modal2"
                                            data-modal-effect="slide">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal2"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Slide -->

                            <!-- Newspaper -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Newspaper</h3>

                                <div id="shortcode3">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal3" data-modal-target="#modal3"
                                            data-modal-effect="newspaper">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal3"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Newspaper -->

                            <!-- Fall -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Fall</h3>

                                <div id="shortcode4">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal4" data-modal-target="#modal4"
                                            data-modal-effect="fall">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal4"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Fall -->
                        </div>

                        <hr class="g-brd-gray-light-v4 g-mb-60">

                        <div class="row">
                            <!-- Sidefall -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Sidefall</h3>

                                <div id="shortcode5">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal5" data-modal-target="#modal5"
                                            data-modal-effect="sidefall">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal5"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Sidefall -->

                            <!-- Blur -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Blur</h3>

                                <div id="shortcode6">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal6" data-modal-target="#modal6"
                                            data-modal-effect="blur">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal6"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Blur -->

                            <!-- Flip -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Flip</h3>

                                <div id="shortcode7">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal7" data-modal-target="#modal7"
                                            data-modal-effect="flip">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal7"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Flip -->

                            <!-- Sign -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Sign</h3>

                                <div id="shortcode8">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal8" data-modal-target="#modal8"
                                            data-modal-effect="sign">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal8"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-html">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-html">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Sign -->
                        </div>

                        <hr class="g-brd-gray-light-v4 g-mb-60">

                        <div class="row">
                            <!-- Superscaled -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Superscaled</h3>

                                <div id="shortcode9">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal9" data-modal-target="#modal9"
                                            data-modal-effect="superscaled">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal9"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Superscaled -->

                            <!-- Slit -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Slit</h3>

                                <div id="shortcode10">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal10" data-modal-target="#modal10"
                                            data-modal-effect="slit">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal10"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Slit -->

                            <!-- Rotate -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Rotate</h3>

                                <div id="shortcode11">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal11" data-modal-target="#modal11"
                                            data-modal-effect="rotate">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal11"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Rotate -->

                            <!-- Letmein -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Letmein</h3>

                                <div id="shortcode12">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal12" data-modal-target="#modal12"
                                            data-modal-effect="letmein">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal12"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Letmein -->
                        </div>

                        <hr class="g-brd-gray-light-v4 g-mb-60">

                        <div class="row">
                            <!-- Makeway -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Makeway</h3>

                                <div id="shortcode13">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal13" data-modal-target="#modal13"
                                            data-modal-effect="makeway">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal13"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Makeway -->

                            <!-- Slip -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Slip</h3>

                                <div id="shortcode14">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal14" data-modal-target="#modal14"
                                            data-modal-effect="slip">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal14"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Slip -->

                            <!-- Corner -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Corner</h3>

                                <div id="shortcode15">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal15" data-modal-target="#modal15"
                                            data-modal-effect="corner">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal15"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Corner -->

                            <!-- Slide Together -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Slide Together</h3>

                                <div id="shortcode16">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal16" data-modal-target="#modal16"
                                            data-modal-effect="slidetogether">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal16"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Slide Together -->
                        </div>

                        <hr class="g-brd-gray-light-v4 g-mb-60">

                        <div class="row">
                            <!-- Scale -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Scale</h3>

                                <div id="shortcode17">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal17" data-modal-target="#modal17"
                                            data-modal-effect="scale">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal17"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Scale -->

                            <!-- Door -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Door</h3>

                                <div id="shortcode18">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal18" data-modal-target="#modal18"
                                            data-modal-effect="door">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal18"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Door -->

                            <!-- Push -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Push</h3>

                                <div id="shortcode19">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal19" data-modal-target="#modal19"
                                            data-modal-effect="push">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal19"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Push -->

                            <!-- Content Scale -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Content Scale</h3>

                                <div id="shortcode20">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal20" data-modal-target="#modal20"
                                            data-modal-effect="contentscale">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal20"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Content Scale -->
                        </div>

                        <hr class="g-brd-gray-light-v4 g-mb-60">

                        <div class="row">
                            <!-- Swell -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Swell</h3>

                                <div id="shortcode21">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal21" data-modal-target="#modal21"
                                            data-modal-effect="swell">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal21"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Swell -->

                            <!-- Rotate Down -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Rotate Down</h3>

                                <div id="shortcode22">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal22" data-modal-target="#modal22"
                                            data-modal-effect="rotatedown">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal22"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Rotate Down -->

                            <!-- Flash -->
                            <div class="col-md-3 g-mb-30">
                                <h3 class="h4 g-font-weight-300 g-mb-20">Flash</h3>

                                <div id="shortcode23">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal23" data-modal-target="#modal23"
                                            data-modal-effect="flash">Launch Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal23"
                                            class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">Modal title</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of popups
                        $.HSCore.components.HSModalWindow.init('[data-modal-target]');
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
                            <!-- End Flash -->
                        </div>
                    </section>
                    <!-- End Popup Animations -->

                    <hr class="g-brd-gray-light-v4 g-my-60">

                    <!-- Situational Modals -->
                    <section>
                        <!-- Heading -->
                        <header class="g-mb-80">
                            <div class="u-heading-v6-2  text-uppercase">
                                <h2 class="h4 u-heading-v6__title g-font-weight-300">Situational Modals</h2>
                            </div>

                            <div class="g-line-height-2 g-pl-90">
                                <p>Nulla ipsum dolor sit amet, consectetur adipiscing elitut eleifend nisl. In hac
                                    habitasse platea dictumst. Curabitur hendrerit.</p>
                            </div>
                        </header>
                        <!-- End Heading -->

                        <!-- Showing after some time -->
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="h4 g-font-weight-300 g-mb-30">Showing after some time</h3>
                            </div>

                            <div class="col-md-8">
                                <div id="shortcode24">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal-type-aftersometime"
                                            data-modal-target="#modal-type-aftersometime"
                                            data-modal-effect="fadein">Trigger Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal-type-aftersometime"
                                            class="js-autonomous-popup text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;" data-modal-type="aftersometime"
                                            data-open-effect="zoomIn" data-close-effect="zoomOut" data-delay="2000"
                                            data-speed="500">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">This modal window have been shown by "after some time"
                                            </h4>

                                            <hr>

                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/appear.js"></script>
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of autonomous popups
                        $.HSCore.components.HSModalWindow.init('.js-autonomous-popup', {
                          autonomous: true
                        });
                      });
                    </script>
                                    </div>
                                </div>



                                <!-- Show Code -->
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode24"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
                                        <i class="fa fa-code"></i>
                                        Show code
                                    </a>
                                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                                        data-content-target="#shortcode24" data-success-text="Copied">
                                        <i class="fa fa-clone"></i>
                                        Copy code
                                    </a>
                                </div>
                                <!-- End Show Code -->

                            </div>
                        </div>
                        <!-- End Showing after some time -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- Showing on scroll -->
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="h4 g-font-weight-300 g-mb-30">Showing by "on scroll"</h3>
                            </div>

                            <div class="col-md-8">
                                <div id="shortcode25">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal-type-onscroll"
                                            data-modal-target="#modal-type-onscroll"
                                            data-modal-effect="fadein">Trigger Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal-type-onscroll"
                                            class="js-autonomous-popup text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;" data-modal-type="onscroll"
                                            data-open-effect="flipInY" data-close-effect="flipOutY"
                                            data-breakpoint="1000" data-speed="500">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">This modal window have been shown by "on scroll"</h4>

                                            <hr>

                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/appear.js"></script>
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of autonomous popups
                        $.HSCore.components.HSModalWindow.init('.js-autonomous-popup', {
                          autonomous: true
                        });
                      });
                    </script>
                                    </div>
                                </div>



                                <!-- Show Code -->
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode25"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
                                        <i class="fa fa-code"></i>
                                        Show code
                                    </a>
                                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                                        data-content-target="#shortcode25" data-success-text="Copied">
                                        <i class="fa fa-clone"></i>
                                        Copy code
                                    </a>
                                </div>
                                <!-- End Show Code -->

                            </div>
                        </div>
                        <!-- End Showing on scroll -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- Showing on target -->
                        <div id="modal-anchor" class="row">
                            <div class="col-md-4">
                                <h3 class="h4 g-font-weight-300 g-mb-30">Showing by "on target"</h3>
                            </div>

                            <div class="col-md-8">
                                <div id="shortcode26">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal-type-onscroll"
                                            data-modal-target="#modal-type-ontarget"
                                            data-modal-effect="fadein">Trigger Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal-type-ontarget"
                                            class="js-autonomous-popup text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;" data-modal-type="ontarget"
                                            data-open-effect="flipInY" data-close-effect="flipOutY"
                                            data-target="#modal-anchor" data-speed="500">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">This modal window have been shown by "on target"</h4>

                                            <hr>

                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/appear.js"></script>
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of autonomous popups
                        $.HSCore.components.HSModalWindow.init('.js-autonomous-popup', {
                          autonomous: true
                        });
                      });
                    </script>
                                    </div>
                                </div>



                                <!-- Show Code -->
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode26"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
                                        <i class="fa fa-code"></i>
                                        Show code
                                    </a>
                                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                                        data-content-target="#shortcode26" data-success-text="Copied">
                                        <i class="fa fa-clone"></i>
                                        Copy code
                                    </a>
                                </div>
                                <!-- End Show Code -->

                            </div>
                        </div>
                        <!-- End Showing on target -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- Showing by hashlink -->
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="h4 g-font-weight-300 g-mb-30">Showing by "hashlink"</h3>
                            </div>

                            <div class="col-md-8">
                                <div id="shortcode27">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary"
                                            href="shortcode-base-modals.html#modal-type-hashlink"
                                            target="_blank">Launch Modal</a>

                                        <!-- Demo modal window -->
                                        <div id="modal-type-hashlink"
                                            class="js-autonomous-popup text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;" data-modal-type="hashlink"
                                            data-open-effect="flipInY" data-close-effect="flipOutY" data-speed="500">
                                            <button type="button" class="close" onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">This modal window have been shown by "hashlink"</h4>

                                            <hr>

                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/appear.js"></script>
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of autonomous popups
                        $.HSCore.components.HSModalWindow.init('.js-autonomous-popup', {
                          autonomous: true
                        });
                      });
                    </script>
                                    </div>
                                </div>



                                <!-- Show Code -->
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode27"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
                                        <i class="fa fa-code"></i>
                                        Show code
                                    </a>
                                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                                        data-content-target="#shortcode27" data-success-text="Copied">
                                        <i class="fa fa-clone"></i>
                                        Copy code
                                    </a>
                                </div>
                                <!-- End Show Code -->

                            </div>
                        </div>
                        <!-- End Showing by hashlink -->

                        <hr class="g-brd-gray-light-v4 g-my-60">

                        <!-- Showing before unload -->
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="h4 g-font-weight-300 g-mb-30">Showing by "before unload"</h3>
                            </div>

                            <div class="col-md-8">
                                <div id="shortcode28">
                                    <div class="shortcode-html">
                                        <a class="btn u-btn-primary" href="#modal-type-beforeunload"
                                            data-modal-target="#modal-type-beforeunload"
                                            data-modal-effect="fadein">Trigger Modal
                                        </a>

                                        <!-- Demo modal window -->
                                        <div id="modal-type-beforeunload"
                                            class="js-autonomous-popup text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20"
                                            style="display: none;" data-modal-type="beforeunload"
                                            data-open-effect="flipInY" data-close-effect="flipOutY"
                                            data-speed="500">
                                            <button type="button" class="close"
                                                onclick="Custombox.modal.close();">
                                                <i class="hs-icon hs-icon-close"></i>
                                            </button>
                                            <h4 class="g-mb-20">This modal window have been shown by "before unload"
                                            </h4>

                                            <hr>

                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type
                                                specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more
                                                recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.</p>
                                        </div>
                                        <!-- End Demo modal window -->
                                    </div>

                                    <div class="shortcode-styles">
                                        <!-- CSS Implementing Plugins -->
                                        <link type="text/plain" rel="stylesheet"
                                            href="assets/vendor/custombox/custombox.min.css">
                                    </div>

                                    <div class="shortcode-scripts">
                                        <!-- JS Implementing Plugins -->
                                        <script type="text/plain" src="assets/vendor/appear.js"></script>
                                        <script type="text/plain" src="assets/vendor/custombox/custombox.min.js"></script>

                                        <!-- JS Unify -->
                                        <script type="text/plain" src="assets/js/components/hs.modal-window.js"></script>

                                        <!-- JS Plugins Init. -->
                                        <script type="text/plain">
                      $(document).on('ready', function () {
                        // initialization of autonomous popups
                        $.HSCore.components.HSModalWindow.init('.js-autonomous-popup', {
                          autonomous: true
                        });
                      });
                    </script>
                                    </div>
                                </div>



                                <!-- Show Code -->
                                <div class="g-font-size-12 g-my-30 ">
                                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                        href="#!" data-content-target="#shortcode28"
                                        data-modal-target="#modalMarkup" data-modal-effect="fadein">
                                        <i class="fa fa-code"></i>
                                        Show code
                                    </a>
                                    <a class="js-copy u-link-v5 g-color-main g-color-primary--hover" href="#!"
                                        data-content-target="#shortcode28" data-success-text="Copied">
                                        <i class="fa fa-clone"></i>
                                        Copy code
                                    </a>
                                </div>
                                <!-- End Show Code -->

                            </div>
                        </div>
                        <!-- End Showing before unload -->
                    </section>
                    <!-- End Situational Modals -->
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
    <script src="assets/vendor/custombox/custombox.min.js"></script>

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
    <script src="assets/js/components/hs.modal-window.js"></script>
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

            // initialization of autonomous popups
            $.HSCore.components.HSModalWindow.init('.js-autonomous-popup', {
                autonomous: true
            });

            $.HSCore.components.HSModalWindow.init('[data-modal-target]:not(.js-modal-markup)');
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
