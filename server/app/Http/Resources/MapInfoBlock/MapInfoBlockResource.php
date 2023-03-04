<?php

namespace App\Http\Resources\MapInfoBlock;

use App\Models\MapInfoBlockButtonText;
use App\Models\MapInfoBlockContent;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MapInfoBlockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'mapImage' => $this->mapImage,
            'content' => MapInfoBlockContentResource::collection(MapInfoBlockContent::where('mapInfoBlock_id', $this->id)->get()),
            'buttons_text' => new MapInfoBlockButtonTextResource(MapInfoBlockButtonText::where('mapInfoBlock_id', $this->id)->first())
        ];
    }
}
