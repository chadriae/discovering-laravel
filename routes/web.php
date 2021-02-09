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
    // return view('welcome');
    return "Hello, world! <br> <img src='https://media1.tenor.com/images/4010a1683879f08a255e7153116a66f1/tenor.gif?itemid=4518485' />";
});
