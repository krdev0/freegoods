<x-layout>
    <div class="mx-4">
        <div class="flex flex-col items-center justify-center text-center">

            <h3 class="text-2xl mb-2">{{ $item->title }}</h3>
            @if (isset($images))
                @if (count($images) > 3)
                    <section class="splide" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <div class="splide__list">
                                @foreach ($images as $image)
                                    <img class="mb-2 splide__slide"
                                        src="{{ $image ? asset('storage/' . $image) : asset('images/pc-front.jpg') }}"
                                        alt="">
                                @endforeach
                            </div>
                        </div>
                    </section>
                @else
                    <div>
                        @foreach ($images as $image)
                            <img class="mb-2 splide__slide"
                                src="{{ $image ? asset('storage/' . $image) : asset('images/pc-front.jpg') }}" alt="">
                        @endforeach
                    </div>
                @endif
            @endif
            <ul class="flex">
                <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                    <a href="/?category={{ $item->category }}">{{ $item->category }}</a>
                </li>
            </ul>
            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> {{ $item->location }}
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <div class="text-lg space-y-6">
                    <p>{{ $item->description }}</p>

                    <a href="mailto:test@test.com"
                        class="block bg-yellow-300 text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                            class="fa-solid fa-envelope"></i>
                        Contact</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
