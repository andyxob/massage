@extends('base')

@section('title')
    {{$massage->name}}
@endsection

@section('content')
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif

    <a href="{{route('info.index')}}">Back to massages page</a>
    <div style="display: flex; flex-direction: column">
        <div>
            Name: {{$massage->name}}
        </div>
        <div>
            Description: {{$massage->description}}
        </div>
        <div>
            Price :{{$massage->price}}
        </div>
        <div>
            Payment : {{$massage->payment_description}}
        </div>
    </div>
@endsection
