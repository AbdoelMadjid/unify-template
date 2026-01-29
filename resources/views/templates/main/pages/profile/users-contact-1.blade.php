<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>Unify Profile Users Contacts | | Unify - Responsive Website Template</title>

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
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">

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

        <!-- Breadcrumb -->
        <section class="g-my-30">
            <div class="container">
                <ul class="u-list-inline">
                    <li class="list-inline-item g-mr-7">
                        <a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Home</a>
                        <i class="fa fa-angle-right g-ml-7"></i>
                    </li>
                    <li class="list-inline-item g-mr-7">
                        <a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Pages</a>
                        <i class="fa fa-angle-right g-ml-7"></i>
                    </li>
                    <li class="list-inline-item g-color-primary">
                        <span>Profile Users Contacts</span>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Breadcrumb -->

        <section class="g-mb-100">
            <div class="container">
                <div class="row">
                    <!-- Profile Sidebar -->
                    <div class="col-lg-3 g-mb-50 g-mb-0--lg">
                        <!-- User Image -->
                        <div class="u-block-hover g-pos-rel">
                            <figure>
                                <img class="img-fluid w-100 u-block-hover__main--zoom-v1"
                                    src="assets/img-temp/400x450/img5.jpg" alt="Image Description">
                            </figure>

                            <!-- Figure Caption -->
                            <figcaption class="u-block-hover__additional--fade g-bg-black-opacity-0_5 g-pa-30">
                                <div
                                    class="u-block-hover__additional--fade u-block-hover__additional--fade-up g-flex-middle">
                                    <!-- Figure Social Icons -->
                                    <ul class="list-inline text-center g-flex-middle-item--bottom g-mb-20">
                                        <li class="list-inline-item align-middle g-mx-7">
                                            <a class="u-icon-v1 u-icon-size--md g-color-white" href="#!">
                                                <i class="icon-note u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item align-middle g-mx-7">
                                            <a class="u-icon-v1 u-icon-size--md g-color-white" href="#!">
                                                <i class="icon-notebook u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item align-middle g-mx-7">
                                            <a class="u-icon-v1 u-icon-size--md g-color-white" href="#!">
                                                <i class="icon-settings u-line-icon-pro"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Figure Social Icons -->
                                </div>
                            </figcaption>
                            <!-- End Figure Caption -->

                            <!-- User Info -->
                            <span class="g-pos-abs g-top-20 g-left-0">
                                <a class="btn btn-sm u-btn-primary rounded-0" href="#!">Johne Doe</a>
                                <small class="d-block g-bg-black g-color-white g-pa-5">Project Manager</small>
                            </span>
                            <!-- End User Info -->
                        </div>
                        <!-- User Image -->

                        <!-- Sidebar Navigation -->
                        <div class="list-group list-group-border-0 g-mb-40">
                            <!-- Overall -->
                            <a href="page-profile-main-1.html"
                                class="list-group-item list-group-item-action justify-content-between">
                                <span><i class="icon-home g-pos-rel g-top-1 g-mr-8"></i> Overall</span>
                                <span class="u-label g-font-size-11 g-bg-gray-dark-v2 g-rounded-20 g-px-10">2</span>
                            </a>
                            <!-- End Overall -->

                            <!-- Profile -->
                            <a href="page-profile-profile-1.html"
                                class="list-group-item list-group-item-action justify-content-between">
                                <span><i class="icon-cursor g-pos-rel g-top-1 g-mr-8"></i> Profile</span>
                            </a>
                            <!-- End Profile -->

                            <!-- Users Contacts -->
                            <a href="page-profile-users-1.html"
                                class="list-group-item justify-content-between active">
                                <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i> Users Contacts</span>
                            </a>
                            <!-- End Users Contacts -->

                            <!-- My Projects -->
                            <a href="page-profile-projects-1.html"
                                class="list-group-item list-group-item-action justify-content-between">
                                <span><i class="icon-layers g-pos-rel g-top-1 g-mr-8"></i> My Projects</span>
                                <span class="u-label g-font-size-11 g-bg-primary g-rounded-20 g-px-10">9</span>
                            </a>
                            <!-- End My Projects -->

                            <!-- Comments -->
                            <a href="page-profile-comments-1.html"
                                class="list-group-item list-group-item-action justify-content-between">
                                <span><i class="icon-bubbles g-pos-rel g-top-1 g-mr-8"></i> Comments</span>
                                <span class="u-label g-font-size-11 g-bg-pink g-rounded-20 g-px-8">24</span>
                            </a>
                            <!-- End Comments -->

                            <!-- Reviews -->
                            <a href="page-profile-reviews-1.html"
                                class="list-group-item list-group-item-action justify-content-between">
                                <span><i class="icon-heart g-pos-rel g-top-1 g-mr-8"></i> Reviews</span>
                            </a>
                            <!-- End Reviews -->

                            <!-- History -->
                            <a href="page-profile-history-1.html"
                                class="list-group-item list-group-item-action justify-content-between">
                                <span><i class="icon-fire g-pos-rel g-top-1 g-mr-8"></i> History</span>
                            </a>
                            <!-- End History -->

                            <!-- Settings -->
                            <a href="page-profile-settings-1.html"
                                class="list-group-item list-group-item-action justify-content-between">
                                <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i> Settings</span>
                                <span class="u-label g-font-size-11 g-bg-cyan g-rounded-20 g-px-8">3</span>
                            </a>
                            <!-- End Settings -->
                        </div>
                        <!-- End Sidebar Navigation -->

                        <!-- Project Progress -->
                        <div class="card border-0 rounded-0 g-mb-50">
                            <!-- Panel Header -->
                            <div
                                class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                                <h3 class="h6 mb-0">
                                    <i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Project Progress
                                </h3>
                                <div class="dropdown g-mb-10 g-mb-0--md">
                                    <span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-options-vertical g-pos-rel g-top-1"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
                                        <a class="dropdown-item g-px-10" href="#!">
                                            <i class="icon-layers g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i>
                                            Projects
                                        </a>
                                        <a class="dropdown-item g-px-10" href="#!">
                                            <i class="icon-wallet g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i>
                                            Wallets
                                        </a>
                                        <a class="dropdown-item g-px-10" href="#!">
                                            <i class="icon-fire g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i>
                                            Reports
                                        </a>
                                        <a class="dropdown-item g-px-10" href="#!">
                                            <i class="icon-settings g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i>
                                            Users Setting
                                        </a>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item g-px-10" href="#!">
                                            <i class="icon-plus g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> View
                                            More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Panel Header -->

                            <!-- Panel Body -->
                            <div
                                class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-300 g-pa-0">
                                <!-- Web Design -->
                                <div class="g-mb-20">
                                    <h6 class="g-mb-10">Web Design <span class="float-right g-ml-10">68%</span></h6>
                                    <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                                        <div class="js-hr-progress-bar-indicator progress-bar g-bg-cyan u-progress-bar--xs"
                                            role="progressbar" style="width: 68%;" aria-valuenow="68"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="g-font-size-12">11% more than last week</small>
                                </div>
                                <!-- End Web Design -->

                                <!-- Unify Project -->
                                <div class="g-mb-20">
                                    <h6 class="g-mb-10">Dribbble Shots <span class="float-right g-ml-10">62%</span>
                                    </h6>
                                    <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                                        <div class="js-hr-progress-bar-indicator progress-bar g-bg-pink u-progress-bar--xs"
                                            role="progressbar" style="width: 62%;" aria-valuenow="62"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="g-font-size-12">20% less than last week</small>
                                </div>
                                <!-- End Unify Project -->

                                <!-- Unify Project -->
                                <div class="g-mb-20">
                                    <h6 class="g-mb-10">Unify Project <span class="float-right g-ml-10">93%</span>
                                    </h6>
                                    <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                                        <div class="js-hr-progress-bar-indicator progress-bar g-bg-primary u-progress-bar--xs"
                                            role="progressbar" style="width: 93%;" aria-valuenow="93"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="g-font-size-12">17% more than last week</small>
                                </div>
                                <!-- End Unify Project -->

                                <!-- WordPress Coding -->
                                <div class="g-mb-20">
                                    <h6 class="g-mb-10">WordPress Coding <span
                                            class="float-right g-ml-10">74%</span></h6>
                                    <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                                        <div class="js-hr-progress-bar-indicator progress-bar g-bg-black u-progress-bar--xs"
                                            role="progressbar" style="width: 74%;" aria-valuenow="74"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="g-font-size-12">35% more than last week</small>
                                </div>
                                <!-- End WordPress Coding -->

                                <!-- Pixeel Ltd -->
                                <div class="g-mb-20">
                                    <h6 class="g-mb-10">Pixeel Ltd <span class="float-right g-ml-10">86%</span></h6>
                                    <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                                        <div class="js-hr-progress-bar-indicator progress-bar g-bg-darkpurple u-progress-bar--xs"
                                            role="progressbar" style="width: 86%;" aria-valuenow="86"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="g-font-size-12">42% more than last week</small>
                                </div>
                                <!-- End Pixeel Ltd -->
                            </div>
                            <!-- End Panel Body -->
                        </div>
                        <!-- End Project Progress -->
                    </div>
                    <!-- End Profile Sidebar -->

                    <!-- Profile Content -->
                    <div class="col-lg-9">
                        <!-- User Contacts -->
                        <div class="row g-mb-40">
                            <div class="col-md-4 g-mb-30 g-mb-0--md">
                                <!-- Figure -->
                                <figure
                                    class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
                                    <div class="g-py-40 g-px-20">
                                        <!-- Figure Image -->
                                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20"
                                            src="assets/img-temp/125x125/img1.jpg" alt="Image Description">
                                        <!-- Figure Image -->

                                        <!-- Figure Info -->
                                        <h4 class="h5 g-mb-5">Mikel Andrews</h4>
                                        <div class="d-block">
                                            <span class="g-color-cyan g-font-size-default g-mr-3">
                                                <i class="icon-user"></i>
                                            </span>
                                            <em
                                                class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Employee</em>
                                        </div>
                                        <!-- End Figure Info -->
                                    </div>

                                    <hr class="g-brd-gray-light-v4 g-my-0">

                                    <!-- Figure List -->
                                    <ul class="row list-inline g-py-20 g-ma-0">
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover"
                                                href="#!">
                                                <i class="icon-speech"></i>
                                            </a>
                                        </li>
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover"
                                                href="#!">
                                                <i class="icon-envelope-letter"></i>
                                            </a>
                                        </li>
                                        <li class="col">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover"
                                                href="#!">
                                                <i class="icon-screen-smartphone"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Figure List -->
                                </figure>
                                <!-- End Figure -->
                            </div>

                            <div class="col-md-4 g-mb-30 g-mb-0--md">
                                <!-- Figure -->
                                <figure
                                    class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-pink--hover g-transition-0_2 text-center">
                                    <div class="g-py-40 g-px-20">
                                        <!-- Figure Image -->
                                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20"
                                            src="assets/img-temp/125x125/img2.jpg" alt="Image Description">
                                        <!-- Figure Image -->

                                        <!-- Figure Info -->
                                        <h4 class="h5 g-mb-5">Natasha Kolnikova</h4>
                                        <div class="d-block">
                                            <span class="g-color-pink g-font-size-default g-mr-3">
                                                <i class="icon-user"></i>
                                            </span>
                                            <em
                                                class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Family</em>
                                        </div>
                                        <!-- End Figure Info -->
                                    </div>

                                    <hr class="g-brd-gray-light-v4 g-my-0">

                                    <!-- Figure List -->
                                    <ul class="row list-inline g-py-20 g-ma-0">
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover"
                                                href="#!">
                                                <i class="icon-speech"></i>
                                            </a>
                                        </li>
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover"
                                                href="#!">
                                                <i class="icon-envelope-letter"></i>
                                            </a>
                                        </li>
                                        <li class="col">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover"
                                                href="#!">
                                                <i class="icon-screen-smartphone"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Figure List -->
                                </figure>
                                <!-- End Figure -->
                            </div>

                            <div class="col-md-4">
                                <!-- Figure -->
                                <figure
                                    class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-purple--hover g-transition-0_2 text-center">
                                    <div class="g-py-40 g-px-20">
                                        <!-- Figure Image -->
                                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20"
                                            src="assets/img-temp/125x125/img3.jpg" alt="Image Description">
                                        <!-- Figure Image -->

                                        <!-- Figure Info -->
                                        <h4 class="h5 g-mb-5">Frank Heller</h4>
                                        <div class="d-block">
                                            <span class="g-color-purple g-font-size-default g-mr-3">
                                                <i class="icon-user"></i>
                                            </span>
                                            <em
                                                class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Friend</em>
                                        </div>
                                        <!-- End Figure Info -->
                                    </div>

                                    <hr class="g-brd-gray-light-v4 g-my-0">

                                    <!-- Figure List -->
                                    <ul class="row list-inline g-py-20 g-ma-0">
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover"
                                                href="#!">
                                                <i class="icon-speech"></i>
                                            </a>
                                        </li>
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover"
                                                href="#!">
                                                <i class="icon-envelope-letter"></i>
                                            </a>
                                        </li>
                                        <li class="col">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover"
                                                href="#!">
                                                <i class="icon-screen-smartphone"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Figure List -->
                                </figure>
                                <!-- End Figure -->
                            </div>
                        </div>
                        <!-- End User Contacts -->

                        <!-- User Contacts -->
                        <div class="row g-mb-40">
                            <div class="col-md-4 g-mb-30 g-mb-0--md">
                                <!-- Figure -->
                                <figure
                                    class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
                                    <div class="g-py-40 g-px-20">
                                        <!-- Figure Image -->
                                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20"
                                            src="assets/img-temp/125x125/img4.jpg" alt="Image Description">
                                        <!-- Figure Image -->

                                        <!-- Figure Info -->
                                        <h4 class="h5 g-mb-5">Maria Parker</h4>
                                        <div class="d-block">
                                            <span class="g-color-cyan g-font-size-default g-mr-3">
                                                <i class="icon-user"></i>
                                            </span>
                                            <em
                                                class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Employee</em>
                                        </div>
                                        <!-- End Figure Info -->
                                    </div>

                                    <hr class="g-brd-gray-light-v4 g-my-0">

                                    <!-- Figure List -->
                                    <ul class="row list-inline g-py-20 g-ma-0">
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover"
                                                href="#!">
                                                <i class="icon-speech"></i>
                                            </a>
                                        </li>
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover"
                                                href="#!">
                                                <i class="icon-envelope-letter"></i>
                                            </a>
                                        </li>
                                        <li class="col">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover"
                                                href="#!">
                                                <i class="icon-screen-smartphone"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Figure List -->
                                </figure>
                                <!-- End Figure -->
                            </div>

                            <div class="col-md-4 g-mb-30 g-mb-0--md">
                                <!-- Figure -->
                                <figure
                                    class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-pink--hover g-transition-0_2 text-center">
                                    <div class="g-py-40 g-px-20">
                                        <!-- Figure Image -->
                                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20"
                                            src="assets/img-temp/125x125/img5.jpg" alt="Image Description">
                                        <!-- Figure Image -->

                                        <!-- Figure Info -->
                                        <h4 class="h5 g-mb-5">Bryant Gordon</h4>
                                        <div class="d-block">
                                            <span class="g-color-pink g-font-size-default g-mr-3">
                                                <i class="icon-user"></i>
                                            </span>
                                            <em
                                                class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Family</em>
                                        </div>
                                        <!-- End Figure Info -->
                                    </div>

                                    <hr class="g-brd-gray-light-v4 g-my-0">

                                    <!-- Figure List -->
                                    <ul class="row list-inline g-py-20 g-ma-0">
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover"
                                                href="#!">
                                                <i class="icon-speech"></i>
                                            </a>
                                        </li>
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover"
                                                href="#!">
                                                <i class="icon-envelope-letter"></i>
                                            </a>
                                        </li>
                                        <li class="col">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover"
                                                href="#!">
                                                <i class="icon-screen-smartphone"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Figure List -->
                                </figure>
                                <!-- End Figure -->
                            </div>

                            <div class="col-md-4">
                                <!-- Figure -->
                                <figure
                                    class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-purple--hover g-transition-0_2 text-center">
                                    <div class="g-py-40 g-px-20">
                                        <!-- Figure Image -->
                                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20"
                                            src="assets/img-temp/125x125/img6.jpg" alt="Image Description">
                                        <!-- Figure Image -->

                                        <!-- Figure Info -->
                                        <h4 class="h5 g-mb-5">Kelly Harrington</h4>
                                        <div class="d-block">
                                            <span class="g-color-purple g-font-size-default g-mr-3">
                                                <i class="icon-user"></i>
                                            </span>
                                            <em
                                                class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Friend</em>
                                        </div>
                                        <!-- End Figure Info -->
                                    </div>

                                    <hr class="g-brd-gray-light-v4 g-my-0">

                                    <!-- Figure List -->
                                    <ul class="row list-inline g-py-20 g-ma-0">
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover"
                                                href="#!">
                                                <i class="icon-speech"></i>
                                            </a>
                                        </li>
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover"
                                                href="#!">
                                                <i class="icon-envelope-letter"></i>
                                            </a>
                                        </li>
                                        <li class="col">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover"
                                                href="#!">
                                                <i class="icon-screen-smartphone"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Figure List -->
                                </figure>
                                <!-- End Figure -->
                            </div>
                        </div>
                        <!-- End User Contacts -->

                        <!-- User Contacts -->
                        <div class="row g-mb-40">
                            <div class="col-md-4 g-mb-30 g-mb-0--md">
                                <!-- Figure -->
                                <figure
                                    class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
                                    <div class="g-py-40 g-px-20">
                                        <!-- Figure Image -->
                                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20"
                                            src="assets/img-temp/125x125/img7.jpg" alt="Image Description">
                                        <!-- Figure Image -->

                                        <!-- Figure Info -->
                                        <h4 class="h5 g-mb-5">Claire Jensen</h4>
                                        <div class="d-block">
                                            <span class="g-color-cyan g-font-size-default g-mr-3">
                                                <i class="icon-user"></i>
                                            </span>
                                            <em
                                                class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Employee</em>
                                        </div>
                                        <!-- End Figure Info -->
                                    </div>

                                    <hr class="g-brd-gray-light-v4 g-my-0">

                                    <!-- Figure List -->
                                    <ul class="row list-inline g-py-20 g-ma-0">
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover"
                                                href="#!">
                                                <i class="icon-speech"></i>
                                            </a>
                                        </li>
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover"
                                                href="#!">
                                                <i class="icon-envelope-letter"></i>
                                            </a>
                                        </li>
                                        <li class="col">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover"
                                                href="#!">
                                                <i class="icon-screen-smartphone"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Figure List -->
                                </figure>
                                <!-- End Figure -->
                            </div>

                            <div class="col-md-4 g-mb-30 g-mb-0--md">
                                <!-- Figure -->
                                <figure
                                    class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-pink--hover g-transition-0_2 text-center">
                                    <div class="g-py-40 g-px-20">
                                        <!-- Figure Image -->
                                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20"
                                            src="assets/img-temp/125x125/img8.jpg" alt="Image Description">
                                        <!-- Figure Image -->

                                        <!-- Figure Info -->
                                        <h4 class="h5 g-mb-5">Darrel Park</h4>
                                        <div class="d-block">
                                            <span class="g-color-pink g-font-size-default g-mr-3">
                                                <i class="icon-user"></i>
                                            </span>
                                            <em
                                                class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Family</em>
                                        </div>
                                        <!-- End Figure Info -->
                                    </div>

                                    <hr class="g-brd-gray-light-v4 g-my-0">

                                    <!-- Figure List -->
                                    <ul class="row list-inline g-py-20 g-ma-0">
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover"
                                                href="#!">
                                                <i class="icon-speech"></i>
                                            </a>
                                        </li>
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover"
                                                href="#!">
                                                <i class="icon-envelope-letter"></i>
                                            </a>
                                        </li>
                                        <li class="col">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover"
                                                href="#!">
                                                <i class="icon-screen-smartphone"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Figure List -->
                                </figure>
                                <!-- End Figure -->
                            </div>

                            <div class="col-md-4">
                                <!-- Figure -->
                                <figure
                                    class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-purple--hover g-transition-0_2 text-center">
                                    <div class="g-py-40 g-px-20">
                                        <!-- Figure Image -->
                                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20"
                                            src="assets/img-temp/125x125/img9.jpg" alt="Image Description">
                                        <!-- Figure Image -->

                                        <!-- Figure Info -->
                                        <h4 class="h5 g-mb-5">Sally Manning</h4>
                                        <div class="d-block">
                                            <span class="g-color-purple g-font-size-default g-mr-3">
                                                <i class="icon-user"></i>
                                            </span>
                                            <em
                                                class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Friend</em>
                                        </div>
                                        <!-- End Figure Info -->
                                    </div>

                                    <hr class="g-brd-gray-light-v4 g-my-0">

                                    <!-- Figure List -->
                                    <ul class="row list-inline g-py-20 g-ma-0">
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover"
                                                href="#!">
                                                <i class="icon-speech"></i>
                                            </a>
                                        </li>
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover"
                                                href="#!">
                                                <i class="icon-envelope-letter"></i>
                                            </a>
                                        </li>
                                        <li class="col">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover"
                                                href="#!">
                                                <i class="icon-screen-smartphone"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Figure List -->
                                </figure>
                                <!-- End Figure -->
                            </div>
                        </div>
                        <!-- End User Contacts -->

                        <!-- User Contacts -->
                        <div class="row g-mb-40">
                            <div class="col-md-4 g-mb-30 g-mb-0--md">
                                <!-- Figure -->
                                <figure
                                    class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
                                    <div class="g-py-40 g-px-20">
                                        <!-- Figure Image -->
                                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20"
                                            src="assets/img-temp/125x125/img10.jpg" alt="Image Description">
                                        <!-- Figure Image -->

                                        <!-- Figure Info -->
                                        <h4 class="h5 g-mb-5">Dave Carlson</h4>
                                        <div class="d-block">
                                            <span class="g-color-cyan g-font-size-default g-mr-3">
                                                <i class="icon-user"></i>
                                            </span>
                                            <em
                                                class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Employee</em>
                                        </div>
                                        <!-- End Figure Info -->
                                    </div>

                                    <hr class="g-brd-gray-light-v4 g-my-0">

                                    <!-- Figure List -->
                                    <ul class="row list-inline g-py-20 g-ma-0">
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover"
                                                href="#!">
                                                <i class="icon-speech"></i>
                                            </a>
                                        </li>
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover"
                                                href="#!">
                                                <i class="icon-envelope-letter"></i>
                                            </a>
                                        </li>
                                        <li class="col">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover"
                                                href="#!">
                                                <i class="icon-screen-smartphone"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Figure List -->
                                </figure>
                                <!-- End Figure -->
                            </div>

                            <div class="col-md-4 g-mb-30 g-mb-0--md">
                                <!-- Figure -->
                                <figure
                                    class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-pink--hover g-transition-0_2 text-center">
                                    <div class="g-py-40 g-px-20">
                                        <!-- Figure Image -->
                                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20"
                                            src="assets/img-temp/125x125/img11.jpg" alt="Image Description">
                                        <!-- Figure Image -->

                                        <!-- Figure Info -->
                                        <h4 class="h5 g-mb-5">Julia Copeland</h4>
                                        <div class="d-block">
                                            <span class="g-color-pink g-font-size-default g-mr-3">
                                                <i class="icon-user"></i>
                                            </span>
                                            <em
                                                class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Family</em>
                                        </div>
                                        <!-- End Figure Info -->
                                    </div>

                                    <hr class="g-brd-gray-light-v4 g-my-0">

                                    <!-- Figure List -->
                                    <ul class="row list-inline g-py-20 g-ma-0">
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover"
                                                href="#!">
                                                <i class="icon-speech"></i>
                                            </a>
                                        </li>
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover"
                                                href="#!">
                                                <i class="icon-envelope-letter"></i>
                                            </a>
                                        </li>
                                        <li class="col">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover"
                                                href="#!">
                                                <i class="icon-screen-smartphone"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Figure List -->
                                </figure>
                                <!-- End Figure -->
                            </div>

                            <div class="col-md-4">
                                <!-- Figure -->
                                <figure
                                    class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-purple--hover g-transition-0_2 text-center">
                                    <div class="g-py-40 g-px-20">
                                        <!-- Figure Image -->
                                        <img class="g-width-100 g-height-100 rounded-circle g-mb-20"
                                            src="assets/img-temp/125x125/img12.jpg" alt="Image Description">
                                        <!-- Figure Image -->

                                        <!-- Figure Info -->
                                        <h4 class="h5 g-mb-5">Willis Roy</h4>
                                        <div class="d-block">
                                            <span class="g-color-purple g-font-size-default g-mr-3">
                                                <i class="icon-user"></i>
                                            </span>
                                            <em
                                                class="g-color-gray-dark-v4 g-font-style-normal g-font-size-default">Friend</em>
                                        </div>
                                        <!-- End Figure Info -->
                                    </div>

                                    <hr class="g-brd-gray-light-v4 g-my-0">

                                    <!-- Figure List -->
                                    <ul class="row list-inline g-py-20 g-ma-0">
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-cyan--hover"
                                                href="#!">
                                                <i class="icon-speech"></i>
                                            </a>
                                        </li>
                                        <li class="col g-brd-right g-brd-gray-light-v4">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-red--hover"
                                                href="#!">
                                                <i class="icon-envelope-letter"></i>
                                            </a>
                                        </li>
                                        <li class="col">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-bg-transparent g-color-purple--hover"
                                                href="#!">
                                                <i class="icon-screen-smartphone"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Figure List -->
                                </figure>
                                <!-- End Figure -->
                            </div>
                        </div>
                        <!-- End User Contacts -->

                        <!-- Pagination -->
                        <nav class="text-center" aria-label="Page Navigation">
                            <ul class="list-inline">
                                <li class="list-inline-item float-sm-left">
                                    <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-16"
                                        href="#!" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <i class="fa fa-angle-left g-mr-5"></i> Previous
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="list-inline-item g-hidden-sm-down">
                                    <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14"
                                        href="#!">1</a>
                                </li>
                                <li class="list-inline-item g-hidden-sm-down">
                                    <a class="u-pagination-v1__item u-pagination-v1-4 u-pagination-v1-4--active g-rounded-50 g-pa-7-14"
                                        href="#!">2</a>
                                </li>
                                <li class="list-inline-item g-hidden-sm-down">
                                    <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14"
                                        href="#!">3</a>
                                </li>
                                <li class="list-inline-item g-hidden-sm-down">
                                    <a class="g-pa-7-14">...</a>
                                </li>
                                <li class="list-inline-item g-hidden-sm-down">
                                    <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14"
                                        href="#!">80</a>
                                </li>
                                <li class="list-inline-item float-sm-right">
                                    <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-16"
                                        href="#!" aria-label="Next">
                                        <span aria-hidden="true">
                                            Next <i class="fa fa-angle-right g-ml-5"></i>
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- End Pagination -->
                    </div>
                    <!-- End Profile Content -->
                </div>
            </div>
        </section>

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

    <div class="u-outer-spaces-helper"></div>


    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>


    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/appear.js"></script>
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/components/hs.tabs.js"></script>
    <script src="assets/js/components/hs.progress-bar.js"></script>
    <script src="assets/js/components/hs.scrollbar.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // initialization of tabs
            $.HSCore.components.HSTabs.init('[role="tablist"]');

            // initialization of HSScrollBar component
            $.HSCore.components.HSScrollBar.init($('.js-scrollbar'));
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

            // initialization of horizontal progress bars
            setTimeout(function() { // important in this case
                var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
                    direction: 'horizontal',
                    indicatorSelector: '.js-hr-progress-bar-indicator'
                });
            }, 1);
        });

        $(window).on('resize', function() {
            setTimeout(function() {
                $.HSCore.components.HSTabs.init('[role="tablist"]');
            }, 200);
        });
    </script>







</body>

</html>
