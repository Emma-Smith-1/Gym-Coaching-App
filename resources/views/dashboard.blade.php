
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
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <h2 class="p-6 font-semibold text-xl text-gray-800 dark:text-gray-200 flex items-center justify-center">
                {{ __( 'Recent posts' ) }}
            </h2>
        </div>
    </div>
@endsection
