<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback; // Assuming you have a Feedback model

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Create a new feedback instance
        $feedback = new Feedback();
        $feedback->name = $validatedData['name'];
        $feedback->email = $validatedData['email'];
        $feedback->message = $validatedData['message'];
        $feedback->rating = $validatedData['rating'];
        $feedback->save();

        // Optionally, you can redirect the user or return a response
        return redirect()->back()->with('success', 'Feedback submitted successfully.');
    }
}
