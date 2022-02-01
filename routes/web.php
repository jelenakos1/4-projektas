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
Route::prefix('articles')->group(function() {
    //index.blade.php
    //creat
    //edit
 
    //article
    Route::get('', 'App\Http\Controllers\ArticleController@index')->name('article.index');
   
  Route::get('create','App\Http\Controllers\ArticleController@create')->name('article.create');
   Route::post('store','App\Http\Controllers\ArticleController@store')->name('article.store');
  Route::get('edit','App\Http\Controllers\ArticleController@edit')->name('article.edit');
 });