<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate form fields
        $validatedData = $request->validate([
            'inquiry_type' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required',
            'country' => 'required',
            'province' => 'required',
            'town_city' => 'required',
            'property_inquired' => 'required',
            'message' => 'required',
            'agreedToDpa' => 'required',
            'allowedCRF' => 'required',
        ]);

        // Send email
        Mail::to('decastrojustin24@gmail.com')->send(new ContactFormMail($validatedData));

        // If email sent successfully
        if (Mail::failures()) {
            return redirect()->back()->with('error', 'Failed to send email.');
        }

        return redirect()->back()->with('success', 'Email sent successfully.');
    }
}
