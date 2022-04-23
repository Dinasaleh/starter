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


Route::get('/admin', function () {
    return "Welcome!! Admin$$";
});

Route::prefix('users')->group(function(){

Route::get('show1','Front\UserController@showUserName1') ;
Route::get('show2','Front\UserController@showUserName2') ;
});




route::resource('News','NewsController');

