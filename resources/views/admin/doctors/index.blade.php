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
                <td>     <form action="{{route("doctors.destroy",$doctor)}}" method="post">
                        <a href="{{route('doctors.show', $doctor)}}" type="button"
                           class="btn btn-success">View</a>
                        <a href="{{route('doctors.edit', $doctor)}}" type="button"
                           class="btn btn-warning">Edit</a>
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form></td>
            </tr>
        @endforeach
    </table>


    <div>
        <a class="btn btn-success" href="{{route('doctors.create')}}">Create Doctor</a>
    </div>
@endsection
