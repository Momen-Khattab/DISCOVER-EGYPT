<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TripResource extends JsonResource
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
            "trip_no" => $this->trip_no,
            "trip_name" => $this->trip_name,
            "capacity" => $this->capacity,
            "cost" => $this->cost,
            "has_offer" => $this->has_offer,
            "image" => asset(\Storage::url($this->image)),
            "status" => $this->status,
            "notes" => $this->notes,
            "dead_line" => $this->dead_line,
        ];
    }
}
