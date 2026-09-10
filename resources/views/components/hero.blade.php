{{--
    Hero Section Component
    Usage: <x-hero />
--}}
<section id="home" class="relative overflow-hidden bg-ink text-stone">
    <div class="mx-auto grid max-w-6xl gap-12 px-6 py-24 lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:px-8 lg:py-28">

        {{-- Product name, headline, description, CTAs --}}
        <div>
            <p class="font-body text-sm uppercase tracking-wide text-amber">Kafe Lema · A Sip of Good Vibe</p>
            <h1 class="mt-4 font-display text-4xl leading-tight sm:text-5xl">
                Drink Coffee. Love Nature.
                <span class="text-amber">Choose Sustainability.</span>
            </h1>
            <p class="mt-6 max-w-md font-body text-base text-stone/70">
                Welcome to Kafe Lema, where every cup tells a story. Story of warmth,
                connection, and care for the Earth we share. Great coffee should never come
                at the expense of nature.
            </p>
            <div class="mt-8 flex flex-wrap items-center gap-4">
                <x-button href="#pricing" variant="accent">Visit Kafe Lema</x-button>
                <x-button href="#features" variant="secondary" class="border-stone/30 text-stone hover:border-stone">
                    Contact us
                </x-button>
            </div>
        </div>

        {{-- Real photo of the view deck --}}
        <div class="relative">
            <div class="overflow-hidden rounded-3xl border border-stone/10 shadow-xl">
                <img
                    src="{{ asset('images/kafe-lema/home-view.jpg') }}"
                    alt="Kafe Lema's mountain-view deck seating among the trees"
                    class="aspect-[4/5] w-full object-cover"
                >
            </div>
        </div>
    </div>
</section>
