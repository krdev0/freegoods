@props(['item'])

@php
$images = json_decode($item->images);
@endphp

<x-card class="relative p-4 rounded-lg">
    <div
        class="absolute rounded-lg z-20 left-2 top-2 px-2 py-1 {{ $item->is_available ? 'bg-green-400' : 'bg-red-400' }}">
        <span class="text-white text-sm">{{ $item->is_available ? 'Available' : 'Not available' }}</span>
    </div>
    <div class="flex flex-col h-full">
        @empty($images)
            <div class="w-full h-full flex items-center justify-center h-[240px]">
                <img class="h-full w-full object-cover rounded-lg" src="{{ asset('images/missing-photo.jpg') }}" alt="">
            </div>
        @endempty

        @if (isset($images) and count($images) == 1)
            <div class="w-full h-full h-[240px]">
                <img class="h-full w-full object-cover rounded-lg" src="{{ asset('storage/' . $images[0]) }}" alt="">
            </div>
        @endif

        @if (isset($images) and count($images) > 1)
            <div class="splide" aria-label="gallery">
                <div class="splide__track">
                    <div class="splide__list">
                        @foreach ($images as $image)
                            <div class="splide__slide h-[240px]">
                                <img class="h-full w-full object-cover rounded-lg"
                                    src="{{ $image ? asset('storage/' . $image) : asset('images/pc-front.jpg') }}"
                                    alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        <div class="flex flex-col flex-1 mt-4">
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
