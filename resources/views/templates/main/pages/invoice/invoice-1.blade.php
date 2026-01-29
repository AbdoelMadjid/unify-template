<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>Invoice Page | | Unify - Responsive Website Template</title>

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

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="assets/css/unify-core.css">
    <link rel="stylesheet" href="assets/css/unify-components.css">
    <link rel="stylesheet" href="assets/css/unify-globals.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Page Style -->
    <style type="text/css">
        @media print {
            * {
                -webkit-print-color-adjust: exact;
            }

            .u-header,
            .footer,
            footer,
            .breadcrumbs,
            .btn {
                display: none;
            }

            .row>[class*="col-"] {
                float: left;
            }

            .col-md-3,
            .col-md-6 {
                width: 33%;
            }

            .col-lg-2 {
                width: 24%;
            }

            .g-bg-primary {
                color: #000 !important;
            }

            .g-font-size-default {
                font-size: 11px !important;
            }

            .h4,
            .h5 {
                font-size: 14px !important;
            }

            .g-pa-15 {
                padding: 10px !important;
            }

            .py-4 {
                padding-top: 10px !important;
                padding-bottom: 10px !important;
            }

            .g-py-15 {
                padding-top: 5px !important;
                padding-bottom: 5px !important;
            }

            .g-pt-100 {
                padding-top: 30px !important;
            }

            .g-pb-30 {
                padding-bottom: 0 !important;
            }

            .g-mb-30,
            .g-mb-40 {
                margin-bottom: 20px !important;
            }

            .my-2 {
                margin-top: 0;
                margin-bottom: 0;
            }

            table tr th {
                font-size: 13px !important;
            }
        }
    </style>
</head>

