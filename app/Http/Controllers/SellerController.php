<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    public function index()
    {
        $sellers = Seller::all();
        return view('sellers.index', compact('sellers'));
    }

    public function create()
    {
        return view('sellers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'accreditation' => 'required',
            'special_training' => 'required',
            'events' => 'required',
        ]);

        Seller::create($request->all());

        return redirect()->route('sellers.index')
            ->with('success', 'Seller created successfully.');
    }

    public function show(Seller $seller)
    {
        return view('sellers.show', compact('seller'));
    }

    public function edit(Seller $seller)
    {
        return view('sellers.edit', compact('seller'));
    }

    public function update(Request $request, Seller $seller)
    {
        $request->validate([
            'name' => 'required',
            'accreditation' => 'required',
            'special_training' => 'required',
            'events' => 'required',
        ]);

        $seller->update($request->all());

        return redirect()->route('sellers.index')
            ->with('success', 'Seller updated successfully');
    }

    public function destroy(Seller $seller)
    {
        $seller->delete();

        return redirect()->route('sellers.index')
            ->with('success', 'Seller deleted successfully');
    }
}
