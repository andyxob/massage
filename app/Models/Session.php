<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'doctor_id', 'massage_id', 'time_id'];

    public function user(){
        return $this->hasOne('App\Models\User');
    }

    public function  time(){
        return $this->belongsTo('App\Models\Time');
    }

    public function doctor(){
        return $this->belongsTo('App\Models\Doctor');
    }

    public function massage(){
        return $this->belongsTo('App\Models\Massage');
    }

    public function isDone(){
        return $this->is_done === 1;
    }
}
