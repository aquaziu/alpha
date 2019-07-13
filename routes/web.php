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

/*Route::get('hallo', function () {
    return "Hallo, Anda sedang mengikuti ebook panduan Laravel
    Fundamental";
    });*/
//Route::get('profil', 'CobaController@profil');
//Route::get('index', 'MainController@index');
//Route::get('biodata', 'BiodataController@index');

/* templating system for view*/
Route::get('/index', 'IndexController@home');
Route::get('/index/contact', 'IndexController@contact');
Route::get('/index/about', 'IndexController@about');
