<?php

namespace App\Http\Controllers;

use App\Models\High;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HighController extends Controller
{
    public function index()
    {
        $highItems = High::latest()->get(); // Retrieve all reco items ordered by the latest created_at timestamp
        return view('high.index', compact('highItems'));
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
            High::create([
                'image' => '/images/' . $imageName,
                'name' => $request->name,
                'place' => $request->place,
                'bed' => $request->bed,
                'price' => $request->price,
            ]);

            return redirect()->route('high.index')->with('success', 'high item created successfully.');
        } catch (\Exception $e) {
            // Log any database-related errors
            Log::error('Error occurred while saving high item: ' . $e->getMessage());
            return redirect()->route('high.index')->with('error', 'Failed to create high item.');
        }
    }
    public function update(Request $request)
    {
        $highId = $request->input('high_id');
        $high = High::findOrFail($highId);


        $request->validate([

            'name' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'bed' => 'required|string|max:255',
            'price' => 'required|string|max:255',
        ]);

        try {

            $high->name = $request->input('name');
            $high->place = $request->input('place');
            $high->bed = $request->input('bed');
            $high->price = $request->input('price');

            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path(''), $filename);
                $high->image = $filename;
            }

            $high->save(); // Save the updated card

            return redirect()->back()->with('success', 'high item updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while updating high item: ' . $e->getMessage());
            return redirect()->back()->with('failed', 'Updating high item is unsuccessful. Please try again.');
        }
    }
    public function delete($high_id)
    {
        $high = high::findOrFail($high_id);
        $high->delete();

        return redirect()->back()->with('success', 'Card deleted successfully.');
    }


}
