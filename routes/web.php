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
Route::prefix('admin')->group(function (){
    Route::view('/','master');
    Route::get('/blog','BlogController@index')->name('blog.index');
    Route::get('/create','BlogController@showFormCreate')->name('blog.show-form');
    Route::post('/create','BlogController@create')->name('blog.create');
});
