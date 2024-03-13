<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/add', [UserController::class, 'Add']);
Route::post('/addData', [UserController::class, 'action']);
Route::get('/delete/{id}', [UserController::class, 'getID']);
Route::get('/update/{id}', [UserController::class, 'editeID']);
Route::post('/delete/submit', [UserController::class, 'delete']);
Route::post('/update/submit', [UserController::class, 'update']);
Route::get('/view', [UserController::class, 'view']);
Route::get('/store', [UserController::class, 'store']);
Route::get('/index', [UserController::class, 'showapi']);