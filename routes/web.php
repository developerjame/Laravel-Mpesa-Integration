<?php

use App\Http\Controllers\payments\mpesa\MPESAController;
use Illuminate\Support\Facades\Route;

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

Route::post('get-token', [MPESAController::class, 'getAccessToken']);
Route::post('register-urls', [MPESAController::class, 'registerURLS']);