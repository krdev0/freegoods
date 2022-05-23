@props(['item'])

<x-card class="p-6">
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
            <ul class="flex">
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="/?category={{ $item->category }}">{{ $item->category }}</a>
                </li>
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$item->location}}
            </div>
        </div>
    </div>
</x-card>