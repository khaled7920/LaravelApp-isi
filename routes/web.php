<?php

use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\formationController;
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

Route::get('/',function(){return"<h1 align=center>GESTIONS DES APPRENANTS</h1>";}) ;
Route::get('/liste-apprenants',[ApprenantController::class,'index']);    
Route::get('/formations',[formationController::class,'show']); 
