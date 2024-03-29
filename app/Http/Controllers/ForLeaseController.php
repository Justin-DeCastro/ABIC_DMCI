<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForLease;
use Illuminate\Support\Facades\Log;
class ForLeaseController extends Controller
{
    public function index()
    {
        $forLeases = ForLease::all();
        return view('forlease.index', compact('forLeases'));
    }

    // Implement other controller methods as needed
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:100000',

            'price' => 'required|string|max:255',
            'status' => 'required|string|max:255',

            'units' => 'required|string|max:255',
            'location' => 'required|string|max:255',

        ]);

        try {
            // Move uploaded image to public directory
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            // Create new Celandine instance and save to database
            ForLease::create([
                'image' => '/images/' . $imageName,

                'price' => $request->price,
                'status' => $request->status,

                'units' => $request->units,
                'location' => $request->location,

            ]);

            return redirect()->route('forlease.index')->with('success', 'Celandine created successfully.');
        } catch (\Exception $e) {
            // Log any database-related errors
            Log::error('Error occurred while saving Celandine: ' . $e->getMessage());
            return redirect()->route('forlease.index')->with('error', 'Failed to create Celandine.');
        }
    }

}
