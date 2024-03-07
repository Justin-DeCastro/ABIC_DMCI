<?php

namespace App\Http\Controllers;

use App\Models\Executive;
use Illuminate\Http\Request;

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
}
