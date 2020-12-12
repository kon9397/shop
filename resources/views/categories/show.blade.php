@extends('layouts.app')

@section('content')
    @foreach($category as $product)
        <h1>{{  $product->name }}</h1>

    @endforeach
@endsection
