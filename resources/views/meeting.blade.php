@extends('base')

@section('title', 'Meeting doctor form')

@section('content')

    <form method="post" action="{{route('meeting.create')}}">
        @csrf

        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        <input type="hidden" name="user_id" id="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">

        @error('doctor')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
            <p>Select doctor</p>
            <select name="doctor" id="doctor" class="form-control">


                @foreach($doctors as $doctor)
                    <option value="{{$doctor->id}}">{{$doctor->name . " " .$doctor->surname}}</option>
                @endforeach
            </select>

        @error('massage')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
            <p>select massage type </p>
            <select name="massage" id="massage" class="form-control mt-2">
                @foreach($massages as $massage)
                    <option value="{{$massage->id}}">{{$massage->name}}</option>
                @endforeach
            </select>

        @error('date')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
            <p>Select date</p>
        <input type="date" id="date" name="date" class="form-control" value="{{\Carbon\Carbon::today()}}">

        @error('time')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        @if(count($times) != 0)
            <p>Select time</p>
            <select name="time" id="time" class="form-control mt-2">

                @foreach($times as $time)


                        <option
                            value="{{$time->id}}">{{\Carbon\Carbon::createFromFormat('H:i:s', $time->time)->format('h:i A')}}</option>

                @endforeach
            </select>

            <x-button class="mt-2">
                Meet
            </x-button>
        @else
            Not today
        @endif
    </form>
@endsection
