<?php

namespace App\Http\Controllers;

use App\Models\Vision;
use Illuminate\Http\Request;

class VisionController extends Controller
{
    public function index()
    {
        $visions = Vision::all();
        return view('visions.index', compact('visions'));
    }

    public function create()
    {
        return view('visions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Vision::create($request->all());

        return redirect()->route('visions.index')
                         ->with('success', 'Vision created successfully.');
    }

    public function edit(Vision $vision)
    {
        return view('visions.edit', compact('vision'));
    }

    public function update(Request $request, Vision $vision)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $vision->update($request->all());

        return redirect()->route('visions.index')
                         ->with('success', 'Vision updated successfully');
    }

    public function destroy(Vision $vision)
    {
        $vision->delete();

        return redirect()->route('visions.index')
                         ->with('success', 'Vision deleted successfully');
    }
}
