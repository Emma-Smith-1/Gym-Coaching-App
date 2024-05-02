@extends('layouts.app')

@section('title', 'Comment contents')

@section('content')
    <ul>
        <li>Comment: {{ $comment->content }}</li>
        <li>Creation date: {{ $comment->creation_date }}</li>
        <li>Last updated: {{ $comment->last_updated }}</li>
        <li>Visibility: {{ $comment->Visibility }}</li>
        <li>Likes: {{ $comment->likes }}</li>
    </ul>
@endsection