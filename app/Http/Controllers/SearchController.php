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
    $unitType = $request->input('bed');
    $minPrice = $request->input('price_fm');
    $maxPrice = $request->input('price_to');

    // Initialize query
    $highQuery = High::query();
    $midQuery = Mid::query();
    $subdivisionQuery = Subdivision::query();

    // Apply location filter if specified
    if ($location !== 'Any Location' && $location !== null) {
        $highQuery->where('place', $location);
        $midQuery->where('place', $location);
        $subdivisionQuery->where('place', $location);
    }

    // Apply unit type filter if selected
    if ($unitType !== 'Any') {
        $highQuery->where('bed', $unitType);
        $midQuery->where('bed', $unitType);
        $subdivisionQuery->where('bed', $unitType);
    }

    // Apply price range filter if provided
    if ($minPrice && $maxPrice) {
        $highQuery->whereBetween('price', [$minPrice, $maxPrice]);
        $midQuery->whereBetween('price', [$minPrice, $maxPrice]);
        $subdivisionQuery->whereBetween('price', [$minPrice, $maxPrice]);
    }

    // Retrieve results
    $highResults = $highQuery->get(['id', 'image', 'name', 'place', 'bed', 'price']);
    $midResults = $midQuery->get(['id', 'image', 'name', 'place', 'bed', 'price']);
    $subdivisionResults = $subdivisionQuery->get(['id', 'image', 'name', 'place', 'bed', 'price']);

    // Merge results from different models
    $results = $highResults->merge($midResults)->merge($subdivisionResults);

    // Check if results are empty
    if ($results->isEmpty()) {
        $message = "No {$unitType} found.";
    } else {
        $message = null;
    }

    // Pass data to the view
    return view('search', compact('results', 'cityItems', 'highItems', 'leisureItems', 'midItems', 'subdivisionItems', 'location', 'message'));
}
}
