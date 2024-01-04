@extends('layouts.app')


@section('title')
商品検索
@endsection

<head>
    @vite('resources/sass/search.index.scss')
</head>

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('search.result') }}">
            @csrf
            <div class="search-wrapper">
                <input type="text" name="search_input" placeholder="商品名で検索" value="{{ $search }}">
                <button type="submit" class="btn" aria-hidden="true">検索</button>
            </div>
        </form>
    </div>


    <div class="container">

        <div class='paginate'>
            {{ $searched_products->links() }}
        </div>
        <!-- 1ページ30個まで表示ペジネーション -->
        <div class="row">
            @foreach ($searched_products as $product)
            <a href="{{ route('product.show', $product->id) }}" class="col-lg-4 col-md-6">
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
        <div class='paginate'>
            {{ $searched_products->links() }}
        </div>
    </div>
    
    <div class="back-to-home">
        <a href="{{ route('product.index') }}">一覧に戻る</a>
    </div>
@endsection