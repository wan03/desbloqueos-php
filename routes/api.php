<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/networks/create', 'NetworkController@create');
Route::get('/networks/all', 'NetworkController@all');
Route::get('/networks', 'NetworkController@index');

Route::get('/mobiles/create', 'MobileController@create');
Route::get('/mobiles/all', 'MobileController@all');
Route::get('/mobiles', 'MobileController@index');

Route::get('/tools/create', 'ToolController@create');
Route::get('/tools/all', 'ToolController@all');
Route::get('/tools', 'ToolController@index');

