<?php

namespace App\Http\Resources\Header;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HeaderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
//            $language_code = 'ru';
//        $country = new CountryResource(Country::class);
//        $city = new CityResource(City::class);
//
//        "countries" => $country,
//            "cities" => $city,


        return [
            "logo" => $this->logo,
            "supportText" => $this->supportText,
            'tel_number' => $this->tel_number,
        ];
    }
}
