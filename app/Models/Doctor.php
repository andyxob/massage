<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'exp', 'image'];

    public function likes(){
        return $this->morphMany('App\Models\Like', 'likeable');
    }
}
