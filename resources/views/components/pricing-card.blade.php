{{--
    Pricing Card Component
    Usage:
        <x-pricing-card
            name="Daily Ritual"
            price="₱850"
            :highlighted="true"
            :features="['Two 250g bags monthly', 'Free coworking nook reservation']"
        />
--}}
@props(['name', 'price', 'period' => '/month', 'features' => [], 'highlighted' => false, 'cta' => 'Subscribe'])

<div class="{{ $highlighted ? 'border-2 border-amber bg-white' : 'border border-line bg-white/50' }} relative flex flex-col rounded-2xl p-8">
    @if($highlighted)
        <span class="absolute -top-3 left-8 rounded-full bg-amber px-3 py-1 text-xs font-medium text-ink">Most Popular</span>
    @endif

    <h3 class="font-display text-xl text-ink">{{ $name }}</h3>
    <p class="mt-4 flex items-baseline gap-1">
        <span class="font-display text-4xl text-ink">{{ $price }}</span>
        <span class="font-body text-sm text-ink/60">{{ $period }}</span>
    </p>

    <ul class="mt-6 flex-1 space-y-3 font-body text-sm text-ink/75">
        @foreach($features as $feature)
            <li class="flex items-start gap-2">
                <svg class="mt-0.5 h-4 w-4 shrink-0 text-olive" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                    <path d="M3 8.5 6.5 12 13 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <x-button href="#contact" :variant="$highlighted ? 'accent' : 'secondary'" class="mt-8 w-full">
        {{ $cta }}
    </x-button>
</div>
