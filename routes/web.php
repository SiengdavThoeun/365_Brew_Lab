<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\website\MainController;

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
    return view('website.layout.app');
});

Route::namespace('website')->group(function(){
    Route::get('/', 'MainController@home');
    Route::get('/foods', 'MainController@foods');
    Route::get('/drinks', 'MainController@drinks');
    Route::get('/gallery', 'MainController@gallery');
    Route::get('/events', 'MainController@events');
    Route::get('/aboutUs', 'MainController@aboutUs');
});
