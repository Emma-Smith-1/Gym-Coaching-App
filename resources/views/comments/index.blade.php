@extends('layouts.app')

@section('title', 'Comments')

@section('content')
    <p> Comments on xx post:</p>

    <ul>
        @foreach ($comments as $comment)

            <li><a href="/comments/{{ $comment->id }}">{{ $comment->id }}</li>

        @endforeach
    
    </ul>

@endsection
