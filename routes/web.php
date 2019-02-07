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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::group(['prefix' => 'ajax'], function() {
    // all routes that don't need to go to react-router
});

Route::get('{slug}', function () {
    return view('welcome');
})->where('slug', '(?!api)([A-z\d-\/_.]+)?');

// Route::get('/home', 'HomeController@index')->name('home');
