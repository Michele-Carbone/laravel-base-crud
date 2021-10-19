<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.   //mostra la lista delle risorse
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.       //mostra il form per creare una nuova risorsa
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.       //Store salva la nuova risorsa in Strorage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();    //prendiamo tutti i dati dal form

        $comic = Comic::create($data);      // Creo una istanza e serve filleble
        return redirect()->route('comics.show', $comic);    // reinderizzo il post che voglio mostrare a show
    }

    /**
     * Display the specified resource.      //Mostra la risorsa specifica
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $comic = Comic::findOrFail($id);


        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.        //Mostra il form per editare la specifica risorsa
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.    //Modifica la specifica risorsa in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)  // Comic $comic usando il metodo update
    {
        //
        $data = $request->all();

        $comic->update($data);    // metodo update fa fill() e save() insieme //alternativo all uso di fill() e di save()
        return redirect()->route('comics.show',  $comic->id);
    }

    /**
     * Remove the specified resource from storage.  
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //primo opzione con $id all interno della funzione
        //$comic = Comic::findOrFail($id);

        //seconda opzione   con Comic $comic al posto dell $id nella funzione
        $comic->delete();   //metodo 

        //terza opzione     con $id all interno della funzione
        //Comic::destroy($id);

        return redirect()->route('home')->with('delete', $comic->title);    //with() ci da la possibilita di passare dei dati extra non come parametro ma come variabili di sessione    //sta dicendo fai una redirect con chiave 'delete' una variabile di sessione
    }
}
