<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['nullable', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:180'],
        ]);

        Subscriber::updateOrCreate(
            ['email' => $data['email']],
            ['name' => $data['name'] ?? null]
        );

        return back()->with('newsletter_status', 'Thank you. You are on the list, and we will be in touch.');
    }
}
