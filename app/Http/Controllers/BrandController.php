<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of brands.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve all brands from the database
        $brands = Brand::all();

        // Pass the brands to the brand.index view
        return view('brand.index', compact('brands'));
    }

    /**
     * Store a newly created brand in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:10000|unique:brands',
            'description' => 'nullable|string|max:1000',
        ]);

        // Create a new brand with the provided name and description
        Brand::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Redirect the user to the brand index page with a success message
        return redirect()->route('brand.index')->with('success', 'Brand created successfully.');
    }

    /**
     * Update the specified brand in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Brand $brand)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255|unique:brands,name,'.$brand->id,
            'description' => 'nullable|string|max:255',
        ]);

        // Update the brand's name and description with the provided values
        $brand->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Redirect the user to the brand index page with a success message
        return redirect()->route('brand.index')->with('success', 'Brand updated successfully.');
    }
}
