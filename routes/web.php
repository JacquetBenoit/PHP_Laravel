<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listeProduits', function () {
    return view('listeDesProduits');
});

Route::get('/panier', function () {
    return view('panier');
});

Route::get('/ficheProduit/{id}', function ($id) {
    return view('ficheProduit', ['id' => $id]);
});

Route::get('/accueil', function () {
    return view('accueil');
});