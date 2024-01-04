@extends('layouts.app')


@section('title')
商品一覧
@endsection

@section('content')

    <div class="jumbotron top-img">
        <div>
            <p class="text-center text-white top-img-text">{{ config('app.name', 'Laravel') }}</p>
        </div>
    </div>

    <div class="container gradient-background">
        <div class="top__title text-center">
            All Products
        </div>

        <!-- 1ページに30個まで表示ペジネーション -->
        <div class="row">
            @foreach ($products as $product)
            <a href="#" class="col-lg-4 col-md-6">
                <div class="card">
                    <img src="{{ asset($product->image) }}" class="card-img" loading="lazy">
                    <div class="card-body">
                        <p class="card-title">{{ $product->name }}</p>
                        <p class="card-text">¥{{ number_format($product->price) }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    <footer>
        <div class="footer-title-wrapper">
            <p>{{ config('app.name', 'Laravel') }}</p>
        </div>
    </footer>

@endsection