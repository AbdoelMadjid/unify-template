@php
    $level = $level ?? 1;

    $badgeMap = [
        'new' => 'u-label g-rounded-3 g-font-size-10 g-bg-lightred g-py-3 g-pos-rel g-top-minus-1 g-ml-5',
        'hot' => 'u-label g-rounded-3 g-font-size-10 g-bg-orange g-py-3 g-pos-rel g-top-minus-1 g-ml-5',
        'pro' => 'u-label g-rounded-3 g-font-size-10 g-bg-primary g-py-3 g-pos-rel g-top-minus-1 g-ml-5',
    ];
@endphp

<ul
    class="hs-sub-menu list-unstyled u-shadow-v11 g-min-width-220 g-brd-top g-brd-primary g-brd-top-2
           {{ $level === 1 ? 'g-mt-17' : 'g-mt-minus-2' }}">
    @foreach ($items as $item)
        @php
            $hasSub = !empty($item['submenu']);
            $hasRoute = !empty($item['route']);

            $isActive =
                ($hasRoute && request()->routeIs($item['route'])) ||
                ($hasSub &&
                    collect($item['submenu'])->contains(
                        fn($child) => isset($child['route']) && request()->routeIs($child['route']),
                    ));
        @endphp

        <li class="dropdown-item {{ $hasSub ? 'hs-has-sub-menu' : '' }} {{ $isActive ? 'active' : '' }}">

            <a class="nav-link g-color-gray-dark-v4 {{ $isActive ? 'active' : '' }}"
                href="{{ $hasRoute ? route($item['route']) : '#!' }}" aria-haspopup="{{ $hasSub ? 'true' : 'false' }}"
                aria-expanded="false">

                {{ $item['label'] }}

                @if (!empty($item['badge']) && isset($badgeMap[$item['badge']]))
                    <span class="{{ $badgeMap[$item['badge']] }}">
                        {{ strtoupper($item['badge']) }}
                    </span>
                @endif
            </a>

            {{-- LEVEL 2 --}}
            @if ($hasSub)
                @include('layouts.ecommerce.menu-recursive-ecom', [
                    'items' => $item['submenu'],
                    'level' => $level + 1,
                ])
            @endif

        </li>
    @endforeach
</ul>
