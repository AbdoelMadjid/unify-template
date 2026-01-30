<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>Footer Contact Forms | Unify - Responsive Website Template</title>

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
                <h1 class="g-font-weight-300 g-letter-spacing-1 g-mb-15">Footer Contact Forms</h1>

                <div class="lead g-font-weight-400 g-line-height-2 g-letter-spacing-0_5">
                    <p class="mb-0">Block Components are usually collection of Base Components with/without the Global
                        Classes.
                        <br>These Components can be easily used and customized in any pages. Build websites like a Lego!
                    </p>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <section>
            <!-- Contact Forms #01 -->
            <section class="g-pt-100 g-pb-50">
                <div class="container">
                    <div class="text-center g-mb-60">
                        <h2 class="h4">Contact Forms
                            <span class="g-color-primary g-ml-5">#01</span>
                        </h2>
                    </div>

                    <div id="shortcode1">
                        <div class="shortcode-html">
                            <!-- Contact Form -->
                            <div class="text-center mx-auto g-width-70x--md">
                                <header class="u-heading-v8-2 g-mb-60">
                                    <h2
                                        class="u-heading-v8__title text-uppercase g-font-weight-600 g-color-gray-dark-v2 g-mb-25">
                                        Contact us</h2>
                                    <p class="mb-0">Cras luctus blandit sapien eget varius. Ut egestas justo faucibus
                                        laoreet fringilla. Pellentesque dictum, massa ut consequat euismod, tortor diam
                                        cursus nulla, a rhoncus justo mi ut diam.</p>
                                </header>

                                <form>
                                    <div class="row">
                                        <div class="col-md-6 form-group g-mb-30">
                                            <input
                                                class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-rounded-20 g-py-13 g-px-15"
                                                type="text" placeholder="Your name">
                                        </div>

                                        <div class="col-md-6 form-group g-mb-30">
                                            <input
                                                class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-rounded-20 g-py-13 g-px-15"
                                                type="tel" placeholder="Your phone">
                                        </div>

                                        <div class="col-md-12 form-group g-mb-30">
                                            <input
                                                class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-rounded-20 g-py-13 g-px-15"
                                                type="text" placeholder="Subject">
                                        </div>

                                        <div class="col-md-12 form-group g-mb-30">
                                            <textarea
                                                class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none g-rounded-20 g-py-13 g-px-15"
                                                rows="7" placeholder="Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button class="btn u-btn-primary text-uppercase g-rounded-30 g-px-25 g-py-13"
                                            type="submit" role="button">Send Message</button>
                                    </div>
                                </form>
                            </div>
                            <!-- End Contact Form -->
                        </div>
                    </div>




                    <!-- Show Code -->
                    <div class="g-font-size-12 g-my-30 text-center">
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

                </div>
            </section>
            <!-- End Contact Forms #01 -->

            <hr class="g-brd-gray-light-v4 my-0">

            <!-- Contact Forms #02 -->
            <section class="g-pt-100 g-overflow-hidden">
                <div class="container">
                    <div class="text-center g-mb-60">
                        <h2 class="h4">Contact Forms
                            <span class="g-color-primary g-ml-5">#02</span>
                        </h2>
                    </div>
                </div>

                <div id="shortcode2">
                    <div class="shortcode-html">
                        <!-- Contact Form -->
                        <div class="u-bg-overlay g-bg-img-hero g-bg-black-opacity-0_6--after g-color-white g-py-100"
                            style="background-image: url(assets/img-temp/1920x1080/img10.jpg);">
                            <div class="container u-bg-overlay__inner text-center">
                                <div class="mx-auto g-width-70x--md">
                                    <header class="u-heading-v8-2 g-mb-60">
                                        <h2 class="u-heading-v8__title text-uppercase g-font-weight-600 g-mb-25">
                                            Contact us</h2>
                                        <p class="g-color-white-opacity-0_8 mb-0">Cras luctus blandit sapien eget
                                            varius. Ut egestas justo faucibus laoreet fringilla. Pellentesque dictum,
                                            massa ut consequat euismod, tortor diam cursus nulla, a rhoncus justo mi ut
                                            diam.</p>
                                    </header>

                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 form-group g-mb-30">
                                                <input
                                                    class="form-control g-color-white g-color-white--focus g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_3 g-brd-white--focus g-py-13 g-px-15"
                                                    type="text" placeholder="Your name">
                                            </div>

                                            <div class="col-md-6 form-group g-mb-30">
                                                <input
                                                    class="form-control g-color-white g-color-white--focus g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_3 g-brd-white--focus g-py-13 g-px-15"
                                                    type="tel" placeholder="Your phone">
                                            </div>

                                            <div class="col-md-12 form-group g-mb-30">
                                                <input
                                                    class="form-control g-color-white g-color-white--focus g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_3 g-brd-white--focus g-py-13 g-px-15"
                                                    type="text" placeholder="Subject">
                                            </div>

                                            <div class="col-md-12 form-group g-mb-30">
                                                <textarea
                                                    class="form-control g-color-white g-color-white--focus g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_3 g-brd-white--focus g-resize-none g-py-13 g-px-15"
                                                    rows="7" placeholder="Message"></textarea>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button class="btn btn-block u-btn-primary text-uppercase g-px-25 g-py-13"
                                                type="submit" role="button">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 text-center">
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
            <!-- End Contact Forms #02 -->

            <hr class="g-brd-gray-light-v4 my-0">

            <!-- Contact Forms #03 -->
            <section class="g-pt-100">
                <div class="container">
                    <div class="text-center g-mb-60">
                        <h2 class="h4">Contact Forms
                            <span class="g-color-primary g-ml-5">#03</span>
                        </h2>
                    </div>

                    <div id="shortcode3">
                        <div class="shortcode-html">
                            <div class="text-center mx-auto g-width-70x--md">
                                <header class="u-heading-v8-2 g-mb-60">
                                    <h2
                                        class="u-heading-v8__title text-uppercase g-font-weight-600 g-color-gray-dark-v2 g-mb-25">
                                        Contact us</h2>
                                    <p class="mb-0">Cras luctus blandit sapien eget varius. Ut egestas justo faucibus
                                        laoreet fringilla. Pellentesque dictum, massa ut consequat euismod, tortor diam
                                        cursus nulla, a rhoncus justo mi ut diam.</p>
                                </header>

                                <form>
                                    <div class="row">
                                        <div class="col-md-6 form-group g-mb-30">
                                            <input
                                                class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-0 g-py-13 g-px-15"
                                                type="text" placeholder="Your name">
                                        </div>

                                        <div class="col-md-6 form-group g-mb-30">
                                            <input
                                                class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-0 g-py-13 g-px-15"
                                                type="tel" placeholder="Your phone">
                                        </div>

                                        <div class="col-md-12 form-group g-mb-30">
                                            <input
                                                class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-0 g-py-13 g-px-15"
                                                type="text" placeholder="Subject">
                                        </div>

                                        <div class="col-md-12 form-group g-mb-30">
                                            <textarea
                                                class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-0 g-py-13 g-px-15"
                                                rows="7" placeholder="Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button class="btn u-btn-primary text-uppercase rounded-0 g-px-25 g-py-13"
                                            type="submit" role="button">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>




                    <!-- Show Code -->
                    <div class="g-font-size-12 g-my-30 text-center">
                        <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                            href="#!" data-content-target="#shortcode3" data-modal-target="#modalMarkup"
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

                </div>
            </section>
            <!-- End Contact Forms #03 -->

            <hr class="g-brd-gray-light-v4 my-0">

            <!-- Contact Forms #04 -->
            <section class="g-pt-100 g-overflow-hidden">
                <div class="container">
                    <div class="text-center g-mb-60">
                        <h2 class="h4">Contact Forms
                            <span class="g-color-primary g-ml-5">#04</span>
                        </h2>
                    </div>
                </div>

                <div id="shortcode4">
                    <div class="shortcode-html">
                        <footer
                            class="u-bg-overlay g-bg-img-hero g-bg-attachment-fixed g-bg-grid-v1--before g-bg-black-opacity-0_6--after g-color-white g-py-100"
                            style="background-image: url(assets/img-temp/1920x1080/img2.jpg);">
                            <div class="container u-bg-overlay__inner">
                                <header class="g-width-70x--md text-center mx-auto g-mb-60">
                                    <div class="u-heading-v2-3--bottom g-brd-primary g-mb-15">
                                        <h2 class="u-heading-v2__title text-uppercase g-font-weight-600 g-mb-0">Contact
                                            us</h2>
                                    </div>
                                    <p class="lead g-font-weight-400">Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. It has been the industry's standard dummy text.</p>
                                </header>

                                <div class="row">
                                    <div class="col-md-6">
                                        <address class="g-font-size-16 g-py-10">
                                            <div class="d-flex g-mb-20">
                                                <div
                                                    class="u-icon-v3 u-icon-size--sm g-font-size-default g-bg-white-opacity-0_1 g-mr-10">
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                                <div class="align-self-center">5B Streat, City 50987 New Town US</div>
                                            </div>

                                            <div class="d-flex g-mb-20">
                                                <div
                                                    class="u-icon-v3 u-icon-size--sm g-font-size-default g-bg-white-opacity-0_1 g-mr-10">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <div class="align-self-center">1(800) 220 084</div>
                                            </div>

                                            <div class="d-flex g-mb-20">
                                                <div
                                                    class="u-icon-v3 u-icon-size--sm g-font-size-default g-bg-white-opacity-0_1 g-mr-10">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <div class="align-self-center">
                                                    <a class="g-color-white"
                                                        href="mailto:info@example.com">info@htmlstream.com</a>
                                                </div>
                                            </div>

                                            <div class="d-flex">
                                                <div
                                                    class="u-icon-v3 u-icon-size--sm g-font-size-default g-bg-white-opacity-0_1 g-mr-10">
                                                    <i class="fa fa-globe"></i>
                                                </div>
                                                <div class="align-self-center">
                                                    <a class="g-color-white" href="#!">www.htmlstream.com</a>
                                                </div>
                                            </div>
                                        </address>
                                    </div>

                                    <div class="col-md-6">
                                        <form>
                                            <div class="form-group g-width-340 g-mb-20">
                                                <label class="g-mb-10" for="inputGroup13_1">Name</label>
                                                <input id="inputGroup13_1"
                                                    class="form-control g-color-white g-bg-transparent g-bg-transparent--focus g-brd-white rounded-0 g-pa-10-16"
                                                    type="text">
                                            </div>

                                            <div class="form-group g-width-340 g-mb-20">
                                                <label class="g-mb-10" for="inputGroup13_2">Email
                                                    <span class="g-color-red">*</span>
                                                </label>
                                                <input id="inputGroup13_2"
                                                    class="form-control g-color-white g-bg-transparent g-bg-transparent--focus g-brd-white rounded-0 g-pa-10-16"
                                                    type="email">
                                            </div>

                                            <div class="form-group g-mb-20">
                                                <label class="g-mb-10" for="inputGroup13_2">Message</label>
                                                <textarea id="inputGroup13_3"
                                                    class="form-control g-resize-none g-color-white g-bg-transparent g-bg-transparent--focus g-brd-white rounded-0 g-pa-10-16"
                                                    rows="8"></textarea>
                                            </div>

                                            <button class="btn btn-md u-btn-outline-white rounded-0"
                                                type="submit">Send Message</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>




                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 text-center">
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
            <!-- End Contact Forms #04 -->

            <hr class="g-brd-gray-light-v4 my-0">

            <!-- Contact Forms #05 -->
            <section class="g-pt-100">
                <div class="container">
                    <div class="text-center g-mb-60">
                        <h2 class="h4">Contact Forms
                            <span class="g-color-primary g-ml-5">#05</span>
                        </h2>
                    </div>

                    <div id="shortcode5">
                        <div class="shortcode-html">
                            <header class="u-heading-v8-2 text-center g-width-70x--md mx-auto g-mb-60">
                                <h2 class="u-heading-v8__title text-uppercase g-font-weight-600 g-mb-25">Contact us
                                </h2>
                                <p class="lead mb-0">We do things differently company providing key digital services.
                                    Focused on helping our clients to build a successful business on web and mobile.</p>
                            </header>

                            <div class="row">
                                <div class="col-md-7">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 form-group g-mb-30">
                                                <input
                                                    class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-0 g-py-13 g-px-15"
                                                    type="text" placeholder="Your name">
                                            </div>

                                            <div class="col-md-6 form-group g-mb-30">
                                                <input
                                                    class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-0 g-py-13 g-px-15"
                                                    type="tel" placeholder="Your phone">
                                            </div>

                                            <div class="col-md-12 form-group g-mb-30">
                                                <input
                                                    class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-0 g-py-13 g-px-15"
                                                    type="text" placeholder="Subject">
                                            </div>

                                            <div class="col-md-12 form-group g-mb-30">
                                                <textarea
                                                    class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-0 g-py-13 g-px-15"
                                                    rows="7" placeholder="Message"></textarea>
                                            </div>
                                        </div>

                                        <button class="btn u-btn-primary rounded-0 g-py-12 g-px-20" type="submit"
                                            role="button">Send Message</button>
                                    </form>
                                </div>

                                <div class="col-md-5">
                                    <div class="lead g-mb-40">
                                        <p>Want to get more information? Contact us by using the form or call directly
                                            for more info.</p>
                                    </div>

                                    <address class="text-uppercase mb-0">
                                        <div class="d-flex g-mb-20">
                                            <div
                                                class="u-icon-v3 u-icon-size--sm g-font-size-default g-bg-gray-dark-v2 g-color-white-opacity-0_8 rounded-circle g-mr-15">
                                                <i class="icon-user"></i>
                                            </div>
                                            <div class="align-self-center g-font-weight-600 g-font-size-12">
                                                Address:
                                                <br>
                                                <strong class="g-color-gray-dark-v2">Orange California, US </strong>
                                            </div>
                                        </div>

                                        <div class="d-flex g-mb-20">
                                            <div
                                                class="u-icon-v3 u-icon-size--sm g-font-size-default g-bg-gray-dark-v2 g-color-white-opacity-0_8 rounded-circle g-mr-15">
                                                <i class="icon-speech"></i>
                                            </div>
                                            <div class="align-self-center g-font-weight-600 g-font-size-12">
                                                Email:
                                                <br>
                                                <a class="g-color-gray-dark-v2 g-color-gray-dark-v2--hover"
                                                    href="mailto:marketing@unify.com">
                                                    <strong>info@htmlstream.com</strong></a>
                                            </div>
                                        </div>

                                        <div class="d-flex">
                                            <div
                                                class="u-icon-v3 u-icon-size--sm g-font-size-default g-bg-gray-dark-v2 g-color-white-opacity-0_8 rounded-circle g-mr-15">
                                                <i class="icon-screen-smartphone"></i>
                                            </div>
                                            <div class="align-self-center g-font-weight-600 g-font-size-12">
                                                Phone number:
                                                <br>
                                                <strong class="g-color-gray-dark-v2">+1 555 2566 112</strong>
                                            </div>
                                        </div>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- Show Code -->
                    <div class="g-font-size-12 g-my-30 text-center">
                        <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                            href="#!" data-content-target="#shortcode5" data-modal-target="#modalMarkup"
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

                </div>
            </section>
            <!-- End Contact Forms #05 -->

            <hr class="g-brd-gray-light-v4 my-0">

            <!-- Contact Forms #06 -->
            <section class="g-pt-100">
                <div class="container">
                    <div class="text-center g-mb-60">
                        <h2 class="h4">Contact Forms
                            <span class="g-color-primary g-ml-5">#06</span>
                        </h2>
                    </div>
                </div>

                <div id="shortcode6">
                    <div class="shortcode-html">
                        <footer class="g-bg-black-opacity-0_9 g-color-white text-center g-py-100">
                            <div class="container">
                                <header class="u-heading-v8-2 text-center g-width-70x--md mx-auto g-mb-80">
                                    <h2 class="u-heading-v8__title text-uppercase g-font-weight-600 g-mb-25">Contact us
                                    </h2>
                                    <p class="lead mb-0">We do things differently company providing key digital
                                        services. Focused on helping our clients to build a successful business on web
                                        and mobile.</p>
                                </header>

                                <address class="row g-color-white-opacity-0_8">
                                    <div class="col-sm-6 col-md-3 g-mb-60">
                                        <i class="icon-line icon-map d-inline-block display-5 g-mb-25"></i>
                                        <h4 class="small text-uppercase g-mb-5">Address</h4>
                                        <strong>Orange California, US</strong>
                                    </div>

                                    <div class="col-sm-6 col-md-3 g-mb-60">
                                        <i class="icon-call-in d-inline-block display-5 g-mb-25"></i>
                                        <h4 class="small text-uppercase g-mb-5">Phone number</h4>
                                        <strong>+1 555 2342 111</strong>
                                    </div>

                                    <div class="col-sm-6 col-md-3">
                                        <i class="icon-envelope d-inline-block display-5 g-mb-25"></i>
                                        <h4 class="small text-uppercase g-mb-5">Email</h4>
                                        <a class="g-color-white-opacity-0_8" href="mailto:hello@unify-gym.com">
                                            <strong>info@htmlstream.com</strong></a>
                                    </div>

                                    <div class="col-sm-6 col-md-3">
                                        <i class="icon-earphones-alt d-inline-block display-5 g-mb-25"></i>
                                        <h4 class="small text-uppercase g-mb-5">Toll free</h4>
                                        <strong>100 302 2302</strong>
                                    </div>
                                </address>

                                <form>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group g-mb-20">
                                                        <input id="inputGroup10_1"
                                                            class="form-control g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_5 g-brd-white--focus g-color-white g-rounded-50 g-px-20 g-py-12"
                                                            type="text" placeholder="Name">
                                                    </div>

                                                    <div class="form-group g-mb-20">
                                                        <input id="inputGroup10_2"
                                                            class="form-control g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_5 g-brd-white--focus g-color-white g-rounded-50 g-px-20 g-py-12"
                                                            type="tel" placeholder="Phone">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group g-mb-20">
                                                        <input id="inputGroup1_3"
                                                            class="form-control g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_5 g-brd-white--focus g-color-white g-rounded-50 g-px-20 g-py-12"
                                                            type="email" placeholder="Email">
                                                    </div>

                                                    <div class="form-group g-mb-20">
                                                        <input id="inputGroup1_4"
                                                            class="form-control g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_5 g-brd-white--focus g-color-white g-rounded-50 g-px-20 g-py-12"
                                                            type="text" placeholder="Subject">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group g-mb-20">
                                                <textarea id="inputGroup11_5"
                                                    class="form-control g-resize-none g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_5 g-brd-white--focus g-color-white g-rounded-20 g-px-20 g-py-10"
                                                    rows="5" placeholder="Message"></textarea>
                                            </div>

                                            <div class="text-right">
                                                <button
                                                    class="btn u-btn-white g-font-size-11 text-uppercase g-font-weight-700 g-rounded-50 g-px-35 g-py-15"
                                                    type="submit" role="button">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </footer>
                    </div>
                </div>




                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 text-center">
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
            <!-- End Contact Forms #06 -->

            <hr class="g-brd-gray-light-v4 my-0">

            <!-- Contact Forms #07 -->
            <section class="g-pt-100">
                <div class="container">
                    <div class="text-center g-mb-60">
                        <h2 class="h4">Contact Forms
                            <span class="g-color-primary g-ml-5">#07</span>
                        </h2>
                    </div>

                    <div id="shortcode7">
                        <div class="shortcode-html">
                            <header class="u-heading-v8-2 text-center g-width-70x--md mx-auto g-mb-60">
                                <h2 class="u-heading-v8__title text-uppercase g-font-weight-600 g-mb-25">Contact us
                                </h2>
                                <p class="lead mb-0">We do things differently company providing key digital services.
                                    Focused on helping our clients to build a successful business on web and mobile.</p>
                            </header>

                            <div class="row text-center">
                                <div class="col-lg-6 g-mb-60 g-mb-0--lg">
                                    <div class="row no-gutters">
                                        <div class="col-sm g-brd-bottom--sm g-brd-gray-light-v4 g-py-30 g-px-15">
                                            <span class="d-block display-5 g-color-primary g-mb-20">
                                                <i class="icon-anchor"></i>
                                            </span>
                                            <em class="d-block text-uppercase g-font-style-normal g-mb-5">Address</em>
                                            <strong>Orange California, US</strong>
                                        </div>
                                        <div
                                            class="col-sm g-brd-bottom--sm g-brd-left--sm g-brd-gray-light-v4 g-py-30 g-px-15">
                                            <span class="d-block display-5 g-color-primary g-mb-20">
                                                <i class="icon-call-in"></i>
                                            </span>
                                            <em class="d-block text-uppercase g-font-style-normal g-mb-5">Phone
                                                Number</em>
                                            <strong>+1 555 2566 112</strong>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-sm g-py-30 g-px-15">
                                            <span class="d-block display-5 g-color-primary g-mb-20">
                                                <i class="icon-envelope-open"></i>
                                            </span>
                                            <em class="d-block text-uppercase g-font-style-normal g-mb-5">Email</em>
                                            <strong>info@htmlstream.com</strong>
                                        </div>
                                        <div class="col-sm g-brd-left--sm g-brd-gray-light-v4 g-py-30 g-px-15">
                                            <span class="d-block display-5 g-color-primary g-mb-20">
                                                <i class="icon-earphones-alt"></i>
                                            </span>
                                            <em class="d-block text-uppercase g-font-style-normal g-mb-5">Toll
                                                free</em>
                                            <strong>100 302 2302</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 align-self-center">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12 form-group g-mb-20">
                                                <input
                                                    class="form-control g-bg-gray-light-v5 g-brd-gray-light-v5 g-brd-primary--focus g-color-gray-dark-v5 rounded-0 g-py-15 g-px-15"
                                                    type="text" placeholder="Your name">
                                            </div>

                                            <div class="col-lg-12 form-group g-mb-20">
                                                <input
                                                    class="form-control g-bg-gray-light-v5 g-brd-gray-light-v5 g-brd-primary--focus g-color-gray-dark-v5 rounded-0 g-py-15 g-px-15"
                                                    type="tel" placeholder="Your phone">
                                            </div>

                                            <div class="col-lg-12 form-group g-mb-20">
                                                <input
                                                    class="form-control g-bg-gray-light-v5 g-brd-gray-light-v5 g-brd-primary--focus g-color-gray-dark-v5 rounded-0 g-py-15 g-px-15"
                                                    type="text" placeholder="Subject">
                                            </div>

                                            <div class="col-lg-12 form-group g-mb-20">
                                                <textarea
                                                    class="form-control g-resize-none g-bg-gray-light-v5 g-brd-gray-light-v5 g-brd-primary--focus g-color-gray-dark-v5 rounded-0 g-py-15 g-px-15"
                                                    rows="7" placeholder="Message"></textarea>
                                            </div>
                                        </div>

                                        <button
                                            class="btn u-btn-primary text-uppercase g-font-size-12 g-font-weight-700 rounded-0 g-py-12 g-px-20"
                                            type="submit" role="button">
                                            <i class="fa fa-arrow-right g-mr-5"></i>
                                            Send Message
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- Show Code -->
                    <div class="g-font-size-12 g-my-30 text-center">
                        <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                            href="#!" data-content-target="#shortcode7" data-modal-target="#modalMarkup"
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

                </div>
            </section>
            <!-- End Contact Forms #07 -->

            <hr class="g-brd-gray-light-v4 my-0">

            <!-- Contact Forms #08 -->
            <section class="g-pt-100">
                <div class="container">
                    <div class="text-center g-mb-60">
                        <h2 class="h4">Contact Forms
                            <span class="g-color-primary g-ml-5">#08</span>
                        </h2>
                    </div>
                </div>

                <div id="shortcode8">
                    <div class="shortcode-html">
                        <footer class="g-bg-black-opacity-0_9 g-color-white g-py-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <header class="text-uppercase g-mb-20">
                                            <h4 class="h7 g-font-weight-700 g-color-black--light g-mb-15">Contact Us
                                            </h4>
                                            <h2 class="h1 g-font-weight-300 mb-0">Answers to <strong>your
                                                    questions</strong></h2>
                                        </header>

                                        <p class="g-mb-40 g-mb-0--lg">Integer ut sollicitudin justo. Class aptent
                                            taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                            himenaeos.</p>
                                    </div>

                                    <div class="col-lg-7 align-self-center">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group g-mb-20">
                                                        <input id="inputGroup10_3"
                                                            class="form-control g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_5 g-brd-white--focus g-color-white g-rounded-10 g-px-20 g-py-12"
                                                            type="email" placeholder="Name">
                                                    </div>

                                                    <div class="form-group g-mb-20">
                                                        <input id="inputGroup10_4"
                                                            class="form-control g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_5 g-brd-white--focus g-color-white g-rounded-10 g-px-20 g-py-12"
                                                            type="text" placeholder="Email *">
                                                    </div>
                                                </div>

                                                <div class="col-md-7">
                                                    <div class="form-group g-mb-20">
                                                        <textarea id="inputGroup10_5"
                                                            class="form-control g-resize-none g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_5 g-brd-white--focus g-color-white g-rounded-10 g-px-20 g-py-10"
                                                            rows="5" placeholder="Message"></textarea>
                                                    </div>

                                                    <div class="text-right">
                                                        <button
                                                            class="btn u-btn-white g-font-size-11 text-uppercase g-font-weight-700 g-rounded-10 g-py-10 g-px-20"
                                                            type="submit" role="button">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </footer>

                        <!-- Social Links -->
                        <div class="row no-gutters text-center g-line-height-1">
                            <div class="col">
                                <a href="#!"
                                    class="d-block u-info-v2-1__item g-font-size-16 g-bg-facebook g-color-white g-color-white--hover g-pa-25">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#!"
                                    class="d-block u-info-v2-1__item g-font-size-16 g-bg-pinterest g-color-white g-color-white--hover g-pa-25">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#!"
                                    class="d-block u-info-v2-1__item g-font-size-16 g-bg-dribbble g-color-white g-color-white--hover g-pa-25">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#!"
                                    class="d-block u-info-v2-1__item g-font-size-16 g-bg-instagram g-color-white g-color-white--hover g-pa-25">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#!"
                                    class="d-block u-info-v2-1__item g-font-size-16 g-bg-twitter g-color-white g-color-white--hover g-pa-25">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End Social Links -->
                    </div>
                </div>




                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 text-center">
                    <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15" href="#!"
                        data-content-target="#shortcode8" data-modal-target="#modalMarkup"
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

            </section>
            <!-- End Contact Forms #08 -->

            <hr class="g-brd-gray-light-v4 my-0">

            <!-- Contact Forms #09 -->
            <section class="g-pt-100">
                <div class="container">
                    <div class="text-center g-mb-60">
                        <h2 class="h4">Contact Forms
                            <span class="g-color-primary g-ml-5">#09</span>
                        </h2>
                    </div>

                    <div id="shortcode9">
                        <div class="shortcode-html">
                            <header class="u-heading-v8-2 text-center g-width-70x--md mx-auto g-mb-60">
                                <h2 class="u-heading-v8__title text-uppercase g-font-weight-600 g-mb-25">Contact us
                                </h2>
                                <p class="lead mb-0">We do things differently company providing key digital services.
                                    Focused on helping our clients to build a successful business on web and mobile.</p>
                            </header>

                            <div class="row">
                                <div class="col-md-8">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 form-group g-mb-30">
                                                <input
                                                    class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-0 g-py-13 g-px-15"
                                                    type="text" placeholder="Your name">
                                            </div>

                                            <div class="col-md-6 form-group g-mb-30">
                                                <input
                                                    class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-0 g-py-13 g-px-15"
                                                    type="tel" placeholder="Your phone">
                                            </div>

                                            <div class="col-md-12 form-group g-mb-30">
                                                <input
                                                    class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-0 g-py-13 g-px-15"
                                                    type="text" placeholder="Subject">
                                            </div>

                                            <div class="col-md-12 form-group g-mb-30">
                                                <textarea
                                                    class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-0 g-py-13 g-px-15"
                                                    rows="7" placeholder="Message"></textarea>
                                            </div>
                                        </div>

                                        <button class="btn u-btn-primary rounded-0 g-py-12 g-px-20" type="submit"
                                            role="button">Send Message</button>
                                    </form>
                                </div>

                                <div class="col-lg-4 text-center g-mb-40">
                                    <div class="g-mb-20">
                                        <span class="u-icon-v1 g-color-primary">
                                            <i class="icon-directions"></i>
                                        </span>
                                        <em
                                            class="d-block g-color-black-light-v2 text-uppercase g-font-size-12 g-font-style-normal g-mb-5">Address</em>
                                        <strong class="d-block">Orange California, US</strong>
                                    </div>
                                    <div class="g-mb-20">
                                        <span class="u-icon-v1 g-color-primary">
                                            <i class="icon-call-in"></i>
                                        </span>
                                        <em
                                            class="d-block g-color-black-light-v2 text-uppercase g-font-size-12 g-font-style-normal g-mb-5">Phone
                                            Number</em>
                                        <strong class="d-block">+1 555 2566 112</strong>
                                    </div>
                                    <div>
                                        <span class="u-icon-v1 g-color-primary">
                                            <i class="icon-envelope-letter"></i>
                                        </span>
                                        <em
                                            class="d-block g-color-black-light-v2 text-uppercase g-font-size-12 g-font-style-normal g-mb-5">Email</em>
                                        <strong class="d-block">
                                            <a href="#!" class="g-color-main">info@htmlstream.com</a>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- Show Code -->
                    <div class="g-font-size-12 g-my-30 text-center">
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
            </section>
            <!-- End Contact Forms #09 -->

            <hr class="g-brd-gray-light-v4 my-0">

            <!-- Contact Forms #10 -->
            <section class="g-pt-100">
                <div class="container">
                    <div class="text-center g-mb-60">
                        <h2 class="h4">Contact Forms
                            <span class="g-color-primary g-ml-5">#10</span>
                        </h2>
                    </div>
                </div>

                <div id="shortcode10">
                    <div class="shortcode-html">
                        <!-- Contact Info -->
                        <div class="row no-gutters g-color-white text-center g-mb-80">
                            <div class="col-md-6 col-lg-3 g-bg-primary-dark-v3 g-py-60">
                                <span class="u-icon-v1 u-icon-size--xl g-color-white g-mb-10">
                                    <i class="icon-map"></i>
                                </span>
                                <em
                                    class="d-block g-font-size-12 text-uppercase g-font-style-normal g-color-white-opacity-0_8 g-mb-5">Address</em>
                                <strong class="d-block g-font-size-16">Orange California, US</strong>
                            </div>

                            <div class="col-md-6 col-lg-3 g-bg-primary-dark-v2 g-py-60">
                                <span class="u-icon-v1 u-icon-size--xl g-color-white g-mb-10">
                                    <i class="icon-screen-smartphone"></i>
                                </span>
                                <em
                                    class="d-block g-font-size-12 text-uppercase g-font-style-normal g-color-white-opacity-0_8 g-mb-5">Phone
                                    Number</em>
                                <strong class="d-block g-font-size-16">+1 555 2566 112</strong>
                            </div>

                            <div class="col-md-6 col-lg-3 g-bg-primary-dark-v3 g-py-60">
                                <span class="u-icon-v1 u-icon-size--xl g-color-white g-mb-10">
                                    <i class="icon-envelope-letter"></i>
                                </span>
                                <em
                                    class="d-block g-font-size-12 text-uppercase g-font-style-normal g-color-white-opacity-0_8 g-mb-5">Email</em>
                                <strong class="d-block g-font-size-16">
                                    <a href="#!"
                                        class="g-color-white g-color-white--hover">info@htmlstream.com</a>
                                </strong>
                            </div>

                            <div class="col-md-6 col-lg-3 g-bg-primary-dark-v2 g-py-60">
                                <span class="u-icon-v1 u-icon-size--xl g-color-white g-mb-10">
                                    <i class="icon-call-in"></i>
                                </span>
                                <em
                                    class="d-block g-font-size-12 text-uppercase g-font-style-normal g-color-white-opacity-0_8 g-mb-5">Call
                                    Free</em>
                                <strong class="d-block g-font-size-16">800 1258 987</strong>
                            </div>
                        </div>
                        <!-- End Contact Info -->

                        <!-- Contact Form -->
                        <div class="container text-center">
                            <header class="u-heading-v8-2 text-center g-width-70x--md mx-auto g-mb-60">
                                <h2 class="u-heading-v8__title text-uppercase g-font-weight-600 g-mb-25">Contact us
                                </h2>
                                <p class="lead mb-0">We do things differently company providing key digital services.
                                    Focused on helping our clients to build a successful business on web and mobile.</p>
                            </header>

                            <!-- Contact Form -->
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 form-group g-mb-30">
                                                <input
                                                    class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-0 g-py-13 g-px-15"
                                                    type="text" placeholder="Your name">
                                            </div>

                                            <div class="col-md-6 form-group g-mb-30">
                                                <input
                                                    class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-0 g-py-13 g-px-15"
                                                    type="tel" placeholder="Your phone">
                                            </div>

                                            <div class="col-md-12 form-group g-mb-30">
                                                <input
                                                    class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-0 g-py-13 g-px-15"
                                                    type="text" placeholder="Subject">
                                            </div>

                                            <div class="col-md-12 form-group g-mb-30">
                                                <textarea
                                                    class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-0 g-py-13 g-px-15"
                                                    rows="7" placeholder="Message"></textarea>
                                            </div>
                                        </div>

                                        <button class="btn u-btn-primary rounded-0 g-py-12 g-px-20" type="submit"
                                            role="button">Send Message</button>
                                    </form>
                                </div>
                            </div>
                            <!-- Contact Form -->
                        </div>
                        <!-- End Contact Form -->
                    </div>
                </div>




                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 text-center">
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
            <!-- End Contact Forms #10 -->

            <hr class="g-brd-gray-light-v4 my-0">

            <!-- Contact Forms #11 -->
            <section class="g-pt-100">
                <div class="container">
                    <div class="text-center g-mb-60">
                        <h2 class="h4">Contact Forms
                            <span class="g-color-primary g-ml-5">#11</span>
                        </h2>
                    </div>

                    <div id="shortcode11">
                        <div class="shortcode-html">
                            <!-- Contact Form -->
                            <header class="u-heading-v8-2 text-center g-width-70x--md mx-auto g-mb-60">
                                <h2 class="u-heading-v8__title text-uppercase g-font-weight-600 g-mb-25">Contact us
                                </h2>
                                <p class="lead mb-0">We do things differently company providing key digital services.
                                    Focused on helping our clients to build a successful business on web and mobile.</p>
                            </header>

                            <div class="row">
                                <div class="col-lg-4 text-uppercase">
                                    <h3 class="h5 g-font-weight-600 g-color-gray-dark-v2 g-mb-20">Where to meet</h3>
                                    <p class="g-font-size-12 g-mb-40">Curabitur sit amet fringilla mi. Etiam ac massa
                                        sit amet nulla eleifend rutrum vitae non sem.</p>

                                    <h3 class="h5 g-font-weight-600 g-color-gray-dark-v2 g-mb-20">Say Hello!</h3>
                                    <address class="g-font-size-12">
                                        <p>Phone number <strong class="g-color-gray-dark-v2">+48 555 2566 112</strong>
                                        </p>
                                        <p> Email
                                            <a class="g-color-gray-dark-v2"
                                                href="mailto:info@unify.com"><strong>info@unify.com</strong>
                                            </a>
                                        </p>
                                    </address>
                                </div>

                                <div class="col-lg-8">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12 form-group g-mb-20">
                                                <input
                                                    class="form-control g-bg-gray-light-v5 g-brd-gray-light-v5 g-brd-primary--focus g-color-gray-dark-v5 rounded-0 g-py-15 g-px-15"
                                                    type="text" placeholder="Your name">
                                            </div>

                                            <div class="col-lg-12 form-group g-mb-20">
                                                <input
                                                    class="form-control g-bg-gray-light-v5 g-brd-gray-light-v5 g-brd-primary--focus g-color-gray-dark-v5 rounded-0 g-py-15 g-px-15"
                                                    type="tel" placeholder="Your email *">
                                            </div>

                                            <div class="col-lg-12 form-group g-mb-20">
                                                <textarea
                                                    class="form-control g-resize-none g-bg-gray-light-v5 g-brd-gray-light-v5 g-brd-primary--focus g-color-gray-dark-v5 rounded-0 g-py-15 g-px-15"
                                                    rows="7" placeholder="Message"></textarea>
                                            </div>
                                        </div>

                                        <button
                                            class="btn btn-block u-btn-primary text-uppercase g-font-size-12 g-font-weight-700 rounded-0 g-py-15 g-px-20"
                                            type="submit" role="button">Send Message</button>
                                    </form>
                                </div>
                            </div>
                            <!-- End Contact Form -->
                        </div>
                    </div>




                    <!-- Show Code -->
                    <div class="g-font-size-12 g-my-30 text-center">
                        <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                            href="#!" data-content-target="#shortcode11" data-modal-target="#modalMarkup"
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

                </div>
            </section>
            <!-- End Contact Forms #11 -->

            <hr class="g-brd-gray-light-v4 my-0">

            <!-- Contact Forms #12 -->
            <section class="g-pt-100">
                <div class="container">
                    <div class="text-center g-mb-60">
                        <h2 class="h4">Contact Forms
                            <span class="g-color-primary g-ml-5">#12</span>
                        </h2>
                    </div>

                    <div id="shortcode12">
                        <div class="shortcode-html">
                            <header class="u-heading-v8-2 text-center g-width-70x--md mx-auto g-mb-60">
                                <h2 class="u-heading-v8__title text-uppercase g-font-weight-600 g-mb-25">Contact us
                                </h2>
                                <p class="lead mb-0">We do things differently company providing key digital services.
                                    Focused on helping our clients to build a successful business on web and mobile.</p>
                            </header>

                            <div class="row">
                                <div class="col-lg-9">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12 form-group g-mb-25">
                                                <input
                                                    class="form-control g-bg-gray-light-v5 g-color-gray-dark-v5 g-brd-gray-light-v5 g-brd-primary--focus rounded-0 g-py-15 g-px-15"
                                                    type="text" placeholder="Your name">
                                            </div>

                                            <div class="col-lg-12 form-group g-mb-25">
                                                <input
                                                    class="form-control g-bg-gray-light-v5 g-color-gray-dark-v5 g-brd-gray-light-v5 g-brd-primary--focus rounded-0 g-py-15 g-px-15"
                                                    type="tel" placeholder="Your email *">
                                            </div>

                                            <div class="col-lg-12 form-group g-mb-25">
                                                <textarea
                                                    class="form-control g-resize-none g-bg-gray-light-v5 g-color-gray-dark-v5 g-brd-gray-light-v5 g-brd-primary--focus rounded-0 g-py-15 g-px-15"
                                                    rows="7" placeholder="Message"></textarea>
                                            </div>
                                        </div>

                                        <button
                                            class="btn btn-block u-btn-outline-primary text-uppercase g-font-size-12 g-font-weight-700 g-brd-2 rounded-0 g-py-14 g-px-20"
                                            type="submit" role="button">Send Message</button>
                                    </form>
                                </div>

                                <div class="col-lg-3 g-mb-40">
                                    <div class="g-mb-25">
                                        <span class="u-icon-v1 u-icon-size--xs g-color-primary">
                                            <i class="icon-directions"></i>
                                        </span>
                                        <em
                                            class="d-block g-color-black-light-v2 text-uppercase g-font-size-12 g-font-style-normal g-mb-5">Address</em>
                                        <strong class="d-block">Orange California, US</strong>
                                    </div>
                                    <div class="g-mb-25">
                                        <span class="u-icon-v1 u-icon-size--xs g-color-primary">
                                            <i class="icon-call-in"></i>
                                        </span>
                                        <em
                                            class="d-block g-color-black-light-v2 text-uppercase g-font-size-12 g-font-style-normal g-mb-5">Phone
                                            Number</em>
                                        <strong class="d-block">+1 555 2566 112</strong>
                                    </div>
                                    <div>
                                        <span class="u-icon-v1 u-icon-size--xs g-color-primary">
                                            <i class="icon-envelope-letter"></i>
                                        </span>
                                        <em
                                            class="d-block g-color-black-light-v2 text-uppercase g-font-size-12 g-font-style-normal g-mb-5">Email</em>
                                        <strong class="d-block">
                                            <a href="#!" class="g-color-main">info@htmlstream.com</a>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- Show Code -->
                    <div class="g-font-size-12 g-my-30 text-center">
                        <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                            href="#!" data-content-target="#shortcode12" data-modal-target="#modalMarkup"
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

                </div>
            </section>
            <!-- End Contact Forms #12 -->

            <hr class="g-brd-gray-light-v4 my-0">

            <!-- Contact Forms #13 -->
            <section class="g-pt-100">
                <div class="text-center g-mb-60">
                    <h2 class="h4">Contact Forms
                        <span class="g-color-primary g-ml-5">#13</span>
                    </h2>
                </div>

                <div id="shortcode13">
                    <div class="shortcode-html">
                        <!-- Contact -->
                        <footer class="g-pos-rel">
                            <!-- Content -->
                            <div class="g-bg-size-cover g-bg-img-hero g-bg-cover g-bg-black-opacity-0_7--after g-pt-120 g-pb-70"
                                style="background-image: url(assets/img-temp/1920x1080/img51.jpg);">
                                <div class="container u-bg-overlay__inner">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 g-mb-50">
                                            <h3 class="h4 g-color-white mb-4">Contact Info</h3>

                                            <!-- Icon Block -->
                                            <div class="media align-items-center mb-4">
                                                <div class="d-flex">
                                                    <span class="u-icon-v1 u-icon-size--sm g-color-white mr-2">
                                                        <i class="icon-hotel-restaurant-235 u-line-icon-pro"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="g-color-white-opacity-0_6 mb-0">5B Streat, City 50987 New
                                                        Town US</p>
                                                </div>
                                            </div>
                                            <!-- End Icon Block -->

                                            <!-- Icon Block -->
                                            <div class="media align-items-center mb-4">
                                                <div class="d-flex">
                                                    <span class="u-icon-v1 u-icon-size--sm g-color-white mr-2">
                                                        <i class="icon-communication-033 u-line-icon-pro"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="g-color-white-opacity-0_6 mb-0">+32 (0) 333 444 555</p>
                                                </div>
                                            </div>
                                            <!-- End Icon Block -->

                                            <!-- Icon Block -->
                                            <div class="media align-items-center g-mb-60">
                                                <div class="d-flex">
                                                    <span class="u-icon-v1 u-icon-size--sm g-color-white mr-2">
                                                        <i class="icon-communication-062 u-line-icon-pro"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="g-color-white-opacity-0_6 mb-0">htmlstream@support.com
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- End Icon Block -->

                                            <!-- Social Icons -->
                                            <h3 class="h4 g-color-white">Social Networks</h3>

                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item g-mx-2">
                                                    <a class="u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle"
                                                        href="https://www.facebook.com/htmlstream">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item g-mx-2">
                                                    <a class="u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle"
                                                        href="https://twitter.com/htmlstream">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item g-mx-2">
                                                    <a class="u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle"
                                                        href="https://github.com/htmlstream">
                                                        <i class="fa fa-github"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item g-mx-2">
                                                    <a class="u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle"
                                                        href="https://dribbble.com/htmlstream">
                                                        <i class="fa fa-dribbble"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- End Social Icons -->
                                        </div>

                                        <div class="col-md-8 g-mb-50">
                                            <div class="g-brd-around g-brd-white-opacity-0_6 g-px-45 g-py-60">
                                                <div class="row">
                                                    <div class="col-md-4 g-mb-30">
                                                        <h2 class="h1 g-color-white">Contact Us</h2>
                                                    </div>

                                                    <div class="col-md-8 g-mb-30">
                                                        <!-- Contact Form -->
                                                        <form>
                                                            <div class="mb-3">
                                                                <input
                                                                    class="form-control g-brd-none g-brd-bottom g-brd-white g-brd-primary--focus g-color-white g-bg-transparent g-placeholder-gray-light-v5 rounded-0 g-py-13 g-px-0 mb-2"
                                                                    type="text" placeholder="Name">
                                                            </div>

                                                            <div class="mb-3">
                                                                <input
                                                                    class="form-control g-brd-none g-brd-bottom g-brd-white g-brd-primary--focus g-color-white g-bg-transparent g-placeholder-gray-light-v5 rounded-0 g-py-13 g-px-0 mb-2"
                                                                    type="email" placeholder="Email">
                                                            </div>

                                                            <div class="mb-4">
                                                                <textarea
                                                                    class="form-control g-brd-none g-brd-bottom g-brd-white g-brd-primary--focus g-color-white g-bg-transparent g-placeholder-gray-light-v5 g-resize-none rounded-0 g-py-13 g-px-0 mb-5"
                                                                    rows="5" placeholder="Message"></textarea>
                                                            </div>

                                                            <button
                                                                class="btn u-btn-primary g-bg-secondary g-color-primary g-color-white--hover g-bg-primary--hover g-font-weight-600 g-font-size-12 g-rounded-30 g-py-15 g-px-35"
                                                                type="submit" role="button">Send Message</button>
                                                        </form>
                                                        <!-- End Contact Form -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Content -->

                            <!-- Go To Top -->
                            <a class="js-go-to text-center g-color-main g-color-primary--hover g-left-50x g-ml-minus-100"
                                href="#!" data-type="absolute"
                                data-position='{
                     "bottom": 65
                   }'
                                data-offset-top="400" data-compensation="#js-header" data-show-effect="fadeInUp">
                                <svg version="1.1" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="208px" height="50px">
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#fff"
                                        d="M111.042,0h-0.085C81.962,0.042,50.96,42.999,6,42.999c-6,0-6,0-6,0v1h214v-1v-0.015C169.917,42.349,139.492,0.042,111.042,0z" />
                                </svg>
                                <i
                                    class="g-font-size-20 g-pos-abs g-bottom-20 g-left-50x g-ml-2 fa fa-angle-double-up"></i>
                            </a>
                            <!-- End Go To Top -->

                            <!-- Copyright -->
                            <div class="container text-center g-py-30">
                                <p class="g-font-size-13 mb-0">&#169; 2017 Htmlstream. All Rights Reserved.</p>
                            </div>
                            <!-- End Copyright -->
                        </footer>
                        <!-- End Contact -->
                    </div>
                </div>




                <!-- Show Code -->
                <div class="g-font-size-12 g-my-30 text-center">
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
            <!-- End Contact Forms #13 -->
        </section>

        <!-- Call To Action -->
        <section class="g-bg-primary g-color-white g-pa-30"
            style="background-image: url(assets/img/bg/pattern5.png);">
            <div class="d-md-flex justify-content-md-center text-center">
                <div class="align-self-md-center">
                    <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">We offer best in class service for
                        your needs</p>
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
        });

        $(window).on('load', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');
            $.HSCore.components.HSHeaderSide.init($('#sideNav'));

            // initialization of autocomplet
            $.HSCore.components.HSLocalSearchAutocomplete.init('#u-sidebar-navigation__search-autocomplete');

            // initialization of HSMegaMenu plugin
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });
        });
    </script>
</body>

</html>
