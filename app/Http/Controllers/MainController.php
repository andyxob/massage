<?php

namespace App\Http\Controllers;

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

        $massages = Massage::get();
        $times = Time::get();


        return view('meeting', ['doctors' => $doctors, 'massages' => $massages, 'times' => $times]);
    }



    public function createMeeting(Request $request){

        $session = new Session();
        $session->user_id = Auth::user()->id;
        $session->doctor_id = $request->get('doctor');
        $session->massage_id = $request->get('massage');
        $session->time_id = $request->get('time');
        $session->save();

        return redirect()->route('profile.index', Auth::user());
    }
}
