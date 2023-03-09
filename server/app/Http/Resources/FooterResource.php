<?php

namespace App\Http\Resources;

use App\Models\FooterStoreLinks;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FooterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'logo' => $this->icon,
            'personal_data' => $this->personal_data,
            'copyright' => $this->copyright,
            'store_link_title' => $this->store_link_title,
            'store_links' => FooterStoreLinksResource::collection(FooterStoreLinks::all())
        ];
    }
}
