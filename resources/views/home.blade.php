@extends('layout.main')

@section('content')


<div class="container_home">
  <div class="palette">
    @foreach ($comics as  $comic)
        <div class="color">
            <div class="text">
                <span>{{$comic->title}}</span>
            </div>
        </div>
    @endforeach
  </div>

</div>
@endsection
