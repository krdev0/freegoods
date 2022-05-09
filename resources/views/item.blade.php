@extends('layout')

@section('content')

<div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <div
            class="flex flex-col items-center justify-center text-center"
        >

            <h3 class="text-2xl mb-2">{{ $item->title }}</h3>
            <ul class="flex">
                <li
                    class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                >
                    <a href="#">{{ $item->category }}</a>
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
    </div>
</div>

@endsection