{{--
    Testimonial Card Component
    Usage:
        <x-testimonial-card
            name="Marga Villanueva"
            position="Daily Ritual member"
            review="I stopped buying beans from the grocery entirely."
            initials="MV"
        />
--}}
@props(['name', 'position', 'review', 'photo' => null, 'initials'])

<div class="rounded-2xl border border-line bg-white/40 p-6">
    <p class="font-body text-sm leading-relaxed text-ink/80">&ldquo;{{ $review }}&rdquo;</p>

    <div class="mt-6 flex items-center gap-3">
        @if ($photo)
            <img src="{{ $photo }}" alt="{{ $name }}" class="h-10 w-10 rounded-full object-cover">
        @else
            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-olive/15 font-display text-sm text-olive">
                {{ $initials }}
            </div>
        @endif
        <div>
            <p class="font-body text-sm font-medium text-ink">{{ $name }}</p>
            <p class="font-body text-xs text-ink/60">{{ $position }}</p>
        </div>
    </div>
</div>
