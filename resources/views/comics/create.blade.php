@extends('layouts.main')

@section('title', 'Aggiungi fumetto')

@section('section-id', 'create-comic')

@section('content')
<!-- Nel form e' importante che il name coincida con quello che noi abbiamo scritto per le tabelle del DB -->
<!-- method="Post" perche' stiamo crando una pagina  in action inseriamo la rotta in store -->
<form method="POST" action="{{route('comics.store')}}">
    {{-- @csrf token serve a proteggere i dati che l utente inserisce // e' molto importanto inserirlo pke senza di esso non ti fa andare avanti --}}
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label fw-bold">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" required>
      <div class="form-text">Inserire il totolo completo</div>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label fw-bold">Descrizione</label>
      <textarea class="form-control" id="description" name="description" rows="5"></textarea>
      <div  class="form-text">Inserire la descrizione</div>
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label fw-bold">Anteprima</label>
        <input type="text" class="form-control" id="thumb" name="thumb" required>
        <div  class="form-text">Inserire l'anteprima</div>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label fw-bold">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price" required>
        <div  class="form-text">Inserire il prezzo</div>
    </div>
    <div class="mb-3">
        <label for="series" class="form-label fw-bold">Serie</label>
        <input type="text" class="form-control" id="series" name="series" required>
        <div  class="form-text">Inserire la serie</div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="sale_date" class="form-label fw-bold">Data di pubblicazione</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" required>
                <div  class="form-text">Inserire la data di pubblicazione</div>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="type" class="form-label fw-bold">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" required>
                <div  class="form-text">Inserire il tipo</div>
            </div>
        </div>
    </div>
    <div  class="d-flex align-items-center justify-content-between">
        <div>
            <!-- type="submit" serve per inviare // type="reset" serve per resettare i campi del form-->
            <button type="submit" class="btn btn-primary">Aggiungere</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
        
        <a href="{{ route('home')}}" class="btn btn-success">Torna Indietro</a>
    </div>
    
  </form>

@endsection