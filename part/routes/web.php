<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuaryController;

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

Route::get('/home',[HomeController::class,'showhome']);
Route::get('/about',[HomeController::class,'about']);

Route::get('/lol',[HomeController::class,'datas']);

Route::get('/insert', [QuaryController::class, 'showselect']);

Route::put('/insertdata', [QuaryController::class, 'insert']);