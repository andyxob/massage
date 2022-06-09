<?php

namespace App\Models;

use Conner\Likeable\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory, Likeable;

    protected $fillable = ['name', 'surname', 'exp'];

    public function likes(){
        return $this->morphMany('App\Models\Like', 'likeable');
    }
}
