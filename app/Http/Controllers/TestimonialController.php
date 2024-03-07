<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Log;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testimonials.index', compact('testimonials'));
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
        $request->image->move(public_path('images/testimonials'), $imageName);

        // Create a new Testimonial instance
        $testimonial = new Testimonial();
        $testimonial->image = $imageName;
        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        $testimonial->date = $request->date;
        $testimonial->save();

        // Redirect back or to a specific route
        return redirect()->back()->with('success', 'Testimonial added successfully!');
    }
    public function update(Request $request)
    {
        $testimonialId = $request->input('testimonial_id');
        $testimonial = Testimonial::findOrFail($testimonialId);


        $request->validate([

            'name' => 'required|string|max:255',
            'description' => 'required|string|max:10000',
            'date' => 'required|string|max:255',
            // 'price' => 'required|string|max:255',
        ]);

        try {

            $testimonial->name = $request->input('name');
            $testimonial->description = $request->input('description');
            $testimonial->date = $request->input('date');
            // $testimonial->price = $request->input('price');

            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path(''), $filename);
                $testimonial->image = $filename;
            }

            $testimonial->save(); // Save the updated card

            return redirect()->back()->with('success', 'testimonial item updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while updating reco item: ' . $e->getMessage());
            return redirect()->back()->with('failed', 'Updating reco item is unsuccessful. Please try again.');
        }
    }
    public function delete($testimonial_id)
    {
        $testimonial = Testimonial::findOrFail($testimonial_id);
        $testimonial->delete();

        return redirect()->back()->with('success', 'Card deleted successfully.');
    }

}
