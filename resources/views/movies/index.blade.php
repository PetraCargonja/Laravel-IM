@extends('layout.app')

@section('content')
    <ul>
        @foreach ($movies as $movie)
            <li>{{!! $movie !!}}</li>
        @endforeach
    </ul>
    Random broj ovo requesta je: @rand
@endsection