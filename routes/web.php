<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Pcontroller;
use \App\Http\Controllers\FormController;
use \App\Http\Controllers\Auth\AuthController;
use \App\Http\Controllers\ExcelController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//pcontroller 
Route::get('/demo',[Pcontroller::class,'show']);    

//FormController
Route::get('/create-form',[FormController::class,'create']);    
Route::post('/store-form',[FormController::class,'store']);    
Route::get('/index-form',[FormController::class,'index']);
Route::get('/edit-form/{id}',[FormController::class,'edit']); 
Route::post('/update-form/{id}',[FormController::class,'update']);    
Route::get('/destroy-form/{id}',[FormController::class,'destroy']); 

// AuthController

Route::get('/',[AuthController::class,'index'])->name('login');
Route::post('/post-login',[AuthController::class, 'postlogin'])->name('login.post');
Route::get('/registar',[AuthController::class,'registar'])->name('registar');
Route::post('/post-registar',[AuthController::class, 'postregistar'])->name('registar.post');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/dashboard',[AuthController::class, 'dashboard']);

// excelfile
Route::get('/importexportview',[ExcelController::class,'importexportview']);
Route::get('/export',[ExcelController::class,'export'])->name('export');
Route::post('/import',[ExcelController::class,'import'])->name('importdata');
