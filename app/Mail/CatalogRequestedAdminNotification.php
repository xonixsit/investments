<?php

namespace App\Mail;

use App\Models\CatalogRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CatalogRequestedAdminNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public CatalogRequest $catalogRequest) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Private Catalog Request – ' . $this->catalogRequest->email,
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.catalog-notification');
    }
}
