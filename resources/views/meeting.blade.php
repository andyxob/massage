@extends('base')

@section('title', 'Meeting doctor form')

@section('content')


        <p>Select doctor</p>
        <select name="doctor"  class="form-control">


            @foreach($doctors as $doctor)
                <option value="{{$doctor->id}}">{{$doctor->name . " " .$doctor->surname}}</option>
            @endforeach
        </select>

        <p>select massage type </p>
        <select name ="massage" class="form-control mt-2">
            @foreach($massages as $massage)
                <option value="{{$massage->id}}">{{$massage->name}}</option>
            @endforeach
        </select>


        <p>Select time</p>
        <select name="massage" class="form-control mt-2">
            @foreach($times as $time)
                <option value="{{$time->id}}">{{$time->time}}</option>
            @endforeach
        </select>



    <a class="mt-2 btn btn-success" href="{{route('meeting.confirm', )}}">
        confirm
    </a>


@endsection
