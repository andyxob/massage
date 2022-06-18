<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionRequest;
use App\Models\Doctor;
use App\Models\Massage;
use App\Models\Session;
use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class MainController extends Controller
{
    public function doctors()
    {
        $doctors = Doctor::get();

        return view('doctors', ['doctors' => $doctors]);
    }

    public function meeting()
    {

        $sessions =  Session::all();
        foreach ($sessions as $session){
            if($session->date < Carbon::now('Europe/Kiev')->toDateString() && $session->time->time < Carbon::now('Europe/Kiev')->toTimeString() && $session->isDone()){
                $time = Time::where('id', $session->time_id)->first();
                $time->is_banned = 0;
                $time->save();
            }
        }

        $doctors = Doctor::get();
        $time = Carbon::now('Europe/Kiev');
//        dd($time->toTimeString());
        $massages = Massage::get();

        $now = Carbon::now('Europe/Kiev');


        $ban_times = Time::all();
        foreach ($ban_times as $time ){
            if ($time->time < $now->toTimeString()){
                $time->is_banned=1;
                $time->save();
            }
        }




        $times = Time::where('is_banned', 0)->get();

        return view('meeting', ['doctors' => $doctors, 'massages' => $massages, 'times' => $times]);
    }

    public function createMeeting(SessionRequest $request){


        $session = new Session();

        $session->user_id = Auth::user()->id;
        $session->doctor_id = $request->get('doctor');
        $session->massage_id = $request->get('massage');
        $session->time_id = $request->get('time');
        $session->date = $request->get('date');

        if($session->date < Carbon::today()->toDateString()){
            return redirect()->back();
        }

        $time = Time::where('id', $session->time_id)->first();
        $time->is_banned = 1;
        $session->save();
        $time->save();

        return redirect()->route('profile.index', Auth::user());
    }

    public function newDay(){
        $times = Time::all();
        foreach ($times as $time){
            $time->is_banned = 0;
            $time->save();
        }
    }
}
