<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    //
    public function index()
    {
        return view('workouts.index');
    }

    public function create()
    {
        return view('workouts.create');
    }
}
