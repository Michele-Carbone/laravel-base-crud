<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // campi che devono essere considerati dalla funzione fill (e' necessario specificare tutti i campi) senza questa proprieta' ci dice di aggiungere un _token e si spacca
    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'];
}
