@extends('layout.main')

@section('content')

<h1 class="text-center">INSERISCI UN NUOVO FUMETTO</h1>
<form action="{{ route('comics.store') }}" method="POST" class="form-control">
    @csrf

    <div class="row mb-3">
        <div class="col">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Inserisci il titolo" >
        </div>

        <div class="col">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Inserisci il prezzo" >
        </div>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Inserisci la descrizione" ></textarea>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="series" class="form-label">Serie</label>
            <input type="text" name="series" class="form-control" id="series" placeholder="Inserisci la serie" >
        </div>

         <div class="col">
            <label for="series" class="form-label">immagine</label>
            <input type="text" name="img" class="form-control" id="series" placeholder="Inserisci l' url dell' immagine" >
        </div>

        <div class="col">
            <label for="sale_date" class="form-label">Data di vendita</label>
            <input type="date" name="sale_date" class="form-control" id="sale_date">
        </div>
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" name="type" class="form-control" id="type" placeholder="Inserisci il tipo" >
    </div>

    <div class="mb-3">
        <label for="artists" class="form-label">Artisti</label>
        <input type="text" name="artists" class="form-control" id="artists" placeholder="Inserisci gli artisti" >
    </div>

    <div class="mb-3">
        <label for="writers" class="form-label">Scrittori</label>
        <input type="text" name="writers" class="form-control" id="writers" placeholder="Inserisci gli scrittori" >
    </div>

    <button type="submit" class="btn btn-primary">Invia</button>
</form>


@endsection
