<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Celandine;
use Illuminate\Support\Facades\Log;

class CelandineController extends Controller
{
    public function index()
    {
        $celandines = Celandine::all();
        return view('celandine.index', compact('celandines'));
    }

    public function create()
    {
        return view('celandine.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:100000',
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'development' => 'required|string|max:255',
            'units' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'general' => 'required|string|max:255',
            'building' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        try {
            // Move uploaded image to public directory
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            // Create new Celandine instance and save to database
            Celandine::create([
                'image' => '/images/' . $imageName,
                'name' => $request->name,
                'price' => $request->price,
                'status' => $request->status,
                'development' => $request->development,
                'units' => $request->units,
                'location' => $request->location,
                'general' => $request->general,
                'building' => $request->building,
                'link' => $request->link,
            ]);

            return redirect()->route('celandine.index')->with('success', 'Celandine created successfully.');
        } catch (\Exception $e) {
            // Log any database-related errors
            Log::error('Error occurred while saving Celandine: ' . $e->getMessage());
            return redirect()->route('celandine.index')->with('error', 'Failed to create Celandine.');
        }
    }

    public function delete($celandine_id)
    {
        $celandine = Celandine::findOrFail($celandine_id);
        $celandine->delete();

        return redirect()->back()->with('success', 'Celandine deleted successfully.');
    }
}
