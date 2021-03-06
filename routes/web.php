<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Indexcontroller;
use App\Http\Controllers\FormController;


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

Route::get('/', [Indexcontroller::class, 'returnName']);
Route::get('/index', [Indexcontroller::class, 'returnName']);

Route::view('register', 'register');
// Route::get('/register', [FormController::class, 'createUserForm']);
Route::post('/register', [FormController::class, 'validateForm']);
Route::post('/register', [FormController::class, 'addUser']);

Route::get('/users', [UserController::class, 'getAllUsers']);
Route::get('/users/{username}', [UserController::class, 'getUsersInfo']);

Route::get('delete/{username}', [UserController::class, 'deleteUser']);
