@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <h1>Search Results</h1>
    <ul>
        @foreach ($products as $product)
            <li><a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a></li>
        @endforeach
    </ul>
@endsection
