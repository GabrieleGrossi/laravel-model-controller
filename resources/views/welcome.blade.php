@extends('layouts.app')
@section('title', 'Welcome')
@section('main-content')
    <div class="card-container d-flex flex-wrap">
        @foreach($movies as $movie)
            <div class="card m-3" style="width: calc(100% / 5 - 2rem);">
                <div class="card-body">
                    <h2>Title: {{ $movie['title'] }}</h2>
                    <h3>Original title: {{ $movie['original_title'] }}</h3>
                    <p>Nationality: {{ $movie['nationality'] }}</p>
                    <p>Release date: {{ $movie['date'] }}</p>
                    <p>Vote: {{ $movie['vote'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection