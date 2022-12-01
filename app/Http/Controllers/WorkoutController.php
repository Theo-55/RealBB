<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use App\models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;



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
            $id = Auth::id();
            $workout = Workout::create(array(
                'user_id' => $id,
                'date' => $request->entries['date'],
                'muscle_group' => $request->entries['group'],
                'duration_hrs' => $request->entries['duration'],
                'keyword' => $request->entries['keyword'],
                'location' => $request->entries['location']
            ));

            collect($request->exercises)->each(function ($exercise){
                $exercise = new Exercise(array(
                'name' => $exercise['name'],
                'sets' => $exercise['sets'],
                'reps' => $exercise['reps'],
                'workout_id' => '1' //fix to get latest IDs
            ));
                $exercise->save();
        });

            return redirect('/workouts');
    }

    public function getAll()
    {
        $id = Auth::id();
        return response()->json(Workout::all());
// come back to fix this so its the actual users workouts
//          ->where('user_id', '=', '$id'));
    }

    public function delete(Request $request)
    {
            $workout = Workout::find($request->input('id'));
            $workout->delete();
            return response('Workout Deleted', 200);

    }

    public function keySearch(Request $request)
    {

        $id = Auth::id();
        $validated = $request->validate([
            'keyword' => 'required'
        ]);

        $workouts = Workout::where('keyword', $request->keyword)
                        ->ordeBy('date')
                        ->get();

        return response($workouts);

    }


}
