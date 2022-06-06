<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Massage;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function doctors(){
        $doctors = Doctor::get();

        return view('doctors', ['doctors'=>$doctors]);
    }

    public function meeting(){
        $doctors = Doctor::get();
        $massages = Massage::get();

        return view('meeting', ['doctors'=>$doctors, 'massages' => $massages]);
    }
}
