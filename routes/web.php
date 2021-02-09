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

Route::get('/home', function () {
    return view('index');
    // return "Hello, world! <br> <img src='https://media1.tenor.com/images/4010a1683879f08a255e7153116a66f1/tenor.gif?itemid=4518485' />";
});

Route::get('/form', function () {
    return view('form');
});


// testing the new Indexcontroller function
// mind the second argument: its not a function but means go to Indexcontroller, find the returnTest() method and execute whatever is in it
// use App\Http\Controllers\Indexcontroller;

// Route::get('/', [Indexcontroller::class, 'returnTest']);
