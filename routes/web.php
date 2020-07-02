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
    return view('welcome');
});
Route::get('/home', 'HomeController@home');
Route::get('/register', 'AuthController@register');
Route::post('/welcome2', 'AuthController@welcome_post');

Route::get('/master', function(){
    return view('layout.master');
});
Route::get('/table', function(){
    return view('tables.table');
});
Route::get('/data-tables', function(){
    return view('tables.data-tables');
});