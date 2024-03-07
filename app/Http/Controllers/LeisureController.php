<?php

namespace App\Http\Controllers;

use App\Models\Leisure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LeisureController extends Controller
{
    public function index()
    {
        $leisureItems = Leisure::latest()->get(); // Retrieve all reco items ordered by the latest created_at timestamp
        return view('leisure.index', compact('leisureItems'));
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
            Leisure::create([
                'image' => '/images/' . $imageName,
                'name' => $request->name,
                'place' => $request->place,
                'bed' => $request->bed,
                'price' => $request->price,
            ]);

            return redirect()->route('leisure.index')->with('success', 'high item created successfully.');
        } catch (\Exception $e) {
            // Log any database-related errors
            Log::error('Error occurred while saving high item: ' . $e->getMessage());
            return redirect()->route('high.index')->with('error', 'Failed to create high item.');
        }
    }
    public function update(Request $request)
{
    $leisureId = $request->input('leisure_id');
    $leisure = Leisure::findOrFail($leisureId);


    $request->validate([

        'name' => 'required|string|max:255',
        'place' => 'required|string|max:255',
        'bed' => 'required|string|max:255',
        'price' => 'required|string|max:255',
    ]);

    try {

        $leisure->name = $request->input('name');
        $leisure->place = $request->input('place');
        $leisure->bed = $request->input('bed');
        $leisure->price = $request->input('price');

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path(''), $filename);
            $leisure->image = $filename;
        }

        $leisure->save(); // Save the updated card

        return redirect()->back()->with('success', 'leisure item updated successfully.');
    } catch (\Exception $e) {
        Log::error('Error occurred while updating leisure item: ' . $e->getMessage());
        return redirect()->back()->with('failed', 'Updating leisure item is unsuccessful. Please try again.');
    }
}
public function delete($leisure_id)
{
    $leisure = Leisure::findOrFail($leisure_id);
    $leisure->delete();

    return redirect()->back()->with('success', 'Card deleted successfully.');
}


}
