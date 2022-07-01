<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\T_restaurantController;
use App\Models\T_restaurant;

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
Route::resource('foods', T_restaurantController::class);
