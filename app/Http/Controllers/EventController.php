<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Log;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:10000',
            'date' => 'required|date',
        ]);

        // Create a new Event instance
        $event = new Event();
        $event->name = $request->name;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->save();

        // Redirect back or to a specific route
        return redirect()->back()->with('success', 'Event added successfully!');

    }
    public function update(Request $request)
    {
        $eventId = $request->input('event_id');
        $event = Event::findOrFail($eventId);


        $request->validate([

            'name' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'description' => 'required|string|max:10000',
            // 'bed' => 'required|string|max:255',
            // 'price' => 'required|string|max:255',
        ]);

        try {

            $event->name = $request->input('name');
            $event->date = $request->input('date');
            $event->description = $request->input('description');

            // $mid->price = $request->input('price');

            // Handle file upload
            // if ($request->hasFile('image')) {
            //     $file = $request->file('image');
            //     $filename = time() . '_' . $file->getClientOriginalName();
            //     $file->move(public_path(''), $filename);
            //     $mission->image = $filename;
            // }

            $event->save(); // Save the updated card

            return redirect()->back()->with('success', 'event item updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while updating mid item: ' . $e->getMessage());
            return redirect()->back()->with('failed', 'Updating event item is unsuccessful. Please try again.');
        }
    }
    public function delete($event_id)
    {
        $event = Event::findOrFail($event_id);
        $event->delete();

        return redirect()->back()->with('success', 'mission deleted successfully.');
    }


}
