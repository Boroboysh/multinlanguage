<?php

namespace App\Http\Resources\ListBlock;

use App\Models\ListInfoBlockElement;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListBlockResource extends JsonResource
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
            'element' => ListBlockElementResource::collection(ListInfoBlockElement::where('listInfoBlock_id', $this->id)->get())
        ];
    }
}
