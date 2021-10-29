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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('blog','blog@blog');
Route::get('new/post','blog@showform');
Route::post('submit/post','blog@savePost');
Route::get('delete/post/{id}','HomeController@detelePost');
Route::get('edit/post/{id}','HomeController@editPost');
Route::post('perform/update','HomeController@performUpdate');
Route::resource('blog/api','BlogAPI');

