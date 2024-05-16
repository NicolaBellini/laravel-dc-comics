@extends('layout.main')

@section('content')

<div class="container_cards">

    <div class="cards d-flex flex-wrap">
@foreach ($comics_list as $comic)
    <div class="card red">
        <h4 class="tip">{{$comic->title}}</h4>
        <h4 class="second-text">{{$comic->type}}</h4>
        <h4 class="second-text">{{$comic->price}}</h4>
        <a href=""></a>
    </div>

    @endforeach
</div>
</div>
@endsection
