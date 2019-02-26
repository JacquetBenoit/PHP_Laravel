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

// routes avec controller

Route::get('/accueil', 'PagesController@accueil');

Route::get('/listeProduits', 'PagesController@listeProduits');

Route::get('/panier', 'PagesController@panier');

Route::get('/ficheProduit/{id}', 'PagesController@ficheProduit');