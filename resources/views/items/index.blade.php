<x-layout>
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-3 space-y-4 md:space-y-0 mx-4">

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
