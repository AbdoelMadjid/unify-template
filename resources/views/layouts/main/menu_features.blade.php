@php
    $menuFeatures = config('_menu_features.menu_features')[0];

    $featuresActive = collect($menuFeatures['submenu'] ?? [])->contains(function ($section) {
        // LEVEL 1 tanpa submenu (Headers, Promo Block)
        if (!isset($section['submenu'])) {
            return isset($section['route']) && request()->routeIs($section['route']);
        }

        // LEVEL 2+
        return collect($section['submenu'])->contains(function ($item) {
            if (isset($item['submenu'])) {
                return collect($item['submenu'])->contains(fn($child) => request()->routeIs($child['route'] ?? ''));
            }

            return isset($item['route']) && request()->routeIs($item['route']);
        });
    });
@endphp

<!-- Features -->
<li class="hs-has-sub-menu nav-item g-mx-10--lg g-mx-15--xl {{ $featuresActive ? 'active' : '' }}"
    data-animation-in="fadeIn" data-animation-out="fadeOut">

    <a class="nav-link g-py-7 g-px-0" href="#!">
        {{ $menuFeatures['label'] }}
    </a>

    {{-- LEVEL 1 (Recursive) --}}
    @include('layouts.main.menu-recursive', [
        'items' => $menuFeatures['submenu'],
        'level' => 1,
    ])

</li>
<!-- End Blog -->
