@extends('layouts.app')

@section('content')

        <user-dashboard user="{{$user}}" workouts="{{$workouts}}"></user-dashboard>

        <user-footer></user-footer>

@endsection
