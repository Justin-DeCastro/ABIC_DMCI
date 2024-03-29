<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail; // Add this line
use App\Models\SendProperty;
use App\Mail\SendProperties;
class SendPropertyController extends Controller
{
    public function index()
    {
        $sendproperties = SendProperty::all();
        return view('sendproperties', compact('sendproperties'));
    }

    public function send()
    {
        $sendproperties = SendProperty::all();
        return view('sendproperty.sendproperties', compact('sendproperties'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image.*' => 'required|image|max:100000',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'description' => 'required|string|max:255',
        ]);

        try {
            $images = [];
            foreach ($request->file('image') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $images[] = '/images/' . $imageName;
            }

            SendProperty::create([
                'image' => json_encode($images),
                'name' => $request->name,
                'email' => $request->email,
                'description' => $request->description,
            ]);

            return redirect()->route('sendproperties.index')->with('success', 'Property details submitted successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while saving property details: ' . $e->getMessage());
            return redirect()->route('sendproperties.index')->with('error', 'Failed to submit property details.');
        }
    }
    public function accept($id)
{
    try {
        // Find the property by its ID
        $property = SendProperty::findOrFail($id);

        // Update the status of the property to "Accepted"
        $property->update(['status' => 'Accepted']);

        // Send email notification to the property owner
        $message = "Good Day! MR/MS " . $property->name . ", Your  submitted property has been accepted. ";
        Mail::to($property->email)->send(new SendProperties($property, $message));

        return redirect()->route('send')->with('success', 'Property accepted successfully.');
    } catch (\Exception $e) {
        Log::error('Error occurred while accepting property: ' . $e->getMessage());
        return redirect()->route('send')->with('error', 'Failed to accept property.');
    }
}

public function decline($id)
{
    try {
        // Find the property by its ID
        $property = SendProperty::findOrFail($id);

        // Update the status of the property to 'declined'
        $property->update(['status' => 'Declined']);

        // Send email
        $message = "Good Day! MR/MS " . $property->name . ", We regret to inform you that your property has been declined.";
        Mail::to($property->email)->send(new SendProperties($property, $message));

        return redirect()->route('send')->with('success', 'Property declined successfully.');
    } catch (\Exception $e) {
        Log::error('Error occurred while declining property: ' . $e->getMessage());
        return redirect()->route('send')->with('error', 'Failed to decline property.');
    }
}

}
