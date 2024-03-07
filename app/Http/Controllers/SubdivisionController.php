<?php

namespace App\Http\Controllers;

use App\Models\Subdivision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubdivisionController extends Controller
{
    public function index()
    {
        $subdivisionItems = Subdivision::latest()->get(); // Retrieve all reco items ordered by the latest created_at timestamp
        return view('subdivision.index', compact('subdivisionItems'));
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
            Subdivision::create([
                'image' => '/images/' . $imageName,
                'name' => $request->name,
                'place' => $request->place,
                'bed' => $request->bed,
                'price' => $request->price,
            ]);

            return redirect()->route('subdivision.index')->with('success', 'mid item created successfully.');
        } catch (\Exception $e) {
            // Log any database-related errors
            Log::error('Error occurred while saving mid item: ' . $e->getMessage());
            return redirect()->route('subdivision.index')->with('error', 'Failed to create mid item.');
        }
    }
    public function update(Request $request)
    {
        $subdivisionId = $request->input('subdivision_id');
        $subdivision = Subdivision::findOrFail($subdivisionId);

        $request->validate([
            'name' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'bed' => 'required|string|max:255',
            'price' => 'required|string|max:255',
        ]);

        try {
            $subdivision->name = $request->input('name');
            $subdivision->place = $request->input('place');
            $subdivision->bed = $request->input('bed');
            $subdivision->price = $request->input('price');

            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path(''), $filename);
                $subdivision->image = $filename;
            }

            $subdivision->save(); // Save the updated card

            return redirect()->back()->with('success', 'subdivision item updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while updating subdivision item: ' . $e->getMessage());
            return redirect()->back()->with('failed', 'Updating subdivision item is unsuccessful. Please try again.');
        }
    }

        public function delete($subdivision_id)
        {
            $subdivision = Subdivision::findOrFail($subdivision_id);
            $subdivision->delete();

            return redirect()->back()->with('success', 'subdivisiondeleted successfully.');
        }
    }
