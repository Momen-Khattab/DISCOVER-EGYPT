<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable = ['room_no', 'hotel_name', 'size', 
                            'cost_per_night', 'has_offer', 'image',
                             'status', 'notes'];

    public static function roomSizes(){
        return ['single', 'double', 'family'];
    }
    public function getImage(){
        return env('APP_URL').\Storage::url($this->image);
    }
}
