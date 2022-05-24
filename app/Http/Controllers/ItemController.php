<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    //Show all listings
    public function index()
    {
        return view('items.index', [
            'items' => Item::latest()->filter(request(['category', 'search']))->paginate(9),
        ]);
    }

    //Show single listing
    public function show(Item $item)
    {
        return view('items.show', [
            'item' => $item
        ]);
    }


    //Show create form
    public function create()
    {
        return view('items.create');
    }

    //Store item data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'location' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Item::create($formFields);

        return redirect('/')->with('success', 'Item created successfully');
    }

    //Show edit form
    public function edit(Item $item)
    {
        return view('items.edit', ['item' => $item]);
    }

    //Update item data
    public function update(Request $request, Item $item)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'location' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $item->update($formFields);

        return back()->with('success', 'Item updated successfully');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect('/')->with('success', 'Item deleted successfully');
    }
}
