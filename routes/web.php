<?php

use Spatie\Sitemap\SitemapGenerator;

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


$domain = env('APP_MAIN_DOMAIN');


Route::group(['domain' => $domain], function()
    {
        Route::get('/', 'MainController@index')->name('mainpage');

        Route::get('/o-nas', 'MainController@about')->name('about');
        // Route::get('/uslugi-fermeram', 'MainController@about');
        Route::get('/faq', 'MainController@faq')->name('faq');
        Route::get('/events', 'MainController@events')->name('events');
        Route::get('/event/{slug}', 'MainController@event');

        Route::get('/credit/{slug}', 'MainController@credit');

        Route::get('/download/policy', 'MainController@getDownload');
        Route::get('/direction/{slug}', 'MainController@direction');
        Route::get('/uslugi', 'MainController@servs')->name('uslugi');
        
        
        
        Route::post('/form', 'MainController@form');
        
        Route::group(['prefix' => 'admin'], function () {
            Voyager::routes();
            Route::get('/test', 'TestController@index');
        });
}); 


Route::any('/search', 'MainController@search');

$subdomain = env('APP_SUB_DOMAIN');

Route::group(['domain' => $subdomain], function () {
    Route::get('/', 'DomainController@index');
    Route::post('/form', 'MainController@form');
    Route::get('/{slug}', 'DomainController@credit');
    Route::get('/download/policy', 'MainController@getDownload');
    
});


