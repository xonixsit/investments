<?php

namespace App\Mail;

use App\Models\CatalogRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CatalogRequestedConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public CatalogRequest $catalogRequest) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Private Dubai Investment Catalog',
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.catalog-confirmation');
    }
}
