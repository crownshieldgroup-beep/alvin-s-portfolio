@props([
    'title' => 'Alvin Atsegwasi',
    'description' => 'Alvin Atsegwasi, former British Army officer, security entrepreneur and Co-Founder of the Africa Unconquered Foundation.',
    'ogImage' => 'images/alvin-portrait.jpg',
    'navMode' => 'solid',
])

@php
    $fullTitle = $title === 'Alvin Atsegwasi'
        ? 'Alvin Atsegwasi, Soldier, Entrepreneur, Advocate'
        : $title . ' | Alvin Atsegwasi';
    $ogUrl = asset($ogImage);
@endphp

<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $fullTitle }}</title>
    <meta name="description" content="{{ $description }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="theme-color" content="#ffffff">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Alvin Atsegwasi">
    <meta property="og:title" content="{{ $fullTitle }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $ogUrl }}">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $fullTitle }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="{{ $ogUrl }}">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('favicon.svg') }}">

    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700|playfair-display:400,500,600,700&display=swap">
    @stack('head')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-white text-body overflow-x-hidden">

    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[100] focus:bg-white focus:text-ink focus:px-4 focus:py-2 focus:rounded-full focus:shadow-lg">
        Skip to content
    </a>

    <x-navbar :mode="$navMode" />

    <main id="main">
        {{ $slot }}
    </main>

    <x-footer />

</body>
</html>
