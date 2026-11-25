@extends('layouts.app', ['title' => 'Contact', 'description' => 'Speaking, partnership and media enquiries for Alvin Atsegwasi.'])

@section('content')
    <x-page-header eyebrow="Contact" title='Start a <span class="text-sky italic">conversation.</span>'
        lead="For speaking invitations, partnerships, media requests, Crownshield enquiries or support for the Foundation." />

    <section class="py-24 lg:py-32">
        <div class="container-x grid gap-16 lg:grid-cols-12">
            <div class="space-y-10 lg:col-span-4">
                <div>
                    <p class="eyebrow">Offices</p>
                    <p class="mt-4 font-serif text-2xl">Abuja, Nigeria</p>
                    <p class="font-serif text-2xl">United Kingdom</p>
                </div>
                <div>
                    <p class="eyebrow">Response</p>
                    <p class="mt-4 text-ink-soft">The office replies to every genuine enquiry, normally within three working days.</p>
                </div>
            </div>

            <div class="lg:col-span-7 lg:col-start-6">
                @if (session('status'))
                    <div class="mb-8 rounded-2xl border border-sky/40 bg-sky-soft p-6 text-ink" role="status">{{ session('status') }}</div>
                @endif

                <form method="POST" action="{{ route('contact.submit') }}" class="grid gap-6 sm:grid-cols-2" novalidate>
                    @csrf
                    @foreach ([['name', 'Full name', 'text', true], ['email', 'Email address', 'email', true], ['organisation', 'Organisation (optional)', 'text', false]] as [$f, $label, $type, $req])
                        <div @class(['sm:col-span-2' => $f === 'organisation'])>
                            <label for="{{ $f }}" class="mb-2 block text-sm font-medium">{{ $label }}</label>
                            <input id="{{ $f }}" name="{{ $f }}" type="{{ $type }}" value="{{ old($f) }}" @required($req) class="field" @error($f) aria-invalid="true" aria-describedby="{{ $f }}-error" @enderror>
                            @error($f)<p id="{{ $f }}-error" class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                    @endforeach

                    <div class="sm:col-span-2">
                        <label for="subject" class="mb-2 block text-sm font-medium">Subject</label>
                        <select id="subject" name="subject" required class="field">
                            @foreach (['Speaking', 'Partnership', 'Media', 'Crownshield', 'Foundation', 'Other'] as $s)
                                <option value="{{ $s }}" @selected(old('subject') === $s)>{{ $s }}</option>
                            @endforeach
                        </select>
                        @error('subject')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="message" class="mb-2 block text-sm font-medium">Message</label>
                        <textarea id="message" name="message" rows="6" required class="field" @error('message') aria-invalid="true" @enderror>{{ old('message') }}</textarea>
                        @error('message')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div class="sm:col-span-2">
                        <button class="btn-primary">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
