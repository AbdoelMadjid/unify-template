<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>Vector Maps | Unify - Responsive Website Template</title>

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
    <link rel="stylesheet" href="assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css">

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
                <h1 class="g-font-weight-300 g-letter-spacing-1 g-mb-15">Vector Maps</h1>

                <div class="lead g-font-weight-400 g-line-height-2 g-letter-spacing-0_5">
                    <p class="mb-0">Base Components are usually small helper components to build Block Components.
                        <br>These Components can be easily used and customized in any blocks.
                    </p>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <section class="g-py-100">
            <div class="container">
                <!-- GDP by Country Visualization -->
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="h4 g-font-weight-300 g-mb-30">GDP by Country Visualization</h3>
                    </div>

                    <div class="col-md-9">
                        <div id="shortcode1">
                            <div class="shortcode-html">
                                <ul class="u-list-inline" role="tablist">
                                    <li class="d-sm-inline-block d-block">
                                        <a href="#!" id="australia" class="btn btn-md u-btn-darkgray g-mb-15">Focus
                                            on Australia</a>
                                    </li>
                                    <li class="d-sm-inline-block d-block">
                                        <a href="#!" id="australiaAndJapan"
                                            class="btn btn-md u-btn-darkgray g-mb-15">Focus on Australia and Japan</a>
                                    </li>
                                    <li class="d-sm-inline-block d-block">
                                        <a href="#!" id="initialState"
                                            class="btn btn-md u-btn-darkgray g-mb-15">Return to the initial state</a>
                                    </li>
                                </ul>

                                <div class="embed-responsive embed-responsive-21by9">
                                    <div id="vmap" class="g-pos-abs g-top-0 g-left-0 w-100 h-100"></div>
                                </div>
                            </div>

                            <div class="shortcode-styles">
                                <!-- CSS Implementing Plugins -->
                                <link type="text/plain" rel="stylesheet"
                                    href="assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css">
                            </div>

                            <div class="shortcode-scripts">
                                <!-- JS Implementing Plugins -->
                                <script type="text/plain" src="assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
                                <script type="text/plain" src="assets/vendor/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>

                                <!-- JS Unify -->
                                <script type="text/plain" src="assets/js/components/hs.map.svg.js"></script>

                                <!-- JS Plugins Init. -->
                                <script type="text/plain">
                  $(document).on('ready', function () {
                    var countriesBgColors1 = {
                      "AF": 16.63,
                      "AL": 11.58,
                      "DZ": 158.97,
                      "AO": 85.81,
                      "AG": 1.1,
                      "AR": 351.02,
                      "AM": 8.83,
                      "AU": 1219.72,
                      "AT": 366.26,
                      "AZ": 52.17,
                      "BS": 7.54,
                      "BH": 21.73,
                      "BD": 105.4,
                      "BB": 3.96,
                      "BY": 52.89,
                      "BE": 461.33,
                      "BZ": 1.43,
                      "BJ": 6.49,
                      "BT": 1.4,
                      "BO": 19.18,
                      "BA": 16.2,
                      "BW": 12.5,
                      "BR": 2023.53,
                      "BN": 11.96,
                      "BG": 44.84,
                      "BF": 8.67,
                      "BI": 1.47,
                      "KH": 11.36,
                      "CM": 21.88,
                      "CA": 1563.66,
                      "CV": 1.57,
                      "CF": 2.11,
                      "TD": 7.59,
                      "CL": 199.18,
                      "CN": 5745.13,
                      "CO": 283.11,
                      "KM": 0.56,
                      "CD": 12.6,
                      "CG": 11.88,
                      "CR": 35.02,
                      "CI": 22.38,
                      "HR": 59.92,
                      "CY": 22.75,
                      "CZ": 195.23,
                      "DK": 304.56,
                      "DJ": 1.14,
                      "DM": 0.38,
                      "DO": 50.87,
                      "EC": 61.49,
                      "EG": 216.83,
                      "SV": 21.8,
                      "GQ": 14.55,
                      "ER": 2.25,
                      "EE": 19.22,
                      "ET": 30.94,
                      "FJ": 3.15,
                      "FI": 231.98,
                      "FR": 2555.44,
                      "GA": 12.56,
                      "GM": 1.04,
                      "GE": 11.23,
                      "DE": 3305.9,
                      "GH": 18.06,
                      "GR": 305.01,
                      "GD": 0.65,
                      "GT": 40.77,
                      "GN": 4.34,
                      "GW": 0.83,
                      "GY": 2.2,
                      "HT": 6.5,
                      "HN": 15.34,
                      "HK": 226.49,
                      "HU": 132.28,
                      "IS": 12.77,
                      "IN": 1430.02,
                      "ID": 695.06,
                      "IR": 337.9,
                      "IQ": 84.14,
                      "IE": 204.14,
                      "IL": 201.25,
                      "IT": 2036.69,
                      "JM": 13.74,
                      "JP": 5390.9,
                      "JO": 27.13,
                      "KZ": 129.76,
                      "KE": 32.42,
                      "KI": 0.15,
                      "KR": 986.26,
                      "KW": 117.32,
                      "KG": 4.44,
                      "LA": 6.34,
                      "LV": 23.39,
                      "LB": 39.15,
                      "LS": 1.8,
                      "LR": 0.98,
                      "LY": 77.91,
                      "LT": 35.73,
                      "LU": 52.43,
                      "MK": 9.58,
                      "MG": 8.33,
                      "MW": 5.04,
                      "MY": 218.95,
                      "MV": 1.43,
                      "ML": 9.08,
                      "MT": 7.8,
                      "MR": 3.49,
                      "MU": 9.43,
                      "MX": 1004.04,
                      "MD": 5.36,
                      "MN": 5.81,
                      "ME": 3.88,
                      "MA": 91.7,
                      "MZ": 10.21,
                      "MM": 35.65,
                      "NA": 11.45,
                      "NP": 15.11,
                      "NL": 770.31,
                      "NZ": 138,
                      "NI": 6.38,
                      "NE": 5.6,
                      "NG": 206.66,
                      "NO": 413.51,
                      "OM": 53.78,
                      "PK": 174.79,
                      "PA": 27.2,
                      "PG": 8.81,
                      "PY": 17.17,
                      "PE": 153.55,
                      "PH": 189.06,
                      "PL": 438.88,
                      "PT": 223.7,
                      "QA": 126.52,
                      "RO": 158.39,
                      "RU": 1476.91,
                      "RW": 5.69,
                      "WS": 0.55,
                      "ST": 0.19,
                      "SA": 434.44,
                      "SN": 12.66,
                      "RS": 38.92,
                      "SC": 0.92,
                      "SL": 1.9,
                      "SG": 217.38,
                      "SK": 86.26,
                      "SI": 46.44,
                      "SB": 0.67,
                      "ZA": 354.41,
                      "ES": 1374.78,
                      "LK": 48.24,
                      "KN": 0.56,
                      "LC": 1,
                      "VC": 0.58,
                      "SD": 65.93,
                      "SR": 3.3,
                      "SZ": 3.17,
                      "SE": 444.59,
                      "CH": 522.44,
                      "SY": 59.63,
                      "TW": 426.98,
                      "TJ": 5.58,
                      "TZ": 22.43,
                      "TH": 312.61,
                      "TL": 0.62,
                      "TG": 3.07,
                      "TO": 0.3,
                      "TT": 21.2,
                      "TN": 43.86,
                      "TR": 729.05,
                      "TM": 0,
                      "UG": 17.12,
                      "UA": 136.56,
                      "AE": 239.65,
                      "GB": 2258.57,
                      "US": 14624.18,
                      "UY": 40.71,
                      "UZ": 37.72,
                      "VU": 0.72,
                      "VE": 285.21,
                      "VN": 101.99,
                      "YE": 30.02,
                      "ZM": 15.69,
                      "ZW": 5.57
                    };

                    // initialization of SVG map
                    $.HSCore.components.HSSvgMap.init('#vmap', {
                      series: {
                        regions: [{
                          scale: ['#C8EEFF', '#0071A4'],
                          normalizeFunction: 'polynomial',
                          values: countriesBgColors1
                        }]
                      }
                    });

                    // custom functions
                    var mapObj = $('#vmap').vectorMap('get', 'mapObject');

                    $('#australia').on('click', function (e) {
                      e.preventDefault();
                      mapObj.setFocus({
                        region: 'AU'
                      });
                    });

                    $('#australiaAndJapan').on('click', function (e) {
                      e.preventDefault();
                      mapObj.setFocus({
                        regions: ['AU', 'JP']
                      });
                    });

                    $('#initialState').on('click', function (e) {
                      e.preventDefault();
                      mapObj.setFocus({
                        x: 0.5,
                        y: 0.5,
                        scale: 1
                      });
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
                <!-- End GDP by Country Visualization -->

                <hr class="g-brd-gray-light-v4 g-my-60">

                <!-- Markers on the World Map -->
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="h4 g-font-weight-300 g-mb-30">Markers on the World Map</h3>
                    </div>

                    <div class="col-md-9">
                        <div id="shortcode2">
                            <div class="shortcode-html">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <div id="vmapMarkers" class="g-pos-abs g-top-0 g-left-0 w-100 h-100"></div>
                                </div>
                            </div>

                            <div class="shortcode-styles">
                                <!-- CSS Implementing Plugins -->
                                <link type="text/plain" rel="stylesheet"
                                    href="assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css">
                            </div>

                            <div class="shortcode-scripts">
                                <!-- JS Implementing Plugins -->
                                <script type="text/plain" src="assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
                                <script type="text/plain" src="assets/vendor/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>

                                <!-- JS Unify -->
                                <script type="text/plain" src="assets/js/components/hs.map.svg.js"></script>

                                <!-- JS Plugins Init. -->
                                <script type="text/plain">
                  $(document).on('ready', function () {
                    var markers2 = [{
                      latLng: [41.90, 12.45],
                      name: 'Vatican City'
                    }, {
                      latLng: [43.73, 7.41],
                      name: 'Monaco'
                    }, {
                      latLng: [-0.52, 166.93],
                      name: 'Nauru'
                    }, {
                      latLng: [-8.51, 179.21],
                      name: 'Tuvalu'
                    }, {
                      latLng: [43.93, 12.46],
                      name: 'San Marino'
                    }, {
                      latLng: [47.14, 9.52],
                      name: 'Liechtenstein'
                    }, {
                      latLng: [7.11, 171.06],
                      name: 'Marshall Islands'
                    }, {
                      latLng: [17.3, -62.73],
                      name: 'Saint Kitts and Nevis'
                    }, {
                      latLng: [3.2, 73.22],
                      name: 'Maldives'
                    }, {
                      latLng: [35.88, 14.5],
                      name: 'Malta'
                    }, {
                      latLng: [12.05, -61.75],
                      name: 'Grenada'
                    }, {
                      latLng: [13.16, -61.23],
                      name: 'Saint Vincent and the Grenadines'
                    }, {
                      latLng: [13.16, -59.55],
                      name: 'Barbados'
                    }, {
                      latLng: [17.11, -61.85],
                      name: 'Antigua and Barbuda'
                    }, {
                      latLng: [-4.61, 55.45],
                      name: 'Seychelles'
                    }, {
                      latLng: [7.35, 134.46],
                      name: 'Palau'
                    }, {
                      latLng: [42.5, 1.51],
                      name: 'Andorra'
                    }, {
                      latLng: [14.01, -60.98],
                      name: 'Saint Lucia'
                    }, {
                      latLng: [6.91, 158.18],
                      name: 'Federated States of Micronesia'
                    }, {
                      latLng: [1.3, 103.8],
                      name: 'Singapore'
                    }, {
                      latLng: [1.46, 173.03],
                      name: 'Kiribati'
                    }, {
                      latLng: [-21.13, -175.2],
                      name: 'Tonga'
                    }, {
                      latLng: [15.3, -61.38],
                      name: 'Dominica'
                    }, {
                      latLng: [-20.2, 57.5],
                      name: 'Mauritius'
                    }, {
                      latLng: [26.02, 50.55],
                      name: 'Bahrain'
                    }, {
                      latLng: [0.33, 6.73],
                      name: 'São Tomé and Príncipe'
                    }];

                    // initialization of SVG map
                    $.HSCore.components.HSSvgMap.init('#vmapMarkers', {
                      scaleColors: ['#C8EEFF', '#0071A4'],
                      markerStyle: {
                        initial: {
                          fill: '#F8E23B',
                          stroke: '#383f47'
                        }
                      },
                      backgroundColor: '#383f47',
                      markers: markers2
                    });
                  });
                </script>
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
                <!-- End Markers on the World Map -->
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
    <script src="assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="assets/vendor/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>

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
    <script src="assets/js/components/hs.map.svg.js"></script>
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

            // initialization of SVG map
            var countriesBgColors1 = {
                    "AF": 16.63,
                    "AL": 11.58,
                    "DZ": 158.97,
                    "AO": 85.81,
                    "AG": 1.1,
                    "AR": 351.02,
                    "AM": 8.83,
                    "AU": 1219.72,
                    "AT": 366.26,
                    "AZ": 52.17,
                    "BS": 7.54,
                    "BH": 21.73,
                    "BD": 105.4,
                    "BB": 3.96,
                    "BY": 52.89,
                    "BE": 461.33,
                    "BZ": 1.43,
                    "BJ": 6.49,
                    "BT": 1.4,
                    "BO": 19.18,
                    "BA": 16.2,
                    "BW": 12.5,
                    "BR": 2023.53,
                    "BN": 11.96,
                    "BG": 44.84,
                    "BF": 8.67,
                    "BI": 1.47,
                    "KH": 11.36,
                    "CM": 21.88,
                    "CA": 1563.66,
                    "CV": 1.57,
                    "CF": 2.11,
                    "TD": 7.59,
                    "CL": 199.18,
                    "CN": 5745.13,
                    "CO": 283.11,
                    "KM": 0.56,
                    "CD": 12.6,
                    "CG": 11.88,
                    "CR": 35.02,
                    "CI": 22.38,
                    "HR": 59.92,
                    "CY": 22.75,
                    "CZ": 195.23,
                    "DK": 304.56,
                    "DJ": 1.14,
                    "DM": 0.38,
                    "DO": 50.87,
                    "EC": 61.49,
                    "EG": 216.83,
                    "SV": 21.8,
                    "GQ": 14.55,
                    "ER": 2.25,
                    "EE": 19.22,
                    "ET": 30.94,
                    "FJ": 3.15,
                    "FI": 231.98,
                    "FR": 2555.44,
                    "GA": 12.56,
                    "GM": 1.04,
                    "GE": 11.23,
                    "DE": 3305.9,
                    "GH": 18.06,
                    "GR": 305.01,
                    "GD": 0.65,
                    "GT": 40.77,
                    "GN": 4.34,
                    "GW": 0.83,
                    "GY": 2.2,
                    "HT": 6.5,
                    "HN": 15.34,
                    "HK": 226.49,
                    "HU": 132.28,
                    "IS": 12.77,
                    "IN": 1430.02,
                    "ID": 695.06,
                    "IR": 337.9,
                    "IQ": 84.14,
                    "IE": 204.14,
                    "IL": 201.25,
                    "IT": 2036.69,
                    "JM": 13.74,
                    "JP": 5390.9,
                    "JO": 27.13,
                    "KZ": 129.76,
                    "KE": 32.42,
                    "KI": 0.15,
                    "KR": 986.26,
                    "KW": 117.32,
                    "KG": 4.44,
                    "LA": 6.34,
                    "LV": 23.39,
                    "LB": 39.15,
                    "LS": 1.8,
                    "LR": 0.98,
                    "LY": 77.91,
                    "LT": 35.73,
                    "LU": 52.43,
                    "MK": 9.58,
                    "MG": 8.33,
                    "MW": 5.04,
                    "MY": 218.95,
                    "MV": 1.43,
                    "ML": 9.08,
                    "MT": 7.8,
                    "MR": 3.49,
                    "MU": 9.43,
                    "MX": 1004.04,
                    "MD": 5.36,
                    "MN": 5.81,
                    "ME": 3.88,
                    "MA": 91.7,
                    "MZ": 10.21,
                    "MM": 35.65,
                    "NA": 11.45,
                    "NP": 15.11,
                    "NL": 770.31,
                    "NZ": 138,
                    "NI": 6.38,
                    "NE": 5.6,
                    "NG": 206.66,
                    "NO": 413.51,
                    "OM": 53.78,
                    "PK": 174.79,
                    "PA": 27.2,
                    "PG": 8.81,
                    "PY": 17.17,
                    "PE": 153.55,
                    "PH": 189.06,
                    "PL": 438.88,
                    "PT": 223.7,
                    "QA": 126.52,
                    "RO": 158.39,
                    "RU": 1476.91,
                    "RW": 5.69,
                    "WS": 0.55,
                    "ST": 0.19,
                    "SA": 434.44,
                    "SN": 12.66,
                    "RS": 38.92,
                    "SC": 0.92,
                    "SL": 1.9,
                    "SG": 217.38,
                    "SK": 86.26,
                    "SI": 46.44,
                    "SB": 0.67,
                    "ZA": 354.41,
                    "ES": 1374.78,
                    "LK": 48.24,
                    "KN": 0.56,
                    "LC": 1,
                    "VC": 0.58,
                    "SD": 65.93,
                    "SR": 3.3,
                    "SZ": 3.17,
                    "SE": 444.59,
                    "CH": 522.44,
                    "SY": 59.63,
                    "TW": 426.98,
                    "TJ": 5.58,
                    "TZ": 22.43,
                    "TH": 312.61,
                    "TL": 0.62,
                    "TG": 3.07,
                    "TO": 0.3,
                    "TT": 21.2,
                    "TN": 43.86,
                    "TR": 729.05,
                    "TM": 0,
                    "UG": 17.12,
                    "UA": 136.56,
                    "AE": 239.65,
                    "GB": 2258.57,
                    "US": 14624.18,
                    "UY": 40.71,
                    "UZ": 37.72,
                    "VU": 0.72,
                    "VE": 285.21,
                    "VN": 101.99,
                    "YE": 30.02,
                    "ZM": 15.69,
                    "ZW": 5.57
                },

                markers2 = [{
                    latLng: [41.90, 12.45],
                    name: 'Vatican City'
                }, {
                    latLng: [43.73, 7.41],
                    name: 'Monaco'
                }, {
                    latLng: [-0.52, 166.93],
                    name: 'Nauru'
                }, {
                    latLng: [-8.51, 179.21],
                    name: 'Tuvalu'
                }, {
                    latLng: [43.93, 12.46],
                    name: 'San Marino'
                }, {
                    latLng: [47.14, 9.52],
                    name: 'Liechtenstein'
                }, {
                    latLng: [7.11, 171.06],
                    name: 'Marshall Islands'
                }, {
                    latLng: [17.3, -62.73],
                    name: 'Saint Kitts and Nevis'
                }, {
                    latLng: [3.2, 73.22],
                    name: 'Maldives'
                }, {
                    latLng: [35.88, 14.5],
                    name: 'Malta'
                }, {
                    latLng: [12.05, -61.75],
                    name: 'Grenada'
                }, {
                    latLng: [13.16, -61.23],
                    name: 'Saint Vincent and the Grenadines'
                }, {
                    latLng: [13.16, -59.55],
                    name: 'Barbados'
                }, {
                    latLng: [17.11, -61.85],
                    name: 'Antigua and Barbuda'
                }, {
                    latLng: [-4.61, 55.45],
                    name: 'Seychelles'
                }, {
                    latLng: [7.35, 134.46],
                    name: 'Palau'
                }, {
                    latLng: [42.5, 1.51],
                    name: 'Andorra'
                }, {
                    latLng: [14.01, -60.98],
                    name: 'Saint Lucia'
                }, {
                    latLng: [6.91, 158.18],
                    name: 'Federated States of Micronesia'
                }, {
                    latLng: [1.3, 103.8],
                    name: 'Singapore'
                }, {
                    latLng: [1.46, 173.03],
                    name: 'Kiribati'
                }, {
                    latLng: [-21.13, -175.2],
                    name: 'Tonga'
                }, {
                    latLng: [15.3, -61.38],
                    name: 'Dominica'
                }, {
                    latLng: [-20.2, 57.5],
                    name: 'Mauritius'
                }, {
                    latLng: [26.02, 50.55],
                    name: 'Bahrain'
                }, {
                    latLng: [0.33, 6.73],
                    name: 'São Tomé and Príncipe'
                }];

            $.HSCore.components.HSSvgMap.init('#vmap', {
                series: {
                    regions: [{
                        scale: ['#C8EEFF', '#0071A4'],
                        normalizeFunction: 'polynomial',
                        values: countriesBgColors1
                    }]
                }
            });

            $.HSCore.components.HSSvgMap.init('#vmapMarkers', {
                scaleColors: ['#C8EEFF', '#0071A4'],
                markerStyle: {
                    initial: {
                        fill: '#F8E23B',
                        stroke: '#383f47'
                    }
                },
                backgroundColor: '#383f47',
                markers: markers2
            });

            // custom functions
            var mapObj = $('#vmap').vectorMap('get', 'mapObject');

            $('#australia').on('click', function(e) {
                e.preventDefault();
                mapObj.setFocus({
                    region: 'AU'
                });
            });

            $('#australiaAndJapan').on('click', function(e) {
                e.preventDefault();
                mapObj.setFocus({
                    regions: ['AU', 'JP']
                });
            });

            $('#initialState').on('click', function(e) {
                e.preventDefault();
                mapObj.setFocus({
                    x: 0.5,
                    y: 0.5,
                    scale: 1
                });
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
