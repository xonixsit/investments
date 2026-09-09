<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterSubscribedAdminNotification;
use App\Mail\NewsletterSubscribedConfirmation;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email'  => 'required|email|max:150|unique:newsletter_subscribers,email',
            'source' => 'nullable|string|max:50',
        ]);

        if (empty($validated['source'])) {
            $validated['source'] = 'footer';
        }

        $subscriber = NewsletterSubscriber::create($validated);

        // Notify support & properties teams
        Mail::to('pro.investment@etaxplanner.com')
            ->cc('pro.investment@etaxplanner.com')
            ->send(new NewsletterSubscribedAdminNotification($subscriber));

        // Confirmation to subscriber
        Mail::to($subscriber->email)
            ->send(new NewsletterSubscribedConfirmation($subscriber));

        return back();
    }
}
