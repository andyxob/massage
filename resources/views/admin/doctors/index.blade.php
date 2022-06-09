@extends('base')

@section('title')
    Admin page crud doctors
@endsection

@section('content')
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Experience</th>
            <th>Actions</th>
        </tr>
        @foreach($doctors as $doctor)
            <tr>
                <td>{{$doctor->id}}</td>
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->surname}}</td>
                <td>{{$doctor->exp}}</td>
                <td>sdfsdf</td>
            </tr>
        @endforeach
    </table>


    <div>
        <a href="{{route('doctors.create')}}">Create</a>
    </div>
@endsection
