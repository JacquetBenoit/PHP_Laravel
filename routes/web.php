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

// Route::get('/', function () {
//     return view('welcome');
// });

// routes avec controller

Route::get('/', 'StatiquesController@accueil')->name('accueil');

Route::get('/listeProduits', 'ProduitsController@listeProduits')->name('listeProduits');

Route::get('/panier', 'UtilisateursController@panier')->name('panier');

Route::get('/ficheProduit/{id}', 'ProduitsController@ficheProduit')->name('ficheProduit');

Route::get('/commandes', 'UtilisateursController@commande')->name('commandes');

Route::get('/coordonnees', 'UtilisateursController@coordonnees')->name('coordonnees');

Route::get('/moyens-paiement', 'UtilisateursController@moyensPaiement')->name('moyensPaiement');

Route::get('/mon-compte', 'UtilisateursController@monCompte')->name('monCompte');

Route::get('/creer-compte', 'UtilisateursController@creerCompte')->name('creerCompte');

Route::get('/infos', 'StatiquesController@infos')->name('infos');



/* ---------------------BACK OFFICE------------------------*/

Route::get('/gestions-produits', 'ProduitsController@gestionProduits')->name('gestionProduits');

Route::get('/gestions-promos', 'ProduitsController@gestionPromos')->name('gestionPromos');

Route::get('/gestions-utilisateurs', 'UtilisateursController@gestionUtilisateurs')->name('gestionUtilisateurs');

Route::get('/gestions-commandes', 'UtilisateursController@gestionCommandes')->name('gestionCommandes');