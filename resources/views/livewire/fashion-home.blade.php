<div class="flex-1 bg-gradient-to-b from-rose-50 via-white to-white">
    <header class="border-b border-white/60 bg-white/70 backdrop-blur">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-6">
            <a href="#" class="flex items-center space-x-3">
                <x-app-logo-icon class="h-10 w-10 text-rose-600" />
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-zinc-500">Mistores</p>
                    <p class="text-sm font-medium text-zinc-800">Contemporary Fashion House</p>
                </div>
            </a>
            <nav class="hidden items-center gap-10 text-sm font-medium text-zinc-600 md:flex">
                <a href="#collections" class="transition hover:text-zinc-900">Collections</a>
                <a href="#trends" class="transition hover:text-zinc-900">Trends</a>
                <a href="#lookbook" class="transition hover:text-zinc-900">Lookbook</a>
                <a href="#journal" class="transition hover:text-zinc-900">Journal</a>
            </nav>
            <div class="flex items-center gap-3">
                <a href="{{ route('login') }}" class="hidden text-sm font-medium text-zinc-600 transition hover:text-zinc-900 md:block">Sign in</a>
                <a href="#" class="inline-flex items-center rounded-full bg-zinc-900 px-5 py-2 text-sm font-semibold text-white shadow-lg shadow-rose-200/60 transition hover:bg-zinc-700">Book a Styling Session</a>
            </div>
        </div>
    </header>

    <main class="relative">
        <section class="relative overflow-hidden">
            <div class="absolute inset-x-0 -top-32 h-72 bg-gradient-to-b from-rose-200/40 via-white to-transparent blur-3xl"></div>
            <div class="mx-auto grid max-w-7xl gap-16 px-6 pb-24 pt-24 lg:grid-cols-[1.2fr,1fr] lg:items-center">
                <div class="space-y-10">
                    <span class="inline-flex items-center rounded-full bg-rose-100 px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.3em] text-rose-700">SS25 Preview</span>
                    <h1 class="text-4xl font-semibold tracking-tight text-zinc-900 sm:text-5xl lg:text-6xl">Wardrobes curated for luminous city nights and effortless daylight moments.</h1>
                    <p class="max-w-xl text-lg leading-relaxed text-zinc-600">Discover limited-edition drops, runway-inspired tailoring, and sustainable fabrics crafted to follow every rhythm of your day. Personal stylists and atelier fittings available worldwide.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#collections" class="inline-flex items-center rounded-full bg-zinc-900 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-zinc-900/10 transition hover:bg-zinc-700">Explore Collections</a>
                        <a href="#journal" class="inline-flex items-center rounded-full border border-zinc-300 px-6 py-3 text-sm font-semibold text-zinc-900 transition hover:border-zinc-900 hover:text-zinc-900">Read the Journal</a>
                    </div>
                    <dl class="grid gap-6 sm:grid-cols-3">
                        <div>
                            <dt class="text-sm font-medium text-zinc-500">Pieces crafted in Europe</dt>
                            <dd class="mt-1 text-3xl font-semibold text-zinc-900">280+</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-zinc-500">Exclusive atelier partners</dt>
                            <dd class="mt-1 text-3xl font-semibold text-zinc-900">42</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-zinc-500">Global clientele</dt>
                            <dd class="mt-1 text-3xl font-semibold text-zinc-900">35k</dd>
                        </div>
                    </dl>
                </div>
                <div class="relative">
                    <div class="absolute -inset-6 rounded-[2.5rem] bg-gradient-to-br from-rose-100 via-white to-white blur-2xl"></div>
                    <div class="relative overflow-hidden rounded-[2.5rem] border border-white/70 bg-white/80 shadow-xl shadow-rose-200/70">
                        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=1200&q=80" alt="Model wearing Mistores" class="h-full w-full object-cover" />
                        <div class="absolute bottom-6 left-6 right-6 rounded-2xl bg-white/90 p-6 backdrop-blur">
                            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-zinc-500">Look 07</p>
                            <p class="mt-2 text-lg font-medium text-zinc-900">Pearl sheen trench layered over silk knit column dress.</p>
                            <p class="mt-3 text-sm text-zinc-500">Paired with the luminous ankle boot in obsidian.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="collections" class="border-t border-zinc-100 bg-white/80 py-20">
            <div class="mx-auto flex max-w-7xl flex-col gap-12 px-6">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.3em] text-rose-600">Curated Capsules</p>
                        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-zinc-900 sm:text-4xl">Collections designed for iconic wardrobes.</h2>
                    </div>
                    <p class="max-w-xl text-base text-zinc-600">Every capsule blends hand-finished tailoring with progressive silhouettes. Browse our stylist-led edits crafted for the multi-hyphenate lifestyle.</p>
                </div>
                <div class="grid gap-8 md:grid-cols-3">
                    @foreach ($collections as $collection)
                        <article class="group relative overflow-hidden rounded-3xl border border-zinc-100 bg-white shadow-sm transition hover:-translate-y-2 hover:shadow-xl">
                            <div class="aspect-[4/5] overflow-hidden">
                                <img src="{{ $collection['image'] }}" alt="{{ $collection['name'] }}" class="h-full w-full object-cover transition duration-700 group-hover:scale-105" />
                            </div>
                            <div class="space-y-3 px-6 pb-8 pt-6">
                                <h3 class="text-xl font-semibold text-zinc-900">{{ $collection['name'] }}</h3>
                                <p class="text-sm leading-relaxed text-zinc-600">{{ $collection['description'] }}</p>
                                <a href="#" class="inline-flex items-center text-sm font-semibold text-rose-600 transition hover:text-rose-700">Discover the edit →</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="trends" class="bg-gradient-to-br from-rose-50 via-white to-white py-20">
            <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-[1.1fr,0.9fr] lg:items-center">
                <div class="space-y-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-rose-600">Seasonal Direction</p>
                    <h2 class="text-3xl font-semibold tracking-tight text-zinc-900 sm:text-4xl">Runway intelligence tailored to your everyday calendar.</h2>
                    <p class="max-w-xl text-base text-zinc-600">Our fashion editors translate global shows into ready-to-wear styling cues. Blend sculpted tailoring with luminous textures and palette-elevating accessories.</p>
                    <div class="grid gap-6">
                        @foreach ($trends as $trend)
                            <div class="rounded-2xl border border-rose-100/70 bg-white/70 p-6 backdrop-blur transition hover:border-rose-200">
                                <h3 class="text-lg font-semibold text-zinc-900">{{ $trend['title'] }}</h3>
                                <p class="mt-2 text-sm text-zinc-600">{{ $trend['summary'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="lookbook" class="relative">
                    <div class="absolute inset-0 rounded-[2.5rem] bg-gradient-to-tr from-rose-200/40 via-white to-transparent blur-2xl"></div>
                    <div class="relative overflow-hidden rounded-[2.5rem] border border-rose-100/80 bg-white/80 shadow-2xl shadow-rose-200/80">
                        <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=1100&q=80" alt="Mistores lookbook" class="h-full w-full object-cover" />
                        <div class="absolute inset-x-6 bottom-6 rounded-2xl bg-zinc-900/80 p-6 text-white backdrop-blur">
                            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-white/70">Lookbook</p>
                            <p class="mt-3 text-lg font-medium">AW24 // Chromatic Poetry</p>
                            <p class="mt-2 text-sm text-white/70">Shadows of charcoal and sable layered with auric threads and glass-bead embroidery.</p>
                            <a href="#" class="mt-4 inline-flex items-center text-sm font-semibold text-white hover:text-rose-200">View the campaign →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="border-t border-zinc-100 bg-white py-20">
            <div class="mx-auto flex max-w-7xl flex-col gap-12 px-6">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.3em] text-rose-600">Voices</p>
                        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-zinc-900 sm:text-4xl">Loved by stylists, editors, and modern icons.</h2>
                    </div>
                    <p class="max-w-xl text-base text-zinc-600">Hear how Mistores elevates wardrobes for visionaries around the world — from editorial shoots to red carpet debuts.</p>
                </div>
                <div class="grid gap-8 lg:grid-cols-3">
                    @foreach ($testimonials as $testimonial)
                        <figure class="flex h-full flex-col justify-between rounded-3xl border border-zinc-100 bg-zinc-50/60 p-8 shadow-sm">
                            <blockquote class="text-lg font-medium text-zinc-800">“{{ $testimonial['quote'] }}”</blockquote>
                            <figcaption class="mt-6 text-sm text-zinc-600">
                                <p class="font-semibold text-zinc-900">{{ $testimonial['name'] }}</p>
                                <p>{{ $testimonial['role'] }}</p>
                            </figcaption>
                        </figure>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="journal" class="bg-gradient-to-br from-zinc-900 via-zinc-950 to-black py-20 text-white">
            <div class="mx-auto flex max-w-7xl flex-col gap-12 px-6">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.3em] text-white/60">Journal</p>
                        <h2 class="mt-4 text-3xl font-semibold tracking-tight text-white sm:text-4xl">Inside the atelier: stories shaping the season.</h2>
                    </div>
                    <p class="max-w-xl text-base text-white/70">Explore features, interviews, and guides curated by our editorial studio. Each story is crafted to inspire your wardrobe evolution.</p>
                </div>
                <div class="grid gap-8 lg:grid-cols-3">
                    @foreach ($journal as $entry)
                        <article class="flex h-full flex-col rounded-3xl border border-white/10 bg-white/5 p-8">
                            <div class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.3em] text-white/50">
                                <span>{{ $entry['category'] }}</span>
                                <span class="h-px w-6 bg-white/20"></span>
                                <span>{{ $entry['reading_time'] }}</span>
                            </div>
                            <h3 class="mt-6 text-2xl font-semibold text-white">{{ $entry['title'] }}</h3>
                            <p class="mt-4 text-sm leading-relaxed text-white/70">{{ $entry['excerpt'] }}</p>
                            <a href="#" class="mt-6 inline-flex items-center text-sm font-semibold text-rose-200 hover:text-rose-100">Read more →</a>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="relative border-t border-zinc-100 bg-white py-20">
            <div class="absolute inset-x-0 -top-24 h-48 bg-gradient-to-b from-rose-100 via-white to-transparent blur-3xl"></div>
            <div class="mx-auto max-w-5xl rounded-[3rem] border border-rose-100/70 bg-gradient-to-br from-rose-50 via-white to-white p-12 shadow-2xl shadow-rose-200/60">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-rose-600">The Mistores Dispatch</p>
                    <h2 class="mt-4 text-3xl font-semibold tracking-tight text-zinc-900 sm:text-4xl">Join our circle for atelier previews and private fittings.</h2>
                    <p class="mt-4 text-base text-zinc-600">Receive early access to limited drops, city pop-ups, and curated styling notes from our creative team.</p>
                    <form class="mt-8 flex flex-col gap-4 sm:flex-row">
                        <label for="newsletter-email" class="sr-only">Email address</label>
                        <input id="newsletter-email" type="email" placeholder="Enter your email" class="flex-1 rounded-full border border-rose-200 bg-white/80 px-6 py-3 text-sm text-zinc-900 placeholder:text-zinc-400 focus:border-rose-400 focus:outline-none focus:ring-2 focus:ring-rose-200" />
                        <button type="submit" class="inline-flex items-center justify-center rounded-full bg-rose-600 px-6 py-3 text-sm font-semibold text-white transition hover:bg-rose-500">Subscribe</button>
                    </form>
                    <p class="mt-3 text-xs text-zinc-500">By subscribing, you agree to receive our newsletters. You can unsubscribe at any time.</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="border-t border-zinc-100 bg-white/90 py-12">
        <div class="mx-auto flex max-w-7xl flex-col gap-8 px-6 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-zinc-500">Mistores</p>
                <p class="mt-3 text-sm text-zinc-500">© {{ now()->year }} Mistores Atelier. Crafted with intention in London &amp; São Paulo.</p>
            </div>
            <div class="flex flex-wrap items-center gap-6 text-sm text-zinc-500">
                <a href="#" class="transition hover:text-zinc-900">Privacy</a>
                <a href="#" class="transition hover:text-zinc-900">Terms</a>
                <a href="#" class="transition hover:text-zinc-900">Contact</a>
                <a href="#" class="transition hover:text-zinc-900">Instagram</a>
            </div>
        </div>
    </footer>
</div>
