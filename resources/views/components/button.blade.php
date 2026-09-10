{{--
    Reusable Button Component
    Usage:
        <x-button href="#pricing" variant="accent">Join Ka-Kafe Rewards</x-button>
        <x-button variant="secondary">Cancel</x-button>
--}}
@props(['variant' => 'primary', 'href' => null])

@php
    $base = 'inline-flex items-center justify-center gap-2 rounded-full px-6 py-3 text-sm font-medium transition-colors duration-150';

    $styles = [
        'primary'   => 'bg-ink text-stone hover:bg-coffee',
        'secondary' => 'border border-ink/20 text-ink hover:border-ink/60',
        'accent'    => 'bg-amber text-ink hover:bg-amber-dark hover:text-stone',
    ];

    $classes = $base . ' ' . ($styles[$variant] ?? $styles['primary']);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
