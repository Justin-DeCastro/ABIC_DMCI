<?php

// app\Http\Controllers\LogoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;

class LogoController extends Controller
{
    public function index()
    {
        $logos = Logo::all();
        return view('logos.index', compact('logos'));
    }

    public function create()
    {
        return view('logos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $logo = new Logo();
        $logo->name = $request->name;
        $logo->type = $request->type;

        // Handle image upload
        $imageName = time().'.'.$request->picture->extension();
        $request->picture->move(public_path('uploads/logos'), $imageName);
        $logo->picture = $imageName;

        $logo->save();

        return redirect()->route('logos.index')->with('success', 'Logo created successfully.');
    }

    public function edit($id)
    {
        $logo = Logo::findOrFail($id);
        return view('logos.edit', compact('logo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $logo = Logo::findOrFail($id);
        $logo->name = $request->name;
        $logo->type = $request->type;

        if ($request->hasFile('picture')) {
            // Handle image upload
            $imageName = time().'.'.$request->picture->extension();
            $request->picture->move(public_path('uploads/logos'), $imageName);
            $logo->picture = $imageName;
        }

        $logo->save();

        return redirect()->route('logos.index')->with('success', 'Logo updated successfully.');
    }

    public function destroy($id)
    {
        $logo = Logo::findOrFail($id);
        $logo->delete();

        return redirect()->route('logos.index')->with('success', 'Logo deleted successfully.');
    }
}
