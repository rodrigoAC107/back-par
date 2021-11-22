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
            'id' => $this->id,
            'type_product' => $this->typeProduct->name,
            'name' => $this->name,
            'special' => $this->special,
            'created_at' => $this->created_at->format("Y-m-d H:i:s"),
        ];
    }
}
