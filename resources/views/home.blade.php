
@extends('layouts.main')

@section('title', 'Home')

@section('section-id', 'home')

@section('content')

    
    <h1 class="text-center fw-bold"><a href="{{ route('comics.index') }}">COLLECTION COMICS</a></h1>  
    

        <table class="table table-dark table-striped">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="text-center fw-bold my-5 text-primary">Elenco Fumetti</h2>
            <a href="{{ route('comics.create') }}" class="btn btn-success">Crea Fumetto</a>
            </div>
            
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                <tr>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->type}}</td>
                    <td>{{$comic->price}}</td>
                    
                    <td class="d-flex justify-content-end">
                        <!-- a usa un metodo GET-->
                        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-warning me-2">Go</a>
                        <!-- Edit ha bisogno di un parametro, di conseguenza gli passiamo id pke sara' il singolo comic che andremo a modificare //siamo all interno di forElse -->
                        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-success">Edit</a>
                        <!-- Dato che destory non ha un pagina dedicata per poter interagire dobbiamo usare il form con il method="POST" in piu all interno dobbiamo aggiungere il method('DELETE')-->
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ms-2">Elimina</button>
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="5" class="text-center">Nessun risultato corrispondente</td>
                @endforelse
           
            </tbody>
        </table>


@endsection 