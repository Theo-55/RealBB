@extends('layouts.app')

@section('content')
    <workout-index :workouts="{{ json_encode($workouts) }}" />
@endsection
