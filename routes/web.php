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
Route::get('/','IndexController@home')->name('home');
Route::get('home','IndexController@home')->name('home');
Route::get('login','LoginController@index')->name('login');
Route::post('loginprocess','LoginController@login')->name('loginprocess');
Route::get('logout','LoginController@logout')->name('logout');
Route::post('changePassword','LoginController@cambiopass')->name('changePassword');

Route::get('/doc/{file}','IndexController@download')->name('docdownload');