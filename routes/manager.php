<?php 

/*
|--------------------------------------------------------------------------
| Manager Routes
|--------------------------------------------------------------------------
|
| Here is where you can register manager routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "manager" middleware group. Now create something great!
|
*/

Route::domain('manager.' . config('app.domain'))->group(function (){
    Route::get('/', 'ManagerController@index')->name('manager.login.form');
});