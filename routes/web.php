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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('add','HocsinhController@create');
Route::post('add','HocsinhController@store');
Route::get('list','HocsinhController@index')->name('list');
Route::get('delete/{id}','HocsinhController@destroy')->name('destroy');
Route::get('edit/{id}','HocsinhController@edit')->name('edit');
Route::post('edit/{id}','HocsinhController@update')->name('update');*/
Route::get('add','NewsController@create')->name('add');
Route::post('add','NewsController@store');
Route::get('edit/{id}','NewsController@edit')->name('edit');
Route::post('edit/{id}','NewsController@update')->name('update');
Route::get('list','NewsController@index')->name('list');
Route::get('delete/{id}','NewsController@destroy')->name('destroy');
Route::get('index','NewsController@user')->name('user');
