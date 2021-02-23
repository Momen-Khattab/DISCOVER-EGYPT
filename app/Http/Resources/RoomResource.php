<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
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
            "hotel_name" => $this->hotel_name,
            "hotel_address" => $this->hotel_address,
            "room_no" => $this->room_no,
            "size" => $this->size,
            "cost_per_night" => $this->cost_per_night,
            "has_offer" => $this->has_offer,
            "status" => $this->status,
            "notes" => $this->notes,
            "image" => asset(\Storage::url($this->image)),
        ];
    }
}
