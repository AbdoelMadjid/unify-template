@php
    $menuPages = config('_menu_pages.menu_pages')[0];

    $pagesActive = collect($menuPages['submenu'])->contains(function ($item) {
        if (isset($item['route']) && request()->routeIs($item['route'])) {
            return true;
        }

        return isset($item['submenu']) &&
            collect($item['submenu'])->contains(
                fn($child) => isset($child['route']) && request()->routeIs($child['route']),
            );
    });
@endphp

<!-- Pages -->
<li class="hs-has-sub-menu nav-item g-mx-10--lg g-mx-15--xl {{ $pagesActive ? 'active' : '' }}" data-animation-in="fadeIn"
    data-animation-out="fadeOut">

    <a class="nav-link g-py-7 g-px-0" href="#!">
        {{ $menuPages['label'] }}
    </a>

    {{-- LEVEL 1 (Recursive) --}}
    @include('layouts.main.menu-recursive', [
        'items' => $menuPages['submenu'],
        'level' => 1,
    ])

</li>
<!-- End Pages -->
