@extends('base')

@section('title')
    {{$massage->name}}
@endsection

@section('content')
    <a href="{{route('info.index')}}">Back to massages page</a>
    <div style="display: flex; flex-direction: column">
        <div>
            Name: {{$massage->description}}
        </div>
        <div>
            Price :{{$massage->price}}
        </div>
        <div>
            Payment : {{$massage->payment_description}}
        </div>
    </div>
@endsection
