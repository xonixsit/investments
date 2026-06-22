<?php

namespace App\Http\Controllers;

use App\Mail\CatalogRequestedAdminNotification;
use App\Mail\CatalogRequestedConfirmation;
use App\Models\CatalogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class CatalogRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:150',
        ]);

        $catalogRequest = CatalogRequest::create($validated);

        // Notify support & properties teams
        Mail::to('Support@etaxplanner.com')
            ->cc('properties@etaxplanner.com')
            ->send(new CatalogRequestedAdminNotification($catalogRequest));

        // Confirmation to requestor
        Mail::to($catalogRequest->email)
            ->send(new CatalogRequestedConfirmation($catalogRequest));

        return Inertia::render('Catalog/Confirmation', [
            'email' => $catalogRequest->email,
        ]);
    }
}
