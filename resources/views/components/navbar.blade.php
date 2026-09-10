{{--
    Navigation Bar Component
    Usage: <x-navbar active="home" />
--}}
@props(['active' => 'home'])

<header class="sticky top-0 z-50 border-b border-line bg-stone/95 backdrop-blur">
    <nav class="mx-auto flex max-w-6xl items-center justify-between px-6 py-3 lg:px-8">
        <a href="{{ url('/') }}" class="flex items-center gap-2">
            <img src="{{ asset('images/kafe-lema/logo.jpg') }}" alt="Kafe Lema logo" class="h-10 w-10 rounded-full object-cover">
            <span class="font-display text-lg tracking-tight text-ink">Kafe Lema</span>
        </a>

        <ul class="hidden items-center gap-8 font-body text-sm text-ink/80 lg:flex">
            <li><a href="#home" data-nav-link="home" class="nav-link hover:text-ink {{ $active === 'home' ? 'is-active' : '' }}">Home</a></li>
            <li><a href="#features" data-nav-link="features" class="nav-link hover:text-ink">Features</a></li>
            <li><a href="#pricing" data-nav-link="pricing" class="nav-link hover:text-ink">Pricing</a></li>
            <li><a href="#testimonials" data-nav-link="testimonials" class="nav-link hover:text-ink">Testimonials</a></li>
            <li><a href="#contact" data-nav-link="contact" class="nav-link hover:text-ink">Contact</a></li>
        </ul>

        <div class="hidden items-center gap-3 lg:flex">
            <a href="#" class="rounded-full px-4 py-2 text-sm font-medium text-ink/80 hover:text-ink">Sign In</a>
            <x-button href="#pricing" variant="primary">Get Started</x-button>
        </div>

        <button
            id="menu-toggle"
            class="lg:hidden"
            aria-label="Toggle menu"
            aria-expanded="false"
            aria-controls="mobile-menu"
            onclick="
                const menu = document.getElementById('mobile-menu');
                const expanded = this.getAttribute('aria-expanded') === 'true';
                menu.classList.toggle('hidden');
                this.setAttribute('aria-expanded', String(!expanded));
            "
        >
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M4 7h16M4 12h16M4 17h16" stroke="#2A1F1A" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
        </button>
    </nav>

    <div id="mobile-menu" class="hidden border-t border-line bg-stone px-6 pb-6 lg:hidden">
        <ul class="flex flex-col gap-4 pt-4 font-body text-sm text-ink/80">
            <li><a href="#home" data-nav-link="home" class="nav-link">Home</a></li>
            <li><a href="#features" data-nav-link="features" class="nav-link">Features</a></li>
            <li><a href="#pricing" data-nav-link="pricing" class="nav-link">Pricing</a></li>
            <li><a href="#testimonials" data-nav-link="testimonials" class="nav-link">Testimonials</a></li>
            <li><a href="#contact" data-nav-link="contact" class="nav-link">Contact</a></li>
            <li><a href="#">Sign In</a></li>
            <li><x-button href="#pricing" variant="primary" class="w-full text-center">Get Started</x-button></li>
        </ul>
    </div>
</header>
