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

Route::get('/panier', 'PanierController@panier')->name('panier');

Route::get('/ficheProduit/{id}', 'ProduitsController@ficheProduit')->name('ficheProduit');

Route::get('/commandes', 'UtilisateursController@commande')->name('commandes');

Route::get('/coordonnees', 'UtilisateursController@coordonnees')->name('coordonnees');

Route::get('/moyens-paiement', 'UtilisateursController@moyensPaiement')->name('moyensPaiement');

Route::get('/mon-compte', 'UtilisateursController@monCompte')->name('monCompte');
Route::post('/mon-compte-edit', 'UtilisateursController@edit')->name('editCompte');

Route::get('/creer-compte', 'UtilisateursController@creerCompte')->name('creerCompte');

Route::get('/infos', 'StatiquesController@infos')->name('infos');

route::post('/store-panier/{id}', 'PanierController@storePanier')->name('store-panier');

route::post('/delete-panier-article/{id}', 'PanierController@deletePanierItem')->name('delete-panier-item');

route::post('/delete-panier', 'PanierController@deletePanier')->name('delete-panier');

route::post('/commander', 'PanierController@commander')->name('commander');

route::post('/modifier-qte/{id}', 'PanierController@modifier_qte')->name('modifier-qte');

//Route::get('/listeProduits', 'ProduitsController@listeTest')->name('listeProduits');



/* ---------------------BACK OFFICE------------------------*/

Route::get('/gestions-produits', 'ProduitAdminController@gestionProduits')->name('gestionProduits');

Route::get('/gestions-promos', 'PromoAdminController@gestionPromos')->name('gestionPromos');
Route::post('/ajouter-promos', 'PromoAdminController@addPromos')->name('ajoutPromo');
Route::post('/details-promos', 'PromoAdminController@detailsPromos')->name('gestionPromodetail');
Route::post('/assigner-promos', 'PromoAdminController@assignPromos')->name('gestionPromoassign');
Route::post('/Suprimer-promos', 'PromoAdminController@deletePromos')->name('deletePromo');
Route::post('/Suprimer-produit-promos', 'PromoAdminController@deleteProduitPromo')->name('supprimerProduitDeLaPromo');

Route::get('/gestions-utilisateurs', 'UtilisateursAdminController@gestionUtilisateurs')->name('gestionUtilisateurs');

Route::get('/gestions-commandes', 'CommandesAdminController@gestionCommandes')->name('gestionCommandes');
Route::post('/gestions-commandes', 'CommandesAdminController@gestionCommande')->name('gestionProduit');
Route::post('/gestions-commandes-s', 'CommandesAdminController@deleteCommande')->name('deleteCommandes');
Route::post('/gestions-commandes-c', 'CommandesAdminController@confirmCommande')->name('confirmCommandes');

Route::get('/ajout-produit', 'ProduitAdminController@ajoutProduit')->name('ajoutProduit');

Route::get('/ajout-utilisateur', 'UtilisateursAdminController@ajoutUtilisateur')->name('ajoutUtilisateur');

route::post('/store', 'ProduitAdminController@store');

route::post('/store-utilisateur', 'UtilisateursAdminController@store');

route::get('/gestions-produits/{id}/delete', 'ProduitAdminController@delete')->name('deleteProduit');

route::delete('/gestion-produits/{id}/delete', 'ProduitAdminController@destroy')->name('destroyProduit');

route::get('/gestions-utilisateurs/{id}/delete', 'UtilisateursAdminController@delete')->name('deleteUtilisateur');

route::delete('/gestion-utilisateurs/{id}/delete', 'UtilisateursAdminController@destroy')->name('destroyUtilisateur');

route::get('/edition-produit/{id}', 'ProduitAdminController@update')->name('updateProduit');

route::get('/edition-utilisateur/{id}', 'UtilisateursAdminController@update')->name('updateUtilisateur');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
