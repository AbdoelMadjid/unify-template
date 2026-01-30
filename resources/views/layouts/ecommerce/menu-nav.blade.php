<div id="navBar" class="collapse navbar-collapse align-items-center flex-sm-row g-pt-15 g-pt-0--lg">
    <ul class="navbar-nav ml-auto">
        <!-- Home - Submenu -->
        @php $menuHome = config('_ecommerce.menu_home')[0]; @endphp

        <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl">
            <a id="nav-link--home" class="nav-link text-uppercase g-color-primary--hover g-px-5 g-py-20" href="#!"
                aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--home">
                {{ $menuHome['label'] }}
            </a>

            @include('layouts.ecommerce.menu-recursive-ecom', [
                'items' => $menuHome['submenu'],
                'level' => 1,
            ])
        </li>
        <!-- End Home - Submenu -->

        <!-- Pages - Submenu -->
        @php $menuPages = config('_ecommerce.menu_pages')[0]; @endphp

        <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl">
            <a id="nav-link--pages" class="nav-link text-uppercase g-color-primary--hover g-px-5 g-py-20" href="#!"
                aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages">
                {{ $menuPages['label'] }}
            </a>

            @include('layouts.ecommerce.menu-recursive-ecom', [
                'items' => $menuPages['submenu'],
                'level' => 1,
            ])
        </li>

        <!-- End Pages - Submenu -->


        <!-- Categories - Mega Menu -->
        <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn"
            data-animation-out="fadeOut" data-position="right">
            <a id="mega-menu-label-3" class="nav-link text-uppercase g-color-primary--hover g-px-5 g-py-20"
                href="#!" aria-haspopup="true" aria-expanded="false">
                Categories
                <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i>
            </a>

            <!-- Mega Menu -->
            <div class="w-100 hs-mega-menu u-shadow-v11 g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-pa-30 g-mt-17"
                aria-labelledby="mega-menu-label-3">
                <div class="row">
                    <div class="col-sm-6 col-lg-2 g-mb-30 g-mb-0--md">
                        <!-- Links -->
                        <div class="mb-5">
                            <span class="d-block g-font-weight-500 text-uppercase mb-2">Home
                                Decor</span>

                            <ul class="list-unstyled">
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Wall Decor</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Pillows &amp; Throws</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Window Treatments</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Mirrors</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Links -->

                        <!-- Links -->
                        <span class="d-block g-font-weight-500 text-uppercase mb-2">Industrial
                            Decor</span>

                        <ul class="list-unstyled">
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Letter Block</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Glass Sconce</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Risa Storage Jar</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Model Plane</a>
                            </li>
                        </ul>
                        <!-- End Links -->
                    </div>

                    <div class="col-sm-6 col-lg-3 g-mb-30 g-mb-0--md">
                        <!-- Links -->
                        <div class="mb-5">
                            <span class="d-block g-font-weight-500 text-uppercase mb-2">Kitchen
                                &amp; Tabletop</span>

                            <ul class="list-unstyled">
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Coffee &amp; Tea</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Cooking &amp; Baking</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Cutlery &amp; Cutting</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Serving</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Food Storage</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Links -->

                        <div class="mb-5 g-mb-0--lg">
                            <!-- Links -->
                            <span class="d-block g-font-weight-500 text-uppercase mb-2">Office</span>

                            <ul class="list-unstyled">
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Writing Instruments</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Bookcases</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Filing Cabinets</a>
                                </li>
                            </ul>
                            <!-- End Links -->
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3 g-mb-30 g-mb-0--md">
                        <!-- Links -->
                        <div class="mb-5">
                            <span class="d-block g-font-weight-500 text-uppercase mb-2">Modern
                                Lighting</span>

                            <ul class="list-unstyled">
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Bridgers 59" Floor Lamp</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Miltiades 27" Table Lamp</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Links -->

                        <!-- Links -->
                        <span class="d-block g-font-weight-500 text-uppercase mb-2">Coastal
                            Living Room Furniture</span>

                        <ul class="list-unstyled">
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Washington Console Table</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Anfield Coffee Table</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Banbury 2 Drawer End Table</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Landsdowne 53" Tv Stand</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Sevan Swivel Barrel Chair</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Enfield Credenza</a>
                            </li>
                        </ul>
                        <!-- End Links -->
                    </div>

                    <div class="col-md-6 col-lg-4 g-mb-30 g-mb-0--md">
                        <article class="g-pos-rel">
                            <img class="img-fluid" src="ecommerce/assets/img-temp/700x700/img1.jpg"
                                alt="Image Description">

                            <div class="g-pos-abs g-bottom-30 g-left-30">
                                <span class="d-block g-color-gray-dark-v4 mb-2">Modern
                                    Lighting</span>
                                <span class="d-block h4">Desk Clock 65" Table Lamp</span>
                                <span class="d-block g-color-gray-dark-v3 g-font-size-16 mb-4">$156.00</span>
                                <a class="btn u-btn-primary u-shadow-v29 g-font-size-12 text-uppercase g-py-10 g-px-20"
                                    href="#!">Add to Cart</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <!-- End Mega Menu -->
        </li>
        <!-- End Categories - Mega Menu -->

        <!-- Watch - Mega Menu -->
        <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn"
            data-animation-out="fadeOut" data-position="right">
            <a id="mega-menu-label-2" class="nav-link text-uppercase g-color-primary--hover g-px-5 g-py-20"
                href="#!" aria-haspopup="true" aria-expanded="false">
                Watch
                <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i>
            </a>

            <!-- Mega Menu -->
            <div class="w-100 hs-mega-menu u-shadow-v11 g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-mt-17"
                aria-labelledby="mega-menu-label-2">
                <div class="row no-gutters">
                    <div class="col-md-4 g-mb-30 g-mb-0--md">
                        <div class="g-pa-30">
                            <!-- Links -->
                            <span class="d-block g-font-weight-500 text-uppercase mb-2">Watches</span>

                            <ul class="list-unstyled">
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Ladies' Parker Chronograph</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Emporio Armani</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Fossil Men's Grant Chronograph</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Olivia Burton</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Ladies' Big White Dial</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Men's Grant Automatic</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Ladies' The Roxy</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Sport Watch</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Burberry Ladies' The City</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Tissot</a>
                                </li>
                            </ul>
                            <!-- End Links -->
                        </div>
                    </div>

                    <div class="col-md-8 g-min-height-400 g-bg-size-cover g-bg-pos-center"
                        data-bg-img-src="ecommerce/assets/img-temp/700x467/img1.jpg">
                        <article class="g-pa-30">
                            <span class="d-block g-color-white-opacity-0_8 text-uppercase mb-2">Bestseller</span>
                            <span class="d-block h1 g-color-white">MVMTH Swiss Watch</span>
                            <span class="d-block g-color-primary g-font-weight-700 g-font-size-25">$273.00</span>
                            <a class="u-link-v2" href="#!"></a>
                        </article>
                    </div>
                </div>
            </div>
            <!-- End Mega Menu -->
        </li>
        <!-- End Watch - Mega Menu -->

        <!-- Mega Menu Item -->
        <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn"
            data-animation-out="fadeOut" data-position="right">
            <a id="mega-menu-label-4" class="nav-link text-uppercase g-color-primary--hover g-px-5 g-py-20"
                href="#!" aria-haspopup="true" aria-expanded="false">
                Catalogue
                <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i>
            </a>

            <!-- Mega Menu -->
            <div class="w-100 hs-mega-menu u-shadow-v11 g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-pa-30 g-mt-17"
                aria-labelledby="mega-menu-label-4">
                <div class="row">
                    <div class="col-sm-6 col-md-3 g-mb-30 g-mb-0--sm">
                        <!-- Links -->
                        <div class="mb-5">
                            <span class="d-block g-font-weight-500 text-uppercase mb-2">Clothes</span>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">New in</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Coats &amp; Jackets</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Jeans</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Dresses</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Shorts
                                        <span class="u-label g-bg-primary rounded g-ml-10">New</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Skirts</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">T-Shirts</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Links -->

                        <!-- Links -->
                        <span class="d-block g-font-weight-500 text-uppercase mb-2">Shoes</span>

                        <ul class="list-unstyled">
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Boots</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">FLats</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Heels</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Sandals</a>
                            </li>
                        </ul>
                        <!-- End Links -->
                    </div>

                    <div class="col-sm-6 col-md-3 g-mb-30 g-mb-0--sm">
                        <!-- Links -->
                        <div class="mb-5">
                            <span class="d-block g-font-weight-500 text-uppercase mb-2">Accessories</span>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">All accessories</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Bags &amp; Purses</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Scarvs &amp; Hats</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Jewellery</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Fragrance &amp; Beauty</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Links -->

                        <!-- Links -->
                        <div class="mb-5">
                            <span class="d-block g-font-weight-500 text-uppercase mb-2">Lingerie</span>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Linger
                                        <span class="u-label g-bg-primary rounded g-ml-10">New</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Slippers</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Links -->

                        <!-- Links -->
                        <span class="d-block g-font-weight-500 text-uppercase mb-2">Nightwear</span>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Nightwear</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Socks</a>
                            </li>
                        </ul>
                        <!-- End Links -->
                    </div>

                    <div class="col-sm-6 col-md-3 g-mb-30 g-mb-0--sm">
                        <!-- Links -->
                        <span class="d-block g-font-weight-500 text-uppercase mb-2">Mixed</span>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">New in</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Coats &amp; Jackets
                                    <span class="u-label g-bg-primary rounded g-ml-10">New</span>
                                </a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Jeans</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Dresses</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Shorts</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Skirts</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">T-shirts</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Boots</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Flats</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Heels</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Sandals</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Sports</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Socks</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Tights</a>
                            </li>
                        </ul>
                        <!-- End Links -->
                    </div>

                    <div class="col-sm-6 col-md-3 g-mb-30 g-mb-0--sm">
                        <!-- Links -->
                        <div class="mb-5">
                            <span class="d-block g-font-weight-500 text-uppercase mb-2">Accessories</span>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">All accessories</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Bags &amp; Purses</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Scarvs &amp; Hats</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Jewellery</a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Fragrance &amp; Beauty</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Links -->

                        <!-- Links -->
                        <div class="mb-5">
                            <span class="d-block g-font-weight-500 text-uppercase mb-2">Lingerie</span>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Linger
                                        <span class="u-label g-bg-primary rounded g-ml-10">New</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="#!">Slippers</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Links -->

                        <!-- Links -->
                        <span class="d-block g-font-weight-500 text-uppercase mb-2">Nightwear</span>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Nightwear</a>
                            </li>
                            <li>
                                <a class="d-block g-color-text g-color-primary--hover g-text-underline--none--hover g-py-5"
                                    href="#!">Socks</a>
                            </li>
                        </ul>
                        <!-- End Links -->
                    </div>
                </div>
            </div>
            <!-- End Mega Menu -->
        </li>
        <!-- End Mega Menu Item -->

        <!-- New Arrivals - Mega Menu -->
        <li class="hs-has-mega-menu nav-item g-ml-10--lg g-ml-15--xl" data-animation-in="fadeIn"
            data-animation-out="fadeOut" data-position="right">
            <a id="mega-menu-label-5" class="nav-link text-uppercase g-color-primary--hover g-px-5 g-py-20"
                href="#!" aria-haspopup="true" aria-expanded="false">
                New Arrivals
                <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i>
            </a>

            <!-- Mega Menu -->
            <div class="w-100 hs-mega-menu u-shadow-v11 g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-bg-white g-pa-30 g-mt-17"
                aria-labelledby="mega-menu-label-5">
                <div class="row">
                    <div class="col-md-4 g-mb-30 g-mb-0--md">
                        <!-- Article -->
                        <article
                            class="g-bg-size-cover g-bg-pos-center g-bg-cover g-bg-bluegray-opacity-0_3--after text-center g-px-40 g-py-80"
                            data-bg-img-src="ecommerce/assets/img-temp/600x400/img1.jpg">
                            <div class="g-pos-rel g-z-index-1">
                                <span class="d-block g-color-white g-font-weight-400 text-uppercase mb-3">Blouse</span>
                                <span class="d-block h2 g-color-white mb-4">Lafayette</span>
                                <a class="btn u-btn-white g-brd-primary--hover g-color-white--hover g-bg-primary--hover g-font-size-11 text-uppercase g-py-10 g-px-20"
                                    href="#!">Shop Now</a>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="col-md-4 g-mb-30 g-mb-0--md">
                        <!-- Article -->
                        <article
                            class="g-bg-size-cover g-bg-pos-center g-bg-cover g-bg-bluegray-opacity-0_3--after text-center g-px-40 g-py-80"
                            data-bg-img-src="ecommerce/assets/img-temp/600x400/img2.jpg">
                            <div class="g-pos-rel g-z-index-1">
                                <span class="d-block g-color-white g-font-weight-400 text-uppercase mb-3">Hamburg
                                    Hats</span>
                                <span class="d-block h2 g-color-white mb-4">Beaver</span>
                                <a class="btn u-btn-white g-brd-primary--hover g-color-white--hover g-bg-primary--hover g-font-size-11 text-uppercase g-py-10 g-px-20"
                                    href="#!">Shop Now</a>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="col-md-4 g-mb-30 g-mb-0--md">
                        <!-- Article -->
                        <article
                            class="g-bg-size-cover g-bg-pos-center g-bg-cover g-bg-bluegray-opacity-0_3--after text-center g-px-40 g-py-80"
                            data-bg-img-src="ecommerce/assets/img-temp/600x400/img3.jpg">
                            <div class="g-pos-rel g-z-index-1">
                                <span
                                    class="d-block g-color-white g-font-weight-400 text-uppercase mb-3">Glasses</span>
                                <span class="d-block h2 g-color-white mb-4">RayBan</span>
                                <a class="btn u-btn-white g-brd-primary--hover g-color-white--hover g-bg-primary--hover g-font-size-11 text-uppercase g-py-10 g-px-20"
                                    href="#!">Shop Now</a>
                            </div>
                        </article>
                        <!-- End Article -->
                    </div>
                </div>
            </div>
            <!-- End Mega Menu -->
        </li>
        <!-- End New Arrivals - Mega Menu -->

        <li class="nav-item g-ml-10--lg">
            <a class="nav-link text-uppercase g-color-primary--hover g-pl-5 g-pr-0 g-py-20" href="/">Main</a>
        </li>
    </ul>
</div>
