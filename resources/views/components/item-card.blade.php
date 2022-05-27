@props(['item'])

<x-card class="p-6 relative">
    <div class="flex">
        <img
            class="hidden w-20 mr-6 md:block"
            src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/item.svg') }}"
            alt=""
        />
        <div>
            <h3 class="text-xl">
                <a href="/item/{{ $item->id }}">{{ $item->title }}</a>
            </h3>
            <div class="absolute right-0 top-0 bg-yellow-500 px-2">
                    <a class="text-white" href="/?category={{ $item->category }}">{{ $item->category }}</a>
            </div>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$item->location}}
            </div>
        </div>
    </div>
    <span>{{ $item->created_at }}</span>
</x-card>