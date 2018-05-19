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

Route::resource('portfolio','PortfolioController');
Route::resource('contactme','MessageController@create');

Route::get('/', function () {
    return view('welcome');
});


Route::post('contactme', ['as'=>'contactme.store', 'uses'=>'MessageController@store']);
Route::post('ajoutprojet', ['as'=>'portfolio.store', 'uses'=>'PortfolioController@store']);
Route::get('contactme', 'MessageController@create');
Route::get('projets','PortfolioController@showall');
Route::get('ajoutprojet','PortfolioController@create');

Auth::routes();

Route::resource('messages','MessageController');

Route::get('/home', 'HomeController@index')->name('home');
