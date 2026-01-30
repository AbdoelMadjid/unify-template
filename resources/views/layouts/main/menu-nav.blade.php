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
        @include('layouts.main.menu_features')
        <!-- End Features -->

        <!-- Shortcodes -->
        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
            <a href="{{ route('unify.templates.main.shortcodes.index') }}"
                class="nav-link g-py-7 g-px-0 {{ request()->routeIs('unify.templates.main.shortcodes.index') ? 'active' : '' }}">Shortcodes</a>
        </li>
        <!-- End Shortcodes -->

        <!-- Demos -->
        @include('layouts.main.menu_demo')
        <!-- End Demos -->
    </ul>
</div>