<body>
    <main>



        <!-- Header -->
        @include('layouts.main.header')
        <!-- End Header -->

        <!-- Breadcrumbs -->
        <section class="breadcrumbs g-bg-gray-light-v5 g-py-50">
            <div class="container">
                <div class="d-sm-flex text-center">
                    <div class="align-self-center">
                        <h2 class="h3 g-font-weight-300 w-100 g-mb-10 g-mb-0--md">Invoice</h2>
                    </div>

                    <div class="align-self-center ml-auto">
                        <ul class="u-list-inline">
                            <li class="list-inline-item g-mr-5">
                                <a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Home</a>
                                <i class="g-color-gray-light-v2 g-ml-5">/</i>
                            </li>
                            <li class="list-inline-item g-mr-5">
                                <a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Pages</a>
                                <i class="g-color-gray-light-v2 g-ml-5">/</i>
                            </li>
                            <li class="list-inline-item g-color-primary">
                                <span>Invoice</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- General Info -->
        <section class="container g-pt-100 g-pb-30">
            <div class="row">
                <div class="col-md-6 g-mb-30">
                    <h1 class="g-font-weight-600 text-uppercase g-font-size-13">Invoice to:</h1>
                    <h2 class="h4 g-font-weight-700 text-uppercase">Pixeel Ltd.</h2>
                    <p class="g-color-gray-dark-v4">Unit 25 Suite 3, 925 Prospect PI
                        <br>London
                        <br>United Kingdom
                    </p>
                </div>

                <div class="col-md-3 g-mb-30">
                    <h3 class="h5 g-color-black g-font-weight-600 text-uppercase">Client Info:</h3>
                    <ul class="list-unstyled g-font-size-default">
                        <li><span class="g-font-weight-700">First name:</span> Alexandar</li>
                        <li><span class="g-font-weight-700">Last name:</span> Joshua</li>
                        <li><span class="g-font-weight-700">Country:</span> United States</li>
                        <li><span class="g-font-weight-700">DOB:</span> 05/07/1989</li>
                    </ul>
                </div>

                <div class="col-md-3 g-mb-30">
                    <h3 class="h5 g-color-black g-font-weight-600 text-uppercase">Payment Details:</h3>
                    <ul class="list-unstyled g-font-size-default">
                        <li><span class="g-font-weight-700">Bank name:</span> Payoneer</li>
                        <li><span class="g-font-weight-700">Account number:</span> 32562941093</li>
                        <li><span class="g-font-weight-700">SWIFT code:</span> PGA2107</li>
                        <li><span class="g-font-weight-700">V.A.T Reg:</span> 77BHM399100</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End General Info -->

        <!-- Invoice Info -->
        <section class="container g-mb-40">
            <div class="row justify-content-end no-gutters">
                <div class="col-sm-4 col-md-3 col-lg-2 mb-1">
                    <div class="g-bg-gray-light-v5 text-center g-pa-15">
                        <h3 class="h6 g-color-black g-font-weight-600 text-uppercase"># Invoice No</h3>
                        <p class="g-font-size-13 mb-0">236290482</p>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 col-lg-2 mb-1">
                    <div class="g-bg-gray-light-v5 text-center g-pa-15">
                        <h3 class="h6 g-color-black g-font-weight-600 text-uppercase"># Invoice Date</h3>
                        <p class="g-font-size-13 mb-0">27 May 2017</p>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 col-lg-2 mb-1">
                    <div class="g-bg-gray-light-v5 text-center g-pa-15">
                        <h3 class="h6 g-color-black g-font-weight-600 text-uppercase"># Invoice Account</h3>
                        <p class="g-font-size-13 mb-0">32562941093</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Invoice Info -->

        <!-- Table Striped Rows -->
        <section class="container g-pb-70">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="g-color-white g-bg-primary text-center text-uppercase">
                        <tr>
                            <th class="g-brd-top-none g-font-weight-500 g-py-15">Ref</th>
                            <th class="g-brd-top-none g-font-weight-500 text-left g-py-15">Item description</th>
                            <th class="g-brd-top-none g-font-weight-500 g-py-15">Quantity</th>
                            <th class="g-brd-top-none g-font-weight-500 g-py-15">Unit price</th>
                            <th class="g-brd-top-none g-font-weight-500 g-py-15">Total</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        <tr>
                            <td class="g-width-70 g-color-gray-dark-v4 g-font-weight-600 g-py-15">01</td>
                            <td class="g-max-width-300 text-left g-py-15">
                                <h4 class="g-color-gray-dark-v4 g-font-weight-700 g-font-size-16">External storage
                                </h4>
                                <p class="g-color-gray-dark-v5 g-font-size-12 mb-0">Whether through commerce or just
                                    an experience to tell your brand's story.</p>
                            </td>
                            <td class="g-color-gray-dark-v4 g-font-weight-600 g-py-15">2</td>
                            <td class="g-color-gray-dark-v4 g-font-weight-600 g-py-15">$379.00</td>
                            <td class="g-color-gray-dark-v4 g-font-weight-600 g-py-15">$758.00</td>
                        </tr>
                        <tr>
                            <td class="g-width-70 g-color-gray-dark-v4 g-font-weight-600 g-py-15">02</td>
                            <td class="g-max-width-300 text-left g-py-15">
                                <h4 class="g-color-gray-dark-v4 g-font-weight-700 g-font-size-16">Samsung Notebook 9
                                </h4>
                                <p class="g-color-gray-dark-v5 g-font-size-12 mb-0">Whether through commerce or just
                                    an experience to tell your brand's story.</p>
                            </td>
                            <td class="g-color-gray-dark-v4 g-font-weight-600 g-py-15">4</td>
                            <td class="g-color-gray-dark-v4 g-font-weight-600 g-py-15">$643.00</td>
                            <td class="g-color-gray-dark-v4 g-font-weight-600 g-py-15">$2,572.00</td>
                        </tr>
                        <tr>
                            <td class="g-width-70 g-color-gray-dark-v4 g-font-weight-600 g-py-15">03</td>
                            <td class="g-max-width-300 text-left g-py-15">
                                <h4 class="g-color-gray-dark-v4 g-font-weight-700 g-font-size-16">Logitech Mouse</h4>
                                <p class="g-color-gray-dark-v5 g-font-size-12 mb-0">Whether through commerce or just
                                    an experience to tell your brand's story.</p>
                            </td>
                            <td class="g-color-gray-dark-v4 g-font-weight-600 g-py-15">7</td>
                            <td class="g-color-gray-dark-v4 g-font-weight-600 g-py-15">$105.00</td>
                            <td class="g-color-gray-dark-v4 g-font-weight-600 g-py-15">$735.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Subtotal -->
            <div class="g-bg-gray-light-v5 mb-2">
                <div class="row justify-content-end">
                    <div class="col-lg-5">
                        <ul class="list-unstyled g-font-weight-600 text-uppercase py-4 g-pr-50 mb-0">
                            <li class="text-right my-1">
                                <h4 class="d-inline-block h6 text-left g-font-weight-600 g-min-width-110 mb-0">
                                    Subtotal</h4>
                                <span class="text-left mx-5">:</span>
                                <span class="d-inline-block g-min-width-65">$4,077</span>
                            </li>
                            <li class="text-right my-1">
                                <h4 class="d-inline-block h6 text-left g-font-weight-600 g-min-width-110 mb-0">VAT 5%
                                </h4>
                                <span class="text-left mx-5">:</span>
                                <span class="d-inline-block g-min-width-65">$25</span>
                            </li>
                            <li class="text-right my-1">
                                <h4 class="d-inline-block h6 text-left g-font-weight-600 g-min-width-110 mb-0">
                                    Discount 15%</h4>
                                <span class="text-left mx-5">:</span>
                                <span class="d-inline-block g-min-width-65 g-color-red">$611.55</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Subtotal -->

            <!-- Total -->
            <div class="row justify-content-between">
                <div class="col-md-4 align-self-center g-hidden-sm-down g-mb-30">
                    <ul class="list-unstyled mb-0">
                        <li class="my-1"><span class="g-font-weight-600">Address:</span> 25, Prospect 55,
                            <br>Orange California, United States
                        </li>
                        <li class="my-1"><span class="g-font-weight-600">Email:</span> htmlstream@support.com</li>
                        <li class="my-1"><span class="g-font-weight-600">Phone:</span> 800 123 3456</li>
                        <li class="my-1"><span class="g-font-weight-600">Fax:</span> 800 123 3457</li>
                    </ul>
                </div>

                <div class="col-md-7 col-lg-4 align-self-center g-mb-30">
                    <div
                        class="g-bg-gray-light-v5 g-color-black g-font-weight-600 text-right text-uppercase py-4 g-pr-50 mb-3">
                        <h4 class="d-inline-block h6 text-left g-font-weight-600 g-min-width-110 mb-0">Grand Total
                        </h4>
                        <span class="text-left mx-5">:</span>
                        <span class="d-inline-block g-min-width-65">$3,465.45</span>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-md u-btn-darkgray g-font-size-default rounded-0 g-py-10 mr-2"
                            type="button" onclick="javascript:window.print();">
                            <i class="g-pos-rel g-top-1 mr-2 icon-education-082 u-line-icon-pro"></i>
                            Print
                        </button>
                        <button class="btn btn-md u-btn-primary g-font-size-default rounded-0 g-py-10"
                            type="button">Submit the Invoice</button>
                    </div>
                </div>
            </div>
            <!-- End Total -->
        </section>
        <!-- End Table Striped Rows -->

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

    <div class="u-outer-spaces-helper"></div>


    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>


    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.tabs.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of tabs
            $.HSCore.components.HSTabs.init('[role="tablist"]');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });

        $(window).on('load', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });
        });

        $(window).on('resize', function() {
            setTimeout(function() {
                $.HSCore.components.HSTabs.init('[role="tablist"]');
            }, 200);
        });
    </script>







</body>

</html>
