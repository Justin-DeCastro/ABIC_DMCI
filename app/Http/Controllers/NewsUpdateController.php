<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\NewsUpdate;
use Illuminate\Support\Facades\Validator;

class NewsUpdateController extends Controller
{
    public function index()
    {
        $latestUpdate = NewsUpdate::getLatestUpdate();
        $latestUpdateDate = NewsUpdate::max('created_at');
        $allUpdates = NewsUpdate::latest()->get();
        $newsUpdates = NewsUpdate::latest()->get();
        return view('news.index', compact('newsUpdates', 'allUpdates','latestUpdate'));
    }



    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'link' => 'required|string|max:10000',
        'description' => 'nullable|string',
        'date' => 'required|date',
        'image' => 'required|image|max:10000', // Adjust max size as needed
    ]);

    $news = new NewsUpdate();
    $news->name = $request->name;
    $news->link = $request->link;
    $news->description = $request->description;
    $news->date = $request->date;

    // Handle image upload
    $imageName = time() . '_' . $request->file('image')->getClientOriginalName(); // Generate a unique filename
    $request->file('image')->move(public_path('images'), $imageName);
    $news->image = 'images/' . $imageName; // Store the path relative to the public directory

    $news->save();

    return redirect()->back()->with('success', 'News update added successfully.');
}

public function update(Request $request)
{
    $newsId = $request->input('news_id');
    $news = NewsUpdate::findOrFail($newsId);


    $request->validate([

        'name' => 'required|string|max:255',
        'link' => 'required|string|max:10000',
        'description' => 'required|string|max:255',
        'date' => 'required|string|max:255',
        // 'price' => 'required|string|max:255',
    ]);

    try {

        $news->name = $request->input('name');
        $news->link = $request->input('link');
        $news->description = $request->input('description');
        $news->date = $request->input('date');
        // $news->price = $request->input('price');

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path(''), $filename);
            $news->image = $filename;
        }

        $news->save(); // Save the updated card

        return redirect()->back()->with('success', 'high item updated successfully.');
    } catch (\Exception $e) {
        Log::error('Error occurred while updating high item: ' . $e->getMessage());
        return redirect()->back()->with('failed', 'Updating high item is unsuccessful. Please try again.');
    }
}
public function delete($news_id)
{
    $news = NewsUpdate::findOrFail($news_id);
    $news->delete();

    return redirect()->back()->with('success', 'Card deleted successfully.');
}


}


