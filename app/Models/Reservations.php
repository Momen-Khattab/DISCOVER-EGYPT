<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    //
    protected $table = 'reservations';
    protected $fillable = ['guest_name', 'from_Date', 'to_Date', 
                            'object_picked'];
}
