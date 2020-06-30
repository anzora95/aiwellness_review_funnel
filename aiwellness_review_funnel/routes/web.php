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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('index');
});

Route::get('/thanks', function () {
    return view('thank');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/review', 'IndexController@first_step');
Route::post('/shipping', 'IndexController@second_step');
Route::post("/discounts",'IndexController@last_step');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/data', 'HomeController@index');
Route::get('/db_search/{order_id}','IndexController@db_search');

Route::middleware(['auth'])->group(function (){

    Route::get('/data', 'TableController@datatable');


});
