@extends('base')

@section('title', 'Meeting doctor form')

@section('content')

    <form method="post" action="{{route('meeting.create')}}">
        @csrf
        <input type="hidden" name="user_id" id="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
        <p>Select doctor</p>
        <select name="doctor" id="doctor"  class="form-control">


            @foreach($doctors as $doctor)
                <option value="{{$doctor->id}}">{{$doctor->name . " " .$doctor->surname}}</option>
            @endforeach
        </select>

        <p>select massage type </p>
        <select name ="massage" id="massage" class="form-control mt-2">
            @foreach($massages as $massage)
                <option value="{{$massage->id}}">{{$massage->name}}</option>
            @endforeach
        </select>

        <p>Select time</p>
        <select name="time" id="time" class="form-control mt-2">
            @foreach($times as $time)
                <option value="{{$time->id}}">{{$time->time}}</option>
            @endforeach
        </select>

        <x-button>
            Meet
        </x-button>

    </form>
@endsection
