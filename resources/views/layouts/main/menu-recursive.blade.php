@php
    /**
     * ==========================================
     * UNIFY MENU RECURSIVE (STABLE VERSION)
     * ==========================================
     * $items      : array menu
     * $level      : depth level
     * $parentType : type dari parent menu
     */

    $parentType = $parentType ?? null;

    /**
     * Mapping column Unify
     */
    $columnClass = match ($parentType) {
        'dual-column' => 'u-dropdown-col-2',
        'col-3' => 'u-dropdown-col-3',
        'col-4' => 'u-dropdown-col-4',
        default => '',
    };

    /**
     * Badge mapping
     */
    $badgeMap = [
        'new' => [
            'label' => 'New',
            'class' => 'u-label g-rounded-3 g-font-size-10 g-bg-lightred g-py-3 g-pos-rel g-top-minus-1 g-ml-5',
        ],
        'hot' => [
            'label' => 'Hot',
            'class' => 'u-label g-rounded-3 g-font-size-10 g-bg-orange g-py-3 g-pos-rel g-top-minus-1 g-ml-5',
        ],
        'pro' => [
            'label' => 'Pro',
            'class' => 'u-label g-rounded-3 g-font-size-10 g-bg-primary g-py-3 g-pos-rel g-top-minus-1 g-ml-5',
        ],
    ];
@endphp

<ul
    class="hs-sub-menu list-unstyled u-shadow-v11
           g-brd-top g-brd-primary g-brd-top-2
           g-min-width-220
           {{ $level > 1 ? 'g-mt-minus-2' : 'g-mt-18 g-mt-8--lg--scrolling' }}
           {{ $columnClass }}">
    @foreach ($items as $item)
        @php
            $hasSub = !empty($item['submenu']);
            $hasRoute = !empty($item['route']);
            $target = $item['target'] ?? '_self';
            $notes = $item['notes'] ?? null;
            $badgeKey = strtolower($item['badge'] ?? '');
            $isActive =
                ($hasRoute && request()->routeIs($item['route'])) ||
                ($hasSub &&
                    collect($item['submenu'])->contains(
                        fn($child) => isset($child['route']) && request()->routeIs($child['route']),
                    ));
        @endphp

        <li class="dropdown-item {{ $hasSub ? 'hs-has-sub-menu' : '' }} {{ $isActive ? 'active' : '' }}">
            <a class="nav-link {{ $isActive ? 'active' : '' }}" href="{{ $hasRoute ? route($item['route']) : '#!' }}"
                target="{{ $hasRoute ? $target : '_self' }}" aria-haspopup="{{ $hasSub ? 'true' : 'false' }}"
                aria-expanded="false">
                {{ $item['label'] }}

                @if ($notes)
                    <span class="g-opacity-0_7 g-font-size-12 g-ml-5">
                        {{ $notes }}
                    </span>
                @endif

                @if ($badgeKey && isset($badgeMap[$badgeKey]))
                    <span class="{{ $badgeMap[$badgeKey]['class'] }}">
                        {{ $badgeMap[$badgeKey]['label'] }}
                    </span>
                @endif
            </a>

            {{-- SUBMENU (RECURSIVE) --}}
            @if ($hasSub)
                @include('layouts.main.menu-recursive', [
                    'items' => $item['submenu'],
                    'level' => $level + 1,
                    'parentType' => $item['type'] ?? null,
                ])
            @endif
        </li>
    @endforeach
</ul>
