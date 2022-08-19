@extends('layouts.app')

@section('content')

        <user-dashboard user="{{$user}}"></user-dashboard>

        <user-footer></user-footer>

@endsection
