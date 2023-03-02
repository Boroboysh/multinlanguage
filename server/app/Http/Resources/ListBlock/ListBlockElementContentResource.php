<?php

namespace App\Http\Resources\ListBlock;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListBlockElementContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'content' => $this->content
        ];
    }
}
