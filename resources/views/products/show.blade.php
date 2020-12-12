@extends('layouts.app')



@section('content')
    <section class="product">
        <div class="container">
            <h2 class="section__title">{{ $product->name }}</h2>
            <div class="flex-row">
                <div class="product__img">
                    <img src="../{{ $product->image_path  }}" alt="">
                </div>
                <div class="product__info">
                    <p>Бренд: {{ $product->brand }}</p>
                    <p>Цена: {{ $product->price }}</p>
                    <p>Категория: {{ $product->category->name }}</p>
                    <p class="description">{{ $product->description }}</p>
                    <button class="btn">Добавить в корзину</button>
                </div>
            </div>
        </div>

    </section>


@endsection


