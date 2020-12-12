@extends('layouts.app')

@section('content')
    <section class="banner">
        <div class="container">
            <h1 class="banner__title">Лучший интернет-магазин в мире</h1>
            <h2 class="banner__subtitle">Всё для Вас, мой дорогой друг</h2>
        </div>
    </section>
    @include('categories._index')
@endsection

