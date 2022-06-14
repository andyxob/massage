<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne('App\Models\User');
    }

    public function  time(){
        return $this->hasOne('App\Models\Time');
    }

    public function doctor(){
        return $this->hasOne('App\Models\Doctor');
    }

    public function massage(){
        return $this->hasOne('App\Models\Massage');
    }
}
