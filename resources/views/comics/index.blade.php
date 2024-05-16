@extends('layout.main')

@section('content')

<h1>comics list</h1>

@foreach ($comics_list as $comic)

<h1>{{$comic->title}}</h1>

@endforeach

@endsection
