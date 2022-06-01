<x-layout>
    <div class="max-w-4xl mx-auto">
        <div class="flex flex-col gap-4 shadow relative p-4 rounded-lg bg-gray-50">

            <div class="flex justify-center w-full">
                <h3 class="text-4xl font-bold">{{ $item->title }}</h3>
                <a class="" href="/?category={{ $item->location }}">{{ $item->location }}</a>
            </div>

            <div class="flex">
                @if (isset($images))
                    <div class="flex flex-wrap gap-2">
                        @foreach ($images as $image)
                            <a class="max-w-[320px]" data-fslightbox href="{{ asset('storage/' . $image) }}">
                                <img class="w-full h-full object-cover rounded-lg"
                                    src="{{ $image ? asset('storage/' . $image) : asset('images/pc-front.jpg') }}"
                                    alt="">
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>

            <p class="text-base">{{ $item->description }}</p>

            @auth
                <div class="flex flex-col gap-2">
                    <a href="tel:27154641" title="phone"><i class="fa-solid fa-phone"></i> 27154641</a>
                    <a href="mailto:kritinsdev@gmail.com"><i class="fa-solid fa-at"></i> kritinsdev@gmail.com</a>
                </div>
            @else
                <div>
                    <a href="/register">Get Contacts</a>
                </div>
            @endauth
        </div>
    </div>
</x-layout>
