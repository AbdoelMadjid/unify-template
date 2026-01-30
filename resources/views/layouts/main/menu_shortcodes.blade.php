@php
    $menuShortcodes = config('_menu_shortcodes.menu_shortcodes')[0];

    $shortcodesActive = collect($menuShortcodes['submenu'])->contains(function ($section) {
        return collect($section['submenu'])->contains(function ($item) {
            return (isset($item['route']) && request()->routeIs($item['route'])) ||
                (isset($item['submenu']) &&
                    collect($item['submenu'])->contains(
                        fn($child) => isset($child['route']) && request()->routeIs($child['route']),
                    ));
        });
    });
@endphp

<li class="hs-has-sub-menu nav-item g-mx-10--lg g-mx-15--xl {{ $shortcodesActive ? 'active' : '' }}"
    data-animation-in="fadeIn" data-animation-out="fadeOut">

    <a class="nav-link g-py-7 g-px-0" href="#!">
        {{ $menuShortcodes['label'] }}
    </a>

    {{-- LEVEL 1 (Recursive) --}}
    @include('layouts.main.menu-recursive', [
        'items' => $menuShortcodes['submenu'],
        'level' => 1,
    ])

</li>
