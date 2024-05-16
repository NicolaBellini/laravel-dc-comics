@extends('layout.main')

@section('content')

<div class="container_home">
  <div class="palette">
    @foreach ($comics as  $comic)
        <a href="{{route('comics.show', $comic)}}" class="color">
            <div class="text">
                <span>{{$comic->title}}</span>
            </div>
        </a>
    @endforeach
  </div>

</div>
@endsection
