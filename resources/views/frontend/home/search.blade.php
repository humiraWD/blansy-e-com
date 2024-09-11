@extends('frontend.layout.parent')
@section('title', 'Home')

@section('content')
<div class="row" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px;">
    @foreach ($products as $product)
    <a href="{{ url('/product') }}/{{ $product->id }}">
        <div style="padding: 10px;">
            <div class="search-output" style="">
                <div style="text-align: center;">
                    <img src="https://adpanchok.co.kr/ez/upload/mall/shop_1701839675175508_1.jpg" alt="" style="max-width: 100%; border: 1px solid; padding: 5px 15px">
                </div>
                <p style="text-align: center;">{{ $product->sku }}</p>
                <p style="text-align: center;">{{ $product->name }}</p>
                <p style="text-align: center;">{{ $product->sale_off }}</p>
            </div>
        </div>
    </a>
    @endforeach
</div>

@endsection
