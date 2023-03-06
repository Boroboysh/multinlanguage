<?php

namespace App\Http\Resources\MapInfoBlock;

use App\Http\Resources\MapPointsResource;
use App\Models\MapInfoBlockButtonText;
use App\Models\MapInfoBlockContent;
use App\Models\MapPoint;
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
            'content' => MapInfoBlockContentResource::collection(MapInfoBlockContent::where('mapInfoBlock_id', $this->id)->get()),
            'buttons_text' => new MapInfoBlockButtonTextResource(MapInfoBlockButtonText::where('mapInfoBlock_id', $this->id)->first()),
            'points' => MapPointsResource::collection(MapPoint::all())
        ];
    }
}
