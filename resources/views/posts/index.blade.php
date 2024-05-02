@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <p> i hope this works</p>

    <ul>
        @foreach ($posts as $post)

            <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</li>

        @endforeach
    
    </ul>

@endsection
