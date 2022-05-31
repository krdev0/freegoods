<div class="my-8">
    <form action="/">
        <div class="flex gap-4 items-center">
            <div class="relative w-3/5 flex gap-2">
                <div class="border w-full">
                    <div class="absolute top-1/2 -translate-y-1/2 left-2">
                        <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
                    </div>
                    <input type="text" name="search" class="h-10 w-full pl-10 z-0 focus:outline-none"
                        placeholder="Search For Items..." />
                </div>
                <div class="flex">
                    <button type="submit" class="px-4 text-white bg-yellow-300 hover:bg-yellow-600   ">
                        SEARCH
                    </button>
                </div>
            </div>

            <div class="w-2/5 flex gap-2">
                <select class="bg-white border h-10 w-full" name="location" id="location" onchange="this.form.submit()">
                    <option value="" selected disabled hidden>Choose City</option>
                    @foreach ($locations as $loc)
                        <option value="{{ $loc }}"
                            @if (old('location') == $loc) {{ 'selected' }} @endif>
                            {{ $loc }}</option>
                    @endforeach
                </select>

                <select class="h-10 w-full bg-white border" name="category" id="category" onchange="this.form.submit()">
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
