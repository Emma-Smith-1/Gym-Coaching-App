@extends('layouts.app')

@section('title', 'Post contents')

@section('content')
    <ul>
        <li>Title: {{ $post->title }}</li>
        <li>Content: {{ $post->content }}</li>
        <li>Creation date: {{ $post->creation_date }}</li>
        <li>Last updated: {{ $post->last_updated }}</li>
        <li>Category: {{ $post->category }}</li>
        <li>Visibility: {{ $post->Visibility }}</li>
        <li>Likes: {{ $post->likes }}</li>
        <li>Comments: {{ $post->comments }}</li>
        <li>Media: {{ $post->media }}</li>
        <li>Status: {{ $post->status}}</li>
    </ul>
@endsection