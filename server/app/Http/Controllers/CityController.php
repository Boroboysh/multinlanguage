<?php

namespace App\Http\Controllers;

use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CityController extends Controller
{
    public function searchCity (Request $request) {
        $searchName = $request->query('name');
        $locale = $request->header('locale') ?? 'ru';

        App::setLocale($locale);

        $searchCities = City::where('name->' . $locale, 'like', $searchName . '%')->get();

        return CityResource::collection($searchCities);
    }
}
