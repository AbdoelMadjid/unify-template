<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}/">
    <!-- Title -->
    <title>Blog Masonry Grid 3 | | Unify - Responsive Website Template</title>

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
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
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

        <!-- Breadcrumbs -->
        <section class="g-bg-gray-light-v5 g-py-50">
            <div class="container">
                <div class="d-sm-flex text-center">
                    <div class="align-self-center">
                        <h2 class="h3 g-font-weight-300 w-100 g-mb-10 g-mb-0--md">Masonry Grid 3</h2>
                    </div>

                    <div class="align-self-center ml-auto">
                        <ul class="u-list-inline">
                            <li class="list-inline-item g-mr-5">
                                <a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Home</a>
                                <i class="g-color-gray-light-v2 g-ml-5">/</i>
                            </li>
                            <li class="list-inline-item g-mr-5">
                                <a class="u-link-v5 g-color-main g-color-primary--hover" href="#!">Blog</a>
                                <i class="g-color-gray-light-v2 g-ml-5">/</i>
                            </li>
                            <li class="list-inline-item g-color-primary">
                                <span>Masonry Grid 3</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- Blog Masonry Blocks -->
        <div class="container g-pt-100 g-pb-70">
            <div class="masonry-grid row g-mb-70">
                <div class="masonry-grid-sizer col-sm-1"></div>

                <div class="masonry-grid-item col-lg-6 g-mb-30">
                    <!-- Article -->
                    <article
                        class="u-shadow-v11 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-purple-gradient-opacity-v1--after"
                        style="background-image: url(assets/img-temp/500x450/img11.jpg);">
                        <div class="g-pos-rel g-z-index-1 g-px-50 g-py-60">
                            <div class="mb-5">
                                <div class="g-width-20 g-height-1 g-bg-white-opacity-0_5 mb-4"></div>
                                <span class="d-block g-color-white-opacity-0_9">Maria Woody</span>
                                <h4 class="h5 g-color-white-opacity-0_9">Exclusive interview with InVision's CEO</h4>
                            </div>
                            <h2 class="g-color-white g-font-weight-700 g-font-size-45 text-capitalize mb-5">InVision
                            </h2>
                            <a class="btn btn-md u-btn-outline-white g-font-weight-600 text-uppercase g-rounded-25 g-px-25"
                                href="#!">Read more</a>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="masonry-grid-item col-sm-6 col-lg-3 g-mb-30">
                    <!-- Article -->
                    <article class="u-shadow-v11 g-bg-white g-pos-rel">
                        <img class="img-fluid w-100" src="assets/img-temp/500x450/img6.jpg"
                            alt="Image Description">
                        <div class="g-pa-30">
                            <h3 class="h5 g-color-black g-font-weight-600 text-capitalize mb-3">
                                <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                    href="#!">More than a look, design is functional.</a>
                            </h3>
                            <a href="#!">Read more</a>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="masonry-grid-item col-sm-6 col-lg-3 g-mb-30">
                    <!-- Article -->
                    <article class="u-shadow-v11 g-bg-white g-pos-rel">
                        <img class="img-fluid w-100" src="assets/img-temp/600x300/img1.jpg"
                            alt="Image Description">
                        <div class="g-pa-30">
                            <div class="mb-4">
                                <h3 class="h5 g-color-black g-font-weight-600 text-capitalize mb-3">
                                    <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                        href="#!">Google I/O'17: Google Lens</a>
                                </h3>
                                <p class="g-color-gray-dark-v5">Impressive technology. But it's fake technology. Where
                                    does it stop?</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <a class="align-self-center g-color-gray-dark-v5 g-color-black--hover g-text-underline--none--hover"
                                    href="#!">Hi-tech.</a>
                                <a class="align-self-center ml-auto" href="#!">Read more</a>
                            </div>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="masonry-grid-item col-sm-6 col-lg-3 g-mb-30">
                    <!-- Article -->
                    <article class="u-shadow-v11 g-bg-white g-pos-rel">
                        <img class="img-fluid w-100" src="assets/img-temp/600x300/img2.jpg"
                            alt="Image Description">
                        <div class="g-pa-30">
                            <div class="mb-4">
                                <h3 class="h5 g-color-black g-font-weight-600 text-capitalize mb-3">
                                    <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                        href="#!">Cybersecurity and Privacy Questionnaire</a>
                                </h3>
                                <p class="g-color-gray-dark-v5">A survey of your knowledge towards cybersecurity
                                    topics.</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <a class="align-self-center g-color-gray-dark-v5 g-color-black--hover g-text-underline--none--hover"
                                    href="#!">Security.</a>
                                <a class="align-self-center ml-auto" href="#!">Read more</a>
                            </div>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="masonry-grid-item col-sm-6 col-lg-3 g-mb-30">
                    <!-- Article -->
                    <article class="u-shadow-v11 g-bg-white g-pos-rel g-pa-30">
                        <h3 class="h5 g-color-black g-font-weight-600 text-capitalize mb-4">
                            <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                href="#!">Free virtual conference to take your agile ux skills to the next
                                level</a>
                        </h3>
                        <div class="d-flex justify-content-start">
                            <img class="d-block align-self-center g-width-30 g-height-30 rounded-circle mr-3"
                                src="assets/img-temp/100x100/img7.jpg" alt="Image Description">
                            <a class="align-self-center g-color-gray-dark-v5 g-color-black--hover g-text-underline--none--hover"
                                href="#!">Andrew</a>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="masonry-grid-item col-sm-6 col-lg-3 g-mb-30">
                    <!-- Article -->
                    <article class="g-bg-purple g-pa-30">
                        <h3 class="h5 g-color-white g-font-weight-600 text-capitalize mb-0">
                            <a class="g-color-white g-color-white--hover" href="#!">Web Development Reading
                                List #183: Comedy In Design, Security Checklist And The Life As A Nobody</a>
                        </h3>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="masonry-grid-item col-sm-6 col-lg-3 g-mb-30">
                    <!-- Article -->
                    <article class="u-shadow-v11 g-bg-white g-pos-rel">
                        <img class="img-fluid w-100" src="assets/img-temp/400x270/img9.jpg"
                            alt="Image Description">
                        <div class="g-pa-30">
                            <h3 class="h5 g-color-black g-font-weight-600 text-capitalize mb-3">
                                <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                    href="#!">Baron Fig Co-Founder Joey Cofone presents a convincing use case for
                                    Comic Sans</a>
                            </h3>
                            <p class="g-color-gray-dark-v5">It’s common to have to draw the same kinds of icons over
                                and over</p>
                            <a href="#!">Read more</a>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="masonry-grid-item col-lg-6 g-mb-30">
                    <!-- Article -->
                    <article
                        class="u-shadow-v11 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-purple-gradient-opacity-v1--after"
                        style="background-image: url(assets/img-temp/600x450/img6.jpg);">
                        <div class="g-pos-rel g-z-index-1 g-px-50 g-py-60">
                            <a class="js-fancybox d-block mb-5" href="javascript:;"
                                data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1" data-speed="350"
                                data-caption="Single Image">
                                <span
                                    class="u-icon-v3 g-bg-white g-color-black g-color-primary--hover g-rounded-50x g-font-size-15 g-cursor-pointer">
                                    <i class="g-pos-rel g-left-2 fa fa-play"></i>
                                </span>
                            </a>
                            <h2 class="g-color-white g-font-weight-700 g-font-size-45 text-capitalize mb-3">Unify</h2>
                            <div class="g-pr-100--md">
                                <p class="g-color-white-opacity-0_8">We are a creative studio focusing on culture,
                                    luxury, editorial &amp; art.</p>
                            </div>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="masonry-grid-item col-sm-6 col-lg-3 g-mb-30">
                    <!-- Article -->
                    <article class="u-shadow-v11 g-bg-white g-pos-rel">
                        <img class="img-fluid w-100" src="assets/img-temp/400x270/img12.jpg"
                            alt="Image Description">
                        <div class="g-pa-30">
                            <h3 class="h5 g-color-black g-font-weight-600 text-capitalize mb-3">
                                <a class="g-color-black g-color-primary--hover g-text-underline--none--hover"
                                    href="#!">Multi-Swipe: New UX to act on many items (emails) really fast</a>
                            </h3>
                            <a href="#!">Read more</a>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="masonry-grid-item col-sm-6 col-lg-3 g-mb-30">
                    <!-- Article -->
                    <article class="g-bg-teal g-pa-30">
                        <h3 class="h5 g-color-white g-font-weight-600 text-capitalize mb-0">
                            <a class="g-color-white g-color-white--hover" href="#!">10 Typography Tips Every
                                Business Should Know</a>
                        </h3>
                    </article>
                    <!-- End Article -->
                </div>
            </div>

            <!-- Pagination -->
            <nav class="text-center" aria-label="Page Navigation">
                <ul class="list-inline">
                    <li class="list-inline-item float-left">
                        <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16"
                            href="#!" aria-label="Previous">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-left g-mr-5"></i> Previous
                            </span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="list-inline-item g-hidden-sm-down">
                        <a class="u-pagination-v1__item u-pagination-v1-4 u-pagination-v1-4--active g-rounded-50 g-pa-7-14"
                            href="#!">1</a>
                    </li>
                    <li class="list-inline-item g-hidden-sm-down">
                        <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14"
                            href="#!">2</a>
                    </li>
                    <li class="list-inline-item float-right">
                        <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16"
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
        <!-- End Blog Masonry Blocks -->

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
    <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
    <script src="assets/vendor/masonry/dist/masonry.pkgd.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.tabs.js"></script>
    <script src="assets/js/components/hs.popup.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of tabs
            $.HSCore.components.HSTabs.init('[role="tablist"]');

            // initialization of popups
            $.HSCore.components.HSPopup.init('.js-fancybox');

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

            // initialization of masonry
            $('.masonry-grid').imagesLoaded().then(function() {
                $('.masonry-grid').masonry({
                    columnWidth: '.masonry-grid-sizer',
                    itemSelector: '.masonry-grid-item',
                    percentPosition: true
                });
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
