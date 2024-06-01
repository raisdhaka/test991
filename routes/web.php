<?php

use App\Http\Controllers\HomeController;
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
})->name('holme');

Route::get('/hello', [HomeController::class, 'index'])->name('hello');
Route::get('/hey', [HomeController::class, 'hey'])->name('hey');
Route::get('/carousel', [HomeController::class,'carousel'])->name('carousel');