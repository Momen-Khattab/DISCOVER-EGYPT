<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TripReservation extends Model
{
    protected $table = 'trip_reservaions';

/**
     * Relationships
     */
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function trip(){
        return $this->belongsTo('App\Models\Trip', 'trip_id'); // الربط بال Foreign key تمام؟ 
    }
}
