<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public $locations = ['Ogre', 'Riga', 'Ventspils'];
    public $categories = ['Clothing', 'Electronics', 'Home', 'Kids'];

    //Show all listings
    public function index(Request $request, Item $item)
    {
        // TODO: pass image data from item
        // $images = json_decode($item->images);

        $request->flashOnly(['location', 'category']);

        return view('items.index', [
            'items' => Item::latest()
                ->filter(request(['category', 'search', 'location']))
                ->paginate(12),
            'categories' => $this->categories,
            'locations' => $this->locations
        ]);
    }

    //Show single listing
    public function show(Item $item)
    {
        //TODO: conver img strings to array 
        return view('items.show', [
            'item' => $item
        ])->with('images', json_decode($item['images']));
    }


    //Show create form
    public function create()
    {
        return view('items.create', [
            'categories' => $this->categories,
            'locations' => $this->locations,
        ]);
    }

    //Store item data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'images' => 'required',
            'category' => 'required',
            'location' => 'required'
        ]);


        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $name = $image->store('images', 'public');
                $data[] = $name;
            }
        }

        $formFields['images'] = json_encode($data);

        $formFields['user_id'] = auth()->id();

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
        //Make sure logged in user is owner
        if ($item->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

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
        //Make sure logged in user is owner
        if ($item->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $item->delete();
        return redirect('/')->with('success', 'Item deleted successfully');
    }
}
