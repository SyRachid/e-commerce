<?php

use app\Models\Article;
use App\Models\User;


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
Route::get('/',function(){
    Article::where('samsung')->first();
});
/*
Route::get('/', function () {
	
    return view('welcome');
});


Route::get('/Accueil', function () {
	
    return view('Accueil');
});
/*

Route::get('/','ArticlesController@index')->name('index');
Route::get('/search','ArticlesController@index')->name('article.search');
*/


