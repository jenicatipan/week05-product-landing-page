{{--
    Feature Card Component
    Usage:
        <x-feature-card title="Roasted Weekly" description="...">
            <x-slot:icon>
                <svg>...</svg>
            </x-slot:icon>
        </x-feature-card>
--}}
@props(['icon' => null, 'title', 'description'])

<div class="rounded-2xl border border-line bg-white/40 p-6 transition-shadow duration-150 hover:shadow-md">
    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-amber/15 text-amber-dark">
        {!! $icon !!}
    </div>
    <h3 class="font-display text-lg text-ink">{{ $title }}</h3>
    <p class="mt-2 font-body text-sm leading-relaxed text-ink/70">{{ $description }}</p>
</div>
