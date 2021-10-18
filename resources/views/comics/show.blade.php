
@extends('layouts.main')

@section('title', $comic->title)

@section('content')
    <div class="card-title">
        <h5><a href="{{route('comics.edit', $comic->id)}}" class="btn btn-danger">Modifica</a></td></h5>
        <h1 class="fw-bold my-3 text-center">{{ $comic->title }}</h1>
        <img src="{{ $comic->thumb }}" class="my-2 img-fluid" alt="...">
        <ul class="list-group list-group-flush fw-bold my-5">
            <li class="list-group-item">Titolo: {{ $comic->title }}</li>
            <li class="list-group-item">Serie fumetto: {{ $comic->series }}</li>
            <li class="list-group-item">Prezzo: ${{ $comic->price }}</li>
            <li class="list-group-item">Tipogia di fumotto: {{ $comic->type }}</li>
            <li class="list-group-item">Data di pubblicazione: {{ $comic->sale_date }}</li>
            <li class="list-group-item">Descrizione: {{ $comic->description }}</li>
        </ul>
    </div>
    <div>
        <a href="{{ route('comics.index', $comic->id)}}" class="btn btn-primary">Torna indietro</a>
    </div>
@endsection