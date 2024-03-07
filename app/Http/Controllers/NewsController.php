<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsUpdate;
use Illuminate\Support\Facades\Storage;


class NewsController extends Controller
{
    public function index()
    {
        $latestUpdate = NewsUpdate::getLatestUpdate();
        $latestUpdateDate = NewsUpdate::max('created_at');
        $allUpdates = NewsUpdate::orderBy('created_at', 'asc')
            ->skip(1)
            ->take(6)
            ->get();
        $newsUpdates = NewsUpdate::all();
        $news = News::latest()->get();
        return view('news.index', compact('news','allUpdates'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validate image
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news_images');
            $data['image'] = $imagePath;
        }

        News::create($data);
        return redirect()->route('news.index');
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validate image
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($news->image) {
                Storage::delete($news->image);
            }
            $imagePath = $request->file('image')->store('news_images');
            $data['image'] = $imagePath;
        }

        $news->update($data);
        return redirect()->route('news.index');
    }

    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::delete($news->image);
        }

        $news->delete();
        return redirect()->route('news.index');
    }
}
