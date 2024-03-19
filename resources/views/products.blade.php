<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Product' }}</title>
</head>
<body>
<h1>Каталог</h1>
<ul>
    @foreach($products as $product)

        <a href="route('', )"<h2> {{ $product->name }}</h2>
         <h4>  {{ number_format($product->price, 2, '.', '') }} $</h4>
{{--<p>
    Категория:
    <a href="{{ route('catalog.category', ['slug' => $product->category_slug]) }}">
        {{ $product->category_name }}
    </a>
</p>
<p>
    Бренд:
    <a href="{{ route('catalog.brand', ['slug' => $product->brand_slug]) }}">
        {{ $product->brand_name }}
    </a>
</p>--}}
       {{-- <p>Описание: {{ $product->content }}</p> --}}<hr/>
  @endforeach
</ul>
</body>
</html>

