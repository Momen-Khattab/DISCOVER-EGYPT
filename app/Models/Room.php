<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable = ['room_no', 'hotel_name', 'size', 
                            'cost_per_night', 'has_offer', 'booked_date_start', 'booked_date_end',
                             'state', 'notes'];
}
