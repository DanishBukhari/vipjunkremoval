<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhatWeTakeContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WhatWeTakeContentController extends Controller
{
    public function index()
    {
        $contents = WhatWeTakeContent::all();
        return view('admin.what-we-take-content.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.what-we-take-content.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'section' => 'required|unique:what_we_take_contents,section',
            'title' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'item_cards.*.title' => 'nullable|string',
            'item_cards.*.items' => 'nullable|string',
            'item_cards.*.image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'accordion_items.*.title' => 'nullable|string',
            'accordion_items.*.content' => 'nullable|string',
        ]);

        $data = $request->only(['section', 'title', 'content']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('what_we_take_images', 'public');
        }

        // Handle item-cards JSON
        if ($request->section === 'item-cards' && $request->has('item_cards')) {
            $itemCards = [];
            foreach ($request->item_cards as $key => $card) {
                $itemCards[$key] = [
                    'title' => $card['title'] ?? '',
                    'items' => $card['items'] ?? '',
                    'image' => isset($card['image']) ? $request->file("item_cards.$key.image")->store('what_we_take_images', 'public') : ($card['existing_image'] ?? ''),
                ];
            }
            $data['content'] = json_encode($itemCards);
        }

        // Handle accordion-content JSON
        if ($request->section === 'accordion-content' && $request->has('accordion_items')) {
            $accordionItems = [];
            foreach ($request->accordion_items as $key => $item) {
                $accordionItems[$key] = [
                    'title' => $item['title'] ?? '',
                    'content' => $item['content'] ?? '',
                ];
            }
            $data['content'] = json_encode($accordionItems);
        }

        WhatWeTakeContent::create($data);

        return redirect()->route('admin.what-we-take-content.index')->with('success', 'Content created successfully.');
    }

    public function edit(WhatWeTakeContent $whatWeTakeContent)
    {
        return view('admin.what-we-take-content.edit', compact('whatWeTakeContent'));
    }

    public function update(Request $request, WhatWeTakeContent $whatWeTakeContent)
    {
        $request->validate([
            'section' => 'required|unique:what_we_take_contents,section,' . $whatWeTakeContent->id,
            'title' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'item_cards.*.title' => 'nullable|string',
            'item_cards.*.items' => 'nullable|string',
            'item_cards.*.image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'accordion_items.*.title' => 'nullable|string',
            'accordion_items.*.content' => 'nullable|string',
        ]);

        $data = $request->only(['section', 'title', 'content']);

        if ($request->hasFile('image')) {
            if ($whatWeTakeContent->image) {
                Storage::disk('public')->delete($whatWeTakeContent->image);
            }
            $data['image'] = $request->file('image')->store('what_we_take_images', 'public');
        }

        // Handle item-cards JSON
        if ($request->section === 'item-cards' && $request->has('item_cards')) {
            $itemCards = [];
            foreach ($request->item_cards as $key => $card) {
                $itemCards[$key] = [
                    'title' => $card['title'] ?? '',
                    'items' => $card['items'] ?? '',
                    'image' => isset($card['image']) ? $request->file("item_cards.$key.image")->store('what_we_take_images', 'public') : ($card['existing_image'] ?? ''),
                ];
            }
            $data['content'] = json_encode($itemCards);
        }

        // Handle accordion-content JSON
        if ($request->section === 'accordion-content' && $request->has('accordion_items')) {
            $accordionItems = [];
            foreach ($request->accordion_items as $key => $item) {
                $accordionItems[$key] = [
                    'title' => $item['title'] ?? '',
                    'content' => $item['content'] ?? '',
                ];
            }
            $data['content'] = json_encode($accordionItems);
        }

        $whatWeTakeContent->update($data);

        return redirect()->route('admin.what-we-take-content.index')->with('success', 'Content updated successfully.');
    }

    public function destroy(WhatWeTakeContent $whatWeTakeContent)
    {
        if ($whatWeTakeContent->image) {
            Storage::disk('public')->delete($whatWeTakeContent->image);
        }
        // Delete item card images
        if ($whatWeTakeContent->section === 'item-cards' && $whatWeTakeContent->content) {
            $itemCards = json_decode($whatWeTakeContent->content, true);
            foreach ($itemCards as $card) {
                if (isset($card['image']) && Storage::disk('public')->exists($card['image'])) {
                    Storage::disk('public')->delete($card['image']);
                }
            }
        }
        $whatWeTakeContent->delete();

        return redirect()->route('admin.what-we-take-content.index')->with('success', 'Content deleted successfully.');
    }
}