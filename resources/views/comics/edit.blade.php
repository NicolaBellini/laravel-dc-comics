 @extends('layout.main')

@section('content')

<h1>Modifica il fumetto</h1>

<form action="{{ route('comics.update', $comic) }}" method="POST" class="form-control">
    @csrf
    @method('PATCH')

    <div class="row mb-3">
        <div class="col">
            <label for="title" class="form-label">Nuovo titolo</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $comic->title }}" required >
        </div>

        <div class="col">
            <label for="price" class="form-label">Nuovo prezzo</label>
            <input type="text" name="price" class="form-control" id="price" value="{{ $comic->price }}" required >
        </div>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Nuova descrizione</label>
        <textarea class="form-control" name="description" id="description" rows="3" required value="{{$comic->description}}" placeholder="{{$comic->description}}"></textarea>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="series" class="form-label">Serie</label>
            <input type="text" name="series" class="form-control" id="series" value="{{ $comic->series }}" required>
        </div>

        <div class="col">
            <label for="sale_date" class="form-label">Data di vendita</label>
            <input type="date" name="sale_date" class="form-control" id="sale_date" value="{{ $comic->sale_date }}" required>
        </div>
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" name="type" class="form-control" id="type" value="{{ $comic->type }}" required>
    </div>

    <div class="mb-3">
        <label for="artists" class="form-label">Artisti</label>
        <input type="text" name="artists" class="form-control" id="artists" value="{{ implode(', ', json_decode($comic->artists)) }}" required>
    </div>

    <div class="mb-3">
        <label for="writers" class="form-label">Scrittori</label>
        <input type="text" name="writers" class="form-control" id="writers" value="{{ implode(', ', json_decode($comic->writers)) }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Salva modifiche</button>
</form>

@endsection
