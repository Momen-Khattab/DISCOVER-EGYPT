<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //
    protected $table = 'flights';
    protected $fillable = ['flight_no', 'flight_company','airport_name','flight_destinaion','notes',
                            'cost', 'travel_date','address','company_number','seat_no'
                            ];
}
