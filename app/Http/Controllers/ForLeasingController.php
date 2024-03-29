<?php

namespace App\Http\Controllers;

use App\Models\ForLeasing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ForLeasingController extends Controller
{
    public function index()
    {
        $forleases = ForLeasing::all();
        return view('forlease.index', compact('forleases'));
    }

    public function create()
    {
        return view('forleases.create');
    }

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

            // Create new ForLeasing instance and save to database
            ForLeasing::create([
                'image' => '/images/' . $imageName,
                'price' => $request->price,
                'status' => $request->status,
                'units' => $request->units,
                'location' => $request->location,
            ]);

            return redirect()->route('forleases.index')->with('success', 'For leasing created successfully.');
        } catch (\Exception $e) {
            // Log any database-related errors
            Log::error('Error occurred while saving ForLeasing: ' . $e->getMessage());
            return redirect()->route('forleases.index')->with('error', 'Failed to create ForLeasing.');
        }
    }
}
