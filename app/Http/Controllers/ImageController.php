<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Storage;
use app\controllers\logo;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $images = Image::all();
    //     return view('images.index', compact('images'));
    // }

    public function index()
        {
            $logo = Logo::all(); // Retrieve all logos from the database
            return view('images.update', compact('update')); // Pass $logos to the view
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
        $image = new Image();
        $image->image_path = $this->saveImage($request->image);
        $image->title = $request->title;
        $image->description = $request->description;
        $image->alt = $request->alt;
        $image->save();

        return redirect()->route('images.index');
    }

    public function edit($id)
    {
        $image = Image::findOrFail($id);
        return view('images.edit', compact('image'));
    }

    public function update(Request $request, $id)
    {
        $image = Image::findOrFail($id);

        // Validate and update image details
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation for image file
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'alt' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            // Handle image upload
            // $request->file('image')->store('images'); // Example storage
            // Update image path in database
            // $image->path = $request->file('image')->store('images');
        }

        $image->title = $request->input('title');
        $image->description = $request->input('description');
        $image->alt = $request->input('alt');
        $image->save();

        return redirect()->route('images.index')->with('success', 'Image updated successfully.');
    }

    private function saveImage($image)
{
    $imageName = Uuid::generate()->toString() . '.' . $image->getClientOriginalExtension();
    $image->storeAs('public/images', $imageName);

    return 'storage/images/' . $imageName;
}

    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        Storage::delete($image->image_path);
        $image->delete();

        return redirect()->route('images.index');
    }
//     public function show($id)
// {
//     $image = Image::findOrFail($id);
//     return view('images.', compact('image'));
// }

}
