@extends('layouts.app', ['title' => 'Ventures', 'description' => 'The Crownshield Group, Africa Unconquered Foundation, 1st Shield Security Services and UNIPASS Nigeria.'])

@section('content')
    <x-page-header eyebrow="Ventures"
        title='Organisations built on <span class="text-sky italic">service.</span>'
        lead="From defence procurement in Abuja to licensed security in the United Kingdom, each venture carries the same discipline: the right kit, the right people, fully accounted for." />

    <section class="py-24 lg:py-32">
        <div class="container-x space-y-24">
            @foreach ($ventures as $i => $v)
                <article class="grid items-center gap-12 lg:grid-cols-2" data-reveal-group>
                    <div @class(['aspect-[4/3] overflow-hidden rounded-[1.5rem]', 'lg:order-2' => $i % 2]) data-reveal>
                        @if ($v['image'])
                            <img src="{{ asset($v['image']) }}" alt="{{ $v['name'] }}" class="h-full w-full object-cover" loading="lazy">
                        @else
                            <div class="flex h-full w-full items-center justify-center bg-gradient-to-br from-ink to-[#1d3350] p-10">
                                <span class="text-center font-serif text-3xl text-white sm:text-4xl">{{ $v['name'] }}</span>
                            </div>
                        @endif
                    </div>
                    <div data-reveal>
                        <p class="eyebrow">{{ $v['role'] }} &middot; {{ $v['place'] }}</p>
                        <h2 class="display mt-5 text-4xl sm:text-5xl">{{ $v['name'] }}</h2>
                        <p class="mt-6 text-lg leading-relaxed text-ink-soft">{{ $v['summary'] }}</p>

                        @if ($v['name'] === 'The Crownshield Group')
                            <ul class="mt-8 grid gap-3 text-ink-soft sm:grid-cols-2">
                                @foreach (['Protective equipment, uniforms and field kit', 'Vehicles, field logistics and sustainment', 'Communications and command and control systems', 'Surveillance and perimeter security technology', 'Training, inspection and armoury management', 'Equipment accountability systems'] as $s)
                                    <li class="flex gap-3"><span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-sky"></span>{{ $s }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    @include('partials.cta')
@endsection
