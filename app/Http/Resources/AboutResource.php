<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'type' => 'About',
            'attributes' => [
                'title' => $this->title,
                'exp_content' => $this->exp_content,
                'description' => $this->desc,
                'about_img' => $this->about_img
            ]
        ];
    }
}
