<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JsonRecource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "header" => [
                "logo" => '',
                "countries" => [
                    [
                        "id" => 1,
                        "name" => "Россия"
                    ],
                    [
                        "id" => 2,
                        "name" => "Казахстан"
                    ]
                ],
                "cities" => [
                    [
                        "id" => 1,
                        "name" => "Москва",
                        "country_id" => 1
                    ],
                    [
                        "id" => 1,
                        "name" => "Астана",
                        "country_id" => 2
                    ]
                ],
                "supportText" => 'Поддержка'
            ],
            "body" => [
                "subheader" => [
                    "image" => "",
                    "titles" => [
                        [
                            "id" => '',
                            "content" => ''
                        ],
                        [
                            "id" => '',
                            "content" => ''
                        ]
                    ],
                    "fields" => [
                        [
                            "id" => '',
                            "content" => ''
                        ],
                        [
                            "id" => '',
                            "content" => ''
                        ]
                    ],
                    "textContent" => [],
                    "list" => []
                ],
                "textInfoBlock" => [],
                "mapInfoBlock" => [],
                "listInfoBlock" => []
            ],
            "footer" => []
        ];
    }
}
