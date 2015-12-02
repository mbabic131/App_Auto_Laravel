<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('view', function() { //ako se zatraži stranica 'view' tada se poziva funkcija koja dohvaća stranicu iz view dijela s nazivom 'view'
//return view('view');
//});


Route::get('/', 'PagesController@view');
Route::get('view', 'PagesController@view');

Route::post('details', 'PagesController@show');

Route::get('podaci', 'PagesController@index');

Route::post('save', 'PagesController@store');

Route::get('update/{id}/edit', 'PagesController@edit');

Route::get('delete/{id}', 'PagesController@delete');

Route::post('izmjeni/{id}', 'PagesController@update');