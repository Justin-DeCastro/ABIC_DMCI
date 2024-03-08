<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Mission;
use App\Models\Executive;
use App\Models\Brand;
use App\Models\Certification;
use App\Models\Kaakbay;
use App\Models\Value;
class MissionController extends Controller
{
    /**
     * Display a listing of the missions.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // Retrieve all missions from the database
        $missions = Mission::all();

        // Pass the missions data to the view
        return view('mission.index', compact('missions'));
    }

    /**
     * Show the form for creating a new mission.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return the view for creating a new mission
        return view('missions.create');
    }
    public function showabout()
    {

        $brands = Brand::all();
        $executives = Executive::all();
        $certifications = Certification::all();
        $kaakbays = Kaakbay::all();
        $missions = Mission::all();
        $values = Value::latest()->get();
        // Return the view for creating a new mission
        return view('about', compact('missions', 'executives', 'brands','certifications','kaakbays', 'values'));
    }

    /**
     * Store a newly created mission in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        try {
            // Create a new Mission instance with the validated data
            $mission = Mission::create($request->all());

            // Redirect back with a success message
            return redirect()->route('missions.index')->with('success', 'Mission created successfully.');
        } catch (\Exception $e) {
            // Redirect back with an error message if an exception occurs
            return redirect()->back()->with('error', 'Failed to create mission.');
        }
    }
    public function update(Request $request)
    {
        $missionId = $request->input('mission_id');
        $mission = Mission::findOrFail($missionId);


        $request->validate([

            'name' => 'required|string|max:255',
            'description' => 'required|string|max:10000',
            // 'bed' => 'required|string|max:255',
            // 'price' => 'required|string|max:255',
        ]);

        try {

            $mission->name = $request->input('name');
            $mission->description = $request->input('description');
            // $mid->bed = $request->input('bed');
            // $mid->price = $request->input('price');

            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path(''), $filename);
                $mission->image = $filename;
            }

            $mission->save(); // Save the updated card

            return redirect()->back()->with('success', 'mission item updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while updating mid item: ' . $e->getMessage());
            return redirect()->back()->with('failed', 'Updating mission item is unsuccessful. Please try again.');
        }
    }
    public function delete($mission_id)
    {
        $mission = Mission::findOrFail($mission_id);
        $mission->delete();

        return redirect()->back()->with('success', 'mission deleted successfully.');
    }


    }

    // Other controller methods (show, edit, update, destroy) can be added as needed

