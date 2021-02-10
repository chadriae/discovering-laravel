<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


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


Route::get('/users', [UserController::class, 'getAllUsers']);

Route::get('/users/{username}', [UserController::class, 'getUsersEmail']);

// Route::get('/users/{username}', function ($username) {
//     return 'test';
// });


use App\Http\Controllers\Indexcontroller;

Route::get('/', [Indexcontroller::class, 'returnName']);
Route::get('/index', [Indexcontroller::class, 'returnName']);


Route::get('/form', ['uses' => 'FormController@createUserForm']);
Route::post('/form', ['uses' => 'FormController@validateForm']);

// use App\Http\Controllers\FormController;

// Route::get('/form', [FormController::class, 'createUserForm']);
// Route::post('/form', [FormController::class, 'validateForm']);
