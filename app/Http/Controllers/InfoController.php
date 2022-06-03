<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index (){
        return view('info.index');
    }

    public function anticilulit(){
        return view('info.types.massage1');
    }

    public  function back(){
        return view('info.types.back');
    }

    public function neck(){
        return view('info.types.neck');
    }


}
