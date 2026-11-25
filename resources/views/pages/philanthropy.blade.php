<x-layout
    title="Philanthropy"
    description="The Africa Unconquered Foundation, Co-Founded by Alvin Atsegwasi, carried Nigeria to the Invictus Games Vancouver 2025 and now looks toward hosting the Games in 2029."
    ogImage="images/auf-invictus-vancouver.jpg"
>
    <x-page-header
        eyebrow="Philanthropy"
        title="Standing beside the unconquered."
        subtitle="The Africa Unconquered Foundation exists for the wounded, injured, and sick who have served. This is the mission closest to Alvin Atsegwasi's heart."
    />

    {{-- ===== MISSION ===== --}}
    <section class="py-[var(--spacing-section)]">
        <div class="container-editorial grid gap-14 lg:grid-cols-12 lg:gap-16 items-center">
            <div class="lg:col-span-6">
                <span class="eyebrow" data-reveal>The Foundation</span>
                <h2 class="display-2 mt-6 text-balance" data-reveal data-reveal-delay="0.05">
                    Recovery, dignity, and a place on the world stage.
                </h2>
                <div class="mt-6 space-y-5 text-lg text-body/85 leading-relaxed prose-measure" data-reveal data-reveal-delay="0.1">
                    <p>
                        The Africa Unconquered Foundation was created to support the recovery of service
                        personnel through the power of sport. As the delivery partner for Nigeria's
                        participation in the Invictus Games, it opened a door that had never before been open
                        to the nation, or to the African continent.
                    </p>
                    <p>
                        For Alvin, a Co-Founder who serves in a leadership and chairman capacity, the work is
                        personal. It joins the discipline of the soldier with the reach of the entrepreneur,
                        and turns both toward a single end: to ensure that those who carried their country's
                        burden are seen, supported, and celebrated.
                    </p>
                </div>
            </div>

            <div class="lg:col-span-6" data-reveal data-reveal-delay="0.1">
                <figure>
                    <picture>
                        <source srcset="{{ asset('images/auf-invictus-vancouver.webp') }}" type="image/webp">
                        <img src="{{ asset('images/auf-invictus-vancouver.jpg') }}"
                             alt="An Africa Unconquered Foundation representative with Prince Harry at the Invictus Games in Vancouver"
                             class="rounded-2xl w-full object-cover shadow-[0_40px_90px_-50px_rgba(20,23,28,0.55)]"
                             style="aspect-ratio:4/5;object-position:50% 25%;" loading="lazy">
                    </picture>
                    <figcaption class="mt-3 text-sm text-muted">
                        The Africa Unconquered Foundation alongside Prince Harry, Patron of the Invictus Games
                        Foundation, at Vancouver 2025.
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>

    {{-- ===== STATS BAND ===== --}}
    <section class="py-[var(--spacing-section)] bg-ink text-white">
        <div class="container-editorial">
            <div class="max-w-2xl" data-reveal>
                <span class="inline-flex items-center gap-3 text-sky text-xs font-semibold tracking-[0.24em] uppercase">
                    <span class="w-8 h-px bg-sky"></span> By the numbers
                </span>
                <h2 class="mt-6 font-display text-white text-balance" style="font-size:clamp(1.9rem,3.6vw,3rem);line-height:1.14;">
                    A debut written into history.
                </h2>
            </div>

            @php
                $stats = [
                    ['value' => '10', 'suffix' => '', 'label' => 'Years of service behind the mission, close to a decade in uniform'],
                    ['value' => '14', 'suffix' => '', 'label' => 'Athletes of Team Nigeria trained and supported to Vancouver'],
                    ['value' => '3', 'suffix' => '', 'label' => 'Medal colours won, gold, silver, and bronze'],
                    ['value' => '2029', 'suffix' => '', 'label' => 'The ambition, to host the Invictus Games in Nigeria'],
                ];
            @endphp
            <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-4" data-reveal data-reveal-stagger>
                @foreach ($stats as $s)
                    <div class="border-t border-white/15 pt-6">
                        <p class="font-display text-white leading-none" style="font-size:clamp(3rem,6vw,4.5rem);">
                            {{ $s['value'] }}<span class="text-sky">{{ $s['suffix'] }}</span>
                        </p>
                        <p class="mt-4 text-white/65 leading-relaxed">{{ $s['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== THE JOURNEY ===== --}}
    <section class="py-[var(--spacing-section)]">
        <div class="container-editorial">
            <div class="max-w-2xl">
                <span class="eyebrow" data-reveal>The journey</span>
                <h2 class="display-2 mt-6 text-balance" data-reveal data-reveal-delay="0.05">
                    From an agreement in Abuja to a podium in Vancouver.
                </h2>
            </div>

            @php
                $journey = [
                    ['step' => '01', 'date' => 'November 2024, Abuja', 'title' => 'A national commitment', 'text' => 'The Federal Government of Nigeria signed a memorandum of understanding with the Africa Unconquered Foundation to train and empower wounded, injured, and sick soldiers for the Invictus Games. It was the formal beginning of a national journey.'],
                    ['step' => '02', 'date' => 'Selection and training', 'title' => 'Preparing the squad', 'text' => 'Working alongside the Defence Headquarters, the Foundation helped identify, prepare, and support the men and women who would represent the country, the first squad of its kind that Nigeria had ever assembled.'],
                    ['step' => '03', 'date' => 'February 2025, Canada', 'title' => 'Team Nigeria in Vancouver', 'text' => 'Competing as the only African nation invited to the Games, Team Nigeria took its place on the world stage and returned home with gold, silver, and multiple bronze medals.'],
                ];
            @endphp
            <div class="mt-14 grid gap-6 md:grid-cols-3" data-reveal data-reveal-stagger>
                @foreach ($journey as $j)
                    <div class="relative bg-white rounded-2xl border border-line p-8 h-full">
                        <span class="font-display text-5xl text-sky/25 leading-none">{{ $j['step'] }}</span>
                        <p class="mt-4 text-xs font-semibold tracking-[0.16em] uppercase text-sky-ink">{{ $j['date'] }}</p>
                        <h3 class="mt-2 font-display text-2xl text-ink leading-snug">{{ $j['title'] }}</h3>
                        <p class="mt-3 text-body/75 leading-relaxed">{{ $j['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== VANCOUVER RESULTS ===== --}}
    <section class="py-[var(--spacing-section)] bg-tint">
        <div class="container-editorial">
            <div class="grid gap-12 lg:grid-cols-12 lg:gap-16 items-center">
                <div class="lg:col-span-5">
                    <span class="eyebrow" data-reveal>Vancouver 2025</span>
                    <h2 class="display-2 mt-6 text-balance" data-reveal data-reveal-delay="0.05">
                        Medals, and something greater than medals.
                    </h2>
                    <p class="mt-6 text-lg text-body/85 leading-relaxed prose-measure" data-reveal data-reveal-delay="0.1">
                        The results told one story. The sight of Nigerian competitors standing tall,
                        recovered and unconquered, told a far larger one.
                    </p>
                </div>

                <div class="lg:col-span-7" data-reveal data-reveal-delay="0.1">
                    @php
                        $results = [
                            ['medal' => 'Gold', 'color' => '#C8A24A', 'title' => 'Rowing', 'text' => 'A gold medal for Ruth Simon, a defining moment of the Games for Team Nigeria.'],
                            ['medal' => 'Silver', 'color' => '#9AA6B2', 'title' => 'Sitting Volleyball', 'text' => 'A silver medal won by the national team in a hard fought competition.'],
                            ['medal' => 'Bronze', 'color' => '#B4794E', 'title' => 'Across disciplines', 'text' => 'Multiple bronze medals earned by athletes competing in their first Invictus Games.'],
                        ];
                    @endphp
                    <div class="space-y-4">
                        @foreach ($results as $r)
                            <div class="flex items-center gap-5 bg-white rounded-2xl border border-line p-6">
                                <span class="grid place-items-center w-14 h-14 shrink-0 rounded-full" style="background:{{ $r['color'] }}1a;color:{{ $r['color'] }};">
                                    <x-icon name="medal" class="w-7 h-7" />
                                </span>
                                <div>
                                    <div class="flex items-baseline gap-3">
                                        <span class="font-display text-xl text-ink">{{ $r['medal'] }}</span>
                                        <span class="text-sm text-muted">{{ $r['title'] }}</span>
                                    </div>
                                    <p class="mt-1 text-body/75 leading-relaxed">{{ $r['text'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== PARTNERSHIPS ===== --}}
    <section class="py-[var(--spacing-section)]">
        <div class="container-editorial">
            <div class="max-w-2xl">
                <span class="eyebrow" data-reveal>In good company</span>
                <h2 class="display-2 mt-6 text-balance" data-reveal data-reveal-delay="0.05">
                    A mission carried by many hands.
                </h2>
                <p class="mt-6 text-lg text-body/85 leading-relaxed prose-measure" data-reveal data-reveal-delay="0.1">
                    The Foundation's work has been made possible by the support and belief of partners across
                    government, the military, and the wider Invictus community.
                </p>
            </div>

            @php
                $partners = [
                    ['icon' => 'star', 'name' => 'Prince Harry', 'role' => 'Patron of the Invictus Games Foundation'],
                    ['icon' => 'shield', 'name' => 'Nigerian Defence Headquarters', 'role' => 'Partner in selection and preparation'],
                    ['icon' => 'medal', 'name' => 'General Christopher Musa', 'role' => 'Chief of Defence Staff'],
                    ['icon' => 'globe', 'name' => 'Corporate sponsors', 'role' => 'Backing the journey to Vancouver'],
                ];
            @endphp
            <div class="mt-14 grid gap-4 sm:grid-cols-2 lg:grid-cols-4" data-reveal data-reveal-stagger>
                @foreach ($partners as $p)
                    <div class="bg-white rounded-2xl border border-line p-7 h-full">
                        <span class="grid place-items-center w-11 h-11 rounded-full bg-tint text-sky-ink">
                            <x-icon name="{{ $p['icon'] }}" class="w-5 h-5" />
                        </span>
                        <h3 class="mt-5 font-display text-lg text-ink leading-snug">{{ $p['name'] }}</h3>
                        <p class="mt-1 text-sm text-body/70">{{ $p['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== 2029 AMBITION ===== --}}
    <section class="pb-[var(--spacing-section)]">
        <div class="container-editorial">
            <div class="relative overflow-hidden rounded-3xl bg-ink text-white px-6 py-16 md:px-16 md:py-24" data-reveal>
                <div class="absolute inset-0 pointer-events-none opacity-70"
                     style="background:radial-gradient(60% 100% at 100% 100%, rgba(79,168,216,0.35) 0%, rgba(79,168,216,0) 60%);"></div>
                <div class="relative max-w-3xl">
                    <span class="inline-flex items-center gap-3 text-sky text-xs font-semibold tracking-[0.24em] uppercase">
                        <span class="w-8 h-px bg-sky"></span> The road ahead
                    </span>
                    <h2 class="mt-6 font-display text-white text-balance" style="font-size:clamp(2rem,4vw,3.25rem);line-height:1.14;">
                        The ambition: to bring the Invictus Games to Nigeria in 2029.
                    </h2>
                    <p class="mt-6 text-white/70 text-lg leading-relaxed max-w-2xl">
                        Having taken Nigeria to the Games for the first time, the Foundation now holds a bolder
                        hope still: to host the Invictus Games on Nigerian soil, and to give the whole of
                        Africa a stage of its own. It would be a first for the continent, and a lasting tribute
                        to every soldier who has served.
                    </p>
                    <a href="{{ route('contact') }}" class="mt-9 inline-flex btn btn-primary">
                        Support the mission
                        <x-icon name="arrow-right" class="w-4 h-4" />
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
