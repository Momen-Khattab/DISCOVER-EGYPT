<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
    protected $table = 'foods';
    protected $fillable = ['food_no', 'Restaurant_name', 
                            'cost', 'has_offer', 'image','address', 'number',
                            'notes'];
}
