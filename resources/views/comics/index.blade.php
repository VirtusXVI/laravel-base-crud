@extends('layouts.app')

@section('main_content')
    <h1>Comics</h1>
    @foreach ($comics as $comic)
        <div>
            <img src="{{ $comic->thumb }}" alt="comic image">
            <div>
                Nome:{{ $comic->title }}
                <br>
                Descrizione:{{ $comic->description }}
                <br>
                Prezzo:{{ $comic->price }}
                <br>
                Data: {{ $comic->sale_date }}
                <br>
                Tipo:{{ $comic->type }}
            </div>
        </div>
        <br>
    @endforeach
@endsection