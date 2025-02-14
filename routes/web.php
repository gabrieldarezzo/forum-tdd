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
    //return 'ok';
});

Route::get('/tt', function () {
    var_dump(['a' => env('DB_DATABASE')]);
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/threads', 'ThreadsController@index')->name('threads');
Route::post('/threads', 'ThreadsController@store');
Route::get('/threads/{thread}', 'ThreadsController@show');
Route::post('/threads/{thread}/replies', 'RepliesController@store');
