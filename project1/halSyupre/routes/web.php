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

Route::get('/', "UTopController@index");
Route::get('login', "ULoginController@index");
Route::get('logout', "ULoginController@logout");

Route::post('loginAcount', "ULoginController@getAcount");
Route::get('newAcount',"UNewAcount@index");
// Route::get('insertUser',"insertUser@insert");
Route::get('insertAcount',"UNewAcount@insert");
Route::post('insertAcount',"UNewAcount@insert");
Route::get('sarch',"USarchRestaurant@index");
Route::get('sarchText',"USarchRestaurant@freeWord");

Route::get('content',"UFoodContent@index");
Route::get('hotel',"UHotel@index");
Route::get('store/{storeName}',"UStore@index");
Route::get('storeInsert',"UStore@insert");
Route::get('getReserve', 'UStore@ajax');

Route::get('usercheck', 'UCheck@index');

//店舗画面
Route::get('SLogin',"SLogin@index");
Route::get('SLogout',"SLogin@logout");

Route::post('SLoginAuth',"SLogin@login");
Route::get('STop',"STop@index");
Route::get('SNew',"SInsert@index");
Route::post('SInsert',"SInsert@insert");
Route::get('ScuisineInsert',"ScuisineInsert@index");
Route::post('ScuisineInsert',"ScuisineInsert@insert");

Route::get('Scuisine',"Scuisine@index");
Route::post('ScuisineDelete',"Scuisine@delete");

Route::get('SCheck',"SCheck@index");
Route::post('CheckDelete',"SCheck@delete");
Route::post('CheckCheck',"SCheck@check");

Route::get('SComplet',"SComplet@index");
Route::post('CompletDelete',"SCheck@delete");

