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
            'items' => Item::latest()->filter(request(['category', 'search']))->get(),
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

        Item::create($formFields);

        return redirect('/')->with('success', 'Item created successfully');
    }
}
