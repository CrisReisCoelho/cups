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

//Route::get('/', function () {
    //return view('welcome');
//});
//Route::get('/Hello', function () {
    //return view('hello');
//});

Route::get('/', 'HomeController@viewIndex');

Route::get('/produtos', 'ProdutoController@viewProdutos');
   
