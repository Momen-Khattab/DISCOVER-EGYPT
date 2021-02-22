<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlightReservation extends Model
{
    protected $table = 'flight_reservaions';
 /**
     * Relationships
     */
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function flight(){
        return $this->belongsTo('App\Models\Flight', 'flight_id');
    }
}
