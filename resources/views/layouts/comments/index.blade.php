@extends('layouts.app')

@section('title', 'Comments')

@section('content')
    <p> Comments on xx post:</p>

    <ul>
        @foreach ($comments as $comment)

            <li><a href="/comments/{{ $comment->id }}">{{ $comment->content }}</li>

        @endforeach
    
    </ul>

@endsection
