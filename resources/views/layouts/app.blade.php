<!DOCTYPE html>
<html lang="en-GB" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title.' | Alvin Atsegwasi' : 'Alvin Atsegwasi | Soldier, Entrepreneur, Advocate' }}</title>
    <meta name="description" content="{{ $description ?? 'Alvin Atsegwasi: British Army veteran, Group CEO of The Crownshield Group and Co-Founder of the Africa Unconquered Foundation.' }}">
    <meta property="og:title" content="{{ $title ?? 'Alvin Atsegwasi' }}">
    <meta property="og:description" content="{{ $description ?? 'British Army veteran. Group CEO, The Crownshield Group.' }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/alvin-portrait.jpg') }}">
    <meta name="theme-color" content="#0b1422">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Newsreader:ital,opsz,wght@0,6..72,300;0,6..72,400;0,6..72,500;1,6..72,300;1,6..72,400&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen">
    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-50 focus:bg-ink focus:px-4 focus:py-2 focus:text-white">Skip to content</a>

    @php
        $left = [
            ['label' => 'His Story', 'href' => route('about'), 'active' => request()->routeIs('about')],
            ['label' => 'Principles', 'href' => route('home').'#principles', 'active' => false],
            ['label' => 'Ventures', 'href' => route('ventures'), 'active' => request()->routeIs('ventures')],
        ];
        $right = [
            ['label' => 'Foundation', 'href' => route('foundation'), 'active' => request()->routeIs('foundation')],
            ['label' => 'Media', 'href' => route('news'), 'active' => request()->routeIs('news')],
        ];
        $socials = array_filter(config('site.socials', []));
    @endphp

    {{-- Utility bar --}}
    <div class="bg-navy-deep text-[0.68rem] text-white/75">
        <div class="container-x flex h-8 items-center justify-between">
            <p>{{ config('site.location') }}</p>
            @if ($socials)
                <ul class="flex items-center gap-5">
                    @foreach ($socials as $name => $url)
                        <li><a href="{{ $url }}" target="_blank" rel="noopener" class="transition hover:text-white">{{ $name }}</a></li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

    <header x-data="{ open: false, scrolled: false }"
            @scroll.window="scrolled = window.scrollY > 40"
            :class="scrolled && 'shadow-[0_8px_24px_-20px_rgba(11,20,34,0.5)]'"
            class="sticky top-0 z-40 border-b border-line bg-paper/95 backdrop-blur transition duration-300">
        <nav class="container-x grid h-[4.5rem] grid-cols-[1fr_auto_1fr] items-center" aria-label="Main">
            <div class="hidden items-center gap-8 lg:flex">
                @foreach ($left as $link)
                    <a href="{{ $link['href'] }}" @class(['nav-link', 'is-active' => $link['active']])>{{ $link['label'] }}</a>
                @endforeach
            </div>

            <a href="{{ route('home') }}" class="col-start-1 text-left lg:col-start-2 lg:text-center" aria-label="Alvin Atsegwasi, home">
                <span class="block font-serif text-[1.4rem] leading-none tracking-tight text-ink">Alvin Atsegwasi</span>
                <span class="mt-1.5 block text-[0.55rem] font-semibold tracking-[0.24em] text-accent uppercase">Service &middot; Enterprise &middot; Legacy</span>
            </a>

            <div class="col-start-3 flex items-center justify-end gap-8">
                <div class="hidden items-center gap-8 lg:flex">
                    @foreach ($right as $link)
                        <a href="{{ $link['href'] }}" @class(['nav-link', 'is-active' => $link['active']])>{{ $link['label'] }}</a>
                    @endforeach
                    <a href="{{ route('contact') }}" @class(['border px-4 py-2 text-[0.8rem] font-medium transition', 'border-ink bg-ink text-white' => request()->routeIs('contact'), 'border-ink/70 text-ink hover:bg-ink hover:text-white' => ! request()->routeIs('contact')])>Connect</a>
                </div>

                <button type="button" class="-mr-2 p-2 lg:hidden" @click="open = !open" :aria-expanded="open" aria-controls="mobile-nav" aria-label="Toggle menu">
                    <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
                    <svg x-show="open" x-cloak class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M6 6l12 12M18 6L6 18"/></svg>
                </button>
            </div>
        </nav>

        <div id="mobile-nav" x-show="open" x-cloak x-transition.opacity class="border-t border-line bg-paper lg:hidden">
            <div class="container-x flex flex-col py-4">
                @foreach (array_merge($left, $right) as $link)
                    <a href="{{ $link['href'] }}" @click="open = false" class="border-b border-line py-3.5 font-serif text-2xl font-light">{{ $link['label'] }}</a>
                @endforeach
                <a href="{{ route('gallery') }}" class="border-b border-line py-3.5 font-serif text-2xl font-light">Gallery</a>
                <a href="{{ route('contact') }}" class="btn-primary mt-6 justify-center">Connect</a>
            </div>
        </div>
    </header>

    <main id="main">
        @yield('content')
    </main>

    <footer class="bg-navy-deep text-white">
        <div class="container-x grid gap-12 pt-16 pb-12 md:grid-cols-12">
            <div class="md:col-span-6">
                <a href="{{ route('home') }}" class="font-serif text-3xl font-light tracking-tight">Alvin Atsegwasi</a>
                <p class="mt-4 text-[0.6rem] font-semibold tracking-[0.28em] text-accent-light uppercase">Service &middot; Enterprise &middot; Legacy</p>
            </div>

            @php
                $columns = [
                    'Story' => [
                        ['Biography', route('about')],
                        ['Principles', route('home').'#principles'],
                        ['Gallery', route('gallery')],
                    ],
                    'Work' => [
                        ['The Crownshield Group', route('ventures')],
                        ['1st Shield Security', route('ventures')],
                        ['Africa Unconquered', route('foundation')],
                    ],
                ];
                if ($socials) {
                    $columns['Follow'] = collect($socials)->map(fn ($url, $name) => [$name === 'X' ? 'X (Twitter)' : $name, $url])->values()->all();
                }
            @endphp

            @foreach ($columns as $heading => $items)
                <div class="md:col-span-2">
                    <p class="text-[0.62rem] font-semibold tracking-[0.2em] uppercase">{{ $heading }}</p>
                    <ul class="mt-5 space-y-2.5 text-[0.8rem] text-white/70">
                        @foreach ($items as [$label, $href])
                            <li><a href="{{ $href }}" @if ($heading === 'Follow') target="_blank" rel="noopener" @endif class="transition hover:text-white">{{ $label }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
        <div class="container-x">
            <div class="flex flex-col gap-3 border-t border-white/10 py-6 text-[0.7rem] text-white/50 sm:flex-row sm:justify-between">
                <p>&copy; {{ date('Y') }} Alvin Atsegwasi. All rights reserved.</p>
                <a href="{{ route('contact') }}" class="transition hover:text-white">Contact the office</a>
            </div>
        </div>
    </footer>
</body>
</html>
