<?php

namespace App\Http\Controllers;

use App\Http\Resources\CitiesBlockResource;
use App\Http\Resources\CountryResource;
use App\Models\CitiesBlock;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function getCountriesCities () {
        return CountryResource::collection(Country::all());
    }

    public function getModalBlock () {
        return [
            'content' => CitiesBlockResource::collection(CitiesBlock::all()),
            'territory' => CountryResource::collection(Country::all())
        ];
    }
}
