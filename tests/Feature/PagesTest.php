<?php

namespace Tests\Feature;

use App\Models\ContactSubmission;
use App\Models\Subscriber;
use Database\Seeders\NewsItemSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    public static function pages(): array
    {
        return [['/'], ['/about'], ['/ventures'], ['/foundation'], ['/news'], ['/gallery'], ['/contact']];
    }

    #[DataProvider('pages')]
    public function test_page_renders(string $uri): void
    {
        $this->seed(NewsItemSeeder::class);

        $this->get($uri)->assertOk()->assertSee('Alvin Atsegwasi');
    }

    public function test_contact_form_stores_submission(): void
    {
        $this->post('/contact', [
            'name' => 'Test Person',
            'email' => 'test@example.com',
            'subject' => 'Media',
            'message' => 'Hello, this is an interview request.',
        ])->assertRedirect('/contact')->assertSessionHas('status');

        $this->assertSame(1, ContactSubmission::count());
    }

    public function test_contact_form_validates(): void
    {
        $this->post('/contact', [])->assertSessionHasErrors(['name', 'email', 'subject', 'message']);
    }

    public function test_subscribe_is_idempotent(): void
    {
        $this->post('/subscribe', ['email' => 'Reader@Example.com'])->assertSessionHas('subscribed');
        $this->post('/subscribe', ['email' => 'reader@example.com']);

        $this->assertSame(1, Subscriber::count());
    }
}
