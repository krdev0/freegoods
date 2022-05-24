<x-layout>

    <div class="text-center mb-4">
        <h1 class="text-4xl font-bold">Edit: {{$item->title}}</h1>
        </div>

    <form action="/item/{{$item->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label
                for="title"
                class="inline-block text-lg mb-2"
                >Title</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
                value="{{$item->title}}"
            />
            @error('title')
                <p class="text-red-900 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg mb-2"
            >
                Item Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="5"
            >{{$item->description}}</textarea>
            @error('description')
                <p class="text-red-900 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label for="category" class="inline-block text-lg mb-2">Category</label>
    
            <select name="category" id="category">
            <option value="" selected disabled hidden>Choose Category</option>
              <option value="electronics">Electronics</option>
              <option value="clothing">Clothing</option>
              <option value="home">Home</option>
              <option value="kids">Kids</option>
            </select>
    
            @error('category')
                <p class="text-red-900 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label for="location" class="inline-block text-lg mb-2">Location</label>
    
            <select name="location" id="location">
              <option value="" selected disabled hidden>Choose City</option>
              <option value="ogre" @if ($item->location == 'ogre') {{'selected'}} @endif>Ogre</option>
              <option value="riga" @if ($item->location == 'riga') {{'selected'}} @endif>Riga</option>
            </select> 
    
            @error('location')
                <p class="text-red-900 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label for="image" class="inline-block text-lg mb-2">
                Item Image
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="image"
            />
            <img class="mb-2" src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/item.svg') }}" alt="">
        </div>
    
        <div class="mb-6">
            <button
                class="bg-yellow-500 text-white rounded py-2 px-4 hover:bg-yellow-600"
            >
                Update Item
            </button>
    
            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>

</x-layout>