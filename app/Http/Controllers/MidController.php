<?php

namespace App\Http\Controllers;

use App\Models\Mid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MidController extends Controller
{
    public function index()
    {
        $midItems = Mid::latest()->get(); // Retrieve all reco items ordered by the latest created_at timestamp
        return view('mid.index', compact('midItems'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:100000',

            'name' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'bed' => 'required|string|max:255',
            'price' => 'required|string|max:255',
        ]);

        try {
            // Move uploaded image to public directory
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            // Create new Reco instance and save to database
            Mid::create([
                'image' => '/images/' . $imageName,
                'name' => $request->name,
                'place' => $request->place,
                'bed' => $request->bed,
                'price' => $request->price,
            ]);

            return redirect()->route('mid.index')->with('success', 'mid item created successfully.');
        } catch (\Exception $e) {
            // Log any database-related errors
            Log::error('Error occurred while saving mid item: ' . $e->getMessage());
            return redirect()->route('mid.index')->with('error', 'Failed to create mid item.');
        }
    }
    public function update(Request $request)
{
    $midId = $request->input('mid_id');
    $mid = Mid::findOrFail($midId);


    $request->validate([

        'name' => 'required|string|max:255',
        'place' => 'required|string|max:255',
        'bed' => 'required|string|max:255',
        'price' => 'required|string|max:255',
    ]);

    try {

        $mid->name = $request->input('name');
        $mid->place = $request->input('place');
        $mid->bed = $request->input('bed');
        $mid->price = $request->input('price');

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path(''), $filename);
            $mid->image = $filename;
        }

        $mid->save(); // Save the updated card

        return redirect()->back()->with('success', 'Mid item updated successfully.');
    } catch (\Exception $e) {
        Log::error('Error occurred while updating mid item: ' . $e->getMessage());
        return redirect()->back()->with('failed', 'Updating mid item is unsuccessful. Please try again.');
    }
}
public function delete($mid_id)
{
    $mid = Mid::findOrFail($mid_id);
    $mid->delete();

    return redirect()->back()->with('success', 'Card deleted successfully.');
}



}
