<?php

/*
|--------------------------------------------------------------------------
| Web Routes номер два и два
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/',['uses'=>'MainController@getIndex','as'=>'home']);
Route::get('news', ['uses' => 'MainController@newss', 'as' => 'newss']);



Route::get('{tovar}', ['uses' => 'MainController@category', 'as' => 'page']);
Route::get('news/{page}', ['uses' => 'MainController@news', 'as' => 'news']);
<<<<<<< HEAD
Route::get('{catid}/{tovarid}', ['uses' => 'MainController@tovar', 'as' => 'tovar']);//нихрена не заливается2
=======
Route::get('{catid}/{tovarid}', ['uses' => 'MainController@tovar', 'as' => 'tovar']);//нихрена не заливается
>>>>>>> 13077c2... Перезаливка всего проекта22



