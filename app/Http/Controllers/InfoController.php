<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index (){
        $massages = Massage::get();
        return view('info.index', ['massages'=>$massages]);
    }

    public function massage($massage){
        $massage = Massage::where('id', $massage)->first();

        return view ('info.massage' , ['massage'=>$massage]);
    }

}
