<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlightReservation extends Model
{
 /**
     * Relationships
     */
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function flight(){
        return $this->belongsTo('App\Models\Flight', 'flight_no');
    }
}
