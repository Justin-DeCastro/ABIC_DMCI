<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::latest()->get();
        return view('card.index', compact('cards'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:100000',
            'progress' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'date' => 'required|string|max:255',
        ]);

        try {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            Card::create([
                'image' => '/images/' . $imageName,
                'progress' => $request->progress,
                'name' => $request->name,
                'place' => $request->place,
                'date' => $request->date,
            ]);

            return redirect()->route('card.index')->with('success', 'Card item created successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while saving card item: ' . $e->getMessage());
            return redirect()->route('card.index')->with('error', 'Failed to create card item.');
        }
    }
    public function update(Request $request)
    {
        $cardId = $request->input('card_id');
        $card = Card::findOrFail($cardId);


        $request->validate([
            'progress' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'date' => 'required|string|max:255',
        ]);

        try {
            $card->progress = $request->input('progress');
            $card->name = $request->input('name');
            $card->place = $request->input('place');
            $card->date = $request->input('date');

            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path(''), $filename);
                $card->image = $filename;
            }

            $card->save(); // Save the updated card

            return redirect()->back()->with('success', 'Card item updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while updating card item: ' . $e->getMessage());
            return redirect()->back()->with('failed', 'Updating card item is unsuccessful. Please try again.');
        }
    }

    public function delete($card_id)
    {
        $card = Card::findOrFail($card_id);
        $card->delete();

        return redirect()->back()->with('success', 'Card deleted successfully.');
    }

}
