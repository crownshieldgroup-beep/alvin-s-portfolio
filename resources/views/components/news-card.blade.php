@props(['item', 'bordered' => true])

<a href="{{ $item->url }}" target="_blank" rel="noopener"
   @class([
       'group flex h-full flex-col bg-white p-7 transition duration-300 hover:bg-tint',
       'border border-line' => $bordered,
   ]) data-reveal>
    <div class="flex items-baseline justify-between gap-4 text-[0.65rem]">
        <span class="font-semibold tracking-[0.14em] text-ink uppercase">{{ $item->publication }}</span>
        @if ($item->published_at)
            <time datetime="{{ $item->published_at->toDateString() }}" class="shrink-0 text-ink-soft">{{ $item->published_at->format('j M Y') }}</time>
        @endif
    </div>
    <h3 class="mt-5 font-serif text-[1.35rem] leading-snug text-ink transition group-hover:text-accent">{{ $item->title }}</h3>
    @if ($item->excerpt)
        <p class="mt-4 text-[0.8rem] leading-relaxed text-ink-soft">{{ $item->excerpt }}</p>
    @endif
    <span class="sr-only">(opens in a new tab)</span>
</a>
