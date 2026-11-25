@props(['src' => 'images/alvin-portrait.jpg', 'alt' => 'Portrait of Alvin Atsegwasi'])

{{-- Shows the real photo when it exists in public/, otherwise an on-brand placeholder. --}}
@if (file_exists(public_path($src)))
    <img src="{{ asset($src) }}" alt="{{ $alt }}" {{ $attributes->merge(['class' => 'h-full w-full object-cover object-[50%_20%]']) }} width="922" height="1152">
@else
    <div {{ $attributes->merge(['class' => 'relative flex h-full w-full items-center justify-center overflow-hidden bg-gradient-to-br from-sky-soft via-white to-sky/20']) }} role="img" aria-label="{{ $alt }} (photo to follow)">
        <svg class="absolute inset-0 h-full w-full text-sky/15" aria-hidden="true">
            <defs><pattern id="grid-{{ $id = uniqid() }}" width="32" height="32" patternUnits="userSpaceOnUse"><path d="M32 0H0v32" fill="none" stroke="currentColor"/></pattern></defs>
            <rect width="100%" height="100%" fill="url(#grid-{{ $id }})"/>
        </svg>
        <span class="relative font-serif text-[clamp(4rem,12vw,9rem)] font-semibold tracking-tight text-ink/85">AA</span>
    </div>
@endif
