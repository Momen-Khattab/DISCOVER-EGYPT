<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
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
            "food_no" => $this->food_no,
            "food_name" => $this->food_name,
            "image" => asset(\Storage::url($this->image)),
            "restaurant_name" => $this->restaurant_name,
            "address" => $this->address,
            "rest_no" => $this->rest_no,
            "cost" => $this->cost,
            "has_offer" => $this->has_offer,
            "notes" => $this->notes
        ];
    }
}
