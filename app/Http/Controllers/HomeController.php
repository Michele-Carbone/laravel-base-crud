<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {

        $title = 'Fumetti';
        return view('home', compact('title'));
    }
}
