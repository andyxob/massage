<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function getLike($doctorId){
        $doctor = Doctor::find($doctorId);

        if(! $doctor ) return redirect()->route('dashboard');

        if(Auth::user()->hasLikedDoctor($doctor)){
            return redirect()->back();
        }

        $doctor->likes()->create(['user_id'=>Auth::user()->id]);

        return redirect()->back();
    }

    public function unlike($doctorId){
        $doctor = Doctor::find($doctorId);

        if(! $doctor ) return redirect()->route('dashboard');

        if(! Auth::user()->hasLikedDoctor($doctor)){
            return redirect()->back();
        }
        $doctor ->likes()->delete(['user_id'=>Auth::user()->id]);

        return redirect()->back();
    }
}
