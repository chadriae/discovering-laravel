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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/form', function () {
    return view('form');
});


// testing the new Indexcontroller function
// mind the second argument: its not a function but means go to Indexcontroller, find the returnTest() method and execute whatever is in it

use App\Http\Controllers\Indexcontroller;

Route::get('/', [Indexcontroller::class, 'returnName']);
Route::get('/index', [Indexcontroller::class, 'returnName']);
