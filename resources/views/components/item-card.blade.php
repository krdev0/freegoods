@props(['item'])

@php
$images = json_decode($item->images);
@endphp

<x-card class="relative md:min-h-[180px]">
    <div class="absolute right-0 top-0 bg-yellow-300 px-2">
        <a class="text-white text-xs" href="/?category={{ $item->category }}">{{ $item->category }}</a>
    </div>
    <div class="flex flex-col h-full md:flex-row">

        @empty($images)
            <div class="w-full h-full md:w-1/2 flex items-center justify-center">
                <img class="w-24 h-24" src="{{ asset('images/package.png') }}" alt="">
            </div>
        @endempty

        @if (isset($images) and count($images) == 1)
            <div class="w-full h-full md:w-1/2">
                <img class="h-full w-full object-cover" src="{{ asset('storage/' . $images[0]) }}" alt="">
            </div>
        @endif

        @if (isset($images) and count($images) > 1)
            <div class="w-full h-full md:w-1/2">
                <div class=" splide" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <div class="splide__list">
                            @foreach ($images as $image)
                                <div class="splide__slide">
                                    <img class="h-full w-full object-cover"
                                        src="{{ $image ? asset('storage/' . $image) : asset('images/pc-front.jpg') }}"
                                        alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="flex flex-col flex-1 p-6">
            <h3 class="text-xl">
                <a href="/item/{{ $item->id }}">{{ $item->title }}</a>
            </h3>
            <p class="text-gray-400 text-sm">{{ Str::limit($item->description, 80) }}</p>

            <div class="mt-auto flex justify-between">
                <a href="/item/{{ $item->id }}" class="text-sm p-2 bg-yellow-500 text-white">Get Contacts</a>
                <div class="flex items-center text-sm"><i class="fa-solid fa-location-arrow mr-1"></i>
                    <span class="capitalize">{{ $item->location }}</span>
                </div>
            </div>
        </div>
    </div>
</x-card>
