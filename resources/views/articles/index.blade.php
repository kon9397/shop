@extends('layouts.app')

@section('content')
    <h1>Статьи</h1>

    @if(count($articles) > 0)
        @foreach($articles as $article)
            <div>
                <h3><a href="/articles/{{ $article->slug }}">{{ $article->title }}</a></h3>
            </div>
        @endforeach
    @endif
@endsection
