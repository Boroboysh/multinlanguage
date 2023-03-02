<?php

namespace App\Http\Resources\ListBlock;

use App\Models\ListInfoBlockElementList;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListBlockElementResource extends JsonResource
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
            'title' => $this->title,
            'list' => ListBlockElementContentResource::collection(ListInfoBlockElementList::where('listInfoBlockElement_id', $this->id)->get())
        ];
    }
}
