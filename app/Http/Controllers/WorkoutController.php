<?php

namespace App\Http\Controllers;

use App\Models\Workout;
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

    public function save(Request $request)
    {
            $workout = new Workout(array(
                'date' => $request->input('date'),
                'muscle_group' => $request->input('group'),
                'duration_hrs' => $request->input('duration')
            ));

            //method places here to go through each exercise sent over from vue to be iterated and created with the workout id

            $workout = $workout->save();

            return redirect('/workouts');
    }

    public function getAll()
    {
        return response()->json(Workout::all());
    }

}
