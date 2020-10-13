<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    protected $table = 'offers';
    protected $fillable = ['offer_no', 'offer_name', 'capacity', 
                            'cost', 'has_discount', 'booked_date', 'notes'];
}
