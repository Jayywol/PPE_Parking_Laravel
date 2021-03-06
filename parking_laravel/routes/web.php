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

Route::resource('place', 'PlaceController');

/*
 * Affiche la vue welcome si l'user n'est pas connecté
 */
Route::get('/', 'IndexController@index')->name('login');

/*
 * Route pour l'authentification
 * Généré par make:authentification
 */
Auth::routes();

/*
 * Redirige l'utilisateur à la page d'accueil
 */
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/booking', 'HomeController@bookingRequest')->name('booking');

/*
 * Création d'une réservation en redirigeant au controller
 */
Route::get('/booking/create', 'BookingController@create')->name('booking.create');

Route::group([
   'middleware' => ['Admin']
], function () {

/*
 * Affiche la liste des réservations
 */
Route::get('/bookinglist', 'BookingController@listBook')->name('bookingList.all');

/*
 * Affiche la liste des places
 */
Route::get('/placelist', 'PlaceController@listPlace')->name('placeList.all');
});
