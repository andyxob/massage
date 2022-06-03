<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function doctors(){
        $doctors = User::where('is_admin', 1)->get();

        return view('doctors', ['doctors'=>$doctors]);
    }

    public function meeting(){
        $doctors = User::where('is_admin', 1)->get();
        return view('meeting', ['doctors'=>$doctors]);
    }
}
