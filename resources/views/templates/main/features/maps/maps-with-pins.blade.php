<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>Maps with Pins | Unify - Responsive Website Template</title>

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
            class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall"
            data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}">
            <!-- Parallax Image -->
            <div style="height: 200%; background-image: url(assets/img/bg/pattern6-2.png); transform: translate3d(0px, -210.955px, 0px);"
                class="divimage dzsparallaxer--target w-100 g-bg-repeat g-bg-gray-light-v4"></div>
            <!-- End Parallax Image -->

            <div class="container g-z-index-1 g-py-100">
                <h1 class="g-font-weight-300 g-letter-spacing-1 g-mb-15">Maps with Pins</h1>

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
                    <div class="row">
                        <div class="col-md-12">
                            <div id="shortcode1">
                                <div class="shortcode-html">
                                    <img class="js-pin-map img-fluid" src="assets/img/maps/map.png"
                                        easypin-id="map-pin">

                                    <div style="display: none;" easypin-tpl>
                                        <popover>
                                            <div
                                                class="text-center text-uppercase u-ns-bg-v1-bottom g-absolute-centered--x g-bg-black g-width-170 g-mb-40">
                                                <img class="img-fluid" src="{[image_url]}" alt="{[title]}">

                                                <div class="g-pa-25">
                                                    <h5 class="g-color-primary g-font-weight-600 g-font-size-10 g-mb-9">
                                                        {[date]}</h5>
                                                    <h4
                                                        class="g-color-gray-light-v1 g-font-weight-600er g-font-size-9 g-mb-10">
                                                        <i
                                                            class="fa fa-map-marker g-valign-middle g-color-primary g-font-size-default"></i>
                                                        <span class="g-valign-middle">{[location]}</span>
                                                    </h4>
                                                    <h2 class="g-color-white g-font-weight-600er g-font-size-14 mb-0">
                                                        {[title]}</h2>
                                                </div>
                                            </div>
                                        </popover>

                                        <marker>
                                            <div class="point"></div>
                                        </marker>
                                    </div>
                                </div>

                                <div class="shortcode-scripts">
                                    <!-- JS Implementing Plugins -->
                                    <script type="text/plain" src="assets/vendor/jquery.easypin.custom/dist/jquery.easypin.js"></script>

                                    <!-- JS Unify -->
                                    <script type="text/plain" src="assets/js/components/hs.map.pin.js"></script>

                                    <!-- JS Plugins Init. -->
                                    <script type="text/plain">
                    $(document).on('ready', function () {
                      // initialization of pin map
                      var markers1 = {
                        0: {
                          "image_url": "assets/img-temp/400x270/img1.jpg",
                          "date": "17:48, April 27, 2015",
                          "location": "South Africa",
                          "title": "Proin egestas purus eget1",
                          "coords": {
                            "lat": "149",
                            "long": "168"
                          }
                        },
                        1: {
                          "image_url": "assets/img-temp/400x270/img2.jpg",
                          "date": "17:48, April 27, 2015",
                          "location": "South Africa",
                          "title": "Proin egestas purus eget2",
                          "coords": {
                            "lat": "179",
                            "long": "205"
                          }
                        },
                        2: {
                          "image_url": "assets/img-temp/400x270/img3.jpg",
                          "date": "17:48, April 27, 2015",
                          "location": "South Africa",
                          "title": "Proin egestas purus eget3",
                          "coords": {
                            "lat": "241",
                            "long": "373"
                          }
                        },
                        3: {
                          "image_url": "assets/img-temp/400x270/img4.jpg",
                          "date": "17:48, April 27, 2015",
                          "location": "South Africa",
                          "title": "Proin egestas purus eget4",
                          "coords": {
                            "lat": "543",
                            "long": "244"
                          }
                        },
                        4: {
                          "image_url": "assets/img-temp/400x270/img5.jpg",
                          "date": "17:48, April 27, 2015",
                          "location": "South Africa",
                          "title": "Proin egestas purus eget5",
                          "coords": {
                            "lat": "601",
                            "long": "268"
                          }
                        },
                        5: {
                          "image_url": "assets/img-temp/400x270/img6.jpg",
                          "date": "17:48, April 27, 2015",
                          "location": "South Africa",
                          "title": "Proin egestas purus eget6",
                          "coords": {
                            "lat": "636",
                            "long": "260"
                          }
                        },
                        6: {
                          "image_url": "assets/img-temp/400x270/img7.jpg",
                          "date": "117:48, April 27, 2015",
                          "location": "South Africa",
                          "title": "Proin egestas purus eget7",
                          "coords": {
                            "lat": "614",
                            "long": "118"
                          }
                        },
                        7: {
                          "image_url": "assets/img-temp/400x270/img8.jpg",
                          "date": "17:48, April 27, 2015",
                          "location": "South Africa",
                          "title": "Proin egestas purus eget8",
                          "coords": {
                            "lat": "701",
                            "long": "70.125"
                          }
                        },
                        8: {
                          "image_url": "assets/img-temp/400x270/img17.jpg",
                          "date": "17:48, April 27, 2015",
                          "location": "South Africa",
                          "title": "Proin egestas purus eget9",
                          "coords": {
                            "lat": "950",
                            "long": "177"
                          }
                        },
                        9: {
                          "image_url": "assets/img-temp/400x270/img15.jpg",
                          "date": "17:48, April 27, 2015",
                          "location": "South Africa",
                          "title": "Proin egestas purus eget10",
                          "coords": {
                            "lat": "1079",
                            "long": "463"
                          }
                        },
                        10: {
                          "image_url": "assets/img-temp/400x270/img7.jpg",
                          "date": "17:48, April 27, 2015",
                          "location": "South Africa",
                          "title": "Proin egestas purus eget 11",
                          "coords": {
                            "lat": "717",
                            "long": "455"
                          }
                        },
                        11: {
                          "image_url": "assets/img-temp/400x270/img5.jpg",
                          "date": "17:48, April 27, 2015",
                          "location": "South Africa",
                          "title": "Proin egestas purus eget 12",
                          "coords": {
                            "lat": "625",
                            "long": "510"
                          }
                        },
                        canvas: {
                          src: 'assets/img/maps/map.svg',
                          width: 1170,
                          height: 594
                        }
                      };

                      $.HSCore.components.HSPinMap.init('.js-pin-map', {
                        data: {
                          "map-pin": markers1
                        }
                      });
                    });
                  </script>
                                </div>
                            </div>



                            <!-- Show Code -->
                            <div class="g-font-size-12 g-my-30 ">
                                <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                    href="#!" data-content-target="#shortcode1" data-modal-target="#modalMarkup"
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
                    </div>
                </div>
            </div>
        </section>

        <!-- Call To Action -->
        <section class="g-bg-primary g-color-white g-pa-30" style="background-image: url(assets/img/bg/pattern5.png);">
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
    <script src="assets/vendor/jquery.easypin.custom/dist/jquery.easypin.js"></script>

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

    <script src="assets/js/components/hs.map.pin.js"></script>

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

            // initialization of pin map
            var markers1 = {
                0: {
                    "image_url": "assets/img-temp/400x270/img1.jpg",
                    "date": "17:48, April 27, 2015",
                    "location": "South Africa",
                    "title": "Proin egestas purus eget1",
                    "coords": {
                        "lat": "149",
                        "long": "168"
                    }
                },
                1: {
                    "image_url": "assets/img-temp/400x270/img2.jpg",
                    "date": "17:48, April 27, 2015",
                    "location": "South Africa",
                    "title": "Proin egestas purus eget2",
                    "coords": {
                        "lat": "179",
                        "long": "205"
                    }
                },
                2: {
                    "image_url": "assets/img-temp/400x270/img3.jpg",
                    "date": "17:48, April 27, 2015",
                    "location": "South Africa",
                    "title": "Proin egestas purus eget3",
                    "coords": {
                        "lat": "241",
                        "long": "373"
                    }
                },
                3: {
                    "image_url": "assets/img-temp/400x270/img4.jpg",
                    "date": "17:48, April 27, 2015",
                    "location": "South Africa",
                    "title": "Proin egestas purus eget4",
                    "coords": {
                        "lat": "543",
                        "long": "244"
                    }
                },
                4: {
                    "image_url": "assets/img-temp/400x270/img5.jpg",
                    "date": "17:48, April 27, 2015",
                    "location": "South Africa",
                    "title": "Proin egestas purus eget5",
                    "coords": {
                        "lat": "601",
                        "long": "268"
                    }
                },
                5: {
                    "image_url": "assets/img-temp/400x270/img6.jpg",
                    "date": "17:48, April 27, 2015",
                    "location": "South Africa",
                    "title": "Proin egestas purus eget6",
                    "coords": {
                        "lat": "636",
                        "long": "260"
                    }
                },
                6: {
                    "image_url": "assets/img-temp/400x270/img7.jpg",
                    "date": "117:48, April 27, 2015",
                    "location": "South Africa",
                    "title": "Proin egestas purus eget7",
                    "coords": {
                        "lat": "614",
                        "long": "118"
                    }
                },
                7: {
                    "image_url": "assets/img-temp/400x270/img8.jpg",
                    "date": "17:48, April 27, 2015",
                    "location": "South Africa",
                    "title": "Proin egestas purus eget8",
                    "coords": {
                        "lat": "701",
                        "long": "70.125"
                    }
                },
                8: {
                    "image_url": "assets/img-temp/400x270/img17.jpg",
                    "date": "17:48, April 27, 2015",
                    "location": "South Africa",
                    "title": "Proin egestas purus eget9",
                    "coords": {
                        "lat": "950",
                        "long": "177"
                    }
                },
                9: {
                    "image_url": "assets/img-temp/400x270/img15.jpg",
                    "date": "17:48, April 27, 2015",
                    "location": "South Africa",
                    "title": "Proin egestas purus eget10",
                    "coords": {
                        "lat": "1079",
                        "long": "463"
                    }
                },
                10: {
                    "image_url": "assets/img-temp/400x270/img7.jpg",
                    "date": "17:48, April 27, 2015",
                    "location": "South Africa",
                    "title": "Proin egestas purus eget 11",
                    "coords": {
                        "lat": "717",
                        "long": "455"
                    }
                },
                11: {
                    "image_url": "assets/img-temp/400x270/img5.jpg",
                    "date": "17:48, April 27, 2015",
                    "location": "South Africa",
                    "title": "Proin egestas purus eget 12",
                    "coords": {
                        "lat": "625",
                        "long": "510"
                    }
                },
                canvas: {
                    src: 'assets/img/maps/map.svg',
                    width: 1170,
                    height: 594
                }
            };

            $.HSCore.components.HSPinMap.init('.js-pin-map', {
                data: {
                    "map-pin": markers1
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
