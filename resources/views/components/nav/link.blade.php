@props([
    'to' => '#',
    'label' => 'Nav Link',
    'icon' => 'ti ti-circle-filled',
])

<li class="nav-item {{ request()->is($href) ? 'active' : '' }}">
    <a class="nav-link" href="{{ route($href) }}">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <i class="{{ $icon }}"></i>
        </span>
        <span class="nav-link-title">
            {{ $label }}
        </span>
    </a>
</li>
