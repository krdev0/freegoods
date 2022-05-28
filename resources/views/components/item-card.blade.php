@props(['item'])
<x-card class="relative h-[200px]">
    <div class="absolute right-0 top-0 bg-yellow-300 px-2">
        <a class="text-white text-xs" href="/?category={{ $item->category }}">{{ $item->category }}</a>
    </div>
    <div class="flex h-full">
        <div class="w-1/2 h-full">
            <img class="hidden md:block w-full h-full object-cover"
                src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/pc-front.jpg') }}" alt="" />
        </div>
        <div class="flex flex-col flex-1 p-6">
            <h3 class="text-xl">
                <a href="/item/{{ $item->id }}">{{ $item->title }}</a>
            </h3>
            <p class="text-gray-400 text-sm">{{ Str::limit($item->description, 60) }}</p>

            <div class="mt-auto flex justify-between">
                <a href="/item/{{ $item->id }}" class="text-sm text-blue-400">Open</a>
                <div class="flex items-center text-sm"><i class="fa-solid fa-location-arrow mr-1"></i>
                    <span class="capitalize">{{ $item->location }}</span>
                </div>
            </div>
        </div>
    </div>
</x-card>
