@extends('layouts.app')

@section('content')
    <h1>Статьи</h1>

    <div>
        <h3><a>{{ $article->title }}</a></h3>
    </div>
@endsection
