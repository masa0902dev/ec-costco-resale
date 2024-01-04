<!DOCTYPE html>
<html lang="ja">

<head prefix="og: https://ogp.me/ns#">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="コストコのお得なリセール商品を日本全国ていねいにお届け！名古屋市内なら送料無料！">
    <meta name="keyword" content="コストコ,名古屋,送料無料">
    <link rel="canonical" href="https://costco-net-masa.jp">
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="../img/costco-net-masa.ico">
    <link rel="apple-touch-icon" href="../img/costco-net-masa.jpg">

    <!-- OGPタグ -->
    <meta property="og:url" content="https://costco-net-masa.jp/">
    <meta property="og:title" content="コストコネットMASA【名古屋】">
    <meta property="og:type" content="website">
    <meta property="og:description" content="コストコのお得なリセール商品を日本全国ていねいにお届け！名古屋市内なら送料無料！">
    <meta property="og:image" content="../img/costco-net-masa.jpg">
    <meta property="og:site_name" content="コストコネットMASA【名古屋】">
    <meta property="og:locale" content="ja_JP">

    <!-- css -->
    <!--<link rel="stylesheet" href="../css/destyle.css">-->
    <link rel="stylesheet" href="{{ asset('css/destyle.css') }}">
    <link rel="preload" href="{{ asset('images/top.jpg') }}" as="image">
    @vite('resources/sass/app.scss')
    <!--<link rel="stylesheet" href="../css/common.css" media="print" onload="this.media='all'; this.onload=null;">-->
    <!--<link rel="stylesheet" href="../css/index.css" media="print" onload="this.media='all'; this.onload=null;">-->
    <!-- js -->
    <!--<script src="../js/common.js" defer></script>-->
    <!--<script src="../js/index.js" defer></script>-->
    <script src="https://kit.fontawesome.com/f4ecd71f58.js" crossorigin="anonymous" defer></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('product.index') }}">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <div class="right-wrapper">
                <div class="cart-btn">
                    <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="search-btn">
                    <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
            </div>
        </nav>
    </header>
    
     @yield('content')
</body>
</html>