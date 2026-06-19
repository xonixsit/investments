<?php

namespace App\Http\Controllers;

use App\Mail\ConsultationConfirmation;
use App\Mail\ConsultationNotification;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class ConsultationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'             => 'required|string|max:100',
            'email'            => 'required|email|max:150',
            'dial_code'        => 'required|string|max:10',
            'phone'            => 'required|string|max:30',
            'country'          => 'nullable|string|max:100',
            'contact_method'   => 'required|string|max:30',
            'property_interest'=> 'required|string|max:50',
            'budget_label'     => 'nullable|string|max:50',
            'message'          => 'nullable|string|max:2000',
        ]);

        $consultation = Consultation::create($validated);

        // Notify support & properties teams
        Mail::to('Support@etaxplanner.com')
            ->cc('properties@etaxplanner.com')
            ->send(new ConsultationNotification($consultation));

        // Confirmation to submitter
        Mail::to($consultation->email)
            ->send(new ConsultationConfirmation($consultation));

        return Inertia::render('Consult/Confirmation', [
            'name'  => $consultation->name,
            'email' => $consultation->email,
        ]);
    }
}
