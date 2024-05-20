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
          <th class="text-center">Azioni</th>

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
            <td class="w-25">

                    <form action="{{route('comics.destroy', $comic)}}" method="post" class="text-center w-100 "  onsubmit="return confirm('Sei sicuro di voler eliminare questo fumetto?')">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-50"><i class="fa-solid fa-trash"></i></button>
                    </form>
                    <div class="d-flex justify-content-center gap-4 align-content-center mt-3">
                        <a href="{{route('comics.edit',$comic)}}" class="text-black fs-3 "><i class="fa-solid fa-pencil"></i></a>
                        <a  href="{{route('comics.show',$comic)}}" class="text-black fs-3 "><i class="fa-solid fa-circle-info  "></i></a>

                    </div>

            </td>

        </tr>
        @endforeach

      </tbody>
    </table>
</div>


@endsection
