<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealController extends Controller
{
    //
    public function index()
    {
        return view('meals.index');
    }
}
