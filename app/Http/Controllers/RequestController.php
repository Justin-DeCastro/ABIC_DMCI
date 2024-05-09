<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as RequestModel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\RequestMail;

class RequestController extends Controller
{
    public function index()
    {
        // Retrieve all request items from the database
        $requestItems = RequestModel::all();
        return view('request.index', compact('requestItems'));
    }

    public function submit(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required|string',
            'property' => 'required|string',
        ]);

        // Store request data in the database
        $requestData = $request->only(['fullname', 'email', 'contact', 'property']);
        RequestModel::create($requestData);

        // Redirect back to the previous page
        return redirect()->back()->with('success', 'Request submitted successfully');
    }

    public function accept($id)
{
    try {
        // Find the request by its ID
        $requestItem = RequestModel::findOrFail($id);

        // Update the status of the request to "Accepted"
        $requestItem->status = 'Accepted';
        $requestItem->save(); // Save the changes to the database

        // Send email notification to the request owner
        $message = "Good Day! MR/MS " . $requestItem->fullname . ", Your Request for viewing $requestItem->property has been accepted.";
        Mail::to($requestItem->email)->send(new RequestMail($requestItem, $message));

        return redirect()->back()->with('success', 'Request accepted successfully.');
    } catch (\Exception $e) {
        Log::error('Error occurred while accepting request: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Failed to accept request.');
    }
}

public function decline($id)
{
    try {
        // Find the request by its ID
        $requestItem = RequestModel::findOrFail($id);

        // Update the status of the request to 'Declined'
        $requestItem->status = 'Declined';
        $requestItem->save(); // Save the changes to the database

        // Send email
        $message = "Good Day! MR/MS " . $requestItem->fullname . ", We regret to inform you that your request has been declined.";
        Mail::to($requestItem->email)->send(new RequestMail($requestItem, $message));

        return redirect()->route('send')->with('success', 'Request declined successfully.');
    } catch (\Exception $e) {
        Log::error('Error occurred while declining request: ' . $e->getMessage());
        return redirect()->route('send')->with('error', 'Failed to decline request.');
    }
}
}
