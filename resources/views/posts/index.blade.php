@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1 name="header" class="p-6 font-semibold text-xl text-gray-800 dark:text-gray-200 flex items-center justify-center">
        {{ __('All Posts') }}
    </h1>

    <ul>
        @foreach ($posts as $post)
            <div class="py-4"> <!-- Increased padding for bigger posts -->
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg"> <!-- Changed background color -->
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="text-right text-sm text-gray-500 dark:text-gray-400 mb-2">Category: {{ $post->category }}</div>
                            <div class="text-right text-sm text-gray-500 dark:text-gray-400 mb-2">Posted by: {{ $post->coach_id }}</div>
                            <li>
                                <a href="/posts/{{ $post->id }}" class="font-bold text-lg">{{ $post->title }}</a>
                                <form method="POST" action="{{ route('posts.like', ['post' => $post]) }}" class="inline">
                                    @csrf
                                    <button type="submit">{{ $post->likes }} Likes</button>
                                </form>
                            <ul>
                                <li><a href="{{ route('posts.comments.index', ['post_id' => $post->id]) }}" class="text-red-500">View Comments ({{ $post->comments }})</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </ul>
@endsection
