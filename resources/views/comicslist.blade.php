@extends('layout.main')

@section('content')

<div class="container">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">titolo</th>
          <th scope="col">prezzo</th>
          <th scope="col">immagine</th>
          <th scope="col">data di uscita</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{$comic->title}}</th>
            <td>{{$comic->price}}</td>
            <td class="d-flex justify-content-center">
                <a href="{{ route('comics.show', $comic) }}">
                    <img src="{{ $comic->img }}" alt="{{ $comic->title }}" style="height: 100px">
                </a>
            </td>
            <td>{{$comic->sale_date}}</td>
        </tr>
        @endforeach

      </tbody>
    </table>
</div>


@endsection
