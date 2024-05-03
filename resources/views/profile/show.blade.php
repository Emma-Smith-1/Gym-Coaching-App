@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>

                    <div class="card-body">
                        <p>Name: {{ $profile->name }}</p>
                        <p>Email: {{ $profile->email }}</p>
                        <!-- Add more profile information fields as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
