
@extends('frontend.layout.parent')
@section('title', "$product->name")

@section('title', 'Product Categories')

@section('content')
<div class="container">
    <h1>Product Categories</h1>
    <ul>
        @foreach($categories as $category)
            <li><a href="{{ route('category.products', $category->id) }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
    <a href="{{ route('products.all') }}" class="btn btn-primary">View All Products</a>
</div>
@endsection