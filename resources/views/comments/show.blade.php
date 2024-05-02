@extends('layouts.app')

@section('id', 'Comment contents')

@section('content')
    <ul>
        <li>ID: {{ $comment->id }}</li>
        <li>Comment: {{ $comment->content }}</li>
        <li>Creation date: {{ $comment->created_at }}</li>
        <li>Last updated: {{ $comment->updated_at}}</li>
        <li>Visibility: {{ $comment->Visibility }}</li>
        <li>Likes: {{ $comment->likes }}</li>
    </ul>
@endsection