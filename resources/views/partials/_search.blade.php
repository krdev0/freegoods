<div class="mb-8">
    <form action="/">
        <div class="flex gap-4 items-center">
            <div class="relative w-3/5">
                <div class="absolute top-1/2 -translate-y-1/2 left-2">
                    <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
                </div>
                <input type="text" name="search" class="h-10 w-full pl-10 pr-20 z-0 focus:outline-none"
                    placeholder="Search For Items..." />
                <div class="absolute right-0 top-0 h-full">
                    <button type="submit" class="h-full px-4 text-white bg-yellow-300 hover:bg-yellow-600 rounded-lg">
                        Search
                    </button>
                </div>
            </div>

            <div class="w-2/5 flex gap-2">
                <select class="bg-white border rounded-lg h-10 w-full" name="location" id="location"
                    onchange="this.form.submit()">
                    <option value="" selected disabled hidden>Choose City</option>
                    @foreach ($locations as $loc)
                        <option value="{{ $loc }}"
                            @if (old('location') == $loc) {{ 'selected' }} @endif>
                            {{ $loc }}</option>
                    @endforeach
                </select>

                <select class="h-10 w-full bg-white border rounded-lg" name="category" id="category"
                    onchange="this.form.submit()">
                    <option value="">Choose Category</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat }}"
                            @if (old('category') == $cat) {{ 'selected' }} @endif>
                            {{ $cat }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>

</div>
