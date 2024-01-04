@extends('layouts.app')

@section('title')
商品カート
@endsection

<head>
    <link rel="stylesheet" href="{{ asset('css/cart.index.css') }}">
</head>

@section('content')
    <div class="container">
        <div class="cart__title">
            Shopping Cart
        </div>
        
        @if(count($line_items) > 0)
        <div class="cart-wrapper">
            
            @foreach ($line_items as $item)
            <div class="card mb-3">
                <div class="row" style="flex-wrap: unset">
                    <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="product-cart-img"/>
                    <div class="card-body">
                        <div class="card-product-name col-12">
                            {{ $item->name }}
                        </div>
                        <div class="card__total-price card__quantity col-12">
                            {{ $item->pivot->quantity }}個 / ￥{{ number_format($item->price * $item->pivot->quantity) }}
                        </div>
                        <form method="post" action="{{ route('line_item.delete') }}">
                            @csrf
                            <div class="card__btn-trash col-1">
                                <input type="hidden" name="id" value="{{ $item->pivot->id }}"/>
                                <button type="submit" class="fas fa-trash-alt"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="cart__sub-total">
            小計：￥{{ number_format($total_price) }} 円
        </div>
        <button onClick="location.href='{{ route('cart.checkout') }}'" class="cart__purchase btn btn-primary">
            購入する
        </button>
        @else
        <div class="cart__empty">
            カートに商品が入っていません。
        </div>
        @endif
        
    </div>
@endsection
