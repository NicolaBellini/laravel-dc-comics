@extends('layout.main')

@section('content')

<div class="container-fluid d-flex justify-content-center" style="background-image: url('https://images.unsplash.com/photo-1516641051054-9df6a1aad654?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGNvbWljc3xlbnwwfHwwfHx8MA%3D%3D'); background-size:cover">

    <div class="card m-5 w-75 ">
        <div class="tools">
            <div class="circle">
                <a href="{{route('comics.index')}}" class="red box"></a>
            </div>

        </div>
        <div class="card__content d-flex flex-column justify-content-between h-75 p-5 ">
            {{-- @dump($comic->artists) --}}
            <h1>{{$comic->title}}</h1>
            <h5>{{$comic->description}}</h5>

            <div class="d-flex justify-content-around w-100 mt-2 " style="height: 300px">
                <div class="w-75">

                    <h4>{{$comic->price}}</h4>
                    <h5>{{$comic->series}}</h5>
                    <h5>{{$comic->sale_date}}</h5>
                    <h4>{{$comic->type}}</h4>
                    <h6>Artists: {{ implode(', ', json_decode($comic->artists)) }}</h6>
                    <h6>Writers: {{ implode(', ', json_decode($comic->writers)) }}</h6>
                    <a href="{{route('comics.index')}}" class="btn">Torna</a>
                    <a href="{{route('list')}}" class="btn">Torna alla lista</a>


                </div>
                <div class="w-25 ">
                    <img src="{{$comic->img}}" alt="{{$comic->title}}" style="height: 90%">
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
