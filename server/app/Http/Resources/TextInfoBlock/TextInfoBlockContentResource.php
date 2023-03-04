<?php

namespace App\Http\Resources\TextInfoBlock;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TextInfoBlockContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'text' => $this->content
        ];
    }
}
