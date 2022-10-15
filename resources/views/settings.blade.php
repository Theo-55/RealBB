@extends('layouts.app')

@section('content')

    <settings-index user="{{$user}}" profile="{{ asset('storage/') }}" ></settings-index>



@endsection

