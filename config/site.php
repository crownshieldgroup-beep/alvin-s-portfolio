<?php

/*
 * Site-wide details that are not known yet. Fill these in and they appear
 * automatically; anything left null is simply not rendered (no dead links).
 */
return [

    'email' => env('SITE_EMAIL'),

    'location' => 'Abuja · United Kingdom',

    'socials' => [
        'LinkedIn' => env('SOCIAL_LINKEDIN'),
        'X' => env('SOCIAL_X'),
        'Instagram' => env('SOCIAL_INSTAGRAM'),
        'YouTube' => env('SOCIAL_YOUTUBE'),
    ],

    /*
     * "In his own words" on the home page. Add a 'url' (YouTube link) and a
     * 'thumbnail' (path under public/) when a video is ready; until then the
     * slot shows a quiet placeholder.
     */
    'videos' => [
        'featured' => ['kind' => 'Keynote', 'title' => null, 'event' => null, 'url' => null, 'thumbnail' => null],
        'more' => [
            ['kind' => 'Interview', 'title' => null, 'url' => null, 'thumbnail' => null],
            ['kind' => 'Panel', 'title' => null, 'url' => null, 'thumbnail' => null],
            ['kind' => 'Podcast', 'title' => null, 'url' => null, 'thumbnail' => null],
        ],
    ],

];
