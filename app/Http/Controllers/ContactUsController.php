<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class ContactUsController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required|string',
            'country' => 'required|string',
            'province' => 'required|string',
            'city' => 'required|string',
            'property' => 'required|string',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to($validatedData['email'])->send(new SendEmail($validatedData));

        return redirect()->back()->with('message', 'Email sent successfully!');
    }
}
