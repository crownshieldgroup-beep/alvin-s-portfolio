@props(['src' => null, 'alt' => '', 'label' => 'Photo', 'position' => '50% 30%', 'eager' => false])

{{-- A real photo when the file exists in public/, otherwise the mockup's labelled grey frame. --}}
@if ($src && file_exists(public_path($src)))
    <img src="{{ asset($src) }}" alt="{{ $alt }}" loading="{{ $eager ? 'eager' : 'lazy' }}"
         style="object-position: {{ $position }}"
         {{ $attributes->merge(['class' => 'h-full w-full object-cover']) }}>
@else
    <div {{ $attributes->merge(['class' => 'flex h-full w-full flex-col items-center justify-center gap-3 bg-stone text-ink-soft/70']) }}
         role="img" aria-label="{{ $alt ?: $label }} (photo to follow)">
        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.4" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="1"/><circle cx="9" cy="10" r="1.6"/><path d="M21 16l-5-5-9 9"/></svg>
        <span class="px-4 text-center text-[0.6rem] tracking-[0.18em] uppercase">{{ $label }}</span>
    </div>
@endif
