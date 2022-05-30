<x-layout>
    <div class="border rounded max-w-lg mx-auto p-4 border-t-4 border-t-yellow-500">

        <div class="text-center my-6">
            <h1 class="text-4xl font-bold">Change user details</h1>
            <p class="mt-2 text-slate-600">Change your details and manage your items.</p>
        </div>

        <form action="/user/update" method="POST">
            @csrf

            <div class="mt-4 relative border-gray-200 focus:border-0">
                <span class="absolute left-0 top-0 border-r-[1px] h-full flex items-center justify-center px-4">
                    <i class="fa-solid fa-user"></i>
                </span>
                <input type="text"
                    class="border bg-yellow-50  rounded p-2 pl-14 w-full placeholder-opacity-30 placeholder-slate-800 focus:outline-none
              focus:shadow-form focus:border-0"
                    name="full_name" placeholder="Full Name" value="{{ $user->full_name }}" />
            </div>

            <div class="mt-4 relative border-gray-200 focus:border-0">
                <span class="absolute left-0 top-0 border-r-[1px] h-full flex items-center justify-center px-4">
                    <i class="fa-solid fa-at"></i>
                </span>
                <input type="email"
                    class="border bg-yellow-50  rounded p-2 pl-14 w-full placeholder-opacity-30 placeholder-slate-800 focus:outline-none
                focus:shadow-form focus:border-0"
                    name="email" placeholder="Email" value="{{ $user->email }}" />
            </div>

            <div class="mt-4 relative border-gray-200 focus:border-0">
                <span class="absolute left-0 top-0 border-r-[1px] h-full flex items-center justify-center px-4">
                    <i class="fa-solid fa-phone"></i>
                </span>
                <input type="tel"
                    class="border bg-yellow-50  rounded p-2 pl-14 w-full placeholder-opacity-30 placeholder-slate-800 focus:outline-none
              focus:shadow-form focus:border-0"
                    name="telephone" placeholder="Telephone" value="{{ $user->telephone }}" />
            </div>

            <div class="mt-6 flex flex-col items-center w-48">
                <button class="w-full bg-yellow-300 text-white rounded py-2 px-4 hover:bg-yellow-600">
                    Save Changes
                </button>

            </div>
        </form>

        <div class="mt-8 w-full table-auto rounded-sm">
            <h3 class="text-center font-bold text-xl">Manage your items</h3>
            @unless($items->isEmpty())
                @foreach ($items as $item)
                    <div class="flex items-center justify-between w-full border-b-2 last:border-0">
                        <div class="text-lg">
                            <a href="show.html"> {{ $item->title }} </a>
                        </div>

                        <div class="flex ml-auto items-center">
                            <a href="/item/{{ $item->id }}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                                    class="fa-solid fa-pen-to-square"></i>
                                Edit</a>

                            <form method="POST" action="/item/{{ $item->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center">No Listings Found</p>
            @endunless
        </div>
    </div>
</x-layout>
