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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clubs', 'ClubController@showAll')->name('clubs');
Route::get('/my-club', 'ClubController@showMyClub')->name('myClub');
Route::get('/games/{club_id?}', 'GameController@showAll')->name('games');
Route::post('/games/store', 'GameController@store')->name('storeGame');
