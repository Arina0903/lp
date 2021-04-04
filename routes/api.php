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

Route::get('/cuc', 'xachController@getxach');
Route::post('/cuc', 'xachController@store');
Route::put('/cuc', 'xachController@izmenit');

Route::get('/zxzx', 'userController@getuser');
//Route::post('/zxzx', 'userController@stor');
Route::post('/zxzx', 'userController@sto');


