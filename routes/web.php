<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;

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
})->middleware('auth');

Route::get('/login', [mainController::class, 'halamanLogin'] )->name('login');
Route::get('/profile', [mainController::class, 'profileIndex'] )->name('login');
Route::post('/login', [mainController::class, 'prosesLogin'] );
