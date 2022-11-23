<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'type' => 'Blog',
            'attributes' => [
                'title' => $this->blog_title,
                'image' => $this->blog_image,
                'category' => $this->category,
                'description' => $this->blog_description,
                'tags' => $this->blog_tags
            ]
        ];
    }
}
