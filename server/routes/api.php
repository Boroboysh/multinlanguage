<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\JsonController;
use App\Http\Resources\CityResource;
use App\Http\Resources\ContactBlockResource;
use App\Models\City;
use App\Models\ContactBlock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//TODO get images

Route::get('/page-data', [JsonController::class, 'getData']);

Route::get('/country/{country}/city/{cityName}', function ($country, $cityName, Request $request) {
    $acceptedLanguages = ['ru', 'en', 'kk'];
    $languageCode = $request->header('locale');

    if ($languageCode && in_array($languageCode, $acceptedLanguages)) {
        App::setLocale($languageCode);

        $test = utf8_encode($cityName);

        return CityResource::collection(City::where('name', 'LIKE', "%$test%")->get());

    }
    return response('Invalid language code', 404);

});

Route::get('/countries/cities', [CountryController::class, 'getCountriesCities']);

Route::get('/contact-block', function (Request $request) {
    $acceptedLanguages = ['ru', 'en', 'kk'];
    $languageCode = $request->header('locale');

    if ($languageCode && in_array($languageCode, $acceptedLanguages)) {
        App::setLocale($languageCode);

        return new ContactBlockResource(ContactBlock::first());
    }

    return response('Invalid language code', 404);
});

Route::post('/send_email', [FeedbackController::class, 'send']);
