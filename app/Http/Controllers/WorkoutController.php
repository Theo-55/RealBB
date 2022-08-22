<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function save(Request $request)
    {
        //is getting here, need to handle request now to insert data

        $validated = $request->validate([
            'date' => 'required',
            'group' => 'required',
            'duration' => 'required'
        ]);
             dd($validated);
            $workout = new Workout;
            $workout = ([
                'date' => $validated->date,
                'muscle_group' => $validated->group,
                'duration_hrs' => $validated->duration
             ]);

            $workout->save();

            return redirect('/workouts');
    }

}
