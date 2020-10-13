<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    //
    protected $table = 'restaurants';
    protected $fillable = ['restaurant_name', 'food_type', 'price', 
                            'notes'];
}
