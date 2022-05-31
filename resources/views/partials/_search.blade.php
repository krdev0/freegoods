<form action="/">
    <div class="flex items-center">
        <div class="relative m-4 rounded-lg w-3/5">
            <div class="absolute top-0 left-2">
                <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
            </div>
            <input type="text" name="search" class="w-full pl-10 pr-20 rounded-lg z-0 focus:outline-none"
                placeholder="Search For Items..." />
            <div class="absolute right-0 top-0">
                <button type="submit" class="text-white bg-yellow-300 hover:bg-yellow-600">
                    Search
                </button>
            </div>
        </div>

        <div class="w-1/5">
            <select class="w-full" name="location" id="location" onchange="this.form.submit()">
                <option value="" selected disabled hidden>Choose City</option>
                @foreach ($locations as $loc)
                    <option value="{{ $loc }}" @if (old('location') == $loc) {{ 'selected' }} @endif>
                        {{ $loc }}</option>
                @endforeach
            </select>
        </div>

        <div class="w-1/5">
            <select class="w-full" name="category" id="category" onchange="this.form.submit()">
                <option value="">Choose Category</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat }}" @if (old('category') == $cat) {{ 'selected' }} @endif>
                        {{ $cat }}</option>
                @endforeach
            </select>
        </div>
    </div>
</form>
