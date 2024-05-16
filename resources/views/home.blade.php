@extends('layout.main')

@section('content')


 <section class="container_home d-flex flex-column justify-content-center align-item-start ps-5  hero">
    <h1>Nel catalogo sono presenti {{$comics}} fumetti</h1>
    <p>Explore the BOOLOMICS Universe</p>
    <a href="{{route('comics.index')}}" class="btn mb-4 ">Entra</a>
    <a href="{{route('comics.create')}}" class="btn">Crea un nuovo fumetto</a>

</section>

@endsection
