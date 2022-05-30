<x-layout>

    <div class="border rounded max-w-lg mx-auto p-4 border-t-4 border-t-yellow-500">
        <div class="text-center mb-4">
            <h1 class="text-4xl font-bold">Add new item</h1>
            <p>Make sure to check you have input correct information</p>
        </div>


        <form action="/item" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2 font-bold">Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    value="{{ old('title') }}" />
                @error('title')
                    <p class="text-red-900 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg font-bold">
                    Item Description
                </label>
                <p class="text-sm text-gray-400 my-2">Short description about item.</p>

                <textarea class="border border-gray-200 rounded p-2 w-full" name="description"
                    rows="5">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-900 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 flex flex-col">
                <label for="category" class="text-lg font-bold">Category</label>

                <select name="category" id="category" class="p-2">
                    <option value="" selected disabled hidden>Choose Category</option>
                    <option value="electronics">Electronics</option>
                    <option value="clothing">Clothing</option>
                    <option value="home">Home</option>
                    <option value="kids">Kids</option>
                </select>
                @error('category')
                    <p class="text-red-900 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 flex flex-col">
                <label for="location" class="inline-block text-lg font-bold">Location</label>
                <p class="text-sm text-gray-400 my-2">Where is this item located?</p>

                <select name="location" id="location" class="p-2">
                    <option value="">Choose City</option>
                    <option value="ogre" @if (old('location') == 'ogre') {{ 'selected' }} @endif>Ogre</option>
                    <option value="riga" @if (old('location') == 'riga') {{ 'selected' }} @endif>Riga</option>
                </select>

                @error('location')
                    <p class="text-red-900 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="images" class="text-lg font-bold">
                    Images
                </label>
                <p class="text-sm text-gray-400 my-2">Upload atleast 1 image.</p>
                <input id="file-input" type="file" class="w-1/2 border border-gray-200 rounded p-2" name="images[]"
                    multiple />

                <div id="preview" class="grid grid-cols-3 justify-items-center"></div>
            </div>

            @error('images')
                <p class="text-red-900 text-xs mt-1">{{ $message }}</p>
            @enderror

            <div class="my-6">
                <button class="bg-yellow-300 text-white rounded py-2 px-4 hover:bg-yellow-600">
                    Create Item
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>

    </div>

</x-layout>
