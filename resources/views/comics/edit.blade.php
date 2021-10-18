@extends('layouts.main')

@section('title', 'Modifica fumetto')

@section('section-id', 'edit-comic')

@section('content')
<div>
    <h1 class="text-center fw-bold text-primary">Modifica Fumetto</h1>
</div>

<!-- method="Post" stiamo modificando dei dati gia' salvati,  in action inseriamo la rotta update + il secondo parametro id -->
<form method="POST" action="{{route('comics.update', $comic->id) }}">
    <!-- method="Post" esiste gia' ma update accetta solo i metodi 'PUT' o 'PATCH' per questo aggiungiamo un altro metodo sotto  -->
   @method('PATCH')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label fw-bold">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" required value="{{ $comic->title }}">{{-- per non riscrivere a mano tutte le informazioni che vogliamo modificare pke ci interessa aggiornare solo una piccola parte, per farlo andiamo a inserire il value con il corrispettivo name Es value="{{ $comic->title }}" in questo modo riprendiamo tutti i dati appartenete a quell id --}}
      <div class="form-text">Inserire il totolo completo</div>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label fw-bold">Descrizione</label>
      {{-- la description non ha un imput per inserire il value quindi lo inseriamo nel tag textarea in questo modo {{!! $comic->description !!}} (non si vedono i tag HTML al suo interno), se gli volessimo nastrondere i tag HTML che ci sono all interno del DB allora bisogna scriverlo in questo modo {{ $comic->description }} --}}
      <textarea class="form-control" id="description" name="description" rows="5">{{ $comic->description }}</textarea>
      <div  class="form-text">Inserire la descrizione</div>
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label fw-bold">Anteprima</label>
        <input type="text" class="form-control" id="thumb" name="thumb" required value="{{ $comic->thumb }}">
        <div  class="form-text">Inserire l'anteprima</div>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label fw-bold">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price" required value="{{ $comic->price }}">
        <div  class="form-text">Inserire il prezzo</div>
    </div>
    <div class="mb-3">
        <label for="series" class="form-label fw-bold">Serie</label>
        <input type="text" class="form-control" id="series" name="series" required value="{{ $comic->series }}">
        <div  class="form-text">Inserire la serie</div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="sale_date" class="form-label fw-bold">Data di pubblicazione</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" required value="{{ $comic->sale_date }}">
                <div  class="form-text">Inserire la data di pubblicazione</div>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="type" class="form-label fw-bold">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" required value="{{ $comic->type }}">
                <div  class="form-text">Inserire il tipo</div>
            </div>
        </div>
    </div>
    <div  class="d-flex align-items-center justify-content-between">
        <div>
            <!-- type="submit" serve per inviare // type="reset" serve per resettare i campi del form-->
            <button type="submit" class="btn btn-primary">Modifica</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
        <!-- url()->previous() Ci (stampa l ultimo url) permette di tornare indietro a quello che stavamo facendo prima di accedere in questa pagina // scrivere una route specifica non ci permette di farlo ma ci limita in quello che noi imponiamo-->
        <a href="{{ url()->previous() }}" class="btn btn-success">Torna Indietro</a>
    </div>
    
  </form>

@endsection