@extends('base')

@section('title', 'Meeting doctor form')

@section('content')
    <p>Select doctor</p>
    <select class="form-control mt-2">


        @foreach($doctors as $doctor)
            <option value="{{$doctor->id}}"
                    selected>{{$doctor->name}}</option>
        @endforeach
    </select>

    <p>select massage type </p>
    <select      class="form-control mt-2">
                @foreach($massages as $massage)
            <option value="{{$massage->id}}"
                    selected>{{$massage->name}}</option>
        @endforeach
    </select>


    <p>Select time</p>
    <select  class="form-control mt-2">
        @foreach($times as $time)
            <option value="{{$time->id}}"
                    selected>{{$time->time}}</option>
        @endforeach
    </select>

    </form>
@endsection
