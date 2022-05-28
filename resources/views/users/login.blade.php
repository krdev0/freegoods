<x-layout>
    <x-card class="p-4">
    <div class="text-center mb-4">
        <h1 class="text-4xl font-bold">Login into your account</h1>
    </div>

    <form action="/user/authenticate" method="POST">
        @csrf

        <label
            for="email"
            class="inline-block text-lg mb-2"
            >Email</label
        >
        <input
            type="email"
            class="border border-gray-200 rounded p-2 w-full"
            name="email"
            value="{{old('email')}}"
        />

        @error('email')
            <p class="text-red-900 text-xs mt-1">{{$message}}</p>
        @enderror

        <label
            for="password"
            class="inline-block text-lg mb-2"
            >Password</label
        >
        <input
            type="password"
            class="border border-gray-200 rounded p-2 w-full"
            name="password"
        />

        @error('password')
            <p class="text-red-900 text-xs mt-1">{{$message}}</p>
        @enderror

        <div class="mt-6 flex flex-col items-center w-48">
            <button
                class="w-full bg-yellow-300 text-white rounded py-2 px-4 hover:bg-yellow-600"
            >
                Log In
            </button>

            <p class="mt-2">Dont have an account? <a href="/register" class="text-blue-400">Register</a></p>
        </div>
    </form>
    </x-card>
</x-layout>