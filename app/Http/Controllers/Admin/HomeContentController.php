<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeContentController extends Controller
{
    public function index()
    {
        $contents = HomeContent::latest()->paginate(10);
        return view('admin.home-content.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.home-content.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'section' => 'required|unique:home_contents,section',
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,mp4|max:5120',
        ]);

        $data = $request->only(['section', 'title', 'content']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('home-images', 'public');
        }

        HomeContent::create($data);

        return redirect()->route('admin.home-content.index')->with('success', 'Content created successfully.');
    }

    public function edit(HomeContent $homeContent)
    {
        return view('admin.home-content.edit', compact('homeContent'));
    }

    public function update(Request $request, HomeContent $homeContent)
    {
        $request->validate([
            'section' => 'required|unique:home_contents,section,' . $homeContent->id,
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,mp4|max:5120',
        ]);

        $data = $request->only(['section', 'title', 'content']);

        if ($request->hasFile('image')) {
            if ($homeContent->image) {
                Storage::disk('public')->delete($homeContent->image);
            }
            $data['image'] = $request->file('image')->store('home-images', 'public');
        }

        $homeContent->update($data);

        return redirect()->route('admin.home-content.index')->with('success', 'Content updated successfully.');
    }

    public function destroy(HomeContent $homeContent)
    {
        if ($homeContent->image) {
            Storage::disk('public')->delete($homeContent->image);
        }
        $homeContent->delete();
        return redirect()->route('admin.home-content.index')->with('success', 'Content deleted successfully.');
    }
}