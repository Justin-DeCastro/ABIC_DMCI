<?php

namespace App\Http\Controllers;
use App\Models\NewsUpdate;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Testimonial;
use App\Models\Event;
use App\Models\Promo;
use App\Models\Card;
use App\Models\High;
use App\Models\Mid;
use App\Models\Subdivision;
use App\Models\City;
use App\Models\Leisure;
use App\Models\Kaakbay;
use App\Models\Alder;
use App\Models\AddLease;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $highItems = High::latest()->get();
        $testimonials = Testimonial::all();
        $events = Event::all();
        $promo = Promo::all();
        $cards = Card::latest()->get();

        $allUpdates = NewsUpdate::orderBy('created_at', 'asc')

        ->skip(1)
        ->take(6)
        ->get();
        return view('login',compact('allUpdates', 'testimonials', 'events', 'promo','cards','highItems'));
    }
    public function about()
    {
        $abouts = About::all();
        return view('about', compact('abouts'));
    }

    public function seller()
    {
        $alders = alder::all();
        return view('sellers',compact('alders'));
    }
    public function viewsale($id)
    {
        $alders = Alder::findOrFail($id); // Assuming each Alder has a unique ID
        return view('addleases.forsale', compact('alders'));
    }





    public function leasing()
    {
        $addLeases = AddLease::all();
        return view('addleases.addforlease',compact('addLeases'));
    }
    public function viewleasing($id)
    {
        $addLeases = AddLease::find($id);
        return view('addleases.lease',compact('addLeases'));
    }
    public function viewproperties()
    {
        return view('prop/index');
    }
    public function send()
    {
        return view('sendproperties');
    }
    public function loan()
    {
        return view('loan');
    }
    public function mulberry()
    {
        return view('mulberry');
    }
    public function atherton()
    {
        return view('atherton');
    }
    public function prismas()
    {
        return view('prisma');
    }
    public function allegra()
    {
        return view('allegra');
    }
    public function sonora()
    {
        return view('sonora');
    }
    public function fortis()
    {
        return view('fortis');
    }
    public function cellandine()
    {
        return view('leasing.cellandine');
    }
    public function finder()
    {
        return view('finder');
    }
    public function development()
    {
        return view('development');
    }
    public function beating()
    {
        return view('beat');
    }
    public function top()
    {
        return view('top');
    }
    public function mobile()
    {
        return view('mobile');
    }
    public function aston()
    {
        return view('aston');
    }
    public function kai()
    {
        return view('kai');
    }
    public function crest()
    {
        return view('crest');
    }

    public function prop()
    {
        $highItems = High::latest()->get();
        $midItems = Mid::latest()->get();
        $cityItems = City::latest()->get();
        $leisureItems = Leisure::latest()->get();
        $subdivisionItems = Subdivision::latest()->get();
        return view('properties', compact('highItems','midItems','subdivisionItems', 'cityItems', 'leisureItems'));
    }
    public function guides()
    {
        $testimonials = Testimonial::all();
        return view('guide', compact('testimonials'));
    }
    public function faq()
    {
        // $testimonials = Testimonial::all();
        return view('faq.1');
    }
    public function faq2()
    {
        // $testimonials = Testimonial::all();
        return view('faq.2');
    }
    public function career()
    {
        return view('careers');
    }
    public function contact()
    {
        return view('contact');
    }
    public function update()
    {
        return view('images.update');
    }
    public function add()
    {
        return view('logo.add');
    }
    public function dynamicabout()
    {
        return view('dynamicabout');
    }
}
