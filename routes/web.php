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

Route::get('/', 'JobController@index')->name('index');


Route::post('saveChangesText','TitleController@saveTitle')->name('saveChangeText');

Route::get('/admin', 'UserController@auth')->name('admin');


Route::get('createOrder','JobController@index')->name('createOrder');

Route::post('createJob', 'JobController@createJob')->name('createJob');
Route::post('createOrder', 'ClientController@createOrder')->name('createOrder');
Route::post('admin', 'UserController@auth')->name('admin');
Route::post('registr', 'UserController@registration')->name('registr');
Route::post('updateJob','JobController@updateJob')->name('updateJob');
Route::get('updateJob/{id}','JobController@updateView')->name('updateJobView');
Route::get('deleteJob/{id}','JobController@delete')->name('deleteJob');

Auth::routes();

Route::get('/home', 'HomeController@index');
