<?php

namespace App\Http\Resources\TextInfoBlock;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TextInfoBlockListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'content' => $this->content,
            'type' => $this->type
        ];
    }
}
