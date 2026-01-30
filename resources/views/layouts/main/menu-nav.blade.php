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
        <!-- Blog -->
        @include('layouts.main.menu_features')
        <!-- End Blog -->

        <!-- Features -->
        {{--  <li class="nav-item hs-has-sub-menu  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn"
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
        </li> --}}
        <!-- End Features -->

        <!-- Shortcodes -->
        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
            <a href="unify-main/shortcodes/index.html" class="nav-link g-py-7 g-px-0">Shortcodes</a>
        </li>
        <!-- End Shortcodes -->

        <!-- Demos -->
        @include('layouts.main.menu_demo')
        <!-- End Demos -->
    </ul>
</div>
