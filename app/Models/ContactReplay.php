<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactReplay extends Model
{
    //

    /**
     * Relations
     */
    
    public function contact(){
        return $this->belongsTo('App\Models\Contact', 'contact_id');
    }

    public function admin(){
        return $this->belongsTo('App\Models\Admin', 'admin_id');
    }
}
