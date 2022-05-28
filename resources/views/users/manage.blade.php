<x-layout>
    <x-card class="p-4">
    <div class="text-center mb-4">
        <h1 class="text-4xl font-bold">Change account details</h1>
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
            value="{{ $user->full_name }}"
        />

        @error('full_name')
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
            value="{{ $user->email }}"
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
            value="{{ $user->telephone }}"
        />

        @error('telephone')
            <p class="text-red-900 text-xs mt-1">{{$message}}</p>
        @enderror

        <div class="mt-6 flex flex-col items-center w-48">
            <button
                class="w-full bg-yellow-300 text-white rounded py-2 px-4 hover:bg-yellow-600"
            >
                Save Changes
            </button>

        </div>
    </form>
    </x-card>

    <x-card class="mt-4">
        <table class="w-full table-auto rounded-sm">
            <tbody>
              @unless($items->isEmpty())
              @foreach($items as $item)
              <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                  <a href="show.html"> {{$item->title}} </a>
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                  <a href="/item/{{$item->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                      class="fa-solid fa-pen-to-square"></i>
                    Edit</a>
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                  <form method="POST" action="/item/{{$item->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
              @else
              <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                  <p class="text-center">No Listings Found</p>
                </td>
              </tr>
              @endunless
      
            </tbody>
          </table>
    </x-card>
</x-layout>