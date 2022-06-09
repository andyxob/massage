@extends('base')


@section('title', 'Doctors')

@section('content')

    List of doctors
    @foreach($doctors as $doctor)
        @include('layouts.doctor', $doctor)
    @endforeach
@endsection
