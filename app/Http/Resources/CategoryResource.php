<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{

    public static $wrap = 'category';
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
            "image" => str_replace("localhost", "192.168.10.26", $this->image)
        ];
    }
    
}
