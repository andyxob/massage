<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function doctors(){
        $doctors = User::where('is_admin', 1)->get();
        return view('admin.doctors.index', ['doctors'=>$doctors]);
    }
}
