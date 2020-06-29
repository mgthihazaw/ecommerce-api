<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "image" => str_replace("localhost", "192.168.10.26", $this->image),
            "category" => $this->category->title,
            "price" => $this->price,
            "is_hot" => $this->is_hot,
            "is_new" => $this->is_new,
        ];
    }
}
