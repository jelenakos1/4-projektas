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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('articles')->group(function() {
    
    //article
    Route::get('', 'App\Http\Controllers\ArticleController@index')->name('article.index');
   
  Route::get('create','App\Http\Controllers\ArticleController@create')->name('article.create');
   Route::post('store','App\Http\Controllers\ArticleController@store')->name('article.store');
  Route::get('edit','App\Http\Controllers\ArticleController@edit')->name('article.edit');
 });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('articalimages')->group(function() {

    Route::get('', 'App\Http\Controllers\ArticalimageController@index')->name('articalimage.index');
    Route::get('create', 'App\Http\Controllers\ArticalimageController@create')->name('articalimage.create');
    Route::post('store', 'App\Http\Controllers\ArticalimageController@store' )->name('articalimage.store');
    Route::get('edit/{articalimage}', 'App\Http\Controllers\ArticalimageController@edit')->name('articalimage.edit');
    Route::post('update/{articalimage}', 'App\Http\Controllers\ArticalimageController@update')->name('articaleimage.update');
});