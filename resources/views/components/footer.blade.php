@php
    $nav = [
        'Explore' => [
            ['label' => 'Home', 'route' => 'home'],
            ['label' => 'About', 'route' => 'about'],
            ['label' => 'Business', 'route' => 'business'],
            ['label' => 'Philanthropy', 'route' => 'philanthropy'],
        ],
        'More' => [
            ['label' => 'Media', 'route' => 'media'],
            ['label' => 'Gallery', 'route' => 'gallery'],
            ['label' => 'Contact', 'route' => 'contact'],
        ],
    ];
@endphp

<footer class="bg-ink text-white/70">
    <div class="container-editorial py-20 md:py-24">
        <div class="grid gap-12 lg:grid-cols-12">
            {{-- Brand --}}
            <div class="lg:col-span-5">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-3 text-white">
                    <span class="grid place-items-center w-11 h-11 rounded-full border border-white/25">
                        <span class="font-display text-xl leading-none">A</span>
                    </span>
                    <span class="font-display text-xl tracking-tight">Alvin Atsegwasi</span>
                </a>
                <p class="mt-6 max-w-sm text-white/60 leading-relaxed">
                    Soldier, entrepreneur, and advocate for Africa's unconquered. Building disciplined
                    enterprise and championing the recovery of those who have served.
                </p>

                <div class="mt-8 flex items-center gap-3">
                    <a href="https://1stshieldsecurity.co.uk" target="_blank" rel="noopener noreferrer"
                       aria-label="LinkedIn"
                       class="grid place-items-center w-10 h-10 rounded-full border border-white/20 text-white/70 hover:text-white hover:border-sky hover:bg-white/5 transition-colors">
                        <x-icon name="linkedin" class="w-5 h-5" />
                    </a>
                    <a href="https://1stshieldsecurity.co.uk" target="_blank" rel="noopener noreferrer"
                       aria-label="X"
                       class="grid place-items-center w-10 h-10 rounded-full border border-white/20 text-white/70 hover:text-white hover:border-sky hover:bg-white/5 transition-colors">
                        <x-icon name="x-social" class="w-4 h-4" />
                    </a>
                    <a href="https://1stshieldsecurity.co.uk" target="_blank" rel="noopener noreferrer"
                       aria-label="Instagram"
                       class="grid place-items-center w-10 h-10 rounded-full border border-white/20 text-white/70 hover:text-white hover:border-sky hover:bg-white/5 transition-colors">
                        <x-icon name="instagram" class="w-5 h-5" />
                    </a>
                </div>
            </div>

            {{-- Sitemap --}}
            @foreach ($nav as $group => $items)
                <div class="lg:col-span-2">
                    <h3 class="text-xs font-semibold tracking-[0.2em] uppercase text-sky">{{ $group }}</h3>
                    <ul class="mt-5 space-y-3">
                        @foreach ($items as $item)
                            <li>
                                <a href="{{ route($item['route']) }}"
                                   class="text-white/70 hover:text-white transition-colors">{{ $item['label'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

            {{-- Ventures --}}
            <div class="lg:col-span-3">
                <h3 class="text-xs font-semibold tracking-[0.2em] uppercase text-sky">Ventures</h3>
                <ul class="mt-5 space-y-4">
                    <li>
                        <a href="https://1stshieldsecurity.co.uk" target="_blank" rel="noopener noreferrer"
                           class="group inline-flex items-center gap-2 text-white/70 hover:text-white transition-colors">
                            1st Shield Security Services
                            <x-icon name="external" class="w-4 h-4 text-sky opacity-0 group-hover:opacity-100 transition-opacity" />
                        </a>
                    </li>
                    <li>
                        <a href="https://www.invictusgamesfoundation.org/invictus-community-nations/nigeria" target="_blank" rel="noopener noreferrer"
                           class="group inline-flex items-center gap-2 text-white/70 hover:text-white transition-colors">
                            Africa Unconquered Foundation
                            <x-icon name="external" class="w-4 h-4 text-sky opacity-0 group-hover:opacity-100 transition-opacity" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-16 pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-sm text-white/50">&copy; {{ date('Y') }} Alvin Atsegwasi. All rights reserved.</p>
            <p class="text-sm text-white/50">Discipline. Precision. Service.</p>
        </div>
    </div>
</footer>
