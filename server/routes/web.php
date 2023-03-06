<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\JsonController;
use App\Http\Resources\CityResource;
use App\Http\Resources\ContactBlockResource;
use App\Mail\FeedbackMailer;
use App\Models\City;
use App\Models\ContactBlock;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
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



