<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitList extends Model
{
    public function user(){
        
        return $this->belongsTo('App\Models\User');
    }
}
