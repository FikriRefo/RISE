<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TeacherController;

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
//First Design
Route::get('/aboutus', function(){
    return view('aboutus.index');
});
Route::resource('/',MyController::class);
Route::resource('/category',CategoryController::class);
Route::resource('/teacher',TeacherController::class);