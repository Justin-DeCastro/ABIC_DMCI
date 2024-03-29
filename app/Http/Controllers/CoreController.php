<?php

namespace App\Http\Controllers;

use App\Models\Core;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
class CoreController extends Controller
{
    public function index()
    {
        $cores = Core::all();
        return view('core.index', compact('cores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:certifications',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
        ]);

        $imageName = time().'.'.$request->image->extension(); // Generate unique image name
        $request->image->move(public_path('images'), $imageName); // Upload image to public/images directory

        Core::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName, // Store image file name in the database
        ]);

        return redirect()->route('core.index')->with('success', 'Core created successfully.');
    }

    public function update(Request $request, $id)
{
    // Use $id parameter directly instead of $request->input('core_id')
    $core = Core::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
    ]);

    try {
        $core->name = $request->input('name');
        $core->description = $request->input('description');

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename); // Fix: Changed directory to 'images'
            $core->image = $filename;
        }

        $core->save(); // Save the updated core

        return redirect()->back()->with('success', 'Core item updated successfully.');
    } catch (\Exception $e) {
        Log::error('Error occurred while updating core item: ' . $e->getMessage());
        return redirect()->back()->with('failed', 'Updating core item is unsuccessful. Please try again.');
    }
}


    public function delete($core_id)
    {
        $core = Core::findOrFail($core_id);
        $core->delete();

        return redirect()->back()->with('success', 'core deleted successfully.');
    }
}
