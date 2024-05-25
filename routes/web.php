<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[IndexController::class,"index"]);
Route::get("/company/{gadget}",[IndexController::class,"company"])->name('company');
Route::get('/{company}/{gadget}',[IndexController::class,'gadget']);
Route::get('/{company}/{gadget}/{product}',[IndexController::class,'product']);
// Route::get("/mobile",[IndexController::class,"mobile"]);
// Route::get("/laptop",[IndexController::class,"laptop"]);
Route::get("/help",[IndexController::class,"help"]);
Route::get("/about",[IndexController::class,"about"]);
// Route::get("/monitor",[IndexController::class,"monitor"]);
// Route::get("/keyboard",[IndexController::class,"keyboard"]);
