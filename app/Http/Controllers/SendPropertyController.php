<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
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
        'id_image' => 'required|image|max:100000', // Max 100 KB for ID image file
        'image.*' => 'required|image|max:100000', // Max 100 KB for image files
        'video.*' => 'sometimes|required|mimetypes:video/*|max:500000', // Max 500 MB for video files
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'description' => 'required|string|max:255',
    ]);

    try {
        $idImage = $request->file('id_image');
        $idImageName = time() . '_' . $idImage->getClientOriginalName();
        $idImage->move(public_path('idimages'), $idImageName);

        $images = [];
        foreach ($request->file('image') as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $images[] = '/images/' . $imageName;
        }

        $videos = [];
        if ($request->hasFile('video')) {
            foreach ($request->file('video') as $video) {
                $videoName = time() . '_' . $video->getClientOriginalName();
                $video->move(public_path('videos'), $videoName);
                $videos[] = '/videos/' . $videoName;
            }
        }

        SendProperty::create([
            'id_image' => '/idimages/' . $idImageName,
            'image' => json_encode($images),
            'video' => json_encode($videos),
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

            return redirect()->back()->with('success', 'Property accepted successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while accepting property: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to accept property.');
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

    public function update(Request $request, $id)
    {
        $request->validate([
            'image.*' => 'sometimes|required|image|max:100000',
            'video.*' => 'sometimes|required|mimetypes:video/*|max:50000', // Max 50 MB for video files
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'description' => 'required|string|max:255',
        ]);

        try {
            // Find the property by its ID
            $property = SendProperty::findOrFail($id);

            // Update the property details
            $property->update([
                'name' => $request->name,
                'email' => $request->email,
                'description' => $request->description,
            ]);

            // Handle image update
            if ($request->hasFile('image')) {
                $images = [];
                foreach ($request->file('image') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move(public_path('images'), $imageName);
                    $images[] = '/images/' . $imageName;
                }
                $property->update(['image' => json_encode($images)]);
            }

            // Handle video update
            if ($request->hasFile('video')) {
                $videos = [];
                foreach ($request->file('video') as $video) {
                    $videoName = time() . '_' . $video->getClientOriginalName();
                    $video->move(public_path('videos'), $videoName);
                    $videos[] = '/videos/' . $videoName;
                }
                $property->update(['video' => json_encode($videos)]);
            }

            return redirect()->back()->with('success', 'Property updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while updating property details: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update property.');
        }
    }
}
