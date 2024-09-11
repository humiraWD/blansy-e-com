<!-- resources/views/products/show.blade.php -->
<!-- @extends('layouts.app') -->
@extends('frontend.layout.parent')
@section('title', 'Review')
@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>${{ $product->price }}</p>

    <!-- Display reviews -->
    <div class="reviews">
        <h2>Reviews</h2>
        @foreach($product->reviews as $review)
            <div class="review">
                <strong>{{ $review->user->name }}</strong>
                <span>{{ $review->rating }} / 5</span>
                <p>{{ $review->review }}</p>
            </div>
        @endforeach
    </div>

    <!-- Review form -->
    @auth
        <form action="{{ route('reviews.store', $product->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="rating">Rating</label>
                <select name="rating" id="rating" class="form-control" required>
                    <option value="">Choose rating</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="form-group">
                <label for="review">Review</label>
                <textarea name="review" id="review" rows="4" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Review</button>
        </form>
    @else
        <p>Please <a href="{{ route('login') }}">log in</a> to leave a review.</p>
    @endauth
</div>
@endsection
