<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>Google Maps | Unify - Responsive Website Template</title>

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
                <h1 class="g-font-weight-300 g-letter-spacing-1 g-mb-15">Google Maps</h1>

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
                    <!-- Google Map Roadmap -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300 g-mb-30">Google Map Roadmap</h3>
                        </div>

                        <div class="col-md-9">
                            <div id="shortcode1">
                                <div class="shortcode-html">
                                    <div id="GMapRoadmap" class="js-g-map embed-responsive embed-responsive-21by9"
                                        data-lat="40.748866" data-lng="-73.988366" data-pin="true"></div>
                                </div>

                                <div class="shortcode-scripts">
                                    <!-- JS Implementing Plugins -->
                                    <script type="text/plain" src="assets/vendor/gmaps/gmaps.min.js"></script>

                                    <!-- JS Unify -->
                                    <script type="text/plain" src="assets/js/components/gmap/hs.map.js"></script>

                                    <!-- JS Plugins Init. -->
                                    <script type="text/plain">
                    // initialization of google map
                    function initMap() {
                      $.HSCore.components.HSGMap.init('.js-g-map');
                    }
                  </script>

                                    <script type="text/plain" src="//maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
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
                    <!-- End Google Map Roadmap -->

                    <hr class="g-brd-gray-light-v4 g-my-60">

                    <!-- Google Map Satellite -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300 g-mb-30">Google Map Satellite</h3>
                        </div>
                        <div class="col-md-9">
                            <div id="shortcode2">
                                <div class="shortcode-html">
                                    <div id="GMapSatellite" class="js-g-map embed-responsive embed-responsive-21by9"
                                        data-type="satellite" data-lat="40.748866" data-lng="-73.988366"
                                        data-title="HTMLSTREAM" data-pin="true"></div>
                                </div>

                                <div class="shortcode-scripts">
                                    <!-- JS Implementing Plugins -->
                                    <script type="text/plain" src="assets/vendor/gmaps/gmaps.min.js"></script>

                                    <!-- JS Unify -->
                                    <script type="text/plain" src="assets/js/components/gmap/hs.map.js"></script>

                                    <!-- JS Plugins Init. -->
                                    <script type="text/plain">
                    // initialization of google map
                    function initMap() {
                      $.HSCore.components.HSGMap.init('.js-g-map');
                    }
                  </script>

                                    <script type="text/plain" src="//maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
                                </div>
                            </div>



                            <!-- Show Code -->
                            <div class="g-font-size-12 g-my-30 ">
                                <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                    href="#!" data-content-target="#shortcode2" data-modal-target="#modalMarkup"
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

                        </div>
                    </div>
                    <!-- End Google Map Satellite -->

                    <hr class="g-brd-gray-light-v4 g-my-60">

                    <!-- Google Map Terrain -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300 g-mb-30">Google Map Terrain</h3>
                        </div>
                        <div class="col-md-9">
                            <div id="shortcode3">
                                <div class="shortcode-html">
                                    <div id="GMapTerrain" class="js-g-map embed-responsive embed-responsive-21by9"
                                        data-type="terrain" data-lat="40.748866" data-lng="-73.988366"
                                        data-title="HTMLSTREAM" data-pin="true"></div>
                                </div>

                                <div class="shortcode-scripts">
                                    <!-- JS Implementing Plugins -->
                                    <script type="text/plain" src="assets/vendor/gmaps/gmaps.min.js"></script>

                                    <!-- JS Unify -->
                                    <script type="text/plain" src="assets/js/components/gmap/hs.map.js"></script>

                                    <!-- JS Plugins Init. -->
                                    <script type="text/plain">
                    // initialization of google map
                    function initMap() {
                      $.HSCore.components.HSGMap.init('.js-g-map');
                    }
                  </script>

                                    <script type="text/plain" src="//maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
                                </div>
                            </div>



                            <!-- Show Code -->
                            <div class="g-font-size-12 g-my-30 ">
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
                    </div>
                    <!-- End Google Map Terrain -->

                    <hr class="g-brd-gray-light-v4 g-my-60">

                    <!-- Google Map Street View -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300 g-mb-30">Google Map Street View</h3>
                        </div>
                        <div class="col-md-9">
                            <div id="shortcode4">
                                <div class="shortcode-html">
                                    <div id="GMapStreetView" class="js-g-map embed-responsive embed-responsive-21by9"
                                        data-type="street-view" data-lat="40.748866" data-lng="-73.988366"></div>
                                </div>

                                <div class="shortcode-scripts">
                                    <!-- JS Implementing Plugins -->
                                    <script type="text/plain" src="assets/vendor/gmaps/gmaps.min.js"></script>

                                    <!-- JS Unify -->
                                    <script type="text/plain" src="assets/js/components/gmap/hs.map.js"></script>

                                    <!-- JS Plugins Init. -->
                                    <script type="text/plain">
                    // initialization of google map
                    function initMap() {
                      $.HSCore.components.HSGMap.init('.js-g-map');
                    }
                  </script>

                                    <script type="text/plain" src="//maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
                                </div>
                            </div>



                            <!-- Show Code -->
                            <div class="g-font-size-12 g-my-30 ">
                                <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                    href="#!" data-content-target="#shortcode4" data-modal-target="#modalMarkup"
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

                        </div>
                    </div>
                    <!-- End Google Map Street View -->

                    <hr class="g-brd-gray-light-v4 g-my-60">

                    <!-- Customized GMap: Light -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300 g-mb-30">Customized GMap: Light</h3>
                        </div>
                        <div class="col-md-9">
                            <div id="shortcode5">
                                <div class="shortcode-html">
                                    <div id="GMapCustomized-light"
                                        class="js-g-map embed-responsive embed-responsive-21by9" data-type="custom"
                                        data-lat="40.674" data-lng="-73.946" data-zoom="12" data-title="Agency"
                                        data-styles='[
                           ["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]],
                           ["", "labels", [{"visibility":"on"}]],
                           ["water", "", [{"color":"#bac6cb"}]]
                         ]'
                                        data-pin="true" data-pin-icon="assets/img/icons/pin/green.png"></div>
                                </div>

                                <div class="shortcode-scripts">
                                    <!-- JS Implementing Plugins -->
                                    <script type="text/plain" src="assets/vendor/gmaps/gmaps.min.js"></script>

                                    <!-- JS Unify -->
                                    <script type="text/plain" src="assets/js/components/gmap/hs.map.js"></script>

                                    <!-- JS Plugins Init. -->
                                    <script type="text/plain">
                    // initialization of google map
                    function initMap() {
                      $.HSCore.components.HSGMap.init('.js-g-map');
                    }
                  </script>

                                    <script type="text/plain" src="//maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
                                </div>
                            </div>



                            <!-- Show Code -->
                            <div class="g-font-size-12 g-my-30 ">
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
                    </div>
                    <!-- End Customized GMap: Light -->

                    <hr class="g-brd-gray-light-v4 g-my-60">

                    <!-- Customized GMap: Dark -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300 g-mb-30">Customized GMap: Dark</h3>
                        </div>
                        <div class="col-md-9">
                            <div id="shortcode6">
                                <div class="shortcode-html">
                                    <div id="GMapCustomized-dark"
                                        class="js-g-map embed-responsive embed-responsive-21by9" data-type="custom"
                                        data-lat="40.674" data-lng="-73.946" data-zoom="12" data-title="Event"
                                        data-styles='[
                           ["", "", [{"saturation":-100},{"lightness":50},{"visibility":"simplified"}]],
                           ["", "geometry", [{"color":"#1e303d"}]],
                           ["road", "", [{"color":"#ffffff"},{"lightness":-100}]],
                           ["road", "labels.text.fill", [{"color":"#ffffff"},{"lightness":-50}]],
                           ["water", "", [{"color":"#0e171d"}]]
                         ]'
                                        data-pin="true" data-pin-icon="assets/img/icons/pin/red.png"></div>
                                </div>

                                <div class="shortcode-scripts">
                                    <!-- JS Implementing Plugins -->
                                    <script type="text/plain" src="assets/vendor/gmaps/gmaps.min.js"></script>

                                    <!-- JS Unify -->
                                    <script type="text/plain" src="assets/js/components/gmap/hs.map.js"></script>

                                    <!-- JS Plugins Init. -->
                                    <script type="text/plain">
                    // initialization of google map
                    function initMap() {
                      $.HSCore.components.HSGMap.init('.js-g-map');
                    }
                  </script>

                                    <script type="text/plain" src="//maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
                                </div>
                            </div>



                            <!-- Show Code -->
                            <div class="g-font-size-12 g-my-30 ">
                                <a class="js-modal-markup u-link-v5 g-color-main g-color-primary--hover g-mr-15"
                                    href="#!" data-content-target="#shortcode6" data-modal-target="#modalMarkup"
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

                        </div>
                    </div>
                    <!-- End Customized GMap: Dark -->

                    <hr class="g-brd-gray-light-v4 g-my-60">

                    <!-- Google Map Geolocation -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300 g-mb-30">Google Map Geolocation</h3>
                        </div>
                        <div class="col-md-9">
                            <div id="shortcode7">
                                <div class="shortcode-html">
                                    <div id="GMapGeolocation" class="js-g-map embed-responsive embed-responsive-21by9"
                                        data-lat="40.748866" data-lng="-73.988366" data-zoom="16"
                                        data-geolocation="true" data-title="HTMLSTREAM" data-pin="true"
                                        data-pin-icon="assets/img/icons/pin/green.png"></div>
                                </div>

                                <div class="shortcode-scripts">
                                    <!-- JS Implementing Plugins -->
                                    <script type="text/plain" src="assets/vendor/gmaps/gmaps.min.js"></script>

                                    <!-- JS Unify -->
                                    <script type="text/plain" src="assets/js/components/gmap/hs.map.js"></script>

                                    <!-- JS Plugins Init. -->
                                    <script type="text/plain">
                    // initialization of google map
                    function initMap() {
                      $.HSCore.components.HSGMap.init('.js-g-map');
                    }
                  </script>

                                    <script type="text/plain" src="//maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
                                </div>
                            </div>



                            <!-- Show Code -->
                            <div class="g-font-size-12 g-my-30 ">
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
                    </div>
                    <!-- End Google Map Geolocation -->

                    <hr class="g-brd-gray-light-v4 g-my-60">

                    <!-- Google Map Polygon -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300 g-mb-30">Google Map Polygon</h3>
                        </div>
                        <div class="col-md-9">
                            <div id="shortcode8">
                                <div class="shortcode-html">
                                    <div id="GMapPolygon" class="js-g-map embed-responsive embed-responsive-21by9"
                                        data-lat="-12.043333" data-lng="-77.028333" data-zoom="14"
                                        data-polygon="true"
                                        data-polygon-cords="[
                           [-12.040397656836609,-77.03373871559225],
                           [-12.040248585302038,-77.03993927003302],
                           [-12.050047116528843,-77.02448169303511],
                           [-12.044804866577001,-77.02154422636042]
                         ]"
                                        data-polygon-styles='{"strokeColor":"#BBD8E9","strokeOpacity":1,"strokeWeight":3,"fillColor":"#BBD8E9","fillOpacity":0.6}'
                                        data-pin="true"></div>
                                </div>

                                <div class="shortcode-scripts">
                                    <!-- JS Implementing Plugins -->
                                    <script type="text/plain" src="assets/vendor/gmaps/gmaps.min.js"></script>

                                    <!-- JS Unify -->
                                    <script type="text/plain" src="assets/js/components/gmap/hs.map.js"></script>

                                    <!-- JS Plugins Init. -->
                                    <script type="text/plain">
                    // initialization of google map
                    function initMap() {
                      $.HSCore.components.HSGMap.init('.js-g-map');
                    }
                  </script>

                                    <script type="text/plain" src="//maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
                                </div>
                            </div>



                            <!-- Show Code -->
                            <div class="g-font-size-12 g-my-30 ">
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
                    <!-- End Google Map Polygon -->

                    <hr class="g-brd-gray-light-v4 g-my-60">

                    <!-- Google Map Polylines -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300 g-mb-30">Google Map Polylines</h3>
                        </div>
                        <div class="col-md-9">
                            <div id="shortcode9">
                                <div class="shortcode-html">
                                    <div id="GMapPolylines" class="js-g-map embed-responsive embed-responsive-21by9"
                                        data-lat="-12.043333" data-lng="-77.028333" data-zoom="14"
                                        data-polylines="true"
                                        data-polylines-cords="[
                           [-12.044012922866312, -77.02470665341184],
                           [-12.05449279282314, -77.03024273281858],
                           [-12.055122327623378, -77.03039293652341],
                           [-12.075917129727586, -77.02764635449216],
                           [-12.07635776902266, -77.02792530422971],
                           [-12.076819390363665, -77.02893381481931],
                           [-12.088527520066453, -77.0241058385925],
                           [-12.090814532191756, -77.02271108990476]
                         ]"
                                        data-polylines-styles='{"strokeColor":"#131540","strokeOpacity":0.6,"strokeWeight":6}'
                                        data-pin="true"></div>
                                </div>

                                <div class="shortcode-scripts">
                                    <!-- JS Implementing Plugins -->
                                    <script type="text/plain" src="assets/vendor/gmaps/gmaps.min.js"></script>

                                    <!-- JS Unify -->
                                    <script type="text/plain" src="assets/js/components/gmap/hs.map.js"></script>

                                    <!-- JS Plugins Init. -->
                                    <script type="text/plain">
                    // initialization of google map
                    function initMap() {
                      $.HSCore.components.HSGMap.init('.js-g-map');
                    }
                  </script>

                                    <script type="text/plain" src="//maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
                                </div>
                            </div>



                            <!-- Show Code -->
                            <div class="g-font-size-12 g-my-30 ">
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
                    <!-- End Google Map Polylines -->

                    <hr class="g-brd-gray-light-v4 g-my-60">

                    <!-- Google Map Routes -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300 g-mb-30">Google Map Routes</h3>
                        </div>

                        <div class="col-md-9">
                            <div id="shortcode10">
                                <div class="shortcode-html">
                                    <div id="GMapRoutes" class="js-g-map embed-responsive embed-responsive-21by9"
                                        data-lat="-12.043333" data-lng="-77.028333" data-zoom="14"
                                        data-routes="true"
                                        data-routes-cords="[
                         [-12.044012922866312, -77.02470665341184],
                         [-12.090814532191756, -77.02271108990476]
                       ]"
                                        data-routes-styles='{"travelMode":"driving","strokeColor":"#131540","strokeOpacity":0.6,"strokeWeight":6}'
                                        data-pin="true"></div>
                                </div>

                                <div class="shortcode-scripts">
                                    <!-- JS Implementing Plugins -->
                                    <script type="text/plain" src="assets/vendor/gmaps/gmaps.min.js"></script>

                                    <!-- JS Unify -->
                                    <script type="text/plain" src="assets/js/components/gmap/hs.map.js"></script>

                                    <!-- JS Plugins Init. -->
                                    <script type="text/plain">
                    // initialization of google map
                    function initMap() {
                      $.HSCore.components.HSGMap.init('.js-g-map');
                    }
                  </script>

                                    <script type="text/plain" src="//maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
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
                    <!-- End Google Map Routes -->

                    <hr class="g-brd-gray-light-v4 g-my-60">

                    <!-- Google Map Geocoding -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300 g-mb-30">Google Map Geocoding</h3>
                        </div>

                        <div class="col-md-9">
                            <div id="shortcode11">
                                <div class="shortcode-html">
                                    <form id="GMapGeocodingForm" class="g-mb-30">
                                        <div class="input-group g-brd-primary--focus g-mb-30">
                                            <input id="GMapGeocodingAddress"
                                                class="form-control rounded-0 u-form-control" type="text"
                                                placeholder="Enter address">

                                            <div class="input-group-addon p-0 g-brd-primary">
                                                <button
                                                    class="btn rounded-0 btn-primary btn-md g-font-weight-700 g-font-size-14"
                                                    type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div id="GMapGeocoding" class="js-g-map embed-responsive embed-responsive-21by9"
                                        data-lat="-12.043333" data-lng="-77.028333" data-zoom="14"
                                        data-geocoding="true" data-cords-target="#GMapGeocodingAddress"
                                        data-pin="true" data-pin-icon="assets/img/icons/pin/green.png"></div>
                                </div>

                                <div class="shortcode-scripts">
                                    <!-- JS Implementing Plugins -->
                                    <script type="text/plain" src="assets/vendor/gmaps/gmaps.min.js"></script>

                                    <!-- JS Unify -->
                                    <script type="text/plain" src="assets/js/components/gmap/hs.map.js"></script>

                                    <!-- JS Plugins Init. -->
                                    <script type="text/plain">
                    // initialization of google map
                    function initMap() {
                      $.HSCore.components.HSGMap.init('.js-g-map');
                    }
                  </script>

                                    <script type="text/plain" src="//maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
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
                    <!-- End Google Map Geocoding -->

                    <hr class="g-brd-gray-light-v4 g-my-60">

                    <!-- Google Map Multiple Markers -->
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="h4 g-font-weight-300 g-mb-30">Google Map Multiple Markers</h3>
                        </div>

                        <div class="col-md-9">
                            <div id="shortcode12">
                                <div class="shortcode-html">
                                    <div id="GMapMultipleMarkers"
                                        class="js-g-map embed-responsive embed-responsive-21by9" data-type="terrain"
                                        data-lat="-33.92" data-lng="151.25" data-zoom="10"
                                        data-multiple-markers="true"
                                        data-markers-locations='[
                         ["Bondi Beach", -33.890542, 151.274856, 4],
                         ["Coogee Beach", -33.923036, 151.259052, 5],
                         ["Cronulla Beach", -34.028249, 151.157507, 3],
                         ["Manly Beach", -33.80010128657071, 151.28747820854187, 2],
                         ["Maroubra Beach", -33.950198, 151.259302, 1]
                       ]'>
                                    </div>
                                </div>

                                <div class="shortcode-scripts">
                                    <!-- JS Implementing Plugins -->
                                    <script type="text/plain" src="assets/vendor/gmaps/gmaps.min.js"></script>

                                    <!-- JS Unify -->
                                    <script type="text/plain" src="assets/js/components/gmap/hs.map.js"></script>

                                    <!-- JS Plugins Init. -->
                                    <script type="text/plain">
                    // initialization of google map
                    function initMap() {
                      $.HSCore.components.HSGMap.init('.js-g-map');
                    }
                  </script>

                                    <script type="text/plain" src="//maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>
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
                    <!-- End Google Map Multiple Markers -->
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
    <script src="assets/vendor/gmaps/gmaps.min.js"></script>

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

    <script src="assets/js/components/gmap/hs.map.js"></script>

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
        // initialization of google map
        function initMap() {
            $.HSCore.components.HSGMap.init('.js-g-map');
        }

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

    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&callback=initMap" async
        defer></script>
</body>

</html>
