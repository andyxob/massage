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

        $doctors = Doctor::get();
        $time = Carbon::now('Europe/Kiev');
//        dd($time->toTimeString());
        $massages = Massage::get();


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

        $time = Time::where('id', $session->time_id)->first();
        $time->is_banned = 1;
        $session->save();
        $time->save();


        return redirect()->route('profile.index', Auth::user());
    }
}
