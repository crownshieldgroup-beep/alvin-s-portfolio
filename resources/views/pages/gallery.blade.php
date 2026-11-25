@extends('layouts.app', ['title' => 'Gallery'])

@section('content')
    <x-page-header eyebrow="Gallery" title='Moments from the <span class="text-sky italic">work.</span>' />

    <section class="py-24 lg:py-32" x-data="{ open: null }" @keydown.escape.window="open = null">
        <div class="container-x">
            @if ($images->isEmpty())
                <p class="text-ink-soft">Photographs will be added soon.</p>
            @else
                <div class="columns-1 gap-6 sm:columns-2 lg:columns-3">
                    @foreach ($images as $img)
                        <button type="button" class="mb-6 block w-full overflow-hidden rounded-2xl" data-reveal
                                @click="open = @js($img)" aria-label="Enlarge {{ $img['alt'] }}">
                            <img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}" loading="lazy" class="w-full transition duration-700 hover:scale-105">
                        </button>
                    @endforeach
                </div>
            @endif
        </div>

        <div x-show="open" x-cloak x-transition.opacity class="fixed inset-0 z-50 flex items-center justify-center bg-ink/90 p-6" @click="open = null" role="dialog" aria-modal="true">
            <img :src="open?.src" :alt="open?.alt" class="max-h-full max-w-full rounded-xl">
        </div>
    </section>
@endsection
