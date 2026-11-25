@extends('layouts.app', ['title' => 'Africa Unconquered Foundation', 'description' => 'Supporting wounded, injured and sick Nigerian military personnel.'])

@section('content')
    <x-page-header eyebrow="Africa Unconquered Foundation"
        title='For those who gave <span class="text-sky italic">everything.</span>'
        lead="Alvin co-founded the Africa Unconquered Foundation to support wounded, injured and sick Nigerian military personnel through recovery, sport and a renewed sense of purpose." />

    <section class="py-24 lg:py-32">
        <div class="container-x grid gap-6 md:grid-cols-3" data-reveal-group>
            @foreach ([
                ['Recovery', 'Practical support for service personnel living with injury and illness, and for the families who stand behind them.'],
                ['Sport', 'Working with the Federal Government to prepare Team Nigeria for the Invictus Games, where sport becomes a path back to strength.'],
                ['Recognition', 'Making sure the sacrifice of Nigerian service personnel is seen, honoured and answered with action.'],
            ] as [$t, $b])
                <article class="rounded-2xl border border-line p-10" data-reveal>
                    <h2 class="font-serif text-2xl">{{ $t }}</h2>
                    <p class="mt-4 leading-relaxed text-ink-soft">{{ $b }}</p>
                </article>
            @endforeach
        </div>
    </section>

    @if ($news->isNotEmpty())
        <section class="bg-mist py-24 lg:py-32">
            <div class="container-x">
                <p class="eyebrow" data-reveal>Foundation in the news</p>
                <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3" data-reveal-group>
                    @foreach ($news as $item)
                        <x-news-card :item="$item" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @include('partials.cta')
@endsection
