@extends('layouts.layout')

@section('main')
    <div class="container">
        <ul>
            @foreach ($movies as $movie)
                <li>{{ $movie->vote }}</li>
            @endforeach
            
        </ul>
    </div>
@endsection