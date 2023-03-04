<?php

namespace App\Http\Resources\Subheader;

use App\Models\SubheaderFields;
use App\Models\SubheaderList;
use App\Models\SubheaderTextContent;
use App\Models\SubheaderTitles;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubheaderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'image' => $this->image,
            'titles' => SubheaderTitlesResource::collection(SubheaderTitles::where('subheader_id', $this->id)->get()),
            'fields' => SubheaderFieldResource::collection(SubheaderFields::where('subheader_id', $this->id)->get()),
            'content' => new SubheaderContentResource(SubheaderTextContent::where('subheader_id', $this->id)->first()),
            'list' => SubheaderListResource::collection(SubheaderList::where('subheader_id', $this->id)->get())
        ];
    }
}
