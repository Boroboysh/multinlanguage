<?php

namespace App\Http\Resources\Header;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HeaderLanguagesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'icon' => $this->icon,
            'isDefault' => $this->isDefault,
            'abbreviation' => $this->abbreviation,
            'code' => $this->language_code
        ];
    }
}
