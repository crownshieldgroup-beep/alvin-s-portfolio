@props(['name' => '', 'class' => 'w-5 h-5'])

@php
    $icons = [
        'shield' => '<path d="M12 3l7 3v5c0 4.5-3 8.5-7 9-4-.5-7-4.5-7-9V6l7-3z"/>',
        'heart' => '<path d="M12 20s-7-4.35-9.5-8.5C1 8.5 2.5 5 6 5c2 0 3 1.2 4 2.5C11 6.2 12 5 14 5c3.5 0 5 3.5 3.5 6.5C19 15.65 12 20 12 20z"/>',
        'medal' => '<circle cx="12" cy="14" r="6"/><path d="M9 8.5L6 2m9 6.5L18 2M12 11.5l.9 1.9 2 .3-1.5 1.4.4 2-1.8-1-1.8 1 .4-2L9.7 13.7l2-.3.9-1.9z"/>',
        'flag' => '<path d="M5 21V4m0 1h11l-2 3 2 3H5"/>',
        'arrow-right' => '<path d="M5 12h14m-6-6l6 6-6 6"/>',
        'arrow-up-right' => '<path d="M7 17L17 7m0 0H8m9 0v9"/>',
        'star' => '<path d="M12 3l2.6 5.3 5.9.9-4.3 4.1 1 5.8L12 16.9 6.8 19.1l1-5.8L3.5 9.2l5.9-.9L12 3z"/>',
        'users' => '<circle cx="9" cy="8" r="3"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6M16 5.5a3 3 0 010 5.7M21 20c0-2.5-1.5-4.7-3.7-5.6"/>',
        'target' => '<circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="4"/><circle cx="12" cy="12" r="1" fill="currentColor" stroke="none"/>',
        'compass' => '<circle cx="12" cy="12" r="9"/><path d="M15.5 8.5l-2 5-5 2 2-5 5-2z"/>',
        'clock' => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'globe' => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.6 2.5 15.4 0 18-2.5-2.6-2.5-15.4 0-18z"/>',
        'mail' => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="M4 7l8 5 8-5"/>',
        'phone' => '<path d="M4 5c0 8 7 15 15 15l-.5-4-4-1-2 2c-2.5-1.5-4.5-3.5-6-6l2-2-1-4L4 5z"/>',
        'pin' => '<path d="M12 21s7-6 7-11a7 7 0 10-14 0c0 5 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/>',
        'quote' => '<path d="M9 7H5v6h4l-1 4M19 7h-4v6h4l-1 4"/>',
        'check' => '<path d="M4 12l5 5L20 6"/>',
        'briefcase' => '<rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 012-2h4a2 2 0 012 2v2M3 12h18"/>',
        'academic' => '<path d="M12 4L2 9l10 5 10-5-10-5z"/><path d="M6 11v4c0 1.5 3 3 6 3s6-1.5 6-3v-4"/>',
        'dot' => '<circle cx="12" cy="12" r="3" fill="currentColor" stroke="none"/>',
        'menu' => '<path d="M4 7h16M4 12h16M4 17h16"/>',
        'close' => '<path d="M6 6l12 12M18 6L6 18"/>',
        'linkedin' => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M7 10v7M7 7v.01M11 17v-4a2 2 0 014 0v4" fill="none"/>',
        'x-social' => '<path d="M4 4l16 16M20 4L4 20" />',
        'instagram' => '<rect x="4" y="4" width="16" height="16" rx="4"/><circle cx="12" cy="12" r="3.5"/><circle cx="17" cy="7" r="0.6" fill="currentColor" stroke="none"/>',
        'external' => '<path d="M14 5h5v5M19 5l-7 7M12 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-6"/>',
    ];
    $svg = $icons[$name] ?? '';
@endphp

<svg {{ $attributes->merge(['class' => $class]) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    {!! $svg !!}
</svg>
