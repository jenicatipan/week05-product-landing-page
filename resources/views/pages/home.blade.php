@extends('layouts.app')

@section('title', 'Kafe Lema — A Sip of Good Vibe')

@section('content')

    <x-navbar active="home" />

    <x-hero />

    {{-- ============ FEATURES ============ --}}
    <section id="features" class="mx-auto max-w-6xl px-6 py-24 lg:px-8">
        <div class="max-w-xl">
            <p class="font-body text-sm uppercase tracking-wide text-amber-dark">What we offer</p>
            <h2 class="mt-3 font-display text-3xl text-ink sm:text-4xl">
                Everything that makes a visit to Kafe Lema worth the trip up.
            </h2>
        </div>

        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <x-feature-card title="Premium Coffee" description="Enjoy high-quality coffee made from carefully selected beans and expertly prepared for every cup.">
                <x-slot:icon>
                    {{-- Coffee cup with steam --}}
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 8h10a2 2 0 0 1 2 2v1a3.5 3.5 0 0 1-3.5 3.5h-6A3.5 3.5 0 0 1 3 11v-1a2 2 0 0 1 1-1.7Z" stroke="currentColor" stroke-width="1.5"/><path d="M14.5 9h1a1.8 1.8 0 0 1 0 3.6h-1" stroke="currentColor" stroke-width="1.5"/><path d="M6.5 5c0-.8.7-1.1.7-1.9S6.5 2 6.5 2" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/><path d="M9.5 5c0-.8.7-1.1.7-1.9S9.5 2 9.5 2" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
                </x-slot:icon>
            </x-feature-card>

            <x-feature-card title="Kafe Lema Signature" description="Taste our special Kafe Lema Signature, a unique flavor crafted to give you a memorable café experience.">
                <x-slot:icon>
                    {{-- Star --}}
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M10 3.5 12 8l4.5.6-3.3 3.2.8 4.7-4-2.2-4 2.2.8-4.7L3.5 8.6 8 8Z" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"/></svg>
                </x-slot:icon>
            </x-feature-card>

            <x-feature-card title="Freshly Baked" description="Enjoy freshly baked pastries and treats prepared daily to pair perfectly with your favorite drink.">
                <x-slot:icon>
                    {{-- Croissant --}}
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M3 13c2-6 5-9 7-9s5 3 7 9c-2-1-3.5-.3-4.7.6C11 14.3 9 14.3 7.7 13.6 6.5 12.7 5 12 3 13Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
                </x-slot:icon>
            </x-feature-card>

            <x-feature-card title="Frappe" description="Cool down with our creamy and refreshing frappes, available in delicious flavors for every craving.">
                <x-slot:icon>
                    {{-- Cold cup with straw --}}
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M6 6h8l-.9 9.5a1.5 1.5 0 0 1-1.5 1.4H8.4a1.5 1.5 0 0 1-1.5-1.4L6 6Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M5 6h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M11.5 3.5 10 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                </x-slot:icon>
            </x-feature-card>

            <x-feature-card title="Free Wi-Fi" description="Stay connected with free Wi-Fi, making our café a great place to study, work, or catch up online.">
                <x-slot:icon>
                    {{-- Wifi signal --}}
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 8.3a8.5 8.5 0 0 1 12 0" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M6.3 10.9a5 5 0 0 1 7.4 0" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M8.6 13.4a1.8 1.8 0 0 1 2.8 0" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="10" cy="15.5" r="0.9" fill="currentColor"/></svg>
                </x-slot:icon>
            </x-feature-card>

            <x-feature-card title="Cozy Café Atmosphere" description="Relax and enjoy a warm, comfortable space that is perfect for meeting friends or spending time alone.">
                <x-slot:icon>
                    {{-- Armchair --}}
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M5 9V6.5A1.5 1.5 0 0 1 6.5 5h7A1.5 1.5 0 0 1 15 6.5V9" stroke="currentColor" stroke-width="1.5"/><rect x="3.5" y="9" width="13" height="5.5" rx="1.5" stroke="currentColor" stroke-width="1.5"/><path d="M4.5 14.5V16M15.5 14.5V16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                </x-slot:icon>
            </x-feature-card>
        </div>
    </section>

    {{-- ============ HOUSE RULES / COMMUNITY (additional component) ============ --}}
    <section id="house-rules" class="bg-olive/10 py-20">
        <div class="mx-auto max-w-4xl px-6 text-center lg:px-8">
            <p class="font-body text-sm uppercase tracking-wide text-olive">A Ka-Kafe Community</p>
            <h2 class="mt-3 font-display text-3xl text-ink sm:text-4xl">
                Thank you for being a responsible Ka-Kafe!
            </h2>
            <p class="mx-auto mt-5 max-w-2xl font-body text-base leading-relaxed text-ink/70">
                We believe that great coffee should never come at the expense of nature.
                That's why we've built our home on values of eco-consciousness,
                sustainability, and respect for our environment. As part of our community,
                we invite you to follow our house rules and join us in making a positive
                impact — one sip at a time.
            </p>
            <p class="mt-6 font-display text-xl text-olive">
                Together, we can make the world a better place.
            </p>
        </div>
    </section>

    {{-- ============ PRODUCT SHOWCASE ============ --}}
    <section id="product" class="bg-stone-2/60 py-24">
        <div class="mx-auto max-w-6xl px-6 lg:px-8">
            <div class="max-w-xl">
                <p class="font-body text-sm uppercase tracking-wide text-amber-dark">A Taste of Kafe Lema</p>
                <h2 class="mt-3 font-display text-3xl text-ink sm:text-4xl">
                    Discover our signature drinks, freshly baked treats, and cozy caf&eacute; experience.
                </h2>
            </div>

            {{-- Featured Products --}}
            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="overflow-hidden rounded-2xl border border-line bg-white shadow-sm">
                    <img src="{{ asset('images/kafe-lema/pastry.png') }}" alt="Freshly baked pastries and cookies in the display case" class="aspect-[4/3] w-full object-cover">
                    <div class="p-5">
                        <h3 class="font-display text-lg text-ink">Freshly Baked Treats</h3>
                        <p class="mt-2 font-body text-sm text-ink/70">Enjoy delicious cookies and freshly baked pastries, perfect with your favorite coffee.</p>
                    </div>
                </div>
                <div class="overflow-hidden rounded-2xl border border-line bg-white shadow-sm">
                    <img src="{{ asset('images/kafe-lema/drinks.png') }}" alt="drinks are served" class="aspect-[4/3] w-full object-cover">
                    <div class="p-5">
                        <h3 class="font-display text-lg text-ink">Kafe Lema Drinks</h3>
                        <p class="mt-2 font-body text-sm text-ink/70">From creamy frappes to refreshing beverages, there's something for every coffee lover.</p>
                    </div>
                </div>
                <div class="overflow-hidden rounded-2xl border border-line bg-white shadow-sm">
                    <img src="{{ asset('images/kafe-lema/coffee.png') }}" alt="Coffee is served" class="aspect-[4/3] w-full object-cover">
                    <div class="p-5">
                        <h3 class="font-display text-lg text-ink">Premium Coffee</h3>
                        <p class="mt-2 font-body text-sm text-ink/70">Enjoy carefully crafted coffee served fresh in a warm and inviting atmosphere.</p>
                    </div>
                </div>
            </div>

            {{-- Our Café Experience --}}
            <div class="mt-16 grid gap-8 lg:grid-cols-2 lg:items-center">
                <div class="overflow-hidden rounded-2xl border border-line shadow-sm">
                    <img src="{{ asset('images/kafe-lema/deck-view.png') }}" alt="Kafe Lema's deck seating with tables and mountain view" class="aspect-[4/3] w-full object-cover">
                </div>
                <div>
                    <p class="font-body text-xs font-medium uppercase tracking-wide text-ink/50">Our Café Experience</p>
                    <h3 class="mt-2 font-display text-2xl text-ink">A space made for lingering.</h3>
                    <p class="mt-3 font-body text-sm leading-relaxed text-ink/70">
                        A cozy and welcoming space where you can enjoy great coffee, delicious treats, and quality time with friends and family.
                    </p>
                </div>
            </div>

            {{-- Popular Favorites --}}
            <div class="mt-16">
                <p class="font-body text-xs font-medium uppercase tracking-wide text-ink/50">Popular Favorites</p>
                <div class="mt-4 flex flex-wrap items-center justify-between gap-6">
                    <ul class="grid flex-1 gap-4 font-body text-sm text-ink sm:grid-cols-2 lg:grid-cols-4">
                        <li class="flex items-center gap-2">
                            <svg width="18" height="18" viewBox="0 0 20 20" fill="none" class="shrink-0 text-amber-dark" aria-hidden="true"><path d="M4 8h10a2 2 0 0 1 2 2v1a3.5 3.5 0 0 1-3.5 3.5h-6A3.5 3.5 0 0 1 3 11v-1a2 2 0 0 1 1-1.7Z" stroke="currentColor" stroke-width="1.5"/><path d="M14.5 9h1a1.8 1.8 0 0 1 0 3.6h-1" stroke="currentColor" stroke-width="1.5"/></svg>
                            Premium Coffee
                        </li>
                        <li class="flex items-center gap-2">
                            <svg width="18" height="18" viewBox="0 0 20 20" fill="none" class="shrink-0 text-amber-dark" aria-hidden="true"><path d="M10 3.5 12 8l4.5.6-3.3 3.2.8 4.7-4-2.2-4 2.2.8-4.7L3.5 8.6 8 8Z" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"/></svg>
                            Kafe Lema Signature
                        </li>
                        <li class="flex items-center gap-2">
                            <svg width="18" height="18" viewBox="0 0 20 20" fill="none" class="shrink-0 text-amber-dark" aria-hidden="true"><path d="M3 13c2-6 5-9 7-9s5 3 7 9c-2-1-3.5-.3-4.7.6C11 14.3 9 14.3 7.7 13.6 6.5 12.7 5 12 3 13Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
                            Freshly Baked
                        </li>
                        <li class="flex items-center gap-2">
                            <svg width="18" height="18" viewBox="0 0 20 20" fill="none" class="shrink-0 text-amber-dark" aria-hidden="true"><path d="M6 6h8l-.9 9.5a1.5 1.5 0 0 1-1.5 1.4H8.4a1.5 1.5 0 0 1-1.5-1.4L6 6Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M5 6h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M11.5 3.5 10 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                            Frappe
                        </li>
                    </ul>
                    <x-button href="#pricing" variant="accent">View Our Menu</x-button>
                </div>
            </div>

            {{-- Key Highlights --}}
            <div class="mt-16 rounded-2xl border border-line bg-white p-8">
                <h3 class="font-display text-xl text-ink">Why Customers Love Kafe Lema</h3>
                <ul class="mt-5 grid gap-4 font-body text-sm text-ink/75 sm:grid-cols-2 lg:grid-cols-3">
                    <li class="flex items-center gap-2">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" class="shrink-0 text-olive" aria-hidden="true"><path d="M3 8.5 6.5 12 13 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Premium Coffee
                    </li>
                    <li class="flex items-center gap-2">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" class="shrink-0 text-olive" aria-hidden="true"><path d="M3 8.5 6.5 12 13 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Kafe Lema Signature Drinks
                    </li>
                    <li class="flex items-center gap-2">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" class="shrink-0 text-olive" aria-hidden="true"><path d="M3 8.5 6.5 12 13 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Freshly Baked Treats
                    </li>
                    <li class="flex items-center gap-2">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" class="shrink-0 text-olive" aria-hidden="true"><path d="M3 8.5 6.5 12 13 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Refreshing Frappes
                    </li>
                    <li class="flex items-center gap-2">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" class="shrink-0 text-olive" aria-hidden="true"><path d="M3 8.5 6.5 12 13 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Free Wi-Fi
                    </li>
                    <li class="flex items-center gap-2">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" class="shrink-0 text-olive" aria-hidden="true"><path d="M3 8.5 6.5 12 13 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Cozy Caf&eacute; Atmosphere
                    </li>
                </ul>
            </div>
        </div>
    </section>

    {{-- ============ MENU / PRICING ============ --}}
    <section id="pricing" class="mx-auto max-w-6xl px-6 py-24 lg:px-8">
        <div class="max-w-xl">
            <p class="font-body text-sm uppercase tracking-wide text-amber-dark">Our Menu Favorites</p>
            <h2 class="mt-3 font-display text-3xl text-ink sm:text-4xl">
                Discover our signature drinks and freshly baked treats at Kafe Lema.
            </h2>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            <x-pricing-card
                name="Kafe Lema Special"
                price="₱120"
                period=""
                cta="Order Now"
                :features="['Kafe Lema Signature Drink', 'Rich and creamy flavor', 'Served hot or iced', 'Perfect for café lovers']"
            />
            <x-pricing-card
                name="Ube Cheese Muffin"
                price="₱85"
                period=""
                cta="Order Now"
                :features="['Freshly baked muffin', 'Ube and cheese filling', 'Soft and flavorful', 'Perfect with coffee']"
            />
            <x-pricing-card
                name="Spanish Latte"
                price="₱120"
                period=""
                cta="Order Now"
                :features="['Espresso', 'Creamy milk', 'Sweet Spanish-style flavor', 'Served hot or iced']"
            />
        </div>
    </section>

       {{-- ============ TESTIMONIALS ============ --}}
    <section id="testimonials" class="bg-stone-2/60 py-24">
        <div class="mx-auto max-w-6xl px-6 lg:px-8">
            <div class="max-w-xl">
                <p class="font-body text-sm uppercase tracking-wide text-amber-dark">Stories Shared Over Coffee</p>
                <h2 class="mt-3 font-display text-3xl text-ink sm:text-4xl">
                    More than coffee, Kafe Lema is a place for conversations, journeys, and memorable moments.
                </h2>
            </div>

            <div class="mt-12 grid gap-6 lg:grid-cols-3">
                <x-testimonial-card
                    name="Leo Santos"
                    position="Customer"
                    review="Coffee, guitar, good conversations, and stories shared along the road. Our recent ride to Infanta was more than just a destination, it was about the moments, the laughs, and the stories that made the journey memorable."
                    photo="{{ asset('images/kafe-lema/Customer1.png') }}"
                    initials="LS"
                />
                <x-testimonial-card
                    name="Rish Dailo"
                    position="Customer"
                    review="Tara, kape. Two simple words — but sometimes, they mean more than sharing a cup. They mean pause with me, sit with me, talk with me, and breathe with me for a while."
                    photo="{{ asset('images/kafe-lema/Customer2.jpg') }}"
                    initials="RD"
                />
                <x-testimonial-card
                    name="Jed Penikeyt"
                    position="Customer"
                    review="Pwedeng solo ride mag isa, pwedeng may kasama, bagong kaibigan makikilala, ang istorya ay nasa Kafe Lema. Seasalt sa tabi ng Kamp Lema."
                    photo="{{ asset('images/kafe-lema/Customer3.jpg') }}"
                    initials="JP"
                />
            </div>
        </div>
    </section>

    {{-- ============ CALL TO ACTION ============ --}}
    <section class="mx-auto max-w-6xl px-6 py-24 lg:px-8">
        <div class="flex flex-col items-start gap-8 rounded-3xl bg-ink px-8 py-14 text-stone sm:px-14 lg:flex-row lg:items-center lg:justify-between">
            <div class="max-w-lg">
                <h2 class="font-display text-3xl sm:text-4xl">Ready for your next cup?.</h2>
                <p class="mt-3 font-body text-stone/70">
                    Start your Kafe Lema experience today.
                    Enjoy our signature drinks, freshly baked treats, and a cozy place made for good coffee and great conversations.
                </p>
            </div>
            <div class="flex flex-wrap gap-3">
                <x-button href="#" variant="accent">Visit Kafe Lema</x-button>
                <x-button href="#" variant="secondary" class="border-stone/30 text-stone hover:border-stone">Order Now</x-button>
                <x-button href="#contact" variant="secondary" class="border-stone/30 text-stone hover:border-stone">Contact Us</x-button>
            </div>
        </div>
    </section>

    <x-footer />

@endsection
