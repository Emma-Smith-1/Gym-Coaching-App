@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <p> i hope this works</p>

    <ul>
        @foreach ($posts as $post)

            <li>{{ $post->title }}</li>

        @endforeach
    
    </ul>

@endsection
