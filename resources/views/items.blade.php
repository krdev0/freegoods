<h1>
    {{ $heading }}
</h1>

@if (count($items) === 0)
    <p>No items found!</p>
@else 
@foreach ($items as $item)
    <span style="font-weight: bold;">
    {{ $item['title'] }}
</span>

<p>
    {{ $item['description'] }}
</p>

<hr>
@endforeach
@endif


