<section class="pb-[var(--spacing-section)]">
    <div class="container-editorial">
        <div class="relative overflow-hidden rounded-3xl bg-ink text-white px-6 py-14 md:px-16 md:py-20">
            <div class="absolute inset-0 pointer-events-none opacity-70"
                 style="background:radial-gradient(70% 120% at 100% 0%, rgba(79,168,216,0.35) 0%, rgba(79,168,216,0) 60%);"></div>

            <div class="relative grid gap-10 lg:grid-cols-2 lg:items-center">
                <div data-reveal>
                    <span class="inline-flex items-center gap-3 text-sky text-xs font-semibold tracking-[0.24em] uppercase">
                        <span class="w-8 h-px bg-sky"></span>
                        Stay informed
                    </span>
                    <h2 class="mt-6 font-display text-white text-balance" style="font-size:clamp(1.9rem,3.4vw,2.75rem);line-height:1.15;">
                        Follow the work, the milestones, and the road to 2029.
                    </h2>
                    <p class="mt-4 text-white/70 max-w-md leading-relaxed">
                        Occasional updates on the Africa Unconquered Foundation, the Invictus journey,
                        and news from across the ventures. No noise, only what matters.
                    </p>
                </div>

                <div data-reveal data-reveal-delay="0.1">
                    @if (session('newsletter_status'))
                        <div class="rounded-2xl bg-white/10 border border-sky/40 px-6 py-5 flex items-start gap-3">
                            <x-icon name="check" class="w-5 h-5 text-sky mt-0.5 shrink-0" />
                            <p class="text-white/90">{{ session('newsletter_status') }}</p>
                        </div>
                    @else
                        <form action="{{ route('newsletter.store') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="nl-name" class="sr-only">Name</label>
                                    <input type="text" id="nl-name" name="name" value="{{ old('name') }}"
                                           placeholder="Your name"
                                           class="w-full rounded-full bg-white/10 border border-white/20 px-5 py-3.5 text-white placeholder-white/50 focus:border-sky focus:bg-white/15 outline-none transition">
                                </div>
                                <div>
                                    <label for="nl-email" class="sr-only">Email</label>
                                    <input type="email" id="nl-email" name="email" value="{{ old('email') }}" required
                                           placeholder="Email address"
                                           class="w-full rounded-full bg-white/10 border border-white/20 px-5 py-3.5 text-white placeholder-white/50 focus:border-sky focus:bg-white/15 outline-none transition @error('email') border-red-400 @enderror">
                                </div>
                            </div>
                            @error('email')
                                <p class="text-sm text-red-300">{{ $message }}</p>
                            @enderror
                            <button type="submit" class="btn btn-primary w-full sm:w-auto">
                                Subscribe
                                <x-icon name="arrow-right" class="w-4 h-4" />
                            </button>
                            <p class="text-xs text-white/45">Your details are stored securely and never shared.</p>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
