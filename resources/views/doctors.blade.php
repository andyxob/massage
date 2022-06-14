@extends('base')


@section('title', 'Doctors')

@section('content')

    <h1>List of doctors</h1>
    <div class="container">
    @foreach($doctors as $doctor)
        @include('layouts.doctor', $doctor)
    @endforeach
    </div>
@endsection
