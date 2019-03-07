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
Route::get('/listeProduits/trie/{type}', 'ProduitsController@listeProduitsTrie')->name('listeProduitsTrie');

Route::get('/panier', 'UtilisateursController@panier')->name('panier');

Route::get('/ficheProduit/{id}', 'ProduitsController@ficheProduit')->name('ficheProduit');

Route::get('/commandes', 'UtilisateursController@commande')->name('commandes');

Route::get('/coordonnees', 'UtilisateursController@coordonnees')->name('coordonnees');

Route::get('/moyens-paiement', 'UtilisateursController@moyensPaiement')->name('moyensPaiement');

Route::get('/mon-compte', 'UtilisateursController@monCompte')->name('monCompte');

Route::get('/creer-compte', 'UtilisateursController@creerCompte')->name('creerCompte');

Route::get('/infos', 'StatiquesController@infos')->name('infos');



/* ---------------------BACK OFFICE------------------------*/

/* -- GESTION DES PRODUITS --*/
Route::get('/gestions-produits', 'ProduitsController@gestionProduits')->name('gestionProduits');

/* -- Ajouter un produit --*/
Route::get('/gestions-produits/ajouter-produit', 'ProduitsController@ajouterProduit')->name('gestionProduitsAjouter');
Route::post('/gestions-produits/', 'ProduitsController@storeAjoutProduit');

/* -- Modifier un produit --*/
Route::get('/gestions-produits/modifier-produit/{id}', 'ProduitsController@modifierProduit')->name('gestionProduitsModifier');
Route::post('/gestions-produits/', 'ProduitsController@updateModifierProduit');

/* -- Modifier un produit --*/
Route::get('/gestions-produits/supprimer-produit/{id}', 'ProduitsController@deleteProduit')->name('gestionProduitsDelete');
Route::delete('/gestions-produits/', 'ProduitsController@deleteProduit');


Route::get('/gestions-promos', 'ProduitsController@gestionPromos')->name('gestionPromos');

Route::get('/gestions-utilisateurs', 'UtilisateursController@gestionUtilisateurs')->name('gestionUtilisateurs');

Route::get('/gestions-commandes', 'UtilisateursController@gestionCommandes')->name('gestionCommandes');