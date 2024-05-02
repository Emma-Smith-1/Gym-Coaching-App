@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <p> All Posts</p>

    <ul>
        @foreach ($posts as $post)

            <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</li>
            <ul>
                <li><a href="{{ route('posts.comments.index', ['post' => $post->id]) }}"> View Comments</a></li>
            </ul>

        @endforeach
    
    </ul>

@endsection
