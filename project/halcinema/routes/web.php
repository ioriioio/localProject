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
Route::get('login',"LoginController@index");
Route::get('logout','Logincontroller@logout');
Route::post('goTop','LoginController@login');
Route::get('admin',"MAdminController@index");
Route::match(['get', 'post'],'upmovie','MMovieContloller@index');
Route::post('upmovieConfirm','MMovieContloller@confirm');
Route::post('upmovieInsert','MMovieContloller@Insert');
Route::match(['get', 'post'],'schedule','MMovieScheduleController@index');
Route::match(['get', 'post'],'scheduleConfirm','MMovieScheduleController@confirm');
Route::match(['get', 'post'],'board','MBoardController@index');
Route::match(['get', 'post'],'communityDetail/{id}','MBoardController@detail');
Route::match(['get', 'post'],'communityDetail/communityCommentDelete/{id}','MBoardController@commentDelete');
Route::match(['get', 'post'],'communityUpload','MBoardController@insertTo');
Route::match(['get', 'post'],'communityUploadConfirm','MBoardController@insertConfirm');
Route::match(['get', 'post'],'communityUploadInsert','MBoardController@insert');
Route::match(['get', 'post'],'communityDelete/{id}','MBoardController@delete');
Route::match(['get', 'post'],'userlist','MUserControllers@index');
Route::match(['get', 'post'],'user/{id}','MUserControllers@user');
Route::match(['get', 'post'],'user/userCommentDelete/{id}','MUserControllers@delete');
Route::match(['get', 'post'],'Ucommunity','UbordsController@index');
Route::match(['get', 'post'],'communityBoard/{id}','UbordsController@detail');
Route::match(['get', 'post'],'communityInsert/{id}','UbordsController@insert');
Route::match(['get', 'post'],'calendar','UScheduleController@index');
Route::match(['get', 'post'],'calendarAjax','UScheduleController@getAjax');
Route::match(['get', 'post'],'register','URegisterController@index');
