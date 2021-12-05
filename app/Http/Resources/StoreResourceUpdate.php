<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreResourceUpdate extends JsonResource
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
            'type_store_id' => $this->type_store->id,
            'location' => $this->location->name,
            'name' => $this->name,
            'address' => $this->address,
            'phone' => $this->phone,
            'image' => $this->image,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'location_id' => $this->location_id,
            'province_id' => $this->location->province_id,
            'created_at' => $this->created_at->format("Y-m-d H:i:s"),
        ];
    }
}
