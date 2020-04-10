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


/*
 para poder usar estas rutas en providers/RouteServiceProvider
 eliminar el prefix api en mapApiRoutes
 */
Route::get('/countrys', 'CountryController@index');

Route::get('/states', 'StateController@index');