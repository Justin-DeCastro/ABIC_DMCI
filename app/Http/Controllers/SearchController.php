<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mid;
use App\Models\High;
use App\Models\Leisure;
use App\Models\Subdivision;
use App\Models\City;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Retrieve data needed for the search
        $cityItems = City::latest()->get();
        $highItems = High::latest()->get();
        $leisureItems = Leisure::latest()->get();
        $midItems = Mid::latest()->get();
        $subdivisionItems = Subdivision::latest()->get();

        // Retrieve search parameters from the request
        $location = $request->input('location');

        // Perform database queries based on search parameters
        $highResults = High::where('place', $location)->get(['id', 'image', 'name', 'place', 'bed', 'price']);
        $midResults = Mid::where('place', $location)->get(['id', 'image', 'name', 'place', 'bed', 'price']);
        $subdivisionResults = Subdivision::where('place', $location)->get(['id', 'image', 'name', 'place', 'bed', 'price']);

        // Merge results from different models
        $results = $highResults->merge($midResults)->merge($subdivisionResults);

        // Pass data to the view
        return view('search', compact('results', 'cityItems', 'highItems', 'leisureItems', 'midItems', 'subdivisionItems', 'location'));
    }

    // Define the extractPriceRange method to handle price range extraction
    private function extractPriceRange($minPrice, $maxPrice)
    {
        // Implement your logic to extract the price range here
        // For example, you can convert string representations to numeric values
        $minPriceDb = (float) $minPrice;
        $maxPriceDb = (float) $maxPrice;

        return [$minPriceDb, $maxPriceDb];
    }
}
