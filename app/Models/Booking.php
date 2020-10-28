<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = ['airport_name', 'flight_no', 'flight_company', 
                            'flight_distination', 'has_offer', 'travel_date', 'check_in', 'check_out', 'seat_no', 'flight_cost'];
}
