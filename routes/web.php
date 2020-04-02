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
    $homes = App\MobileHome::where('active', '1')->where('show_on_home', '1')->get();
    $specials = App\Mobilehome::where('active', '1')->where('featured', '1')->get();

    return view('front-pages.at-home', compact('homes', 'specials'));
});


Route::get('/property/{mobileHome}', 'MobileHomeController@show')->name('property');
Route::get('view-models/{id}', 'MobileHomeController@viewModels')->name('view-models');
Route::view('/about-us', 'front-pages.about-us');
Route::view('/construction', 'front-pages.construction');
Route::view('/financing', 'front-pages.financing');
Route::view('/warranties', 'front-pages.warranties');
Route::view('/contact', 'front-pages.contact');
Route::post('/add-client', 'ClientController@store')->name('add-client');



//admin routes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/get-homes', 'MobileHomeController@index');
Route::get('/add-home', 'MobileHomeController@create')->name('add-home');
Route::post('/add-home', 'MobileHomeController@store');
Route::get('/edit-property/{mobileHome}', 'MobileHomeController@edit')->name('edit-property');
Route::post('/edit-property/{mobileHome}', 'MobileHomeController@update');
Route::post('/delete-media/{media}', 'MobileHomeController@deleteMedia');
Route::post('/update-show-on-home/{mobileHome}', 'MobileHomeController@updateShowOnHome');
Route::get('/archive-home/{mobileHome}', 'MobileHomeController@archive');
Route::view('/view-interactions', 'interactions');
Route::get('/interactions', 'ClientController@index');
Route::post('/update-client-active/{client}', 'ClientController@updateActive');
Route::get('/add-client', 'ClientController@create');
Route::get('/edit-client/{client}', 'ClientController@edit');
Route::get('/get-client', 'ClientController@show');
Route::get('/get-all-notes', 'ClientNoteController@viewAllNotes');
Route::post('/add-note', 'ClientNoteController@store');
Route::post('/delete-note/{clientNote}', 'ClientNoteController@destroy');
Route::get('/edit-site_wides', 'SiteWideController@index')->name('edit-site');
Route::post('/edit-site_wides', 'SiteWideController@store');
Route::get('/view-all-clients', 'ClientController@showAll')->name('view-all-clients');
Route::get('/get-client-details', 'ClientController@show');
Route::get('/update-client-details', 'ClientController@updateDetails');
Route::post('/database-csv', 'ClientController@export')->name('db-csv');
