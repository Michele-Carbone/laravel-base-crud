@extends('layouts.main')

@section('title', 'Fumetto')
    
@section('section-id', 'comics')

@section('content')
<div class="container">
    
    <div  class="d-flex align-items-center justify-content-between">
        <h5><a href="{{ route('home')}}" class="btn btn-primary">Home</a></h5>
        <a href="{{ route('comics.create') }}" class="btn btn-success">Crea Fumetto</a>
    </div>


    <h1 class="card-title text-center text-primary">Lista Fumetti</h1>
    <div class="row d-flex justify-content-between">
                
        @forelse ($comics as $comic)
    
            <div class="card my-5" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <ul class="list-group list-group-flush fw-bold">
                    <li class="list-group-item">Titolo: {{ $comic->title }}</li>
                    <li class="list-group-item">Serie fumetto: {{ $comic->series }}</li>
                    <li class="list-group-item">Prezzo: ${{ $comic->price }}</li>
                    <li class="list-group-item"><a href="{{ route('comics.show', $comic->id)}}" class="btn btn-primary">Click</a></li>
                </ul>
            </div>
            
        @empty
            <h2>Non ho trovato nessuna corrispondenza</h2>
        @endforelse
            
        
        
    </div>
  </div>
@endsection