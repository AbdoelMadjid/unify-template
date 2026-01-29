<div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
    <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">
        <!-- Intro -->
        <li class="nav-item g-mx-10--lg g-mx-15--xl {{ request()->routeIs('unify.intro') ? 'active' : '' }}">
            <a href="{{ route('unify.intro') }}" class="nav-link g-py-7 g-px-0">
                Intro
            </a>
        </li>
        <!-- End Intro -->

        <!-- Home -->
        @include('layouts.main.menu_home')
        <!-- End Home -->

        <!-- Pages -->
        @include('layouts.main.menu_pages')
        <!-- End Pages -->

        <!-- Blog -->
        @include('layouts.main.menu_blog')
        <!-- End Blog -->

        <!-- Features -->
        <li class="nav-item hs-has-sub-menu  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn"
            data-animation-out="fadeOut">
            <a id="nav-link--features" class="nav-link g-py-7 g-px-0" href="#!" aria-haspopup="true"
                aria-expanded="false" aria-controls="nav-submenu--features">Features</a>

            <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling"
                id="nav-submenu--features" aria-labelledby="nav-link--features">
                <!-- Features - Headers -->
                <li class="dropdown-item ">
                    <a class="nav-link" href="unify-main/shortcodes/headers/index.html">Headers</a>
                </li>
                <!-- End Features - Headers -->

                <!-- Features - Promo blocks -->
                <li class="dropdown-item ">
                    <a class="nav-link" href="unify-main/shortcodes/promo/index.html">Promo Blocks</a>
                </li>
                <!-- End Features - Promo blocks -->

                <!-- Features - Sliders -->
                <li class="dropdown-item hs-has-sub-menu ">
                    <a id="nav-link--features--sliders" class="nav-link" href="#!" aria-haspopup="true"
                        aria-expanded="false" aria-controls="nav-submenu--features--sliders">Sliders</a>

                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2"
                        id="nav-submenu--features--sliders" aria-labelledby="nav-link--features--sliders">
                        <li class="dropdown-item ">
                            <a class="nav-link" href="revolution-slider/index.html">Revolution sliders</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="master-slider/index.html">Master sliders</a>
                        </li>
                    </ul>
                </li>
                <!-- End Features - Sliders -->

                <!-- Features - Pop-ups -->
                <li class="dropdown-item hs-has-sub-menu ">
                    <a id="nav-link--features--pop-ups" class="nav-link" href="#!" aria-haspopup="true"
                        aria-expanded="false" aria-controls="nav-submenu--features--pop-ups">Pop-ups</a>

                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2"
                        id="nav-submenu--features--pop-ups" aria-labelledby="nav-link--features--pop-ups">
                        <li class="dropdown-item ">
                            <a class="nav-link" href="unify-main/shortcodes/shortcode-base-lightbox.html">Lightbox</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="unify-main/shortcodes/shortcode-base-modals.html">Modals</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="unify-main/shortcodes/shortcode-blocks-gallery.html">Gallery</a>
                        </li>
                    </ul>
                </li>
                <!-- End Features - Pop-ups -->

                <!-- Features - Maps -->
                <li class="dropdown-item hs-has-sub-menu ">
                    <a id="nav-link--features--maps" class="nav-link" href="#!" aria-haspopup="true"
                        aria-expanded="false" aria-controls="nav-submenu--features--maps">Maps</a>

                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2"
                        id="nav-submenu--features--maps" aria-labelledby="nav-link--features--maps">
                        <li class="dropdown-item ">
                            <a class="nav-link" href="unify-main/shortcodes/shortcode-base-google-maps.html">Google
                                Maps</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="unify-main/shortcodes/shortcode-base-maps-with-pins.html">Maps
                                With Pins</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="unify-main/shortcodes/shortcode-base-vector-maps.html">Vector
                                Maps</a>
                        </li>
                    </ul>
                </li>
                <!-- End Features - Maps -->

                <!-- Features - Footers -->
                <li class="dropdown-item hs-has-sub-menu ">
                    <a id="nav-link--features--footers" class="nav-link" href="#!" aria-haspopup="true"
                        aria-expanded="false" aria-controls="nav-submenu--features--footers">Footers</a>

                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2"
                        id="nav-submenu--features--footers" aria-labelledby="nav-link--features--footers">
                        <li class="dropdown-item ">
                            <a class="nav-link"
                                href="unify-main/shortcodes/footers/shortcode-blocks-footer-classic.html">Classic
                                Footers</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link"
                                href="unify-main/shortcodes/footers/shortcode-blocks-footer-contact-forms.html">Contact
                                Forms</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link"
                                href="unify-main/shortcodes/footers/shortcode-blocks-footer-maps.html">Footers Maps</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link"
                                href="unify-main/shortcodes/footers/shortcode-blocks-footer-modern.html">Modern
                                Footers</a>
                        </li>
                    </ul>
                </li>
                <!-- End Features - Footers -->
            </ul>
        </li>
        <!-- End Features -->

        <!-- Shortcodes -->
        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
            <a href="unify-main/shortcodes/index.html" class="nav-link g-py-7 g-px-0">Shortcodes</a>
        </li>
        <!-- End Shortcodes -->

        <!-- Demos -->
        <li class="nav-item hs-has-sub-menu  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn"
            data-animation-out="fadeOut">
            <a id="nav-link-demos" class="nav-link g-py-7 g-px-0" href="#!" aria-haspopup="true"
                aria-expanded="false" aria-controls="nav-submenu-demos">Demos</a>

            <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling"
                id="nav-submenu-demos" aria-labelledby="nav-link-demos">
                <!-- Demos - One Pages -->
                <li class="dropdown-item hs-has-sub-menu ">
                    <a id="nav-link--demos--one-page" class="nav-link" href="#!" aria-haspopup="true"
                        aria-expanded="false" aria-controls="nav-submenu--demos--one-page">One Pages</a>

                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 u-dropdown-col-2 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2 hs-reversed"
                        id="nav-submenu--demos--one-page" aria-labelledby="nav-link--demos--one-page">
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/accounting/index.html" target="_blank">Accounting</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/agency/index.html" target="_blank">Agency</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/app/index.html" target="_blank">App</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/architecture/index.html"
                                target="_blank">Architecture</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/business/index.html" target="_blank">Business</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/charity/index.html" target="_blank">Charity</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/consulting/index.html" target="_blank">Сonsulting</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/construction/index.html"
                                target="_blank">Construction</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/courses/index.html" target="_blank">Courses</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/corporate/index.html" target="_blank">Corporate</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/event/index.html" target="_blank">Event</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/gym/index.html" target="_blank">GYM</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/lawyer/index.html" target="_blank">Lawyer</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/music/index.html" target="_blank">Music</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/photography/index.html"
                                target="_blank">Photography</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/real-estate/index.html" target="_blank">Real
                                Estate</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/restaurant/index.html" target="_blank">Restaurant</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/shipping/index.html" target="_blank">Shipping</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/spa/index.html" target="_blank">Spa</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/travel/index.html" target="_blank">Travel</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="one-pages/wedding/index.html" target="_blank">Wedding</a>
                        </li>
                    </ul>
                </li>
                <!-- End Demos - One Pages -->

                <!-- Demos - E-Commerce -->
                <li class="dropdown-item ">
                    <a class="nav-link" href="e-commerce/home-page-1.html" target="_blank">E-Commerce <span
                            class="g-opacity-0_5">(44 Pages)</span></a>
                </li>
                <!-- End Demos - E-Commerce -->

                <!-- Demos - Multi Pages -->
                <li class="dropdown-item hs-has-sub-menu ">
                    <a id="nav-link--demos--blog-magazine" class="nav-link" href="#!" aria-haspopup="true"
                        aria-expanded="false" aria-controls="nav-submenu--demos--blog-magazine">Multi Pages</a>

                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2 hs-reversed"
                        id="nav-submenu--demos--blog-magazine" aria-labelledby="nav-link--demos--blog-magazine">
                        <li class="dropdown-item ">
                            <a class="nav-link" href="multipage/education/home-page-1.html"
                                target="_blank">University <span
                                    class="u-label g-rounded-3 g-font-size-10 g-bg-lightred g-py-3 g-pos-rel g-top-minus-1 g-ml-5">New</span></a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="multipage/real-estate/home-page-1.html" target="_blank">Real
                                Estate <span
                                    class="u-label g-rounded-3 g-font-size-10 g-bg-lightred g-py-3 g-pos-rel g-top-minus-1 g-ml-5">New</span></a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="multipage/marketing/home-page-1.html" target="_blank">Marketing
                                <span
                                    class="u-label g-rounded-3 g-font-size-10 g-bg-lightred g-py-3 g-pos-rel g-top-minus-1 g-ml-5">New</span></a>
                        </li>
                    </ul>
                </li>
                <!-- End Demos - Multi Pages -->

                <!-- Demos - Blogs &amp; Magazines -->
                <li class="dropdown-item hs-has-sub-menu ">
                    <a id="nav-link--demos--blog-magazine" class="nav-link" href="#!" aria-haspopup="true"
                        aria-expanded="false" aria-controls="nav-submenu--demos--blog-magazine">Blogs &amp;
                        Magazines</a>

                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2 hs-reversed"
                        id="nav-submenu--demos--blog-magazine" aria-labelledby="nav-link--demos--blog-magazine">
                        <li class="dropdown-item ">
                            <a class="nav-link" href="blog-magazine/classic/bm-classic-home-page-1.html"
                                target="_blank">Home 1</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="blog-magazine/classic/bm-classic-home-page-2.html"
                                target="_blank">Home 2</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="blog-magazine/classic/bm-classic-home-page-3.html"
                                target="_blank">Home 3</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="blog-magazine/classic/bm-classic-home-page-4.html"
                                target="_blank">Home 4</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="blog-magazine/classic/bm-classic-home-page-5.html"
                                target="_blank">Home 5</a>
                        </li>
                        <li class="dropdown-item ">
                            <a class="nav-link" href="blog-magazine/classic/bm-classic-single-1.html"
                                target="_blank">Single</a>
                        </li>
                    </ul>
                </li>
                <!-- End Demos - Blogs &amp; Magazines -->
            </ul>
        </li>
        <!-- End Demos -->
    </ul>
</div>
