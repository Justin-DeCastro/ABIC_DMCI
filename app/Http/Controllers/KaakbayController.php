<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kaakbay;
use Illuminate\Support\Facades\Log;
class KaakbayController extends Controller
{
    public function index()
    {
        $kaakbays = Kaakbay::all();
        return view('kaakbay.index', compact('kaakbays'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'required|image|max:100000',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:10000',
            'date' => 'required|date',
        ]);

        // Handle the file upload
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/kaakbay'), $imageName);

        // Create a new Testimonial instance
        $kaakbay = new Kaakbay();
        $kaakbay->image = $imageName;
        $kaakbay->name = $request->name;
        $kaakbay->description = $request->description;
        $kaakbay->date = $request->date;
        $kaakbay->save();

        // Redirect back or to a specific route
        return redirect()->back()->with('success', 'kaakbay added successfully!');
    }

    public function update(Request $request)
{
    $kaakbayId = $request->input('kaakbay_id');
    $kaakbay = Kaakbay::findOrFail($kaakbayId);

    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'date' => 'required|string|max:255',
        // 'price' => 'required|string|max:255',
    ]);

    try {
        $kaakbay->name = $request->input('name');
        $kaakbay->description = $request->input('description');
        $kaakbay->date = $request->input('date');
        // $kaakbay->price = $request->input('price');

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path(''), $filename);
            $kaakbay->image = $filename;
        }

        $kaakbay->save(); // Save the updated card

        return redirect()->back()->with('success', 'Kaakbay item updated successfully.');
    } catch (\Exception $e) {
        Log::error('Error occurred while updating kaakbay item: ' . $e->getMessage());
        return redirect()->back()->with('failed', 'Updating kaakbay item is unsuccessful. Please try again.');
    }
}

    public function delete($kaakbay_id)
    {
        $kaakbay = Kaakbay::findOrFail($kaakbay_id);
        $kaakbay->delete();

        return redirect()->back()->with('success', 'Card deleted successfully.');
    }


}


