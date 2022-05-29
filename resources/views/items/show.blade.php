<x-layout>
    <div class="max-w-4xl mx-auto border p-8">
        <div class="flex flex-col items-center justify-center text-center">

            <div class="flex items-center mb-4">
                <h3 class="text-4xl font-bold">{{ $item->title }}</h3>
                {{-- <a class="bg-yellow-500 text-white rounded-xl uppercase text-xs font-bold p-2"
                    href="/?category={{ $item->category }}">{{ $item->category }}</a> --}}
            </div>




            {{-- <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> {{ $item->location }}
            </div> --}}

            <div class="flex">
                @if (isset($images))
                    <div class="p-2 w-1/2 flex flex-wrap gap-2">
                        @foreach ($images as $image)
                            <a class="max-w-[180px]" data-fslightbox href="{{ asset('storage/' . $image) }}">
                                <img class="w-full h-full object-cover"
                                    src="{{ $image ? asset('storage/' . $image) : asset('images/pc-front.jpg') }}"
                                    alt="">
                            </a>
                        @endforeach
                    </div>
                @endif

                <div class="p-2 flex-1 text-lg space-y-6">
                    <p class="text-base">{{ $item->description }}</p>
                </div>
            </div>

            <div>
                {{ $item->location }}
            </div>


            <a href="#" class="block bg-yellow-300 text-white rounded-xl hover:opacity-80"><i
                    class="fa-solid fa-envelope"></i>
                Contact</a>
        </div>
    </div>
</x-layout>
