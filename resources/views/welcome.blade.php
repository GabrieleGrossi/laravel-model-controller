@extends('layouts.app')
@section('title', 'Welcome')
@section('main-content')
    <div class="card-container d-flex flex-wrap">
        @foreach($movies as $movie)
            <div class="card m-3" style="width: calc(100% / 5 - 2rem);">
                <div class="card-body">
                    <h2>Titolo: {{ $movie['title'] }}</h2>
                    <h3>Titolo originale: {{ $movie['original_title'] }}</h3>
                    <p>Nazionalità: {{ $movie['nationality'] }}</p>
                    <p>Data di rilascio: {{ $movie['date'] }}</p>
                    <p>Voto: {{ $movie['vote'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection