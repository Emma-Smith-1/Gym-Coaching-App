@extends('layouts.app')

@section('id', 'Coach information')

@section('content')
    <ul>
    <div class="py-4"> <!-- Increased padding for bigger posts -->
            <div class="p-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg mb-4"> <!-- Changed background color -->
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <li><a class="font-bold text-lg">Name: {{ $coach->name }}</a></li> <!-- Increased font size -->
                        <ul>
                            <li>Username:{{ $coach->username }}</li>
                            <li>Years coaching: {{ $coach->years_coaching}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </ul>
@endsection