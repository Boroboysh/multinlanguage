<?php

namespace App\Http\Resources\ContactForm;

use App\Models\ContactFormButtonText;
use App\Models\ContactFormField;
use App\Models\ContactFormTextContent;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactFormResource extends JsonResource
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
            'fields' => new ContactFormFieldsResource(ContactFormField::where('contactForm_id', $this->id)->first()),
            'buttonText' => new ContactFormButtonTextResource(ContactFormButtonText::where('contactForm_id', $this->id)->first()),
            'textContent' => ContactFormTextContentResource::collection(ContactFormTextContent::where('contactForm_id', $this->id)->get())
        ];
    }
}
