<?php

namespace App\Http\Resources\Subheader;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubheaderListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'icon' => $this->icon,
            'content' => $this->content
        ];
    }
}
