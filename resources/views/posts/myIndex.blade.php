@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <p> My Posts</p>

    <ul>
        @if ($posts)
            @foreach ($posts as $post)
                <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
                <ul>
                    <li><a href="{{ route('posts.comments.index', ['post' => $post->id]) }}"> View Comments</a></li>
                </ul>
            @endforeach
        @else
            <li>No posts found.</li>
        @endif
    </ul>
@endsection
