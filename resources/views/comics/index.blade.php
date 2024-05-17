@extends('layout.main')

@section('content')

<div class="container_home">
  <div class="palette d-flex ">
    @foreach ($comics as  $comic)
        <div  class="color d-flex flex-column">
                <h5>{{$comic->title}}</h5>
                <a class="" href="{{route('comics.show',$comic)}}">Dettagli</a>
                <a class="" href="{{route('comics.edit',$comic)}}">modifica</a>
                {{-- <a class="" href="{{route('comics.edit',$comic)}}">modifica</a> --}}
                {{-- delete --}}
                <form action=""></form>

        </div>
        @endforeach
  </div>

</div>
@endsection
