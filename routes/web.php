<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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

Route::get('/',[PageController::class,'index'] )->name('index');
Route::get('/about',[PageController::class,'about'] )->name('about');
Route::get('/service',[PageController::class,'service'] )->name('service');
Route::get('/project',[PageController::class,'project'] )->name('project');
Route::get('/contact',[PageController::class,'contact'] )->name('contact');



Route::resource('posts', PostController::class);