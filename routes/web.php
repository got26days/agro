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



// Route::get('/', 'MainController@index')->name('mainpage');
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
        
        Route::get('/regioni-ustoichivoe-razvitie', 'MainController@region');
        

        Route::post('/form', 'MainController@form');
        
        Route::group(['prefix' => 'admin'], function () {
            Voyager::routes();
            Route::get('/test', 'TestController@index');
            Route::get('/getdata1', 'TestController@getdata1');
            Route::get('/getdata2', 'TestController@getdata2');
            Route::get('/getdata3', 'TestController@getdata3');
            Route::get('/getdata4', 'TestController@getdata4');

            Route::get('/getnd', 'TestController@getnd');
            Route::get('/getprs', 'TestController@getprs');
            Route::get('/getbuhs', 'TestController@getbuhs');
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




// Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/anketa', 'EventController@anketa');
// });
Route::post('/event/sendform', 'EventController@sendform');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/anketa', 'EventController@anketa');
$thirddomain = env('APP_THIRD_DOMAIN');

Route::group(['domain' => $thirddomain], function () {
    Route::get('/', 'EventController@main')->name('clone'); 
    Route::get('/{slug}', 'EventController@index');    
});

Route::get('/newpage/{slug}', 'EventController@index');    


// Route::get('/domain1', 'DronController@index');

$subdomainthird = env('APP_SUB_DOMAIN_THIRD');

Route::group(['domain' => $subdomainthird], function () {
    Route::get('/', 'DronController@index');
    Route::post('/form', 'MainController@form');
    Route::get('/{slug}', 'DronController@credit');
    Route::get('/download/policy', 'MainController@getDownload');
    
});

$subdomainfour = env('APP_SUB_DOMAIN_FOUR');

Route::group(['domain' => $subdomainfour], function () {
    Route::get('/', 'DronController@indextwo');
    Route::post('/form', 'MainController@form');
    Route::get('/{slug}', 'DronController@credittwo');
    Route::get('/download/policy', 'MainController@getDownload');
});

// pr
$subdomainfive = env('APP_SUB_DOMAIN_FIVE');

Route::group(['domain' => $subdomainfive], function () {
    Route::get('/', 'DronController@indexfive');
    Route::post('/form', 'MainController@form');
    Route::get('/{slug}', 'DronController@creditfive');
    Route::get('/download/policy', 'MainController@getDownload');
    
});


// buh
$subdomainsix = env('APP_SUB_DOMAIN_SIX');

Route::group(['domain' => $subdomainsix], function () {
    Route::get('/', 'DronController@indexsix');
    Route::post('/form', 'MainController@form');
    Route::get('/{slug}', 'DronController@creditsix');
    Route::get('/download/policy', 'MainController@getDownload');
    
});


