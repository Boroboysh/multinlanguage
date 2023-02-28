<?php

use App\Http\Controllers\FeedbackController;
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


Route::get('/country/{id}/cities', function ($id) {
    return City::where('country_id', $id)->get();
});

Route::get('/countries', function () {
    return Country::all();
});

Route::get('/multi-language', function (Request $request) {
    $acceptedLanguages = ['ru', 'en'];
    $languageCode = $request->header('locale');

    if ($languageCode && in_array($languageCode, $acceptedLanguages)) {
        $productsJSON = Product::select('*')->get();
        $products = json_decode($productsJSON);
        foreach ($products as $product) {
            return $product->name->{$languageCode};
        }
    } else {
        return response('Invalid language code', 400);
    }

});


Route::get('/test', function () {
    dd(Country::select('id')->get()->toArray());
});

