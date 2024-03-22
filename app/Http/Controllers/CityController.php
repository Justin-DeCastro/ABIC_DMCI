<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CityController extends Controller
{
    public function index()
    {
        $cityItems = City::latest()->get(); // Retrieve all reco items ordered by the latest created_at timestamp
        return view('city.index', compact('cityItems'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:100000',

            // 'name' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            // 'bed' => 'required|string|max:255',
            // 'price' => 'required|string|max:255',
        ]);

        try {
            // Move uploaded image to public directory
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            // Create new Reco instance and save to database
            City::create([
                'image' => '/images/' . $imageName,
                // 'name' => $request->name,
                'place' => $request->place,
                // 'bed' => $request->bed,
                // 'price' => $request->price,
            ]);

            return redirect()->route('city.index')->with('success', 'City item created successfully.');
        } catch (\Exception $e) {
            // Log any database-related errors
            Log::error('Error occurred while saving high item: ' . $e->getMessage());
            return redirect()->route('city.index')->with('error', 'Failed to create City item.');
        }
    }
    public function update(Request $request)
{
    $cityId = $request->input('city_id');
    $city = City::findOrFail($cityId);


    $request->validate([

        // 'name' => 'required|string|max:255',
        'place' => 'required|string|max:255',
        // 'bed' => 'required|string|max:255',
        // 'price' => 'required|string|max:255',
    ]);

    try {

        // $mid->name = $request->input('name');
        $city->place = $request->input('place');
        // $mid->bed = $request->input('bed');
        // $mid->price = $request->input('price');

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path(''), $filename);
            $city->image = $filename;
        }

        $city->save(); // Save the updated card

        return redirect()->back()->with('success', 'City item updated successfully.');
    } catch (\Exception $e) {
        Log::error('Error occurred while updating mid item: ' . $e->getMessage());
        return redirect()->back()->with('failed', 'Updating city item is unsuccessful. Please try again.');
    }
}
public function delete($city_id)
{
    $city = City::findOrFail($city_id);
    $city->delete();

    return redirect()->back()->with('success', 'City deleted successfully.');
}


}
