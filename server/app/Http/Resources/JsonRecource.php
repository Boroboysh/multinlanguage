<?php

namespace App\Http\Resources;

use App\Models\City;
use App\Models\Country;
use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JsonRecource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public function toArray(Request $request): array
    {
        return [

        ];
    }
}
