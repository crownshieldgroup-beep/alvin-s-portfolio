@extends('layouts.app')

@section('content')
    @php $arrow = '<svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>'; @endphp

    {{-- Hero: navy photo band with the name card overlapping its lower edge --}}
    <section class="relative">
        <div class="absolute inset-x-0 top-0 h-[26rem] overflow-hidden bg-navy sm:h-[30rem] lg:h-[34rem]">
            <div class="absolute inset-y-0 right-0 w-full lg:w-[58%]">
                <x-photo src="images/alvin-hero.jpg" alt="Alvin Atsegwasi in a navy three piece suit" label="Hero photograph" position="50% 18%" :eager="true" class="opacity-90" />
                <div class="absolute inset-0 bg-gradient-to-t from-navy via-navy/30 to-navy/10 lg:bg-gradient-to-r lg:from-navy lg:via-navy/20 lg:to-transparent"></div>
            </div>
        </div>

        <div class="container-x relative pt-[17rem] sm:pt-[20rem] lg:pt-[15.5rem]">
            <div class="max-w-[36rem] bg-paper px-6 pt-9 pb-4 sm:px-10 sm:pt-11 lg:px-12" data-hero>
                <p class="eyebrow">Soldier &middot; Entrepreneur &middot; Advocate</p>
                <h1 class="display mt-5 text-[3.6rem] leading-[0.95] sm:text-7xl lg:text-[5.4rem]">Alvin<br>Atsegwasi</h1>
                <p class="mt-8 max-w-md text-[0.95rem] leading-relaxed text-ink-soft">
                    Ten years equipping British Army units. Nine years building The Crownshield Group. A lifelong commitment to the men and women who come home wounded.
                </p>
                <div class="mt-9 flex flex-wrap items-center gap-6">
                    <a href="{{ route('about') }}" class="btn-primary">Read his story {!! $arrow !!}</a>
                    <a href="#media" class="link-underline text-ink">
                        <svg class="h-2.5 w-2.5" fill="currentColor" viewBox="0 0 10 10" aria-hidden="true"><path d="M1 0l9 5-9 5z"/></svg>
                        Watch his keynote
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- His story --}}
    <section class="border-b border-line py-20 lg:py-28">
        <div class="container-x grid gap-10 lg:grid-cols-12">
            <div class="lg:col-span-3" data-reveal>
                <p class="eyebrow inline-block border-b border-accent pb-2">His Story</p>
            </div>
            <div class="lg:col-span-9" data-reveal>
                <p class="font-serif text-[1.75rem] leading-[1.3] font-light text-ink sm:text-[2.1rem] lg:text-[2.5rem]">
                    He began as the soldier waiting for the kit. He became the man who makes sure it arrives, <em class="text-accent">in the right condition, at the right time,</em> and accounted for down to the last item.
                </p>
                <div class="mt-12 grid gap-8 text-[0.85rem] leading-relaxed text-ink-soft sm:grid-cols-2 sm:gap-12">
                    <p>Alvin Atsegwasi served a decade in the British Army with the Royal Electrical and Mechanical Engineers, equipping battle groups, battalions and garrisons, with an armoury and Skill at Arms background.</p>
                    <p>Today he is Group CEO of The Crownshield Group, founder of 1st Shield Security Services in the United Kingdom, and Co-Founder of the Africa Unconquered Foundation.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Chapter I: Service --}}
    <section class="py-20 lg:py-28">
        <div class="container-x grid items-start gap-12 lg:grid-cols-12 lg:gap-16">
            <div class="aspect-[12/11] lg:col-span-5" data-reveal>
                <x-photo src="images/gallery/portrait-formal.jpg" alt="Veteran's portrait in regimental beret with service medal" label="Archive photo · In uniform" position="50% 20%" />
            </div>
            <div class="lg:col-span-6 lg:col-start-7" data-reveal>
                <p class="chapter">Chapter I</p>
                <h2 class="display mt-3 text-5xl">Service</h2>
                <p class="mt-7 text-[0.9rem] leading-relaxed text-ink-soft">Ten years in the British Army, REME. His job was to equip fighting units and to control that equipment: storage, inspection, accountability and training built into every issue.</p>
                <dl class="mt-7 grid grid-cols-2 border-t border-line pt-4">
                    <div class="pr-4">
                        <dt class="text-[0.6rem] font-semibold tracking-[0.2em] text-ink-soft uppercase">Corps</dt>
                        <dd class="mt-2 text-[0.8rem] text-ink">Royal Electrical and Mechanical Engineers</dd>
                    </div>
                    <div class="border-l border-line pl-4">
                        <dt class="text-[0.6rem] font-semibold tracking-[0.2em] text-ink-soft uppercase">Speciality</dt>
                        <dd class="mt-2 text-[0.8rem] text-ink">Armoury and Skill at Arms</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    {{-- Chapter II: Enterprise --}}
    <section class="bg-tint py-20 lg:py-24">
        <div class="container-x grid items-center gap-12 lg:grid-cols-12 lg:gap-16">
            <div class="lg:col-span-5" data-reveal>
                <p class="chapter">Chapter II</p>
                <h2 class="display mt-3 text-5xl">Enterprise</h2>
                <p class="mt-7 text-[0.9rem] leading-relaxed text-ink-soft">Businesses run to the standards of accountability and care learned in uniform, with all procurement through licensed and authorised channels under Nigerian and UK law.</p>
                <ul class="mt-8 border-t border-ink/10">
                    @foreach ([
                        ['The Crownshield Group', 'Group CEO · Protective equipment, vehicles, communications, surveillance, training and accountability systems'],
                        ['1st Shield Security Services Ltd', 'Founder · SIA licensed security company, United Kingdom'],
                        ['UNIPASS Nigeria', 'Accountable pathways for students seeking education abroad'],
                    ] as [$name, $line])
                        <li class="border-b border-ink/10">
                            <a href="{{ route('ventures') }}" class="group flex items-center justify-between gap-6 py-4">
                                <span>
                                    <span class="block font-serif text-xl text-ink transition group-hover:text-accent">{{ $name }}</span>
                                    <span class="mt-1 block text-[0.72rem] leading-snug text-ink-soft">{{ $line }}</span>
                                </span>
                                <span class="text-accent transition group-hover:translate-x-1">{!! $arrow !!}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="aspect-[4/5] lg:col-span-6 lg:col-start-7" data-reveal>
                <x-photo src="images/alvin-portrait.jpg" alt="Alvin Atsegwasi, Group CEO of The Crownshield Group" label="Business portrait · Office or site visit" position="50% 20%" />
            </div>
        </div>
    </section>

    {{-- Chapter III: Legacy --}}
    <section class="py-20 lg:py-28">
        <div class="container-x grid items-start gap-12 lg:grid-cols-12 lg:gap-16">
            <div class="aspect-[12/11] lg:col-span-5" data-reveal>
                <x-photo src="images/auf-invictus-vancouver.jpg" alt="Africa Unconquered Foundation at the Invictus Games, Vancouver" label="Foundation photo · With Team Nigeria" position="50% 25%" />
            </div>
            <div class="lg:col-span-6 lg:col-start-7" data-reveal>
                <p class="chapter">Chapter III</p>
                <h2 class="display mt-3 text-5xl">Legacy</h2>
                <p class="mt-7 text-[0.9rem] leading-relaxed text-ink-soft">As Co-Founder of the Africa Unconquered Foundation, Alvin stands with Nigeria's wounded, injured and sick service personnel, working with the Federal Government to prepare Team Nigeria for the Invictus Games.</p>
                <dl class="mt-7 grid border border-line sm:grid-cols-3">
                    @foreach ([
                        ['Recovery', 'Adaptive sports camps'],
                        ['Competition', 'Team Nigeria, Invictus Games 2027'],
                        ['Home', 'Invictus Centre Nigeria, Abuja'],
                    ] as $i => [$term, $desc])
                        <div @class(['p-3.5', 'border-t border-line sm:border-t-0 sm:border-l' => $i > 0])>
                            <dt class="text-[0.6rem] font-semibold tracking-[0.2em] text-accent uppercase">{{ $term }}</dt>
                            <dd class="mt-2 text-[0.78rem] leading-snug text-ink">{{ $desc }}</dd>
                        </div>
                    @endforeach
                </dl>
                <a href="{{ route('foundation') }}" class="link-underline mt-7 text-ink">Visit the Foundation</a>
            </div>
        </div>
    </section>

    {{-- Stats --}}
    <section class="bg-navy-mid text-white">
        <div class="container-x grid grid-cols-2 gap-y-10 py-12 lg:grid-cols-4" data-reveal-group>
            @foreach ([
                [10, 'Years in the British Army'],
                [9, 'Years leading The Crownshield Group'],
                [2, 'Nations served: the UK and Nigeria'],
                [4, 'Organisations founded or led'],
            ] as [$n, $label])
                <div class="border-l border-white/20 pl-4 lg:pl-5" data-reveal>
                    <p class="font-serif text-5xl font-light"><span data-count="{{ $n }}">{{ $n }}</span></p>
                    <p class="mt-3 max-w-[13rem] text-[0.72rem] text-white/75">{{ $label }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Principles --}}
    <section id="principles" class="scroll-mt-24 py-20 lg:py-28">
        <div class="container-x grid gap-12 lg:grid-cols-12">
            <div class="lg:col-span-4" data-reveal>
                <p class="eyebrow">Principles</p>
                <h2 class="display mt-3 text-5xl">How he works.</h2>
                <p class="mt-6 max-w-xs text-[0.82rem] leading-relaxed text-ink-soft">Five convictions carried from the armoury to the boardroom.</p>
            </div>
            <ol class="border-t border-ink/60 lg:col-span-7 lg:col-start-6" data-reveal-group>
                @foreach ([
                    ['Think like the end user.', 'Specify equipment that works in the field, not just on paper.'],
                    ['Account for every item.', 'Equipment tables, budget control and audit trails, run to British Army standards.'],
                    ['Safety is part of the delivery.', 'Storage, inspection and training are built in from the start.'],
                    ['Respect public money.', 'Only licensed and authorised channels, under Nigerian and UK law.'],
                    ['Service does not end with the uniform.', 'Those who served deserve care, recovery and a future when they come home.'],
                ] as $i => [$principle, $body])
                    <li class="grid grid-cols-[3rem_1fr] border-b border-line py-6 sm:grid-cols-[4.5rem_1fr]" data-reveal>
                        <span class="pt-1 font-serif text-sm text-accent italic">{{ sprintf('%02d', $i + 1) }}</span>
                        <div>
                            <h3 class="font-serif text-[1.4rem] leading-snug text-ink">{{ $principle }}</h3>
                            <p class="mt-2 text-[0.78rem] text-ink-soft">{{ $body }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- Speeches and media --}}
    @php
        $featured = config('site.videos.featured');
        $more = config('site.videos.more', []);
        $youtube = config('site.socials.YouTube');
    @endphp
    <section id="media" class="scroll-mt-24 bg-navy-deep py-20 text-white lg:py-24">
        <div class="container-x">
            <div class="flex flex-wrap items-end justify-between gap-6" data-reveal>
                <div>
                    <p class="eyebrow-light">Speeches &amp; Media</p>
                    <h2 class="mt-3 font-serif text-5xl font-light tracking-tight">In his own words.</h2>
                </div>
                @if ($youtube)
                    <a href="{{ $youtube }}" target="_blank" rel="noopener" class="link-underline text-white hover:text-accent-light">All videos</a>
                @endif
            </div>

            <div class="mt-12 grid gap-10 lg:grid-cols-12">
                <div class="lg:col-span-7" data-reveal>
                    <a @if ($featured['url']) href="{{ $featured['url'] }}" target="_blank" rel="noopener" @endif
                       class="group relative grid aspect-video place-items-center overflow-hidden bg-navy-raise">
                        @if ($featured['thumbnail'] && file_exists(public_path($featured['thumbnail'])))
                            <img src="{{ asset($featured['thumbnail']) }}" alt="" class="absolute inset-0 h-full w-full object-cover opacity-80 transition group-hover:opacity-100">
                        @endif
                        <span class="relative flex flex-col items-center gap-4">
                            <span class="grid h-14 w-14 place-items-center rounded-full border border-white/70 transition group-hover:bg-white group-hover:text-navy-deep">
                                <svg class="ml-0.5 h-3 w-3" fill="currentColor" viewBox="0 0 10 10" aria-hidden="true"><path d="M1 0l9 5-9 5z"/></svg>
                            </span>
                            @unless ($featured['url'])
                                <span class="text-[0.6rem] tracking-[0.2em] text-white/50 uppercase">Featured video coming soon</span>
                            @endunless
                        </span>
                    </a>
                    <p class="eyebrow-light mt-5">{{ $featured['kind'] }}{{ $featured['event'] ? ' · '.$featured['event'] : '' }}</p>
                    <h3 class="mt-3 font-serif text-2xl">{{ $featured['title'] ?? 'Featured keynote to follow' }}</h3>
                </div>

                <ul class="border-t border-white/10 lg:col-span-5" data-reveal-group>
                    @foreach ($more as $video)
                        <li class="border-b border-white/10" data-reveal>
                            <a @if ($video['url']) href="{{ $video['url'] }}" target="_blank" rel="noopener" @endif class="group flex items-center gap-5 py-4">
                                <span class="relative grid aspect-video w-32 shrink-0 place-items-center overflow-hidden bg-navy-raise">
                                    @if ($video['thumbnail'] && file_exists(public_path($video['thumbnail'])))
                                        <img src="{{ asset($video['thumbnail']) }}" alt="" class="absolute inset-0 h-full w-full object-cover">
                                    @endif
                                    <svg class="relative h-2 w-2 text-white/70" fill="currentColor" viewBox="0 0 10 10" aria-hidden="true"><path d="M1 0l9 5-9 5z"/></svg>
                                </span>
                                <span>
                                    <span class="eyebrow-light block">{{ $video['kind'] }}</span>
                                    <span class="mt-1.5 block font-serif text-lg leading-snug transition group-hover:text-accent-light">{{ $video['title'] ?? $video['kind'].' to follow' }}</span>
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    {{-- News --}}
    @if ($news->isNotEmpty())
        <section class="pt-20 lg:pt-24">
            <div class="container-x">
                <div class="flex flex-wrap items-end justify-between gap-6" data-reveal>
                    <div>
                        <p class="eyebrow">In the news</p>
                        <h2 class="display mt-3 text-5xl">Recent coverage.</h2>
                    </div>
                    <a href="{{ route('news') }}" class="link-underline text-ink">All news</a>
                </div>
                <div class="mt-10 grid gap-px border border-line bg-line md:grid-cols-3" data-reveal-group>
                    @foreach ($news as $item)
                        <x-news-card :item="$item" :bordered="false" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- Life in pictures --}}
    <section class="py-20 lg:py-24">
        <div class="container-x">
            <div data-reveal>
                <p class="eyebrow">Life in pictures</p>
                <h2 class="display mt-3 text-5xl">Beyond the boardroom.</h2>
            </div>
            <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-4" data-reveal-group>
                @foreach ([
                    ['Events', null],
                    ['Foundation', 'images/auf-invictus-vancouver.jpg'],
                    ['Travel', null],
                    ['Personal', 'images/alvin-hero.jpg'],
                ] as [$label, $src])
                    <a href="{{ route('gallery') }}" class="group block" data-reveal>
                        <span class="block aspect-[3/4] overflow-hidden">
                            <x-photo :src="$src" :alt="$label.' gallery'" label="Photo" position="50% 20%" class="transition duration-500 group-hover:scale-[1.03]" />
                        </span>
                        <span class="mt-3 flex items-baseline justify-between">
                            <span class="font-serif text-lg text-ink">{{ $label }}</span>
                            <span class="text-[0.68rem] text-ink-soft transition group-hover:text-accent">Gallery &rarr;</span>
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Quote --}}
    <section class="border-y border-line py-20 text-center lg:py-24">
        <figure class="container-x" data-reveal>
            <span class="block font-serif text-5xl leading-none text-accent" aria-hidden="true">&ldquo;</span>
            <blockquote class="mx-auto mt-2 max-w-3xl font-serif text-3xl leading-tight font-light text-ink sm:text-[2.6rem]">
                I have equipped soldiers. Now I equip forces.
            </blockquote>
            <figcaption class="mt-7 text-[0.62rem] font-semibold tracking-[0.2em] text-ink-soft uppercase">Alvin Atsegwasi</figcaption>
        </figure>
    </section>

    {{-- Connect + newsletter --}}
    <section id="notes" class="scroll-mt-24 py-20 lg:py-24">
        <div class="container-x grid gap-14 lg:grid-cols-2 lg:gap-20">
            <div data-reveal>
                <p class="eyebrow">Speaking &middot; Partnerships &middot; Media</p>
                <h2 class="display mt-4 text-[2.6rem] leading-[1.08] sm:text-5xl">Let's build forces that are equipped, accountable and ready.</h2>
                <p class="mt-8 text-[0.8rem] text-ink-soft">For speaking and media requests</p>
                @if ($email = config('site.email'))
                    <a href="mailto:{{ $email }}" class="link-underline mt-1 text-ink">{{ $email }}</a>
                @else
                    <a href="{{ route('contact') }}" class="link-underline mt-1 text-ink">Send an enquiry to the office</a>
                @endif
            </div>

            <div class="border-t border-ink/70 pt-6" data-reveal>
                <h3 class="font-serif text-2xl text-ink">Monthly notes from Alvin</h3>
                <p class="mt-3 text-[0.78rem] text-ink-soft">Defence logistics, veterans' welfare and the work of the Foundation, once a month.</p>

                @if (session('subscribed'))
                    <p class="mt-8 border border-accent/30 bg-tint px-5 py-4 text-sm text-ink" role="status">{{ session('subscribed') }}</p>
                @else
                    <form method="POST" action="{{ route('subscribe') }}" class="mt-6">
                        @csrf
                        <div class="grid gap-6 sm:grid-cols-2">
                            <label class="block">
                                <span class="text-[0.6rem] font-semibold tracking-[0.18em] text-ink-soft uppercase">First name</span>
                                <input type="text" name="first_name" value="{{ old('first_name') }}" autocomplete="given-name" maxlength="80" class="field-line">
                            </label>
                            <label class="block">
                                <span class="text-[0.6rem] font-semibold tracking-[0.18em] text-ink-soft uppercase">Last name</span>
                                <input type="text" name="last_name" value="{{ old('last_name') }}" autocomplete="family-name" maxlength="80" class="field-line">
                            </label>
                        </div>
                        <label class="mt-6 block">
                            <span class="text-[0.6rem] font-semibold tracking-[0.18em] text-ink-soft uppercase">Email address</span>
                            <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="field-line">
                        </label>
                        @if ($errors->any())
                            <p class="mt-3 text-sm text-red-700">{{ $errors->first() }}</p>
                        @endif
                        <div class="mt-7 flex flex-wrap items-center justify-between gap-4">
                            <p class="text-[0.7rem] text-ink-soft">One email a month. Unsubscribe at any time.</p>
                            <button class="bg-accent px-8 py-3 text-[0.8rem] font-semibold text-white transition hover:bg-navy-deep focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Subscribe</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </section>
@endsection
