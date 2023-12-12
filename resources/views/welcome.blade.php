@extends('layouts.layout')

@section('main')

   @forelse($movies as $movie)
   <h1>{{ $movie->title }}</h1>
   @empty

   @endforelse
@endsection