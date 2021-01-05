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
Route::group(['prefix' => 'taske'],function (){
    Route::get('/','tasksController@index');
    Route::get('create','tasksController@create');
    Route::post('store','tasksController@store') -> name('taske.store');
});
//
