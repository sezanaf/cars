<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Models\Cars;

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
    $name = "Sezana";
    $age = "33";
    return view('welcome', compact('name', 'age'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cars', [CarsController::class, 'index']);

Route::get('/cars/{car}', [CarsController::class, 'show'])->name('car');
