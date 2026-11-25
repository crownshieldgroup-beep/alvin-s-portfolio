<x-layout
    title="Media"
    description="Selected press coverage of Alvin Atsegwasi, the Africa Unconquered Foundation, and Team Nigeria's journey to the Invictus Games Vancouver 2025."
>
    <x-page-header
        eyebrow="Media"
        title="In the press."
        subtitle="A selection of coverage following the Africa Unconquered Foundation, the national partnership, and Team Nigeria at the Invictus Games."
    />

    <section class="py-[var(--spacing-section)]">
        <div class="container-editorial">
            @if ($items->isEmpty())
                <p class="text-body/70">Coverage will appear here soon.</p>
            @else
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3" data-reveal data-reveal-stagger>
                    @foreach ($items as $item)
                        <a href="{{ $item->url }}" target="_blank" rel="noopener noreferrer"
                           class="group flex flex-col bg-white rounded-2xl border border-line overflow-hidden card-lift">
                            <div class="relative aspect-[16/10] overflow-hidden bg-tint">
                                <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->outlet }} coverage thumbnail"
                                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-[1.04]"
                                     loading="lazy">
                                <span class="absolute top-4 left-4 inline-flex items-center rounded-full bg-white/95 px-3 py-1 text-xs font-semibold tracking-wide text-ink shadow-sm">
                                    {{ $item->outlet }}
                                </span>
                            </div>
                            <div class="flex flex-col flex-1 p-7">
                                <time class="text-xs font-semibold tracking-[0.16em] uppercase text-sky-ink">
                                    {{ $item->published_at->format('j M Y') }}
                                </time>
                                <h2 class="mt-3 font-display text-xl text-ink leading-snug group-hover:text-sky-ink transition-colors">
                                    {{ $item->title }}
                                </h2>
                                <p class="mt-3 text-sm text-body/75 leading-relaxed flex-1">{{ $item->excerpt }}</p>
                                <span class="mt-6 inline-flex items-center gap-2 text-sky-ink font-medium text-sm">
                                    Read at {{ $item->outlet }}
                                    <x-icon name="arrow-up-right" class="w-4 h-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" />
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>

                <p class="mt-12 text-sm text-muted" data-reveal>
                    Coverage links open on the publisher's website. Article thumbnails shown here are
                    placeholders pending official artwork.
                </p>
            @endif
        </div>
    </section>

    <x-cta-band
        eyebrow="Enquiries"
        heading="Press and partnership enquiries are welcome."
        primaryLabel="Contact"
        primaryRoute="contact"
    />
</x-layout>
