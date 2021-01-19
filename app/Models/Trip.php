<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //
    protected $table = 'trips';
    protected $fillable = ['trip_no', 'trip_name', 'capacity', 
                            'cost', 'has_offer', 'dead_line', 'image',
                              'notes', 'status'];

    public static function tripcapacity(){
        return ['10','15', '20'];
    }

    public function getImage(){
        return env('APP_URL').\Storage::url($this->image);
    }
}
