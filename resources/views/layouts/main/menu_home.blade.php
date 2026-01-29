@php
    $menuHome = config('_menu_home.menu_home')[0];
    $submenus = $menuHome['submenu'];

    $isActive = collect($submenus)->contains(function ($item) {
        return $item['route'] && request()->routeIs($item['route']);
    });

    $chunks = array_chunk($submenus, ceil(count($submenus) / 2));
@endphp

<!-- Home -->
<li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-15--xl {{ $isActive ? 'active' : '' }}" data-animation-in="fadeIn"
    data-animation-out="fadeOut" data-max-width="60%" data-position="left">

    <a id="mega-menu-home" class="nav-link g-py-7 g-px-0" href="#!" aria-haspopup="true" aria-expanded="false">
        {{ $menuHome['label'] }}
        <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i>
    </a>

    <!-- Mega Menu -->
    <div class="w-100 hs-mega-menu u-shadow-v11 font-weight-normal
                g-brd-top g-brd-primary g-brd-top-2
                g-bg-white g-mt-18 g-mt-8--lg--scrolling"
        aria-labelledby="mega-menu-home">

        <div class="row align-items-stretch no-gutters">

            @foreach ($chunks as $index => $items)
                <div class="col-lg-6 {{ $index === 1 ? 'g-brd-left--lg g-brd-gray-light-v5' : '' }}">
                    <ul class="list-unstyled">
                        @foreach ($items as $item)
                            <li class="dropdown-item {{ request()->routeIs($item['route']) ? 'active' : '' }}">
                                <a href="{{ $item['route'] ? route($item['route']) : '#!' }}"
                                    class="nav-link {{ request()->routeIs($item['route']) ? 'active' : '' }}">
                                    {{ $item['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

        </div>
    </div>
    <!-- End Mega Menu -->
</li>
<!-- End Home -->
