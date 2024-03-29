<?php

namespace App\Http\Controllers;

use App\Models\AddLease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AddLeaseController extends Controller
{
    public function index()
{
    $addLeases = AddLease::all();
    return view('addleases.index', compact('addLeases'));
}


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:100000',
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'units' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        try {
            // Move uploaded image to public directory
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            // Create new AddLease instance and save to database
            AddLease::create([
                'image' => '/images/' . $imageName,
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'status' => $request->status,
                'units' => $request->units,
                'location' => $request->location,
            ]);

            return redirect()->route('addleases.index')->with('success', 'Lease added successfully.');
        } catch (\Exception $e) {
            // Log any database-related errors
            Log::error('Error occurred while saving lease: ' . $e->getMessage());
            return redirect()->route('addleases.index')->with('error', 'Failed to add lease.');
        }
    }
    public function delete($lease_id)
    {
        $addLease = AddLease::findOrFail($lease_id);
        $addLease->delete();

        return redirect()->back()->with('success', 'Lease deleted successfully.');
    }

    public function update(Request $request, $id)
    {
        $addleases = AddLease::findOrFail($id);

        $request->validate([
            'image' => 'image|max:100000',
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:255',

            'units' => 'required|string|max:255',
            'location' => 'required|string|max:255',

        ]);

        try {
            $addleases->update($request->all());

            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
                $addleases->image = $filename;
            }

            $addleases->save();

            return redirect()->route('addleases.index')->with('success', 'Card item created successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while saving card item: ' . $e->getMessage());
            return redirect()->route('addleases.index')->with('error', 'Failed to create card item.');
        }

    }


}
