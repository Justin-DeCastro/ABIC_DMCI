<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Value;

class ValueController extends Controller
{
    public function index()
    {
        $values = Value::latest()->get();
        return view('value.index', compact('values'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:100000',
            'name' => 'required|string|max:10000',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/value'), $imageName);

        $value = new Value();
        $value->image = $imageName;
        $value->name = $request->name;
        $value->save();

        return redirect()->back()->with('success', 'Value added successfully!');
    }

    public function update(Request $request)
    {
        $value_id = $request->input('value_id');

        $value = Value::findOrFail($value_id);
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        try {
            $value->name = $request->input('name');

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/value'), $filename);
                $value->image = $filename;
            }

            $value->save();

            return redirect()->back()->with('success', 'Value item updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while updating value item: ' . $e->getMessage());
            return redirect()->back()->with('failed', 'Updating value item was unsuccessful. Please try again.');
        }
    }

    public function delete($value_id)
    {
        try {
            $value = Value::findOrFail($value_id);
            $value->delete();
            return redirect()->back()->with('success', 'Value deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while deleting value item: ' . $e->getMessage());
            return redirect()->back()->with('failed', 'Deleting value item was unsuccessful. Please try again.');
        }
    }
}
