<?php

use App\Http\Controllers\JsonController;
use App\Http\Resources\CityResource;
use App\Models\City;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Http\Request;
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

Route::get('/page-data', [JsonController::class, 'getData']);

Route::get('/cities', function () {
    return CityResource::collection(City::select('*')->get());
});


