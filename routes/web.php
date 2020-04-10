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

/*
Comandos frecuentes, para no perder el tiempo recordandolos

php artisan make:controller UserController --resource

php artisan make:model Flight -m

php artisan make:migration create_users_table --create=users

//Cuando queremos agregar nueva columna a tabla existente//
php artisan make:migration add_state_id_to_users

composer require "laravelcollective/html":"^5.8.0"

*/

 Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


 Route::get('/', 'Auth\LoginController@showLoginForm');


// Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

 Route::get('/dashboard', 'DashboardController@index');


 Route::resource('users', 'UserController');

 Route::get('/country', 'CountryController@index');
