<?php

use Illuminate\Support\Facades\Auth;
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
// Route::get('/', 'IndexController@showindex')->name('index');
// Route::get('/home', 'IndexController@showindex')->name('index');
// Route::get('/index', 'IndexController@showindex')->name('index');

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home/read', 'UserController@show')->name('read');
Route::get('/home/users', 'UserController@index')->name('users');
Route::get('/home/edit', 'UserController@edit')->name('edit');
Route::get('/home/delete', 'UserController@destroy')->name('destroy');
//Route::resource('users', 'UserController');
Route::get('/home/update', 'UserController@update')->name('update');
Route::post('/home/update', 'UserController@update')->name('updated');

//Route::post('/home/annonceUpdate', 'AnnonceController@store')->name('updated');

Route::get('/home/editUpdate', 'AnnonceController@create')->name('create');
Route::post('/home/editUpdate', 'AnnonceController@create')->name('create');

Route::get('/home/annonceCreate', 'AnnonceController@store')->name('annonceCreate');
Route::post('/home/annonceCreate', 'AnnonceController@store')->name('annonceCreate');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
//Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');