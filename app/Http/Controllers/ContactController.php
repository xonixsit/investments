<?php

namespace App\Http\Controllers;

use App\Mail\ContactConfirmation;
use App\Mail\ContactNotification;
use App\Models\ContactInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'           => 'required|string|max:100',
            'email'          => 'required|email|max:150',
            'phone'          => 'nullable|string|max:40',
            'country'        => 'nullable|string|max:100',
            'contact_method' => 'required|string|max:40',
            'property_type'  => 'nullable|string|max:50',
            'budget'         => 'nullable|string|max:60',
            'message'        => 'nullable|string|max:3000',
        ]);

        $inquiry = ContactInquiry::create($validated);

        Mail::to('pro.investment@etaxplanner.com')
            ->cc('pro.investment@etaxplanner.com')
            ->send(new ContactNotification($inquiry));

        Mail::to($inquiry->email)
            ->send(new ContactConfirmation($inquiry));

        return Inertia::render('Contact/Confirmation', [
            'name'  => $inquiry->name,
            'email' => $inquiry->email,
        ]);
    }
}
