@extends('layouts.app')

@section('title', 'Comments')

@section('content')
    <h1 name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 flex items-center justify-center">
            {{ __('My Comments') }}
        </h2>
    </h1>

    <ul>
        @if ($comments)
            @foreach ($comments as $comment)
                <div class="py-4"> <!-- Increased padding for bigger posts -->
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg"> <!-- Changed background color -->
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                <li><a href="/comments/{{ $comment->id }}">{{ $comment->content }}</li>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else 
            <li>No comments found.</li>
        @endif
    </ul>

@endsection
