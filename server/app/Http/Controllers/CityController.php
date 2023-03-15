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

        App::setLocale('ru');

        $searchCities = City::where('name->ru', 'like', $searchName . '%')->get();

        $arrayCity = CityResource::collection($searchCities);

        return $arrayCity;
    }
}
