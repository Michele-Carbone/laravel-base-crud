
@extends('layouts.main')

@section('title', $comic->title)

@section('content')
<div class="text-center fw-bold">
    @if (session('delete'))
    <div class="alert alert-success " role="alert">
        {{ session('delete') }} Eliminata con successo
    </div>
        
    @endif
    
</div>
    <div class="card-title">
        <h5><a href="{{route('comics.edit', $comic->id)}}" class="btn btn-success">Modifica</a></td></h5>
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
    <div class="d-flex justify-content-center">
        <a href="{{ route('comics.index', $comic->id)}}" class="btn btn-primary">Torna indietro</a>
        <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="delete-form" data-title="{{ $comic->title}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger ms-2">Elimina</button>
        </form>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('js/delete_confirmation.js') }}">
    /* dato che si assomigliano i due script usiamo quello con il forEach pke con esso ci prendiamo lo stesso il singolo elemento (cambiano id in classe e aggiungendo il data in questa pagina)
        //intercettare un evento    (evento submit del form)
        //individuare l elemento che fa scattare l evento   (submit del form)
        //bloccare il comportamento naturale
        //chiedere all utente 
        //agire di conseguenza 

        const deleteFormElement = document.getElementById('delete-form');
        deleteFormElement.addEventListener('submit', function (event) {         //(event) oppure (e) e' l evento del submit
            event.preventDefault();
            /*
            Le tre tipologie
            window.alert();   blocca l esecuzione e fino a quendo l utente non clicca su ok non va avanti
            window.prompt();  ci da la possibilita di scrivere e riceve un input da parte dell utente
            window.comfirm('Sei Sicuro?');   Prendere come parametro una stringa e ci restituisce un booleano
            //
            const confirm = window.confirm('Sei Sicuro di voler eliminare questo {{ $comic->title }} fumetto?');    //possiamo passare anche dei dati tramite php

            if(confirm) this.submit();
        })
    */
    </script>
@endsection

