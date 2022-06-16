<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){


        $user = Auth::user();
        $sessions = Session::where('user_id', Auth::user()->id)->get();
        return view('profile.index', ['user'=>$user, 'sessions'=>$sessions]);
    }
}
