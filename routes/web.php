<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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

Route::get('/' , [DashboardController::class ,'mainpage']);

Route::get('/page1' ,[DashboardController::class ,'page1']);

Route::get('/page2' ,[DashboardController::class ,'page2']);

Route::get('/page3' ,[DashboardController::class ,'page3']);
