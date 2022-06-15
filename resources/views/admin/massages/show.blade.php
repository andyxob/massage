@extends('base')

@section('title','Massage '. $massage->name)

@section('content')

    <table class="table">
        <tbody>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Id</td>
            <td>{{$massage->id}}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{$massage->name}}</td>
        </tr>
        <tr>
            <td>Description</td>
            <td>{{$massage->description}}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>{{$massage->price}}</td>
        </tr>
        </tbody>
    </table>

@endsection

