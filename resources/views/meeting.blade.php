@extends('base')

@section('title', 'Meeting doctor form')

@section('content')
    <form method="post">
        <p>Select doctor</p>
        <select class="form-control">


            @foreach($doctors as $doctor)
                <option value="{{$doctor->id}}">{{$doctor->name}}</option>
            @endforeach
        </select>

        <p>select massage type </p>
        <select class="form-control mt-2">
            @foreach($massages as $massage)
                <option value="{{$massage->id}}">{{$massage->name}}</option>
            @endforeach
        </select>


        <p>Select time</p>
        <select class="form-control mt-2">
            @foreach($times as $time)
                <option value="{{$time->id}}">{{$time->time}}</option>
            @endforeach
        </select>



    <x-button class="mt-2">
        confirm
    </x-button>

    </form>
@endsection
