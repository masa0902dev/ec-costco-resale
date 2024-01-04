@extends('layouts.app')

@section('title')
{{ $product->name }}
@endsection

<head>
    <link rel="stylesheet" href="{{ asset('css/product.show.css') }}">
</head>

@section('content')
    <div class="container">
        <div class="product">
            <img src="{{ asset($product->image) }}" class="product-img">
            <div class="product__content-header text-center">
                <div class="product__name">
                    {{ $product->name }}
                </div>
                <div class="product__price">
                    ¥{{ number_format($product->price) }}
                </div>
                <div class="product__description">
                    {{ $product->description }}
                </div>
            </div>
            
            <form method="POST" action="{{ route('line_item.create') }}">
                @csrf
                <!--ここサーバ管理にするhidden-->
                <input type="hidden" name="id" value="{{ $product->id }}">
                <div class="product__quantity">
                    <input type="number" name="quantity" min="1" value="1" require>
                </div>
                <div class="product__btn-add-cart">
                    <button type="submit" class="btn btn-outline-secondary">カートに追加する</button>
                </div>
            </form>
        </div>
    </div>
    
    
    <div class="back-to-home">
        <a href="/">一覧に戻る</a>
    </div>
@endsection
