<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Massage extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'description'];

    public function sessions(){
        return $this->hasMany('App\Models\Session');
    }
}
