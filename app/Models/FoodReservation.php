<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodReservation extends Model
{
    /**
     * Relationships
     */
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function food(){
        return $this->belongsTo('App\Models\Food', 'food_id');
    }
}
