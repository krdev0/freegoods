<x-layout>

    <div class="border rounded max-w-lg mx-auto p-4 border-t-4 border-t-yellow-500">
        <div class="text-center my-6">
            <h1 class="text-4xl font-bold">Log In</h1>
            <p class="mt-2 text-slate-600">Enter your email and password.</p>
        </div>

        <form action="/user/authenticate" method="POST">
            @csrf

            <div class="mt-4 relative border-gray-200 focus:border-0">
                <span class="absolute left-0 top-0 border-r-[1px] h-full flex items-center justify-center px-4">
                    <i class="fa-solid fa-at"></i>
                </span>
                <input type="email"
                    class="border bg-yellow-50  rounded p-2 pl-14 w-full placeholder-opacity-30 placeholder-slate-800 focus:outline-none
                    focus:shadow-form focus:border-0"
                    name="email" placeholder="Email" value="{{ old('email') }}" />
            </div>

            @error('email')
                <p class="text-red-900 text-xs mt-1">{{ $message }}</p>
            @enderror

            <div class="mt-4 relative border-gray-200 focus:border-0">
                <span class="absolute left-0 top-0 border-r-[1px] h-full flex items-center justify-center px-4">
                    <i class="fa-solid fa-lock"></i>
                </span>
                <input type="password"
                    class="border bg-yellow-50  rounded p-2 pl-14 w-full placeholder-opacity-30 placeholder-slate-800 focus:outline-none
                    focus:shadow-form focus:border-0"
                    name="password" placeholder="Password" value="{{ old('password') }}" />
            </div>

            @error('password')
                <p class="text-red-900 text-xs mt-1">{{ $message }}</p>
            @enderror

            <div class="mt-4 w-full flex flex-col items-center">
                <button class="w-full bg-yellow-300 text-white rounded py-2 px-4 hover:bg-yellow-600">
                    Login
                </button>

                <p class="mt-4">Dont have an account? <a href="/register" class="text-blue-400">Register</a>
                </p>
            </div>
        </form>
    </div>

</x-layout>
