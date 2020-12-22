<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //
    protected $table = 'flights';
    protected $fillable = ['flight_no', 'company_name','airport_name','flight_destinaion',
                            'cost', 'has_offer', 'travel_date','address','company_number',
                            ];
}
