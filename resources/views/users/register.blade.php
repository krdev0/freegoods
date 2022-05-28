<x-layout>
    <div class="border rounded max-w-lg mx-auto p-4 border-t-4 border-t-yellow-500">
        <div class="text-center my-6">
            <h1 class="text-4xl font-bold">Register your account</h1>
            <p class="mt-2 text-slate-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, nostrum.</p>
        </div>

        <form action="/user" method="POST">
            @csrf

            <div class=" relative border-gray-200 focus:border-0">
                <span class="absolute left-0 top-0 border-r-[1px] h-full flex items-center justify-center px-4">
                    <i class="fa-solid fa-user"></i>
                </span>
                <input type="text"
                    class="border bg-yellow-50  rounded p-2 pl-14 w-full placeholder-opacity-30 placeholder-slate-800 focus:outline-none
                    focus:shadow-form focus:border-0"
                    name="full_name" placeholder="Full Name" value="{{ old('full_name') }}" />
            </div>

            @error('full_name')
                <p class="text-red-900 text-xs mt-1">{{ $message }}</p>
            @enderror

            <div class="mt-4 relative border-gray-200 focus:border-0">
                <span class="absolute left-0 top-0 border-r-[1px] h-full flex items-center justify-center px-4">
                    <i class="fa-solid fa-user"></i>
                </span>
                <input type="text"
                    class="border bg-yellow-50  rounded p-2 pl-14 w-full placeholder-opacity-30 placeholder-slate-800 focus:outline-none
                    focus:shadow-form focus:border-0"
                    name="username" placeholder="Username" value="{{ old('username') }}" />
            </div>

            @error('username')
                <p class="text-red-900 text-xs mt-1">{{ $message }}</p>
            @enderror

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
                    <i class="fa-solid fa-phone"></i>
                </span>
                <input type="tel" pattern="[0-9]{8}"
                    class="border bg-yellow-50  rounded p-2 pl-14 w-full placeholder-opacity-30 placeholder-slate-800 focus:outline-none
                    focus:shadow-form focus:border-0"
                    name="telephone" placeholder="Your number" value="{{ old('telephone') }}" />
            </div>

            @error('telephone')
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

            <div class="mt-4 relative border-gray-200 focus:border-0">
                <span class="absolute left-0 top-0 border-r-[1px] h-full flex items-center justify-center px-4">
                    <i class="fa-solid fa-lock"></i>
                </span>
                <input type="password"
                    class="border bg-yellow-50  rounded p-2 pl-14 w-full placeholder-opacity-30 placeholder-slate-800 focus:outline-none
                    focus:shadow-form focus:border-0"
                    name="password_confirmation" placeholder="Re-type password"
                    value="{{ old('password_confirmation') }}" />
            </div>

            @error('password_confirmation')
                <p class="text-red-900 text-xs mt-1">{{ $message }}</p>
            @enderror

            <div class="mt-4">
                <input type="checkbox" name="toc" class="mr-2">
                <label for="toc">I agree with <a href="#" class="text-blue-400">terms and conditions</a></label>
            </div>

            <div>
                <input type="checkbox" name="data" class="mr-2">
                <label for="data">Agree to <a href="#" class="text-blue-400">data sharing</a></label>
            </div>

            <div class="mt-4 w-full flex flex-col items-center">
                <button class="w-full bg-yellow-300 text-white rounded py-2 px-4 hover:bg-yellow-600">
                    Register
                </button>

                <p class="mt-4">Already have an account? <a href="/login" class="text-blue-400">Login</a>
                </p>
            </div>
        </form>
    </div>

</x-layout>
