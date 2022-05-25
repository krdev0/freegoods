<x-layout>
    <x-card class="p-4">
    <div class="text-center mb-4">
        <h1 class="text-4xl font-bold">Register your account</h1>
    </div>

    <form action="/user" method="POST">
        @csrf
        <label
            for="full_name"
            class="inline-block text-lg mb-2"
            >Full Name</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="full_name"
            value="{{old('full_name')}}"
        />

        @error('full_name')
            <p class="text-red-900 text-xs mt-1">{{$message}}</p>
        @enderror

        <label
            for="username"
            class="inline-block text-lg mb-2"
            >Username</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="username"
            value="{{old('username')}}"
        />

        @error('username')
            <p class="text-red-900 text-xs mt-1">{{$message}}</p>
        @enderror

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
            for="telephone"
            class="inline-block text-lg mb-2"
            >Telephone Number</label
        >
        <input
            type="tel"
            pattern="[0-9]{8}"
            class="border border-gray-200 rounded p-2 w-full"
            name="telephone"
            value="{{old('telephone')}}"
        />

        @error('telephone')
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

        <label
            for="password_confirmation"
            class="inline-block text-lg mb-2"
            >Confirm Password</label
        >
        <input
            type="password"
            class="border border-gray-200 rounded p-2 w-full"
            name="password_confirmation"
        />

        @error('password_confirmation')
            <p class="text-red-900 text-xs mt-1">{{$message}}</p>
        @enderror

        <div class="mt-6 flex flex-col items-center w-48">
            <button
                class="w-full bg-yellow-500 text-white rounded py-2 px-4 hover:bg-yellow-600"
            >
                Register
            </button>

            <p class="mt-2">Already have an account? <a href="/login" class="text-blue-400">Login</a></p>
        </div>
    </form>
    </x-card>
</x-layout>