<?php

namespace App\Http\Resources\Header;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HeaderLogoListResource extends JsonResource
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
                'type' => $this->type,
                'path' => $this->path
        ];
    }
}
