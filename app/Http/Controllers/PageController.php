<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use App\Models\NewsItem;
use App\Models\Subscriber;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'ventures' => array_slice(self::venturesList(), 0, 3),
            'news' => NewsItem::latestFirst()->take(3)->get(),
        ]);
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function ventures(): View
    {
        return view('pages.ventures', ['ventures' => self::venturesList()]);
    }

    public function foundation(): View
    {
        return view('pages.foundation', [
            'news' => NewsItem::where('category', 'Foundation')->latestFirst()->get(),
        ]);
    }

    public function news(): View
    {
        return view('pages.news', ['news' => NewsItem::latestFirst()->get()]);
    }

    public function gallery(): View
    {
        $dir = public_path('images/gallery');

        $images = collect(File::isDirectory($dir) ? File::files($dir) : [])
            ->filter(fn ($f) => in_array(strtolower($f->getExtension()), ['jpg', 'jpeg', 'png', 'webp']))
            ->sortBy(fn ($f) => $f->getFilename())
            ->map(fn ($f) => [
                'src' => asset('images/gallery/'.$f->getFilename()),
                'alt' => str($f->getFilenameWithoutExtension())->replace(['-', '_'], ' ')->title()->toString(),
            ])
            ->values();

        return view('pages.gallery', ['images' => $images]);
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'organisation' => ['nullable', 'string', 'max:160'],
            'subject' => ['required', 'string', 'in:Speaking,Partnership,Media,Crownshield,Foundation,Other'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
        ]);

        ContactSubmission::create($data + ['ip_address' => $request->ip()]);

        return redirect()->route('contact')->with('status', 'Thank you. Your message has been received and the office will reply shortly.');
    }

    public function subscribe(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'max:190'],
            'first_name' => ['nullable', 'string', 'max:80'],
            'last_name' => ['nullable', 'string', 'max:80'],
        ]);

        Subscriber::updateOrCreate(
            ['email' => strtolower($data['email'])],
            array_filter(['first_name' => $data['first_name'] ?? null, 'last_name' => $data['last_name'] ?? null]),
        );

        return redirect()->to(url()->previous().'#notes')
            ->with('subscribed', 'You are subscribed. Look out for the first monthly note from Alvin.');
    }

    /**
     * Ventures and roles, taken from Alvin's executive profile and public coverage.
     *
     * @return array<int, array<string, string|null>>
     */
    public static function venturesList(): array
    {
        return [
            [
                'name' => 'The Crownshield Group',
                'role' => 'Group CEO',
                'place' => 'Abuja, Nigeria and United Kingdom',
                'summary' => 'Equips and supports security and defence organisations with protective equipment, vehicles, communications, surveillance technology, training and equipment accountability systems. All procurement runs through licensed and authorised channels under Nigerian and UK law.',
                'image' => null,
            ],
            [
                'name' => 'Africa Unconquered Foundation',
                'role' => 'Co-Founder',
                'place' => 'Nigeria',
                'summary' => 'Supports wounded, injured and sick Nigerian military personnel, and works with the Federal Government to prepare Team Nigeria for the Invictus Games.',
                'image' => null,
            ],
            [
                'name' => '1st Shield Security Services Ltd',
                'role' => 'Founder',
                'place' => 'United Kingdom',
                'summary' => 'An SIA licensed security company in the United Kingdom, run to the standards of accountability and care Alvin learned in uniform.',
                'image' => 'images/gallery/close-protection.jpg',
            ],
            [
                'name' => 'UNIPASS Nigeria',
                'role' => 'CEO',
                'place' => 'Abuja, Nigeria',
                'summary' => 'Builds transparent, accountable pathways for Nigerian students seeking higher education abroad, with support for vulnerable groups.',
                'image' => null,
            ],
        ];
    }
}
