<?php

use App\Http\Controllers\UtilisateursController;

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

Route::get('/listeProduits/{check}', 'ProduitsController@listeProduits')->name('listeProduits');

Route::get('/panier', 'UtilisateursController@panier')->name('panier');

Route::get('/ficheProduit/{id}', 'ProduitsController@ficheProduit')->name('ficheProduit');

Route::get('/commandes', 'UtilisateursController@commande')->name('commandes');

Route::get('/coordonnees', 'UtilisateursController@coordonnees')->name('coordonnees');

Route::get('/moyens-paiement', 'UtilisateursController@moyensPaiement')->name('moyensPaiement');

Route::get('/mon-compte', 'UtilisateursController@monCompte')->name('monCompte');

Route::get('/creer-compte', 'UtilisateursController@creerCompte')->name('creerCompte');

Route::get('/infos', 'StatiquesController@infos')->name('infos');

route::post('/store-panier/{id}', 'produitsController@storePanier')->name('store-panier');

route::post('/delete-panier-article/{id}', 'produitsController@deletePanierItem')->name('delete-panier-item');

route::post('/delete-panier', 'produitsController@deletePanier')->name('delete-panier');

route::post('/commander', 'produitsController@commander')->name('commander');

route::post('/modifier-qte/{id}', 'produitsController@modifier_qte')->name('modifier-qte');

//Route::get('/listeProduits', 'ProduitsController@listeTest')->name('listeProduits');



/* ---------------------BACK OFFICE------------------------*/

Route::get('/gestions-produits', 'ProduitsController@gestionProduits')->name('gestionProduits');

Route::get('/gestions-promos', 'ProduitsController@gestionPromos')->name('gestionPromos');
Route::post('/ajouter-promos', 'ProduitsController@addPromos')->name('ajoutPromo');
Route::post('/details-promos', 'ProduitsController@detailsPromos')->name('gestionPromodetail');
Route::post('/assigner-promos', 'ProduitsController@assignPromos')->name('gestionPromoassign');
Route::post('/Suprimer-promos', 'ProduitsController@deletePromos')->name('deletePromo');
Route::post('/Suprimer-produit-promos', 'ProduitsController@deleteProduitPromo')->name('supprimerProduitDeLaPromo');

Route::get('/gestions-utilisateurs', 'UtilisateursController@gestionUtilisateurs')->name('gestionUtilisateurs');

Route::get('/gestions-commandes', 'UtilisateursController@gestionCommandes')->name('gestionCommandes');
Route::post('/gestions-commandes', 'UtilisateursController@gestionCommande')->name('gestionProduit');
Route::post('/gestions-commandes-s', 'UtilisateursController@deleteCommande')->name('deleteCommandes');
Route::post('/gestions-commandes-c', 'UtilisateursController@confirmCommande')->name('confirmCommandes');

Route::get('/ajout-produit', 'ProduitsController@ajoutProduit')->name('ajoutProduit');

Route::get('/ajout-utilisateur', 'UtilisateursController@ajoutUtilisateur')->name('ajoutUtilisateur');

route::post('/store', 'ProduitsController@store');

route::post('/store-utilisateur', 'UtilisateursController@store');

route::get('/gestions-produits/{id}/delete', 'ProduitsController@delete')->name('deleteProduit');

route::delete('/gestion-produits/{id}/delete', 'ProduitsController@destroy')->name('destroyProduit');

route::get('/gestions-utilisateurs/{id}/delete', 'UtilisateursController@delete')->name('deleteUtilisateur');

route::delete('/gestion-utilisateurs/{id}/delete', 'UtilisateursController@destroy')->name('destroyUtilisateur');

route::get('/edition-produit/{id}', 'ProduitsController@update')->name('updateProduit');

route::get('/edition-utilisateur/{id}', 'UtilisateursController@update')->name('updateUtilisateur');