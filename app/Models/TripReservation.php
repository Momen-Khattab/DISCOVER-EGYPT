<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TripReservation extends Model
{
/**
     * Relationships
     */
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function trip(){
        return $this->belongsTo('App\Models\Trip', 'trip_no');
    }
}
