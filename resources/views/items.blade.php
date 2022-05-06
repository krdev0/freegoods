@extends('layout')

@section('content')

@if (count($items) === 0)
    <p>No items found!</p>
@else 
@foreach ($items as $item)
    <h3 style="font-weight: bold;">
        {{ $item['title'] }}
    </h3>
    <span> {{ $item['location']}} </span>
<p>
    {{ $item['description'] }}
</p>

<hr>
@endforeach
@endif

@endsection