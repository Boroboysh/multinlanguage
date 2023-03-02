<?php

namespace App\Http\Resources\TextInfoBlock;

use App\Models\TextInfoBlockContent;
use App\Models\TextInfoBlockList;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TextInfoBlockResource extends JsonResource
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
            'subtitle' => $this->subtitle,
            'content' => TextInfoBlockContentResource::collection(TextInfoBlockContent::where('textInfoBlock_id', $this->id)->get()),
            'list' => TextInfoBlockListResource::collection(TextInfoBlockList::where('textInfoBlock_id', $this->id)->get())
        ];
    }
}
