@extends('base')

@section('title')
    Admin page crud massages
@endsection

@section('content')
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        @foreach($massages as $massage)
            <tr>
                <td>{{$massage->id}}</td>
                <td>{{$massage->name}}</td>
                <td>{{$massage->description}}</td>
                <td>{{$massage->price}}</td>
                <td>     <form action="{{route("massages.destroy",$massage)}}" method="post">
                        <div class="btn-group">
                        <a href="{{route('massages.show', $massage)}}" type="button"
                           class="btn btn-success">View</a>
                        <a href="{{route('massages.edit', $massage)}}" type="button"
                           class="btn btn-warning">Edit</a>
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form></td>
            </tr>
        @endforeach
    </table>


    <div>
        <a class="btn btn-success" href="{{route('massages.create')}}">Create Massage</a>
    </div>
@endsection
