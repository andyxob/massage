<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function likeDoctor($id){
        $doctor = Doctor::find($id)->first();
        $doctor->like();
        $doctor->save();

        return redirect()->route('doctors');
    }

    public function unlikeDoctor($id){
        $doctor= Doctor::find($id);
        $doctor->unlike();
        $doctor->save();

        return redirect()->route('doctors');


    }
}
