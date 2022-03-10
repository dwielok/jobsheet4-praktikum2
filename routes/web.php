<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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
//     return view('index');
// });
//Route::get('/', [PageController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/testmonial', [PageController::class, 'testmonial']);

Route::get('/clients', [PageController::class, 'clients']);

Route::get('/contact', [PageController::class, 'contact']);
