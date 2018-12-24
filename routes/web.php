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

Route::get('/', 'MainController@index');

Route::get('/o-nas', 'MainController@about');
Route::get('/uslugi-fermeram', 'MainController@about');
Route::get('/faq', 'MainController@faq');
Route::get('/events', 'MainController@events');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
