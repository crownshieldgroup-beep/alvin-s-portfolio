@props(['mode' => 'solid'])

@php
    $links = [
        ['label' => 'About', 'route' => 'about'],
        ['label' => 'Business', 'route' => 'business'],
        ['label' => 'Philanthropy', 'route' => 'philanthropy'],
        ['label' => 'Media', 'route' => 'media'],
        ['label' => 'Gallery', 'route' => 'gallery'],
    ];
@endphp

<header
    x-data="{
        scrolled: false,
        open: false,
        mode: '{{ $mode }}',
        get solid() { return this.scrolled || this.open || this.mode === 'solid'; }
    }"
    @scroll.window="scrolled = window.scrollY > 40"
    :class="solid ? 'bg-white/95 backdrop-blur-md shadow-[0_1px_0_0_rgba(228,234,240,1),0_10px_30px_-18px_rgba(20,23,28,0.35)]' : 'bg-transparent'"
    class="fixed top-0 inset-x-0 z-50 transition-colors duration-500"
>
    <nav class="container-editorial flex items-center justify-between h-20 md:h-24">
        {{-- Wordmark --}}
        <a href="{{ route('home') }}"
           class="flex items-center gap-3 group"
           :class="solid ? 'text-ink' : 'text-white'">
            <span class="grid place-items-center w-10 h-10 rounded-full border transition-colors duration-500"
                  :class="solid ? 'border-line' : 'border-white/40'">
                <span class="font-display text-lg leading-none" :class="solid ? 'text-sky-ink' : 'text-white'">A</span>
            </span>
            <span class="hidden sm:block font-display text-lg tracking-tight">Alvin Atsegwasi</span>
        </a>

        {{-- Desktop links --}}
        <div class="hidden lg:flex items-center gap-9">
            @foreach ($links as $link)
                @php $active = request()->routeIs($link['route']); @endphp
                <a href="{{ route($link['route']) }}"
                   class="relative text-sm font-medium tracking-wide transition-colors duration-300 py-1"
                   :class="solid ? '{{ $active ? 'text-sky-ink' : 'text-ink/80 hover:text-sky-ink' }}' : '{{ $active ? 'text-white' : 'text-white/85 hover:text-white' }}'">
                    {{ $link['label'] }}
                    @if ($active)
                        <span class="absolute -bottom-0.5 left-0 h-px w-full"
                              :class="solid ? 'bg-sky' : 'bg-white'"></span>
                    @endif
                </a>
            @endforeach
        </div>

        {{-- CTA + mobile toggle --}}
        <div class="flex items-center gap-3">
            <a href="{{ route('contact') }}"
               class="hidden lg:inline-flex btn"
               :class="solid ? 'btn-primary' : 'btn-ghost-light'">
                Contact
            </a>

            <button type="button"
                    @click="open = !open"
                    class="lg:hidden grid place-items-center w-11 h-11 rounded-full transition-colors"
                    :class="solid ? 'text-ink hover:bg-tint' : 'text-white hover:bg-white/10'"
                    :aria-expanded="open.toString()"
                    aria-label="Toggle navigation menu">
                <x-icon x-show="!open" name="menu" class="w-6 h-6" />
                <x-icon x-show="open" x-cloak name="close" class="w-6 h-6" />
            </button>
        </div>
    </nav>

    {{-- Mobile panel --}}
    <div x-show="open" x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="lg:hidden bg-white border-t border-line">
        <div class="container-editorial py-6 flex flex-col gap-1">
            <a href="{{ route('home') }}" class="py-3 text-ink text-lg font-display border-b border-line/70">Home</a>
            @foreach ($links as $link)
                <a href="{{ route($link['route']) }}"
                   class="py-3 text-lg font-display border-b border-line/70 {{ request()->routeIs($link['route']) ? 'text-sky-ink' : 'text-ink' }}">
                    {{ $link['label'] }}
                </a>
            @endforeach
            <a href="{{ route('contact') }}" class="btn btn-primary mt-5 w-full">Contact</a>
        </div>
    </div>
</header>
