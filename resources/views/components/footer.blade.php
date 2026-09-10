{{--
    Footer Component
    Usage: <x-footer />
--}}
<footer id="contact" class="border-t border-line bg-ink text-stone/80">
    <div class="mx-auto grid max-w-6xl gap-10 px-6 py-16 lg:grid-cols-4 lg:px-8">

        <div>
            <div class="flex items-center gap-2">
                <img src="{{ asset('images/kafe-lema/logo.jpg') }}" alt="Kafe Lema logo" class="h-8 w-8 rounded-full object-cover">
                <span class="font-display text-lg text-stone">Kafe Lema</span>
            </div>
            <p class="mt-3 font-body text-sm text-stone/60">
                A sip of good vibe of coffee and pastries with a view, built on
                eco-consciousness and respect for our environment.
            </p>
            <div class="mt-4 flex gap-3">
                <a href="#" aria-label="Facebook" class="text-stone/60 hover:text-amber">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M13 22v-8h2.7l.4-3H13V9c0-.9.2-1.5 1.6-1.5H16V5c-.3 0-1.3-.1-2.4-.1-2.4 0-4.1 1.5-4.1 4.2V11H7v3h2.5v8H13Z"/></svg>
                </a>
                <a href="#" aria-label="Instagram" class="text-stone/60 hover:text-amber">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.6"/><circle cx="17.2" cy="6.8" r="1" fill="currentColor"/></svg>
                </a>
                <a href="#" aria-label="TikTok" class="text-stone/60 hover:text-amber">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14 3v10.6a2.6 2.6 0 1 1-2-2.5V9a4.9 4.9 0 1 0 4 4.8V8.3A6.6 6.6 0 0 0 20 10V7.7a4 4 0 0 1-3-1.4A4 4 0 0 1 16 3h-2Z"/></svg>
                </a>
            </div>
        </div>

        <div>
            <p class="font-body text-sm font-medium text-stone">Quick Links</p>
            <ul class="mt-4 space-y-2 font-body text-sm text-stone/60">
                <li><a href="#home" class="hover:text-amber">Home</a></li>
                <li><a href="#features" class="hover:text-amber">Features</a></li>
                <li><a href="#pricing" class="hover:text-amber">Pricing</a></li>
                <li><a href="#testimonials" class="hover:text-amber">Testimonials</a></li>
            </ul>
        </div>

        <div>
            <p class="font-body text-sm font-medium text-stone">Visit Us</p>
            <ul class="mt-4 space-y-2 font-body text-sm text-stone/60">
                <li>KM 96, Sitio Kamagong Little Baguio, Brgy. Bagong Silang, Real, Quezon, Real, Philippines, 4335</li>
                <li>Weekdays: 7AM to 7PM<br>
                    Weekend: 7AM to 8PM</li>
            </ul>
        </div>

        <div>
            <p class="font-body text-sm font-medium text-stone">Contact</p>
            <ul class="mt-4 space-y-2 font-body text-sm text-stone/60">
                <li>Email: thekamplema@gmail.com</li>
                <li>Facebook: Kafe Lema</li>
            </ul>
        </div>
    </div>

    <div class="border-t border-stone/10 px-6 py-6 text-center font-body text-xs text-stone/50 lg:px-8">
        © {{ date('Y') }} Kafe Lema. All rights reserved.
    </div>
</footer>
