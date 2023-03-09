<?php

namespace App\Http\Resources;

use App\Http\Resources\MapInfoBlock\MapPointCoordinationResource;
use App\Models\MapPointCoordination;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MapPointsResource extends JsonResource
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
            'coordination' => new MapPointCoordinationResource(MapPointCoordination::where('mapPoint_id', $this->id)->first())
        ];
    }
}
