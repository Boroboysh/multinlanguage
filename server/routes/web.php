<?php

use App\Http\Controllers\FeedbackController;
use App\Models\City;
use App\Models\Country;
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

//TODO create controllers

//TODO ! Create Database !
//TODO ! Seeders !
//TODO ! Factory !
//TODO ! Email test !

// Getting cities from the current country

Route::get('/country/{id}/cities', function ($id) {
    return City::where('country_id', $id)->get();
});


Route::get('/test', function () {
    dd(Country::select('id')->get()->toArray());
});

