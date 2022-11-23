@extends('layouts.app')

@section('content')

        <user-dashboard user="{{$user}}" workouts="{{$workouts}}"  time="{{$time}}"></user-dashboard>

        <user-footer></user-footer>

@endsection
