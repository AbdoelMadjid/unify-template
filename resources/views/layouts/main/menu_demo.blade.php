@php
    $menuDemo = config('_menu_demo.menu_demo')[0];
@endphp

<!-- Demos -->
<li class="hs-has-sub-menu nav-item g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">

    <a class="nav-link g-py-7 g-px-0" href="#!">
        {{ $menuDemo['label'] }}
    </a>

    {{-- LEVEL 1 (Recursive) --}}
    @include('layouts.main.menu-recursive', [
        'items' => $menuDemo['submenu'],
        'level' => 1,
    ])

</li>
<!-- End Demos -->
