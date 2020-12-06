<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
    protected $table = 'foods';
    protected $fillable = ['food_no', 'restaurant_name', 
                            'cost', 'has_offer', 'image','address', 'rest_no',
                            'notes'];
}
