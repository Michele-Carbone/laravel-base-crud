<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

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
        //Validazione
        $request->validate(
            [
                /*
            la validazione dei campi all interno del form
            possiamo inserire una stringa o un array dalla documentazione possiamo inserire le varie validazioni in base a quello che ci serve, se una stringa, un numero, ecc...
            'title'=>'require|unique:posts|max:255';    i campi all interno del form hanno come attributo name='title' che e' lo stesso che noi stiamo chiamando per fare la validazione, ovviamente non e' necessario inserire tutti i campi del form nella validazione
            */
                //se non vengono tutte rispettate non si puo andare avanti
                'title' => 'required|string|unique:comics|min:3|max:255',
                'series' => 'required|string|unique:comics|min:5|max:255',
                'price' => 'required|numeric|min:1|max:1000',
                'type' => 'required|string|min:5|max:255',

            ],
            //nel secondo array posso specificare la regola di validazione per ogni singolo campo per tutti gli altri campi 
            [
                'required' => "You must fill the :attribute field",
                'title.min' => 'Il minimo di caratteri da inseririre è :min'
            ]
        );

        $data = $request->all();    //prendiamo tutti i dati dal form

        $comic = Comic::create($data);      // Creo una istanza e serve filleble
        return redirect()->route('comics.show', $comic->id);    // reinderizzo il post che voglio mostrare a show
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
        //Validazione
        $request->validate(
            [   /*se volessimo modificare solo uno dei campi del form non possiamo salvare pke la proprieta unique:comics ci impedisce di inserire gli stessi dati che sono gia esistenti
                quindi si puo usare un Rule
                - prima cosa dobbiamo importarlo con  use Illuminate\Validation\Rule;
                -sostituire unique:comics con Rule::unique() che non ci risolve il problema pke stiamo dicendo la stessa cosa
                -specifichiamo cosa vogliamo cambiare
                -aggiungiamo ignore e gli passiamo id cosi ignora i dati precedenti
                -Rule::unique('comic')->ignore($comic->id)
                */
                'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id), 'min:3', 'max:255'],
                'series' => ['required', 'string', Rule::unique('comics')->ignore($comic->id), 'min:4', 'max:255'],
                'price' => 'required|numeric|min:1|max:1000',
                'type' => 'required|string|min:4|max:255',

            ],
            [
                'required' => "You must fill the :attribute field",
                'title.min' => 'Il minimo di caratteri da inseririre è :min',
                'series.min' => 'Il minimo di caratteri da inseririre è :min',
                'price' => 'Si accettano soltanto numeri',
                'type.min' => 'Il minimo di caratteri da inseririre è :min'
            ]
        );
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
