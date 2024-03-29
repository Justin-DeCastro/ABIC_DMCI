<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alder;
use Illuminate\Support\Facades\Log;

class AlderController extends Controller
{
    public function index()
    {
        $alders = Alder::all();
        return view('alder.index', compact('alders'));
    }

    public function create()
    {
        return view('alder.create');
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

            // Create new Celandine instance and save to database
            Alder::create([
                'image' => '/images/' . $imageName,
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'status' => $request->status,

                'units' => $request->units,
                'location' => $request->location,

            ]);

            return redirect()->route('alder.index')->with('success', 'Celandine created successfully.');
        } catch (\Exception $e) {
            // Log any database-related errors
            Log::error('Error occurred while saving Celandine: ' . $e->getMessage());
            return redirect()->route('alder.index')->with('error', 'Failed to create Celandine.');
        }
    }

    public function delete($alder_id)
    {
        $alder = Alder::findOrFail($alder_id);
        $alder->delete();

        return redirect()->back()->with('success', 'Celandine deleted successfully.');
    }
    public function update(Request $request, $id)
    {
        $alder = Alder::findOrFail($id);

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
            $alder->update($request->all());

            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
                $alder->image = $filename;
            }

            $alder->save();

            return redirect()->route('alder.index')->with('success', 'Card item created successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while saving card item: ' . $e->getMessage());
            return redirect()->route('alder.index')->with('error', 'Failed to create card item.');
        }

    }



}
