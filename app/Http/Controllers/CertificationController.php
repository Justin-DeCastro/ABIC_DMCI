<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
class CertificationController extends Controller
{
    public function index()
    {
        $certifications = Certification::all();
        return view('certification.index', compact('certifications'));
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

        Certification::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName, // Store image file name in the database
        ]);

        return redirect()->route('certification.index')->with('success', 'Certification created successfully.');
    }

    public function update(Request $request)
    {
        $certificationId = $request->input('certification_id'); // Fix: Changed 'certification' to 'certification_id'
        $certification = Certification::findOrFail($certificationId); // Fix: Corrected model name to 'Certification'

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        try {
            $certification->name = $request->input('name');
            $certification->description = $request->input('description');

            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename); // Fix: Changed directory to 'images'
                $certification->image = $filename;
            }

            $certification->save(); // Save the updated certification

            return redirect()->back()->with('success', 'Certification item updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while updating certification item: ' . $e->getMessage());
            return redirect()->back()->with('failed', 'Updating certification item is unsuccessful. Please try again.');
        }
    }

    public function delete($certification_id)
    {
        $certification = Certification::findOrFail($certification_id);
        $certification->delete();

        return redirect()->back()->with('success', 'Certification deleted successfully.');
    }
}
