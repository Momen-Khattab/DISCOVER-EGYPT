<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    /**
     * Relations
     */
    public function replies(){
        return $this->hasMany('App\Models\ContactReplay', 'contact_id')->orderByDesc('id');
    }
}
