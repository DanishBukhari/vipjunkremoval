<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PricingContentController extends Controller
{
    public function index()
    {
        $contents = PricingContent::all();
        return view('admin.pricing-content.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.pricing-content.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'section' => 'required|unique:pricing_contents,section',
            'title' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['section', 'title', 'content']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('pricing_images', 'public');
        }

        PricingContent::create($data);

        return redirect()->route('admin.pricing-content.index')->with('success', 'Content created successfully.');
    }

    public function edit(PricingContent $pricingContent)
    {
        return view('admin.pricing-content.edit', compact('pricingContent'));
    }

    public function update(Request $request, PricingContent $pricingContent)
    {
        $request->validate([
            'section' => 'required|unique:pricing_contents,section,' . $pricingContent->id,
            'title' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['section', 'title', 'content']);

        if ($request->hasFile('image')) {
            if ($pricingContent->image) {
                Storage::disk('public')->delete($pricingContent->image);
            }
            $data['image'] = $request->file('image')->store('pricing_images', 'public');
        }

        $pricingContent->update($data);

        return redirect()->route('admin.pricing-content.index')->with('success', 'Content updated successfully.');
    }

    public function destroy(PricingContent $pricingContent)
    {
        if ($pricingContent->image) {
            Storage::disk('public')->delete($pricingContent->image);
        }
        $pricingContent->delete();

        return redirect()->route('admin.pricing-content.index')->with('success', 'Content deleted successfully.');
    }
}