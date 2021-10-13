<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

/*Altro modo di scrivere le route in maniera piu veloce con il resource()

Route::get('/comics', 'ComicController@index')->name('comics.index');

Seguendo tutte le convenzioni stabilite da laravel possiamo fargli gestire a lui 
tutte le nostre route cambiando la leggermente la terminologia per dirglielo.
in piu ci va a creare tutte le route del CRUD
*/
Route::resource('comics', 'ComicController');
/*
Route::get('/comics/{id}', 'ComicController@show')->name('comics.show');
*/
