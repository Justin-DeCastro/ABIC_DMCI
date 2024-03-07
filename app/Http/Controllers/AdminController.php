<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }

        // public function dashboard()
        // {
        //     return view('admin.dashboard');
        // }

        // public function view_township()
        // {
        //     $township  = TownshipModel::all();

        //     return view('admin.view_township', compact('township'));
        // }

        // public function add_township(Request $request)
        // {
        //     // Validate the incoming request data
        //     $validatedData = $request->validate([
        //         'name' => 'required|string',
        //         'division' => 'required|string',
        //         'location' => 'required|string',
        //         'type' => 'required|string',
        //         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     ]);

        //     // Save the Township to the database
        //     $township = new TownshipModel();
        //     $township->name = $validatedData['name'];
        //     $township->location = $validatedData['location'];
        //     $township->type = $validatedData['type'];
        //     $township->division = $validatedData['division'];

        //     // Handle image upload
        //     $imagePath = $request->file('image')->storeAs('public/township_images', $request->file('image')->getClientOriginalName());
        //     $township->image = $request->file('image')->getClientOriginalName();


        //     $township->save();

        //     return redirect()->back()->with('success', 'Township saved successfully');
        // }

        // public function view_residences()
        // {
        //     $township  = ResidencesModel::all();

        //     return view('admin.residences', compact('township'));
        // }

        // public function add_residences(Request $request)
        // {
        //     // Validate the incoming request data
        //     $validatedData = $request->validate([
        //         'name' => 'required|string',
        //         'location' => 'required|string',
        //         'status' => 'required|string',
        //         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     ]);

        //     // Save the Township to the database
        //     $residence = new ResidencesModel();
        //     $residence->name = $validatedData['name'];
        //     $residence->location = $validatedData['location'];
        //     $residence->status = $validatedData['status'];

        //     // Handle image upload
        //     $imagePath = $request->file('image')->storeAs('public/township_images', $request->file('image')->getClientOriginalName());
        //     $residence->image = $request->file('image')->getClientOriginalName();


        //     $residence->save();

        //     return redirect()->back()->with('success', 'Township saved successfully');
        // }


    }



