@extends('layouts.app')

@section('title', 'Post contents')

@section('content')
    <ul>
        <div class="py-4"> <!-- Increased padding for bigger posts -->
            <div class="p-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg mb-4"> <!-- Changed background color -->
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="text-right text-sm text-gray-500 dark:text-gray-400 mb-2">Category: {{ $post->category }}</div>
                        <div class="text-right text-sm text-gray-500 dark:text-gray-400 mb-2">Posted by: {{ $post->user_id }}</div>
                        <li><a href="/posts/{{ $post->id }}" class="font-bold text-lg">{{ $post->title }}</a></li> <!-- Increased font size -->
                        <ul>
                            <li>{{ $post->content }}</li>
                        </ul>
                        <div class="text-right text-sm text-gray-500 dark:text-gray-400 mb-2">Creation Date: {{ $post->creation_date }}</div>
                        <div class="text-right text-sm text-gray-500 dark:text-gray-400 mb-2">Last Updated: {{ $post->last_updated}} </div>
                    </div>
                </div>
                <div class="bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg mb-4"> <!-- Changed background color -->
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <li>Media: {{ $post->media }}</li>
                    </div>
                </div>
                <div class="flex flex-wrap"> <!-- Added flex container -->
                    <div class="bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg mb-4 mr-2"> <!-- Changed background color -->
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <li>{{ $post->likes }} Likes </li>
                        </div>
                    </div>
                    <div class="bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg mb-4 mr-2"> <!-- Changed background color -->
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form method="POST" action="{{ route('posts.like', ['post' => $post]) }}">
                            @csrf
                            @method('POST')
                            <button type="submit">Like</button>
                            </form>
                        </div>
                    </div>
                    <div class="bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg mb-4 mr-2"> <!-- Changed background color -->
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <li><a href="{{ route('posts.comments.index', ['post_id' => $post->id]) }}" >View Comments ({{ $post->comments }})</a></li>
                        </div>
                    </div>
                    <div class="bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg mb-4 mr-2"> <!-- Changed background color -->
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <li><a href="/posts/comments/create" class="font-bold text-lg">Add Comment</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </ul>
@endsection
