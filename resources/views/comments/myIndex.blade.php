@extends('layouts.app')

@section('title', 'Comments')

@section('content')
    <p> My comments:</p>

    <ul>
        @if ($comments)
            @foreach ($comments as $comment)
                <li><a href="/comments/{{ $comment->id }}">{{ $comment->id }}</li>
            @endforeach
        @else 
            <li>No comments found.</li>
        @endif
    </ul>

@endsection
