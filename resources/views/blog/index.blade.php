@extends('layouts.base')

@section('page.title')
    Список постов
@endsection

@section('content')
    <h1 class="mb-3">@yield('page.title')</h1>
{{-- Контент страницы --}}
@if(empty($posts))
    Нет ни одного поста
@else
    <div class="mb-4">
    @foreach($posts as $post)
        <h4>
            <a href="{{ route('blog.show', $post->id)}}">
                {{ $post->title }}
            </a>
        </h4>

        <p>
            {!! $post->content !!}
        </p>
    @endforeach
    </div>
@endif

@endsection
