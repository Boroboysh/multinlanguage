<?php

namespace App\Http\Resources\ContactForm;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactFormFieldsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'city' => $this->city,
            'name' => $this->name,
            'tel_number' => $this->tel_number,
            'message_placeholder' => $this->message_placeholder,
        ];
    }
}
