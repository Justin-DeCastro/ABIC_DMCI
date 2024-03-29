<?php
namespace App\Http\Controllers;

use App\Models\Lease;
use Illuminate\Http\Request;

class LeaseController extends Controller
{
    public function index()
    {
        $leases = Lease::all();
        return view('leasing.index', compact('leases'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'status' => 'required|string',
            'units' => 'required|integer',
            'location' => 'required|string',
        ]);

        $lease = new Lease();
        $lease->price = $request->price;
        $lease->status = $request->status;
        $lease->units = $request->units;
        $lease->location = $request->location;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $lease->image = $imageName;
        }

        $lease->save();

        return redirect()->route('leases.index')->with('success', 'Lease added successfully.');
    }
}
