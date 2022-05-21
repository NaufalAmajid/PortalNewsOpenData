<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/test', function () {
    return view('mainPage');
});

Route::get('/dashboard', function () {
    return view('pagesAdmin.dashboard.index');
});

//ROUTE FOR AUTHENTICATION
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/login', 'process');
});
