@extends('base')

@section('title', 'Info page')

@section('content')
    <h2>List of massages</h2>
    @foreach($massages as $massage)
        <div>
            <a href="{{route('massage', $massage)}}">{{$massage->name}}</a>
        </div>
    @endforeach
@endsection
