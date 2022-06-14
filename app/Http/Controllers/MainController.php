<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Massage;
use App\Models\Time;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class MainController extends Controller
{
    public function doctors(){
        $doctors = Doctor::get();

        return view('doctors', ['doctors'=>$doctors]);
    }

    public function meeting(){
        $doctors = Doctor::get();
        $massages = Massage::get();
        $times = Time::get();

        return view('meeting', ['doctors'=>$doctors, 'massages' => $massages, 'times'=>$times]);
    }

    public function confirm(){

        return redirect()->route('profile.index');
    }
}
