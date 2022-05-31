<x-layout>
    <h1 class="text-center text-4xl font-bold">Find items you need!</h1>

    @include('partials._search')

    <div class="lg:grid lg:grid-cols-3 gap-3 space-y-4 md:space-y-0">

        @if (count($items) === 0)
            <p>No items found!</p>
        @else
            @foreach ($items as $item)
                <x-item-card :item="$item" />
            @endforeach
        @endif

    </div>

    <div class="mt-6 p-4">
        {{ $items->links() }}
    </div>

</x-layout>
