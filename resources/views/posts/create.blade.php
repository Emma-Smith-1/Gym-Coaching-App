@extends('layouts.app')

@section('title', 'Create Post')

@section('content')

    <h1 name="header">
        <h2 class="p-6 font-semibold text-xl text-gray-800 dark:text-gray-200 flex items-center justify-center">
            {{ __('Create a Post') }}
        </h2>
    </h1>

    <div class="py-4"> <!-- Increased padding for bigger posts -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg"> <!-- Changed background color -->
                <div class="p-6 text-gray-900 dark:text-gray-100 flex items-center justify-center">
                    <form method="POST" action="{{ route('posts.store') }}">

                        @csrf

                        <p>Title: <input type="text" name="title" class="w-full px-3 py-2 border rounded-lg text-gray-900 border-gray-300 focus:outline-none focus:border-blue-500"></p>
                        <p>Content: <textarea name="content" class="w-full px-3 py-2 border rounded-lg text-gray-900 border-gray-300 focus:outline-none focus:border-blue-500" rows="5"></textarea></p>
                        <p>Media: <input type="text" name="media" class="w-full px-3 py-2 border rounded-lg text-gray-900 border-gray-300 focus:outline-none focus:border-blue-500"></p>

                        <div class="flex flex-wrap">
                            <p>
                                Status:
                                <select name="status" class="w-full px-3 py-2 border rounded-lg text-gray-900 border-gray-300 focus:outline-none focus:border-blue-500">
                                    <option value="pending">Pending</option>
                                    <option value="approved">Approved</option>
                                    <option value="rejected">Rejected</option>
                                </select>
                            </p>
                            <p>
                                Visibility:
                                <select name="visibility" class="w-full px-3 py-2 border rounded-lg text-gray-900 border-gray-300 focus:outline-none focus:border-blue-500">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                    <option value="draft">Draft</option>
                                </select>
                            </p>
                            <p>
                                Category:
                                    <select name="category" class="w-full px-3 py-2 border rounded-lg text-gray-900 border-gray-300 focus:outline-none focus:border-blue-500">
                                    <option value="General">General</option>
                                    <option value="Arm Workouts">Arm Workouts</option>
                                    <option value="Leg Workouts">Leg Workouts</option>
                                    <option value="HIIT">HIIT</option>
                                </select>
                            </p>
                        </div>
                        <div class="flex flex-wrap">
                            <div class="bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg mb-4"> <!-- Changed background color -->
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    <input type="submit" value="Submit">
                                </div>
                            </div>

                            <div class="bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg mb-4"> <!-- Changed background color -->
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    <a href="{{ route('posts') }}">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> 
            </div> 
        </div> 
    </div> 
@endsection
