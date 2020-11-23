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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('admin', 'backend\HomeController@index')->name('home');
Route::group(["prefix"=>"admin","middleware"=>"auth"], function(){
    //logout
    Route::get("logout",function(){
        Auth::logout();
        return redirect(url("login"));
    });


});
