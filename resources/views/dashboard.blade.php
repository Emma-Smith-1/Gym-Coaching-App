
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 name="header">
        <h2 class="p-6 font-semibold text-xl text-gray-800 dark:text-gray-200 flex items-center justify-center">
            {{ __( ' Dashboard' ) }}
        </h2>
    </h1>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <h2 class="p-6 font-semibold text-xl text-gray-800 dark:text-gray-200 flex items-center justify-center">
                {{ __( 'Recent posts' ) }}
            </h2>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <ul>
                    @foreach ($recentPosts as $post)
                        <div class=" bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg mb-4">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                <li><a href="/posts/{{ $post->id }}" class="font-bold text-lg">{{ $post->title }}</a></li>
                                <form method="POST" action="{{ route('posts.like', ['post' => $post]) }}" class="inline">
                                    @csrf
                                    <button type="submit">{{ $post->likes }} Likes</button>
                                </form>
                            <ul>
                                <li><a href="{{ route('posts.comments.index', ['post_id' => $post->id]) }}" class="text-red-500">View Comments ({{ $post->comments }})</a></li>
                            </ul>
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
