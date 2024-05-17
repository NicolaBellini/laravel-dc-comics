@extends('layout.main')

@section('content')

<div class="container d-flex justify-content-center">

    <div class="card m-5">
        <div class="tools">
            <div class="circle">
                <a href="{{route('comics.index')}}" class="red box"></a>
            </div>

        </div>
        <div class="card__content d-flex flex-column justify-content-between h-75 p-5 ">
            {{-- @dump($comic->artists) --}}
            <h1>{{$comic->title}}</h1>
            <h5>{{$comic->description}}</h5>
            <h4>{{$comic->price}}</h4>
            <h5>{{$comic->series}}</h5>
            <h5>{{$comic->sale_date}}</h5>
            <h4>{{$comic->type}}</h4>
            <h6>Artists: {{ implode(', ', json_decode($comic->artists)) }}</h6>
            <h6>Writers: {{ implode(', ', json_decode($comic->writers)) }}</h6>

            <a href="{{route('comics.index')}}" class="btn">Torna</a>
        </div>
    </div>
</div>

@endsection
