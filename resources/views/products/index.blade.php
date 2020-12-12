@extends('layouts.app')



@section('content')
    <section class="products">
        <div class="container">
            <h2 class="section__title">Наши товары</h2>
            <div class="cards">
            @if(count($products) > 0)
                @foreach($products as $product)
                        <div class="card">
                            <a href="products/{{ $product->id }}">
                                <h3 class="card__title">{{ $product->name }}</h3>
                                <div class="card__img">
                                    <img src="{{ $product->image_path }}" alt="">
                                </div>
                                <div class="card__price">
                                    <p class="card__price--title">Цена:</p>
                                    <p class="card__price--value">{{ $product->price }}</p>
                                </div>
                                <div class="card__category">
                                    <p class="card__category--title">Категория:</p>
                                    <p class="card__value--value">{{ $product->category->name }}</p>
                                </div>
                                <p class="card__text">{{ $product->description }}</p>

                            </a>
                        </div>

                @endforeach
            @endif
            </div>
        </div>
    </section>


@endsection


