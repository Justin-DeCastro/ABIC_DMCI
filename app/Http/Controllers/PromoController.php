<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Promo;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::latest()->get(); // Change $promo to $promos
        return view('promo.index', compact('promos')); // Change 'promo' to 'promos'
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'required|image|max:100000',
            'name' => 'required|string|max:255',
            // 'description' => 'required|string|max:10000',
            'date' => 'required|date',
        ]);

        // Handle the file upload
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/promo'), $imageName);

        // Create a new Testimonial instance
        $promos = new promo();
        $promos->image = $imageName;
        $promos->name = $request->name;
        // $promo->description = $request->description;
        $promos->date = $request->date;
        $promos->save();

        // Redirect back or to a specific route
        return redirect()->back()->with('success', 'Promo added successfully!');
    }public function update(Request $request)
    {
        $promos_id = $request->input('promo_id'); // Corrected variable name

        $promo = Promo::findOrFail($promos_id); // Corrected variable name
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|string|max:255',
        ]);

        try {
            $promo->name = $request->input('name');
            $promo->date = $request->input('date');

            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path(''), $filename);
                $promo->image = $filename;
            }

            $promo->save(); // Save the updated promo

            return redirect()->back()->with('success', 'Promo item updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while updating promo item: ' . $e->getMessage());
            return redirect()->back()->with('failed', 'Updating promo item was unsuccessful. Please try again.');
        }
    }
    public function delete($promos_id)
{
    try {
        $promo = Promo::findOrFail($promos_id);
        $promo->delete();
        return redirect()->back()->with('success', 'Promo deleted successfully.');
    } catch (\Exception $e) {
        Log::error('Error occurred while deleting promo item: ' . $e->getMessage());
        return redirect()->back()->with('failed', 'Deleting promo item was unsuccessful. Please try again.');
    }
}

}
