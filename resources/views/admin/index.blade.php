@extends('base')

@section('title', 'Admin page')

@section('content')
    <a href ="{{route('doctors.index')}}">Doctors</a>
    <a href="{{route('massages.index')}}">Massages</a>
@endsection
