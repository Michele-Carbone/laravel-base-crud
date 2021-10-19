<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // campi che devono essere considerati dalla funzione fill (e' necessario specificare tutti i campi) senza questa proprieta' ci dice di aggiungere un _token e si spacca
    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'];



    public function getCreateAt()
    {
        return Carbon::create($this->created_at)->format('d-m-y');
    }
    public function getUpdateAt()
    {
        return Carbon::create($this->update_at)->format('d-m-y');
    }
}
