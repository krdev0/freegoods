<form action="/item" method="POST" enctype="multipart/form-data">
    @csrf
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
            value="{{old('title')}}"
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
        >{{old('description')}}</textarea>
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
          <option value="ogre" @if (old('location') == 'ogre') {{'selected'}} @endif>Ogre</option>
          <option value="riga" @if (old('location') == 'riga') {{'selected'}} @endif>Riga</option>
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
    </div>

    <div class="mb-6">
        <button
            class="bg-yellow-300 text-white rounded py-2 px-4 hover:bg-yellow-600"
        >
            Create Item
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>