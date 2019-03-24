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
Affiche la vue welcome
*/
Route::get('/', function () {
    return view('welcome');
});

/*
Route pour l'authentification
Généré par make:authentification
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
Réservation avec l'id de l'user en paramètre
*/
Route::get('/user/{user}/booking/add', 'BookingController@add')->name('booking.add');
