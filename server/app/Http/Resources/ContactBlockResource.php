<?php

namespace App\Http\Resources;

use App\Models\CommunicationMethods;
use App\Models\ContactBlockMessage;
use App\Models\ContactBlockTelCommunication;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactBlockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'message_communication' => ContactBlockMessageResource::collection(ContactBlockMessage::all()),
            'other_communication' => CommunicationMethodsResource::collection(CommunicationMethods::all()),
            'tel_communication' => new ContactBlockTelCommunicationResource(ContactBlockTelCommunication::where('contactBlock_id', $this->id)->first())
        ];
    }
}
