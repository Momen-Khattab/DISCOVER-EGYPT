<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FlightResource extends JsonResource
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
            "flight_no" => $this->flight_no,
            "flight_company" => $this->flight_company,
            "airport_name" => $this->airport_name,
            "flight_destinaion" => $this->flight_destinaion,
            "notes" => $this->notes,
            "address" => $this->address,
            "travel_date" => $this->travel_date,
            "cost" => $this->cost,
            "company_number" => $this->company_number,
            "seat_no" => $this->seat_no,
        ];
    }
}
