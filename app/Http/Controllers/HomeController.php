<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        /*
        $title = 'Fumetti';
        return view('home', compact('title'));
        */
        $comics = Comic::all();
        return view('home', compact('comics'));
    }
}
