<x-layout
    title="Business"
    description="1st Shield Security Services and the wider enterprise of Alvin Atsegwasi, built on military standards across security, healthcare, mentorship, and directorship."
>
    <x-page-header
        eyebrow="Business"
        title="Enterprise built to military standards."
        subtitle="At the centre of Alvin Atsegwasi's commercial life sits 1st Shield Security Services, supported by more than twelve years of leadership across security, healthcare, and specialist training."
    />

    {{-- ===== 1ST SHIELD FEATURE ===== --}}
    <section class="py-[var(--spacing-section)]">
        <div class="container-editorial grid gap-14 lg:grid-cols-12 lg:gap-16 items-center">
            <div class="lg:col-span-6" data-reveal>
                <picture>
                    <source srcset="{{ asset('images/business-close-protection.webp') }}" type="image/webp">
                    <img src="{{ asset('images/business-close-protection.jpg') }}"
                         alt="1st Shield Security officers providing close protection in a corporate setting"
                         class="rounded-2xl w-full object-cover shadow-[0_40px_90px_-50px_rgba(20,23,28,0.5)]"
                         style="aspect-ratio:3/2;" loading="lazy">
                </picture>
            </div>
            <div class="lg:col-span-6">
                <span class="eyebrow" data-reveal>The flagship</span>
                <h2 class="display-2 mt-6 text-balance" data-reveal data-reveal-delay="0.05">1st Shield Security Services</h2>
                <div class="mt-6 space-y-5 text-lg text-body/85 leading-relaxed prose-measure" data-reveal data-reveal-delay="0.1">
                    <p>
                        As Founder and Chief Executive, Alvin leads a professional security company that
                        operates in the United Kingdom and internationally. The firm is staffed in large part
                        by former elite military personnel, and it protects people, property, and reputations
                        with the composure that only training can provide.
                    </p>
                    <p>
                        The company holds to a clear ethos of honour, precision, and unwavering commitment,
                        operating around the clock. Just as importantly, it creates real employment for those
                        leaving the forces, in the belief that no one who has served their country should be
                        left behind.
                    </p>
                </div>
                <div class="mt-8 flex flex-wrap gap-3" data-reveal data-reveal-delay="0.15">
                    @foreach (['Discipline', 'Integrity', 'Duty', 'Loyalty', 'Service'] as $tag)
                        <span class="inline-flex items-center gap-2 rounded-full border border-line px-4 py-2 text-sm text-body/80">
                            <x-icon name="check" class="w-4 h-4 text-sky" /> {{ $tag }}
                        </span>
                    @endforeach
                </div>
                <a href="https://1stshieldsecurity.co.uk" target="_blank" rel="noopener noreferrer"
                   class="mt-8 inline-flex items-center gap-2 btn btn-primary" data-reveal data-reveal-delay="0.2">
                    Visit 1st Shield
                    <x-icon name="external" class="w-4 h-4" />
                </a>
            </div>
        </div>
    </section>

    {{-- ===== SERVICES ===== --}}
    <section class="py-[var(--spacing-section)] bg-tint">
        <div class="container-editorial">
            <div class="max-w-2xl">
                <span class="eyebrow" data-reveal>Capabilities</span>
                <h2 class="display-2 mt-6 text-balance" data-reveal data-reveal-delay="0.05">
                    A full spectrum of protective services.
                </h2>
            </div>

            @php
                $services = [
                    ['icon' => 'shield', 'title' => 'Close Protection', 'text' => 'Discreet, highly trained protection for individuals, families, and executives.'],
                    ['icon' => 'users', 'title' => 'Guarding Operations', 'text' => 'Manned security for sites and premises, delivered with vigilance and presence.'],
                    ['icon' => 'pin', 'title' => 'Residential Security', 'text' => 'Around the clock protection for homes and private estates.'],
                    ['icon' => 'briefcase', 'title' => 'Commercial and Retail', 'text' => 'Loss prevention and safety for businesses, offices, and retail spaces.'],
                    ['icon' => 'compass', 'title' => 'Construction Security', 'text' => 'Protecting sites, plant, and materials against loss and intrusion.'],
                    ['icon' => 'star', 'title' => 'Event Security', 'text' => 'Crowd management and safety planning for gatherings of every scale.'],
                    ['icon' => 'target', 'title' => 'Canine Security', 'text' => 'Trained dog units for deterrence, detection, and patrol.'],
                    ['icon' => 'academic', 'title' => 'SIA Training', 'text' => 'Accredited programmes that prepare the next generation of officers.'],
                ];
            @endphp

            <div class="mt-14 grid gap-4 sm:grid-cols-2 lg:grid-cols-4" data-reveal data-reveal-stagger>
                @foreach ($services as $s)
                    <div class="bg-white rounded-2xl border border-line p-7 h-full card-lift">
                        <span class="grid place-items-center w-11 h-11 rounded-full bg-tint text-sky-ink">
                            <x-icon name="{{ $s['icon'] }}" class="w-5 h-5" />
                        </span>
                        <h3 class="mt-5 font-display text-lg text-ink">{{ $s['title'] }}</h3>
                        <p class="mt-2 text-sm text-body/75 leading-relaxed">{{ $s['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== WIDER PORTFOLIO ===== --}}
    <section class="py-[var(--spacing-section)]">
        <div class="container-editorial grid gap-14 lg:grid-cols-12 lg:gap-16">
            <div class="lg:col-span-5">
                <span class="eyebrow" data-reveal>Beyond the flagship</span>
                <h2 class="display-2 mt-6 text-balance" data-reveal data-reveal-delay="0.05">
                    A broad base of leadership.
                </h2>
                <p class="mt-6 text-lg text-body/85 leading-relaxed prose-measure" data-reveal data-reveal-delay="0.1">
                    Alvin's experience reaches well beyond a single company. Across more than a decade he has
                    led and advised in fields that demand judgement, structure, and the ability to bring
                    people with him.
                </p>
            </div>

            <div class="lg:col-span-7" data-reveal data-reveal-delay="0.1">
                @php
                    $portfolio = [
                        ['icon' => 'heart', 'title' => 'Healthcare services', 'text' => 'Leadership and directorship in the delivery of healthcare, applying the same standards of care and accountability.'],
                        ['icon' => 'users', 'title' => 'Human resources and people', 'text' => 'Building teams, developing talent, and creating opportunity for those transitioning from service.'],
                        ['icon' => 'briefcase', 'title' => 'Procurement of specialist equipment', 'text' => 'Sourcing and managing sophisticated security and operational equipment for demanding environments.'],
                        ['icon' => 'academic', 'title' => 'Mentorship and directorship', 'text' => 'Guiding founders and executives, and serving on boards across the security and healthcare sectors.'],
                    ];
                @endphp
                <div class="divide-y divide-line border-y border-line">
                    @foreach ($portfolio as $p)
                        <div class="flex gap-5 py-6">
                            <span class="grid place-items-center w-11 h-11 shrink-0 rounded-full bg-tint text-sky-ink">
                                <x-icon name="{{ $p['icon'] }}" class="w-5 h-5" />
                            </span>
                            <div>
                                <h3 class="font-display text-xl text-ink">{{ $p['title'] }}</h3>
                                <p class="mt-1 text-body/75 leading-relaxed">{{ $p['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <x-cta-band
        eyebrow="Work together"
        heading="Discuss a security requirement or a partnership."
        primaryLabel="Get in touch"
        primaryRoute="contact"
        secondaryLabel="The Foundation"
        secondaryRoute="philanthropy"
    />
</x-layout>
