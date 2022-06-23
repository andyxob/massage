<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){


        $user = Auth::user();

        $ban_sessions = Session::all();



        foreach($ban_sessions as $session){
//            dd($session->time->time < Carbon::now('Europe/Kiev')->toTimeString() );
            if ($session ->date < Carbon::now('Europe/Kiev') or $session ->date < Carbon::now('Europe/Kiev')->toDateString() && $session ->time->time < Carbon::now('Europe/Kiev')->toTimeString()){
                $session->is_done =1;
                $session->save();
            }
        }
        $sessions = Session::where('user_id', Auth::user()->id)->get();

        return view('profile.index', ['user'=>$user, 'sessions'=>$sessions]);
    }
}
