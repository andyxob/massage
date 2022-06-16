@extends('base')

@section('title')
    {{$user->name . '`s '. 'profile'}}
@endsection

@section('content')
    @if( count($sessions) == 0 )
        <h3>There is no sessions yet</h3>
    @else
    @foreach($sessions as $session)
        @include('layouts.session', $session)
    @endforeach
    @endif
@endsection
