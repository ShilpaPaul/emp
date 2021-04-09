<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empcontroller;

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

Route::get('/',[empcontroller::class,'create']);

Route::get('/viewall',[empcontroller::class,'index']);

Route::post('/reademp',[empcontroller::class,'store']);

Route::get('/emp/{id}/edit',[empcontroller::class,'edit']);

route::post('/update/{id}',[empcontroller::class,'update']);

Route::post("/search",[empcontroller::class,'search']);




