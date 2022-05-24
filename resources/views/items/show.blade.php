<x-layout>
<div class="mx-4">
    <x-card class="p-10">
        <div
            class="flex flex-col items-center justify-center text-center"
        >

            <h3 class="text-2xl mb-2">{{ $item->title }}</h3>
            <img class="mb-2" src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/item.svg') }}" alt="">
            <ul class="flex">
                <li
                    class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                >
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

                    <a
                        href="mailto:test@test.com"
                        class="block bg-yellow-500 text-white mt-6 py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-envelope"></i>
                        Contact</a
                    >
                </div>
            </div>
        </div>
    </x-card>
    <x-card class="mt-4 p-2 flex space-x-6">
        <a href="/item/{{$item->id}}/edit"><i class="fa-solid fa-pencil mr-2"></i>Edit Item</a>

        <form method="POST" action="/item/{{$item->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500"><i class="fa-solid fa-trash mr-2"></i>Delete</button>
        </form>
    </x-card>
</div>
</x-layout>