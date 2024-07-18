@extends('layouts.base')

@section('page.title', $post->title)

@section('content')
    <a href="{{ route('blog') }}">Вернуться к списку постов</a>

    <h1 class="mb-3">@yield('page.title')</h1>

    <p>
        {!! $post->content !!}
    </p>

@endsection
