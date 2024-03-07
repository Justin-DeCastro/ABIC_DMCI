<?php

namespace App\Http\Controllers;

use App\Models\NewsUpdate;
use App\Models\Reco;
use App\Models\Card;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    // public function index()
    // {
    //     $newsUpdates = NewsUpdate::latest()->get(); // Fetch all news updates

    //     return view('landing-page', compact('newsUpdates')); // Pass the news updates to the view
    // }



    public function latestUpdates()
    {
        $cards = Card::latest()->get();
         $recoItems = Reco::latest()->get();
        $latestUpdate = NewsUpdate::getLatestUpdate();
        $latestUpdateDate = NewsUpdate::max('created_at');
        $newsUpdates = NewsUpdate::latest()->get();
        return view('landing-page', compact('latestUpdate','newsUpdates', 'recoItems', 'cards'));

    }

}
