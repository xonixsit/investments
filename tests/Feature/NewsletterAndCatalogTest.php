<?php

namespace Tests\Feature;

use App\Mail\CatalogRequestedAdminNotification;
use App\Mail\CatalogRequestedConfirmation;
use App\Mail\NewsletterSubscribedAdminNotification;
use App\Mail\NewsletterSubscribedConfirmation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class NewsletterAndCatalogTest extends TestCase
{
    use RefreshDatabase;

    public function test_newsletter_subscription_stores_in_database_and_sends_emails(): void
    {
        Mail::fake();

        $response = $this->post('/newsletter', [
            'email' => 'test_newsletter@example.com',
            'source' => 'investments',
        ]);

        $response->assertStatus(302); // Redirects back

        $this->assertDatabaseHas('newsletter_subscribers', [
            'email' => 'test_newsletter@example.com',
            'source' => 'investments',
        ]);

        Mail::assertSent(NewsletterSubscribedAdminNotification::class, function ($mail) {
            return $mail->subscriber->email === 'test_newsletter@example.com' &&
                   $mail->hasTo('Support@etaxplanner.com') &&
                   $mail->hasCc('properties@etaxplanner.com');
        });

        Mail::assertSent(NewsletterSubscribedConfirmation::class, function ($mail) {
            return $mail->subscriber->email === 'test_newsletter@example.com' &&
                   $mail->hasTo('test_newsletter@example.com');
        });
    }

    public function test_catalog_request_stores_in_database_and_renders_confirmation_page_and_sends_emails(): void
    {
        Mail::fake();

        $response = $this->post('/catalog-request', [
            'email' => 'test_catalog@example.com',
        ]);

        $response->assertStatus(200); // Renders confirmation page

        $this->assertDatabaseHas('catalog_requests', [
            'email' => 'test_catalog@example.com',
        ]);

        Mail::assertSent(CatalogRequestedAdminNotification::class, function ($mail) {
            return $mail->catalogRequest->email === 'test_catalog@example.com' &&
                   $mail->hasTo('Support@etaxplanner.com') &&
                   $mail->hasCc('properties@etaxplanner.com');
        });

        Mail::assertSent(CatalogRequestedConfirmation::class, function ($mail) {
            return $mail->catalogRequest->email === 'test_catalog@example.com' &&
                   $mail->hasTo('test_catalog@example.com');
        });
    }
}
