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
    return view('welcome');
});
//Clients

Route::prefix('clients')->group(function() {
     //create
  Route::get('create','App\HTTp\Controllers\ClientController@create')->name('client.create');
  Route::post('store','App\HTTp\Controllers\ClientController@store')->name('client.store');
    //edit
    Route::get('edit/{client}','App\HTTp\Controllers\ClientController@edit')->name('client.edit');
    Route::post('update/{client}','App\HTTp\Controllers\ClientController@update')->name('client.update');
    //index
  Route::get('','App\HTTp\Controllers\ClientController@index')->name('client.index');
  //delete
  Route::post('destroy/{client}','App\HTTp\Controllers\ClientController@destroy')->name('client.destroy');
  //show
  Route::get('show/{client}','App\HTTp\Controllers\ClientController@show')->name('client.show');

});

//Companies
Route::get('/', function () {
    return view('welcome');
});
Route::prefix('companies')->group(function() {
    //index
  Route::get('','App\HTTp\Controllers\CompanyController@index')->name('company.index');
  //edit
  Route::get('edit/{company}','App\HTTp\Controllers\CompanyController@edit')->name('company.edit');
  Route::post('update/{company}','App\HTTp\Controllers\ClientController@update')->name('company.update');
  //create
  Route::get('create','App\HTTp\Controllers\CompanyController@create')->name('company.create');
  Route::post('store','App\HTTp\Controllers\CompanyController@store')->name('company.store');
  //delete
  Route::post('destroy/{company}','App\HTTp\Controllers\ClientController@destroy')->name('company.destroy');
  //show
  Route::get('show/{company}','App\HTTp\Controllers\ClientController@show')->name('company.show');
});
