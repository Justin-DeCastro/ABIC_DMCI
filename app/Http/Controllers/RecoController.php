<?php

namespace App\Http\Controllers;

use App\Models\Reco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RecoController extends Controller
{
    public function index()
    {
        $recoItems = Reco::latest()->get(); // Retrieve all reco items ordered by the latest created_at timestamp
        return view('reco.index', compact('recoItems'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:100000',

            'name' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'bed' => 'required|string|max:255',
            'price' => 'required|string|max:255',
        ]);

        try {
            // Move uploaded image to public directory
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            // Create new Reco instance and save to database
            Reco::create([
                'image' => '/images/' . $imageName,
                'name' => $request->name,
                'link' => $request->link,
                'place' => $request->place,
                'bed' => $request->bed,
                'price' => $request->price,
            ]);

            return redirect()->route('reco.index')->with('success', 'Reco item created successfully.');
        } catch (\Exception $e) {
            // Log any database-related errors
            Log::error('Error occurred while saving reco item: ' . $e->getMessage());
            return redirect()->route('reco.index')->with('error', 'Failed to create reco item.');
        }
    }
    public function update(Request $request)
    {
        $recoId = $request->input('reco_id');
        $reco = Reco::findOrFail($recoId);


        $request->validate([

            'name' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'bed' => 'required|string|max:255',
            'price' => 'required|string|max:255',
        ]);

        try {

            $reco->name = $request->input('name');
            $reco->link = $request->input('link');
            $reco->place = $request->input('place');
            $reco->bed = $request->input('bed');
            $reco->price = $request->input('price');

            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path(''), $filename);
                $reco->image = $filename;
            }

            $reco->save(); // Save the updated card

            return redirect()->back()->with('success', 'reco item updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while updating reco item: ' . $e->getMessage());
            return redirect()->back()->with('failed', 'Updating reco item is unsuccessful. Please try again.');
        }
    }
    public function delete($reco_id)
    {
        $reco = Reco::findOrFail($reco_id);
        $reco->delete();

        return redirect()->back()->with('success', 'Card deleted successfully.');
    }



}
