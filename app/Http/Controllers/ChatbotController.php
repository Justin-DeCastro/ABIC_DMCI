<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class ChatbotController extends Controller
{
    public function handle(Request $request)
    {
        $message = $request->input('message');

        // Save inquiry to database
        Inquiry::create(['message' => $message]);

        // Logic to determine response
        $response = $this->generateResponse($message);

        // You can return a JSON response for AJAX requests
        return response()->json(['response' => $response]);
    }

    private function generateResponse($message)
    {
        // Your logic to generate response based on message
        // This can be a simple if-else or switch statement
        // For example:
        switch (strtolower($message)) {
            case 'hi':
            case 'hello':
                return "Hello! How can I assist you today?";
            case 'available properties':
                return "Here are some available properties: ...";
            // Add more cases as needed
            default:
                return "I'm sorry, I didn't understand that.";
        }
    }
}
