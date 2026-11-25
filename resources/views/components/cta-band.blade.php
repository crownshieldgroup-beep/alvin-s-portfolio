@props([
    'eyebrow' => 'Continue',
    'heading' => '',
    'primaryLabel' => '',
    'primaryRoute' => '',
    'secondaryLabel' => null,
    'secondaryRoute' => null,
])

<section class="py-[var(--spacing-section)]">
    <div class="container-editorial">
        <div class="rounded-3xl border border-line bg-tint px-6 py-16 md:px-16 md:py-20 text-center" data-reveal>
            <span class="eyebrow eyebrow--center justify-center">{{ $eyebrow }}</span>
            <h2 class="display-2 mt-6 mx-auto max-w-3xl text-balance">{{ $heading }}</h2>
            <div class="mt-9 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route($primaryRoute) }}" class="btn btn-primary">
                    {{ $primaryLabel }}
                    <x-icon name="arrow-right" class="w-4 h-4" />
                </a>
                @if ($secondaryLabel && $secondaryRoute)
                    <a href="{{ route($secondaryRoute) }}" class="btn btn-outline">{{ $secondaryLabel }}</a>
                @endif
            </div>
        </div>
    </div>
</section>
