@extends('layout.main')

@section('content')

<div class="container_home">
  <div class="palette d-flex ">
    @foreach ($comics as  $comic)
        @if(!empty($comic->img))
            <div class="color d-flex flex-column" style="background-image: url('{{ $comic->img }}');background-size: cover; background-position: center;"">
        @else
            <div class="color d-flex flex-column" style="background-image: url('https://images.unsplash.com/photo-1620336655055-088d06e36bf0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8Y29taWNzfGVufDB8fDB8fHww');background-size: cover; background-position: center;">
        @endif
            <div class="text">
                <h5 class="text-wrap">{{$comic->title}}</h5>
                <a  href="{{route('comics.show',$comic)}}">Dettagli</a>
                <a  href="{{route('comics.edit',$comic)}}">modifica</a>
                {{-- <a class="" href="{{route('comics.edit',$comic)}}">modifica</a> --}}
                {{-- delete --}}
                <form action=""></form>

            </div>

        </div>
        @endforeach
  </div>

</div>
@endsection
