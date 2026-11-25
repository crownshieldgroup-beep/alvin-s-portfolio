@props(['eyebrow', 'title', 'lead' => null])

<section class="border-b border-line bg-mist">
    <div class="container-x py-20 lg:py-28" data-hero>
        <p class="eyebrow">{{ $eyebrow }}</p>
        <h1 class="display mt-5 max-w-4xl text-5xl sm:text-6xl lg:text-7xl">{!! $title !!}</h1>
        @if ($lead)
            <p class="mt-8 max-w-2xl text-lg leading-relaxed text-ink-soft">{{ $lead }}</p>
        @endif
    </div>
</section>
