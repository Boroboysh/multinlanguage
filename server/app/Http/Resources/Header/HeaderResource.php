<?php

namespace App\Http\Resources\Header;

use App\Models\HeaderLanguages;
use App\Models\HeaderLogoList;
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
        return [
            'logo' => HeaderLogoListResource::collection(HeaderLogoList::all()),
            "supportText" => $this->supportText,
            'tel_number' => $this->tel_number,
            'languages' => HeaderLanguagesResource::collection(HeaderLanguages::all())
        ];
    }
}
