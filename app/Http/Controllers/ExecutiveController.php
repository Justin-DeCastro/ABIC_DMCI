<?php

namespace App\Http\Controllers;

use App\Models\Executive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ExecutiveController extends Controller
{
    public function index()
    {
        $executives = Executive::all();
        return view('executive.index', compact('executives'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust maximum file size as needed
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/executive'), $imageName);

        Executive::create([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $imageName,
        ]);

        return redirect()->route('executive.index')->with('success', 'Executive created successfully.');
    }
    public function update(Request $request)
    {
        $executiveId = $request->input('executive_id');
        $executive = Executive::findOrFail($executiveId);


        $request->validate([

            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            // 'description' => 'required|string|max:10000',
            // 'bed' => 'required|string|max:255',
            // 'price' => 'required|string|max:255',
        ]);

        try {

            $executive->name = $request->input('name');
            $executive->position = $request->input('position');
            // $executive->description = $request->input('description');

            // $executive->price = $request->input('price');

            //Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path(''), $filename);
                $executive->image = $filename;
            }

            $executive->save(); // Save the updated card

            return redirect()->back()->with('success', 'event item updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while updating executive item: ' . $e->getMessage());
            return redirect()->back()->with('failed', 'Updating executive item is unsuccessful. Please try again.');
        }
    }
    public function delete($executive)
    {
        $executive = Executive::findOrFail($executive);
        $executive->delete();

        return redirect()->back()->with('success', 'mission deleted successfully.');
    }


}

