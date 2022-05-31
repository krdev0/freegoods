@props(['item'])

@php
$images = json_decode($item->images);
@endphp

<div class="shadow relative p-4 rounded-lg bg-gray-50">
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

        <div class="flex flex-col flex-1 min-h-[140px]">
            <h3 class="text-xl my-4 font-semibold">
                <a href="/item/{{ $item->id }}">{{ $item->title }}</a>
            </h3>
            <p class="text-slate-600 text-sm">{{ Str::limit($item->description, 90) }}</p>

            <div class="mt-auto flex justify-between">
                <div class="flex items-center text-sm"><i class="fa-solid fa-location-arrow mr-1"></i>
                    <span class="capitalize">{{ $item->location }}</span>
                </div>
                <a href="/item/{{ $item->id }}" class="text-sm text-blue-400">View<i
                        class="fa-solid fa-angle-right ml-2 text-xs"></i></a>
            </div>
        </div>
    </div>
</div>
