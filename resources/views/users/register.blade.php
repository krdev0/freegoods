<x-layout>
    <x-card class="p-4">
    <div class="text-center mb-4">
        <h1 class="text-4xl font-bold">Register your account</h1>
    </div>

    <form action="/user" method="POST">
        @csrf
        <label
            for="fullname"
            class="inline-block text-lg mb-2"
            >Full Name</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="fullname"
        />

        <label
            for="username"
            class="inline-block text-lg mb-2"
            >Username</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="username"
        />

        <label
            for="email"
            class="inline-block text-lg mb-2"
            >Email</label
        >
        <input
            type="email"
            class="border border-gray-200 rounded p-2 w-full"
            name="email"
        />

        <label
            for="number"
            class="inline-block text-lg mb-2"
            >Telephone Number</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="number"
        />
    </form>
    </x-card>
</x-layout>