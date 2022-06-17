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

        <p> select date</p>
        <input type="date" class="form-control mt-2" name="date" id="date">

        <p>Select time</p>
        <select name="time" id="time" class="form-control mt-2">
            @foreach($times as $time)
                <option value="{{$time->id}}">{{\Carbon\Carbon::createFromFormat('H:i:s', $time->time)->format('h:i')}}</option>
            @endforeach
        </select>

        <x-button class="mt-2">
            Meet
        </x-button>

    </form>
@endsection
