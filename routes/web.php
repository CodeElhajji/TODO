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
Route::group(['prefix' => LaravelLocalization::setLocale() , 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
Route::group(['prefix' => 'taske'],function (){
    Route::get('/','tasksController@index')->name('taskes.all');
    Route::get('create','tasksController@create');
    Route::post('store','tasksController@store') -> name('taske.store');
    Route::get('edit/{task_id}','tasksController@edit');
    Route::post('update/{task_id}','tasksController@doUpdate') ->name('taske.update');
    Route::get('delete/{task_id}', 'tasksController@deletetTaske')->name('task.delete');
});
Route::get('/' ,function() { return view('home');});
});


