@extends('base')

@section('title', 'Confirm meeting')


@section('content')


    <h1>User : {{\Illuminate\Support\Facades\Auth::user()->name}}</h1>

    <h3>Doctor : $doctor->name </h3>

    <h3>Massage : $massage->name</h3>
    <h3>Time : $time->time</h3>

@endsection
