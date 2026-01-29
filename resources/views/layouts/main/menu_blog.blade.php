@php
    $menuBlog = config('_menu_blog.menu_blog')[0];

    $blogActive = collect($menuBlog['submenu'])->contains(function ($section) {
        return collect($section['submenu'])->contains(function ($item) {
            if (isset($item['submenu'])) {
                return collect($item['submenu'])->contains(fn($child) => request()->routeIs($child['route']));
            }

            return request()->routeIs($item['route']);
        });
    });
@endphp

<!-- Blog -->
<li class="hs-has-sub-menu nav-item g-mx-10--lg g-mx-15--xl {{ $blogActive ? 'active' : '' }}" data-animation-in="fadeIn"
    data-animation-out="fadeOut">

    <a class="nav-link g-py-7 g-px-0" href="#!">
        {{ $menuBlog['label'] }}
    </a>

    {{-- LEVEL 1 (Recursive) --}}
    @include('layouts.main.menu-recursive', [
        'items' => $menuBlog['submenu'],
        'level' => 1,
    ])

</li>
<!-- End Blog -->
