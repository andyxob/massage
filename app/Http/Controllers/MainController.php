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
        $now = Carbon::now('Europe/Kiev');

        $sessions =  Session::all();
        foreach ($sessions as $session){
            if ($session ->date < $now or ($session ->date < $now->toDateString() && $session ->time->time < $now->toTimeString())){
                $time = Time::where('id', $session->time_id)->first();
                $time->is_banned = 0;
                $time->save();
            }
        }

        $ban_times = Time::all();
        foreach ($ban_times as $time ){
            if ($time->time < $now->toTimeString() )
                $time->is_banned=1;
            $time->save();
        }

        $doctors = Doctor::get();
        $massages = Massage::get();

        $times = Time::where('is_banned', 0)->get();


        return view('meeting', ['doctors' => $doctors, 'massages' => $massages, 'times' => $times]);
    }

    public function createMeeting(SessionRequest $request){

        \Illuminate\Support\Facades\Session::flash('message', '');
        \Illuminate\Support\Facades\Session::flash('alert-class', 'alert-danger mt-2');

        $session = new Session();

        $now = Carbon::now('Europe/Kiev');

        $session->user_id = Auth::user()->id;
        $session->doctor_id = $request->get('doctor');
        $session->massage_id = $request->get('massage');
        $session->time_id = $request->get('time');
        $session->date = $request->get('date');

        if($session->date < Carbon::today()->toDateString()){
            return redirect()->back()->with('message', 'Select current or future date');
        }

        $Weekend = new Carbon($session->date);
        if($Weekend->isWeekend()){
            return redirect()->back()->with('message', 'Select weekday date');
        }

        if ($session->date == Carbon::today()->toDateString()){
            $times = Time::all();
            foreach ($times as $time){
                if ($time->time < $now->toTimeString())
                    $time->is_banned=1;
                $time->save();
            }
            return redirect()->back();
        }

        $time = Time::where('id', $session->time_id)->first();
        $time->is_banned = 1;
        $time->save();
        $session->save();
        return redirect()->route('profile.index', Auth::user());
    }
}
