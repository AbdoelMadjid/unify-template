@foreach ($items as $item)
    @php
        $hasSub = !empty($item['submenu']);
        $hasRoute = !empty($item['route']);

        $isActive =
            ($hasRoute && request()->routeIs($item['route'])) ||
            ($hasSub &&
                collect($item['submenu'])->contains(function ($child) {
                    return (isset($child['route']) && request()->routeIs($child['route'])) ||
                        (isset($child['submenu']) &&
                            collect($child['submenu'])->contains(
                                fn($g) => isset($g['route']) && request()->routeIs($g['route']),
                            ));
                }));
    @endphp

    <li class="nav-item {{ $hasSub ? 'dropdown' : '' }} {{ $isActive ? 'active' : '' }}">

        <a class="nav-link {{ $hasSub ? 'dropdown-toggle' : '' }}" href="{{ $hasRoute ? route($item['route']) : '#!' }}"
            @if ($hasSub) data-toggle="dropdown" @endif>

            {{ $item['label'] }}
        </a>

        {{-- LEVEL 2+ --}}
        @if ($hasSub)
            <div class="dropdown-menu u-dropdown-static">
                <ul class="nav flex-column g-pl-10">
                    @include('layouts.main.sidebar-recursive', [
                        'items' => $item['submenu'],
                        'level' => $level + 1,
                    ])
                </ul>
            </div>
        @endif

    </li>
@endforeach
