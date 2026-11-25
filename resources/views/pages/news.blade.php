@extends('layouts.app', ['title' => 'News', 'description' => 'Press coverage of Alvin Atsegwasi and his ventures.'])

@section('content')
    <x-page-header eyebrow="News and press" title='In the <span class="text-sky italic">news.</span>'
        lead="Coverage of The Crownshield Group, the Africa Unconquered Foundation and UNIPASS Nigeria." />

    <section class="py-24 lg:py-32">
        <div class="container-x">
            @if ($news->isEmpty())
                <p class="text-ink-soft">Coverage will appear here soon.</p>
            @else
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3" data-reveal-group>
                    @foreach ($news as $item)
                        <x-news-card :item="$item" />
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
